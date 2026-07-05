<aside id="secondary" class="widget-area">
    <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
        <?php dynamic_sidebar( 'sidebar-1' ); ?>
    <?php else : ?>
        <h3>Sidebar</h3>
        <p>Add widgets in Appearance → Widgets.</p>
    <?php endif; ?>
</aside>