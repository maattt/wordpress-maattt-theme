<?php get_header(); ?>

<?php if (have_posts()): ?>
  <?php while (have_posts()): the_post(); ?>
    <header>
      <h1 class="page-title"><?php the_title() ?></h1>
    </header>
    <time class="post-date">Publié le <?php the_date() ?></time>
    <article class="article">
      <?php the_content() ?>
    </article>
  <?php endwhile; ?>
<?php else: ?>
  <h1>Pas d'article</h1>
<?php endif; ?>

<?php get_footer(); ?>