<section class="form" style="background-image: url(<?php  bloginfo('template_url') ?>/src/sass/image/bg.png)" >
    <div class="form__container container">
        <div class="form__wrapper">
            <div class="form__content">
                <h2 class="form__title"><?php the_field('title') ?></h2>
                <div class="form__info">
                    <a href="mailto:<?php the_field('mail') ?>" class="form__mail"><?php the_field('mail') ?></a>
                    <div class="form__adress"><?php the_field('adress') ?></div>
                </div>
            </div>
            <form action="" method="post" class="form__fields">
                <input type="text" placeholder="<?php the_field('name') ?>" class="form__field">
                <input type="text" placeholder="<?php the_field('email') ?>" class="form__field">
                <textarea placeholder="<?php the_field('textarea') ?>" class="form__field form__textarea"></textarea>
                <button type="submit" class="form__button button"><img
                        src="<?php bloginfo('template_url') ?>/src/sass/image/email.svg"
                        alt="email"><?php the_field('button') ?></button>
            </form>
        </div>
    </div>
</section>