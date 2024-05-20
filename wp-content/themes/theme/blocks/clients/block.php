<?php
$args = array(
    'post_status' => 'publish',
    'post_type' => 'clients',
    'publish' => true,
    'posts_per_page' => -1,
    'paged' => 1,
    'orderby' => 'date',
);
$the_query = new WP_Query($args);
?>



<?php if ($the_query->have_posts()) { ?>
    <section class="clients">
        <div class="clients__container container">
            <div class="clients__wrapper">
                <div class="clients__top">
                    <h3 class="clients__title"> <?php the_field('title') ?> </h3>
                    <div class="clients__btns">
                        <div class="swiper-button swiper-button-prev clients__btn ">
                            <svg fill="#000000" height="20px" width="40px" version="1.1" id="Layer_1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                viewBox="0 0 330 330" xml:space="preserve" transform="matrix(-1, 0, 0, 1, 0, 0)">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path id="XMLID_27_"
                                        d="M15,180h263.787l-49.394,49.394c-5.858,5.857-5.858,15.355,0,21.213C232.322,253.535,236.161,255,240,255 s7.678-1.465,10.606-4.394l75-75c5.858-5.857,5.858-15.355,0-21.213l-75-75c-5.857-5.857-15.355-5.857-21.213,0 c-5.858,5.857-5.858,15.355,0,21.213L278.787,150H15c-8.284,0-15,6.716-15,15S6.716,180,15,180z">
                                    </path>
                                </g>
                            </svg>
                        </div>
                        <div class="swiper-button swiper-button-next clients__btn">
                            <svg fill="#000000" height="20px" width="40px" version="1.1" id="Layer_1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                viewBox="0 0 330 330" xml:space="preserve">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path id="XMLID_27_"
                                        d="M15,180h263.787l-49.394,49.394c-5.858,5.857-5.858,15.355,0,21.213C232.322,253.535,236.161,255,240,255 s7.678-1.465,10.606-4.394l75-75c5.858-5.857,5.858-15.355,0-21.213l-75-75c-5.857-5.857-15.355-5.857-21.213,0 c-5.858,5.857-5.858,15.355,0,21.213L278.787,150H15c-8.284,0-15,6.716-15,15S6.716,180,15,180z">
                                    </path>
                                </g>
                            </svg>

                        </div>
                    </div>
                </div>
                <div class="clients__slider-container">
                    <div class="clients__slider">
                        <div class="swiper-wrapper clients__slider-wrapper">
                            <?php while ($the_query->have_posts()) { ?>
                                <?php $the_query->the_post(); ?>
                                <div class="clients__item swiper-slide">
                                    <div class="clients__media">
                                        <div class="clients__play-btn play-video" data-video="<?php the_field('video', get_the_ID()) ?>">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26">
                                                <polygon class="play-btn__svg"
                                                    points="9.33 6.69 9.33 19.39 19.3 13.04 9.33 6.69" />
                                            </svg>
                                        </div>
                                        <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="image" class="clients__img">
                                    </div>
                                    <div class="clients__info">
                                        <div class="clients__content">
                                            <?php the_content() ?>
                                        </div>
                                        <p class="clients__author"><?php the_title() ?></p>
                                        <div class="clients__position"><?php the_field('posytion', get_the_ID()) ?></div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <div class="global_video_player">
        <div class="overlay"></div>
        <div class="close">
            <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g filter="url(#filter0_b_922_3784)">
                    <circle cx="28" cy="28" r="28" fill="white" fill-opacity="0.7" />
                    <circle cx="28" cy="28" r="27.5" stroke="white" />
                </g>
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M21.5497 20.9619C21.8426 20.669 22.3175 20.669 22.6104 20.9619L28.444 26.7955L34.2777 20.9619C34.5706 20.669 35.0454 20.669 35.3383 20.9619C35.6312 21.2548 35.6312 21.7296 35.3383 22.0225L29.5047 27.8561L35.3383 33.6898C35.6312 33.9827 35.6312 34.4575 35.3383 34.7504C35.0454 35.0433 34.5706 35.0433 34.2777 34.7504L28.444 28.9168L22.6104 34.7504C22.3175 35.0433 21.8426 35.0433 21.5497 34.7504C21.2569 34.4575 21.2569 33.9827 21.5497 33.6898L27.3834 27.8561L21.5497 22.0225C21.2569 21.7296 21.2569 21.2548 21.5497 20.9619Z"
                    fill="black" />
                <defs>
                    <filter id="filter0_b_922_3784" x="-29.75" y="-29.75" width="115.5" height="115.5"
                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                        <feGaussianBlur in="BackgroundImageFix" stdDeviation="14.875" />
                        <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_922_3784" />
                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_922_3784" result="shape" />
                    </filter>
                </defs>
            </svg>
        </div>
        <div class="video-box">
            <video src="" style="max-height: 90vh;" autoplay controls autobuffer> </video>
        </div>
    </div>


<?php } ?>