(function () {
    function getSlides(carousel) {
        return Array.from(carousel.querySelectorAll('.carousel-image'));
    }

    window.nextSlide = function nextSlide(carouselId) {
        const carousel = document.getElementById(carouselId);
        if (!carousel) return;

        const slide = carousel.querySelector('.carousel-slide');
        const slides = getSlides(carousel);
        if (!slide || slides.length <= 1 || slide.classList.contains('transitioning')) return;

        const slideWidth = slides[0].clientWidth;
        slide.classList.add('transitioning');
        slide.style.transition = 'transform 0.5s ease';
        slide.style.transform = `translateX(-${slideWidth}px)`;

        setTimeout(() => {
            slide.appendChild(slides[0]);
            slide.style.transition = 'none';
            slide.style.transform = 'translateX(0)';

            setTimeout(() => {
                slide.classList.remove('transitioning');
            }, 50);
        }, 500);
    };

    window.prevSlide = function prevSlide(carouselId) {
        const carousel = document.getElementById(carouselId);
        if (!carousel) return;

        const slide = carousel.querySelector('.carousel-slide');
        const slides = getSlides(carousel);
        if (!slide || slides.length <= 1 || slide.classList.contains('transitioning')) return;

        const slideWidth = slides[0].clientWidth;
        const lastSlide = slides[slides.length - 1];

        slide.classList.add('transitioning');
        slide.insertBefore(lastSlide, slides[0]);
        slide.style.transition = 'none';
        slide.style.transform = `translateX(-${slideWidth}px)`;

        requestAnimationFrame(() => {
            slide.style.transition = 'transform 0.5s ease';
            slide.style.transform = 'translateX(0)';

            setTimeout(() => {
                slide.classList.remove('transitioning');
            }, 500);
        });
    };

    window.openLightbox = function openLightbox(img) {
        const lightbox = document.getElementById('lightbox');
        const lightboxImg = document.getElementById('lightbox-image');
        if (!lightbox || !lightboxImg) return;

        lightboxImg.src = img.src;
        lightboxImg.alt = img.alt;
        lightbox.classList.add('active');
        document.body.style.overflow = 'hidden';
    };

    window.closeLightbox = function closeLightbox() {
        const lightbox = document.getElementById('lightbox');
        if (!lightbox) return;

        lightbox.classList.remove('active');
        document.body.style.overflow = '';
    };

    window.smoothScrollToSection = function smoothScrollToSection() {
        const target = document.getElementById('hospedagem-premium');
        if (!target) return;

        const startPosition = window.pageYOffset;
        const targetPosition = target.getBoundingClientRect().top + startPosition - 100;
        const distance = targetPosition - startPosition;
        const duration = Math.min(Math.max(Math.abs(distance) * 0.5, 500), 1500);
        let startTime = null;

        function animateScroll(currentTime) {
            if (!startTime) startTime = currentTime;
            const elapsed = currentTime - startTime;
            const progress = Math.min(elapsed / duration, 1);
            const easedProgress = 1 - Math.pow(1 - progress, 3);

            window.scrollTo(0, startPosition + distance * easedProgress);

            if (elapsed < duration) {
                requestAnimationFrame(animateScroll);
            }
        }

        requestAnimationFrame(animateScroll);
    };

    function initHeroCarousel() {
        const heroImages = Array.from(document.querySelectorAll('.hero-image'));
        if (heroImages.length <= 1) return;

        let currentIndex = 0;

        setInterval(() => {
            heroImages[currentIndex].classList.remove('active');
            currentIndex = (currentIndex + 1) % heroImages.length;
            heroImages[currentIndex].classList.add('active');
        }, 3500);
    }

    function initScrollEffects() {
        const floatingButtons = document.querySelector('.floating-buttons');
        const scrollIndicator = document.getElementById('scroll-down-indicator');
        const heroButtons = Array.from(document.querySelectorAll('.btn-scroll-animate'));
        let lastScroll = 0;
        let ticking = false;

        function updateHeroButtons(scrollY) {
            const isScrollingDown = scrollY > lastScroll;

            if (scrollY <= 50) {
                heroButtons.forEach((button) => {
                    button.classList.remove('visible');
                });

                if (scrollIndicator) {
                    scrollIndicator.style.display = 'flex';
                }
            } else {
                heroButtons.forEach((button) => {
                    button.classList.toggle('visible', isScrollingDown);
                });

                if (scrollIndicator) {
                    scrollIndicator.style.display = 'none';
                }
            }

            lastScroll = scrollY <= 0 ? 0 : scrollY;
        }

        function updateFloatingButtons() {
            if (!floatingButtons) return;
            floatingButtons.classList.toggle('visible', window.scrollY > 300);
        }

        window.addEventListener('scroll', () => {
            const scrollY = window.pageYOffset || document.documentElement.scrollTop;

            if (!ticking) {
                window.requestAnimationFrame(() => {
                    updateHeroButtons(scrollY);
                    updateFloatingButtons();
                    ticking = false;
                });

                ticking = true;
            }
        });

        updateHeroButtons(window.pageYOffset || document.documentElement.scrollTop);
        updateFloatingButtons();
    }

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape') {
            window.closeLightbox();
        }
    });

    document.addEventListener('DOMContentLoaded', () => {
        initHeroCarousel();
        initScrollEffects();
    });
})();
