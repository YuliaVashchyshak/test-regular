<section class="seo">
    <div class="seo__container container">
        <div class="seo__absolute">
            <div class="seo__wrapper">
                <div class="seo__main">
                    <h2 class="seo__title"><?php the_field('title') ?></h2>
                    <div class="seo__content"><?php the_field('content') ?></div>
                    <?php $link = get_field('link') ?>
                    <a href="<?php echo $link['url'] ?>" class="seo__link button"><?php echo $link['title'] ?></a>
                </div>
                <img src="<?php the_field('image') ?>" alt="computer" class="seo__image">
            </div>
        </div>
    </div>
</section>