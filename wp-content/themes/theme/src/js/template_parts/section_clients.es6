import Swiper, { Navigation, EffectFade, Autoplay } from "swiper";

let quoteOptions = {
    modules: [Navigation, Autoplay, EffectFade],
    loop: false,
    spaceBetween: 40,
    speed: 1000,
    slidesPerView: 1,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
};
(function ($) {
    let quote = new Swiper(".clients__slider", quoteOptions);

})(jQuery);

if (document.querySelector(".play-video")) {
    const btns = document.querySelectorAll(".play-video");
    const wrapper = document.querySelector(".global_video_player");
    const closeBtn = document.querySelector(".global_video_player .close");
    const overlay = document.querySelector(".global_video_player .overlay");
    const video = document.querySelector(".video-box video");
    const html = document.querySelector("html");

    btns.forEach((btn) => {
        btn.addEventListener("click", () => {
            wrapper.classList.add("active");
            const url = btn.getAttribute("data-video");
            video.style.display = "block"
            video.setAttribute("src", url);
            html.style.overflow = "hidden";
        });
    });

    const closeItems = [closeBtn, overlay];

    closeItems.forEach((item) => {
        item.addEventListener("click", () => {
            wrapper.classList.remove("active");
            video.setAttribute("src", "");
            html.style.overflow = "";
        });
    });
}