<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
    <div class="page-banner">
        <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/img/ocean.jpg'); ?>);"></div>
        <div class="page-banner__content container container--narrow">
            <h1 class="page-banner__title">
                <?php the_title(); ?>
            </h1>

            <div class="page-banner__intro">
                <p>DON'T FORGET TO REPLACE ME LATER</p>
            </div>
        </div>
    </div>

    <div class="container container--narrow page-section">
        <?php if (get_page_parent_id()) : ?>
            <div class="metabox metabox--position-up metabox--with-home-link">
                <p>
                    <a class="metabox__blog-home-link" href="<?php echo get_page_parent_permalink(); ?>">
                        <i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_page_parent_title(); ?>
                    </a>

                    <span class="metabox__main"><?php the_title(); ?></span>
                </p>
            </div>
        <?php endif; ?>

        <div class="generic-content">
            <?php the_content(); ?>
        </div>
    </div>
<?php endwhile; ?>

<?php get_footer(); ?>
