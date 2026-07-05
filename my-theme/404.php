<?php get_header(); ?>

<main id="main" class="site-main">
    <header class="page-header">
        <h1><?php esc_html_e( '404 - Page Not Found', 'my-theme' ); ?></h1>
    </header>
    <div class="entry-content">
        <p><?php esc_html_e( 'Sorry, the page you are looking for does not exist.', 'my-theme' ); ?></p>
        <p><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Go back to homepage</a></p>
    </div>
</main>

<?php get_footer(); ?>