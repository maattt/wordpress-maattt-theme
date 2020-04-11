<?php get_header(); ?>

<?php if (have_posts()): ?>
  <?php while (have_posts()): the_post(); ?>
    <header>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="https://matthieuhebert.fr">MatthieuHébert.fr</a></li>
        <li class="breadcrumb-item"><a href="<?= home_url() ?>"><?php bloginfo('name') ?></a></li>
      </ol>
      <h1 class="page-title"><?php the_title() ?></h1>
      <time class="post-date">Publié le <?php the_date() ?></time>
    </header>
    <article class="article">
      <?php the_content() ?>
    </article>
  <?php endwhile; ?>
<?php else: ?>
  <h1>Pas d'article</h1>
<?php endif; ?>

<?php get_footer(); ?>