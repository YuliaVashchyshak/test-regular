<section class="hero" style="background-image:url(<?php the_field('background') ?>">
    <div class="hero__container container">
        <div class="hero__wrapper">
            <h1 class="hero__tile"><?php the_field('title') ?></h1>
            <h2 class="hero__subtitle"><?php the_field('subtitle') ?></h2>
            <?php $link = get_field('link') ?>
            <a href="<?php echo $link['url'] ?>" class="hero__link button"><?php echo $link['title'] ?></a>
        </div>
    </div>
    <img src="<?php the_field('image') ?>" alt="man" class="hero__image">

</section>