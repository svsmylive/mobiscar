const initMetalworkingShopSwiper = () => {
    const swiper = new Swiper('.metalworking-shop-swiper .swiper', {
        direction: 'horizontal',
        loop: true,
        slidesPerView: 1,
        spaceBetween: 10,

        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },

        // autoplay: {
        //   delay: 3000,
        //   disableOnInteraction: false,
        // },

        touchEventsTarget: 'container',
        simulateTouch: true,
        allowTouchMove: true,
    });

    const paginationContainer = document.querySelector('.metalworking-shop-swiper .pagination');
    const bullets = paginationContainer.querySelectorAll('.pagination-bullet');

    bullets.forEach(bullet => {
        bullet.addEventListener('click', function () {
            const slideIndex = parseInt(this.getAttribute('data-index'));
            swiper.slideToLoop(slideIndex);
        });
    });

    swiper.on('slideChange', function () {
        const realIndex = swiper.realIndex;

        bullets.forEach((bullet, index) => {
            if (index === realIndex) {
                bullet.classList.add('active');
            } else {
                bullet.classList.remove('active');
            }
        });
    });

    // for autoplay
    // paginationContainer.addEventListener('click', function () {
    //   swiper.autoplay.stop();
    //   setTimeout(() => {
    //     swiper.autoplay.start();
    //   }, 5000);
    // });
};

const initDetailingShopSwiper = () => {
    const swiper = new Swiper('.detailing-swiper .swiper', {
        direction: 'horizontal',
        loop: true,
        slidesPerView: 1,
        spaceBetween: 10,

        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },

        // autoplay: {
        //   delay: 3000,
        //   disableOnInteraction: false,
        // },

        touchEventsTarget: 'container',
        simulateTouch: true,
        allowTouchMove: true,
    });

    const paginationContainer = document.querySelector('.detailing-swiper .pagination');
    const bullets = paginationContainer.querySelectorAll('.pagination-bullet');

    bullets.forEach(bullet => {
        bullet.addEventListener('click', function () {
            const slideIndex = parseInt(this.getAttribute('data-index'));
            swiper.slideToLoop(slideIndex);
        });
    });

    swiper.on('slideChange', function () {
        const realIndex = swiper.realIndex;

        bullets.forEach((bullet, index) => {
            if (index === realIndex) {
                bullet.classList.add('active');
            } else {
                bullet.classList.remove('active');
            }
        });
    });

    // for autoplay
    // paginationContainer.addEventListener('click', function () {
    //   swiper.autoplay.stop();
    //   setTimeout(() => {
    //     swiper.autoplay.start();
    //   }, 5000);
    // });
};

const initAccordeon = () => {
    const accordeons = document.querySelectorAll('.accordeon');
    accordeons.forEach(accordeon => {
        const items = accordeon.querySelectorAll('.accordeon-item');

        items.forEach(item => {
            const expander = item.querySelector('.expander-button');
            const content = item.querySelector('.content');

            let isExpanded = false;

            const toggleItem = () => {
                isExpanded = !isExpanded;

                if (isExpanded) {
                    item.classList.add('active');
                    content.style.height = content.scrollHeight + 'px';
                } else {
                    content.style.height = 0;
                    item.classList.remove('active');
                }
            };

            const initDefault = () => {
                content.style.height = 0;
            };

            initDefault();

            item.addEventListener('click', toggleItem);
        });
    });
};

document.addEventListener('DOMContentLoaded', () => {
    initMetalworkingShopSwiper();
    initDetailingShopSwiper();
    initAccordeon();
});
