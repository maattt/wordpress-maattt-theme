<?php get_header(); ?>
<header>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="https://matthieuhebert.fr">MatthieuHébert.fr</a></li>
  </ol>
  <h1 class="page-title"><?php bloginfo('name') ?></h1>
</header>

<?= get_search_form(); ?>

<div class="blog-year">
  <?php
    query_posts(array('nopaging' => 1, 's' => $s));
    $prev_year = null;
    if (have_posts()) {
      while (have_posts()) {
        the_post();
        $this_year = get_the_date('Y');
        if ($prev_year != $this_year) {
          if (!is_null($prev_year)) {
            echo '</ul>';
          }
          echo '<h3>' . $this_year . '</h3>';
          echo '<ul class="blog-list">';
        }
        echo '<li><a href="' . get_permalink() . '" class="article-link">' . get_the_title() . '</a></li>';
        $prev_year = $this_year;
      }
      echo '</ul>';
    }
  ?>
</div>
<?php get_footer(); ?>