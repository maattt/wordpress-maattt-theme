<?php get_header(); ?>
<header>
  <h1 class="page-title">Blog</h1>
</header>

<?= get_search_form(); ?>

<div class="blog-year">
  <?php
    query_posts(array('nopaging' => 1));
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