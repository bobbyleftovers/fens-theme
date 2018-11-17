
<div class="columns">
    <div class="column">
        <?php the_content(); ?>
    </div>
</div>
<div class="columns">
    <div class="column">
        <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </div>
</div>

