<section id="bread">
    <p>
    <a href="<?php echo home_url('/'); ?>">ホーム</a>
    <?php if(is_category()) : ?>
    <i class="fas fa-chevron-right"></i>コラム
    <?php else : ?>
    <i class="fas fa-chevron-right"></i> <?php the_title(); ?>
    <?php endif; ?>
    </p>
</section>