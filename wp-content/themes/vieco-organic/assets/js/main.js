/**
 * Vieco Organic Theme JavaScript
 */

(function($) {
    'use strict';    $(document).ready(function() {        // Mobile menu toggle
        $('.mobile-menu-toggle').on('click', function() {
            $(this).toggleClass('active');
            $('.mobile-navigation').toggleClass('mobile-active');
            
            // Prevent body scroll when menu is open
            if ($(this).hasClass('active')) {
                $('body').css('overflow', 'hidden');
            } else {
                $('body').css('overflow', '');
            }
        });

        // Close mobile menu when clicking overlay
        $('.mobile-menu-overlay').on('click', function() {
            $('.mobile-navigation').removeClass('mobile-active');
            $('.mobile-menu-toggle').removeClass('active');
            $('body').css('overflow', '');
        });

        // Close mobile menu when clicking on a navigation link or action button
        $('.mobile-nav-menu a, .mobile-action-btn').on('click', function() {
            $('.mobile-navigation').removeClass('mobile-active');
            $('.mobile-menu-toggle').removeClass('active');
            $('body').css('overflow', '');
        });

        // Newsletter signup form
        $('.newsletter-signup').on('submit', function(e) {
            e.preventDefault();
            var $form = $(this);
            var $input = $form.find('input[type="email"]');
            var $button = $form.find('.btn-subscribe');
            var email = $input.val();
            
            // Basic email validation
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            
            if (!email) {
                alert('Please enter your email address.');
                $input.focus();
                return;
            }
            
            if (!emailRegex.test(email)) {
                alert('Please enter a valid email address.');
                $input.focus();
                return;
            }
            
            // Simulate signup process
            var originalText = $button.text();
            $button.text('Subscribing...').prop('disabled', true);
            
            setTimeout(function() {
                $button.text('Subscribed!').css('background', '#4caf50');
                $input.val('');
                
                setTimeout(function() {
                    $button.text(originalText).prop('disabled', false).css('background', '');
                }, 2000);
                
                // You can replace this with actual newsletter signup logic
                console.log('Newsletter signup for:', email);
            }, 1000);
        });

        // Header scroll effect
        $(window).on('scroll', function() {
            var scroll = $(window).scrollTop();
            if (scroll >= 50) {
                $('.site-header').addClass('scrolled');
            } else {
                $('.site-header').removeClass('scrolled');
            }
        });
        
        // Smooth scrolling for anchor links
        $('a[href^="#"]').on('click', function(e) {
            e.preventDefault();
            var target = $(this.hash);
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top - 100
                }, 800);
            }
        });
        
        // Animated counter for features
        function animateCounters() {
            $('.counter').each(function() {
                var $this = $(this);
                var countTo = $this.attr('data-count');
                
                $({ countNum: $this.text() }).animate({
                    countNum: countTo
                }, {
                    duration: 2000,
                    easing: 'swing',
                    step: function() {
                        $this.text(Math.floor(this.countNum));
                    },
                    complete: function() {
                        $this.text(this.countNum);
                    }
                });
            });
        }
        
        // Intersection Observer for animations
        if ('IntersectionObserver' in window) {
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate-in');
                        
                        // Trigger counter animation if element has counters
                        if (entry.target.querySelector('.counter')) {
                            animateCounters();
                        }
                    }
                });
            }, observerOptions);
            
            // Observe feature cards and sections
            // document.querySelectorAll('.feature-card, .about-section, .section-title').forEach(el => {
            //     observer.observe(el);
            // });
        }
        
        // Parallax effect for hero section
        // $(window).on('scroll', function() {
        //     var scrolled = $(this).scrollTop();
        //     var parallax = $('.hero-section');
        //     var speed = 0.5;
            
        //     if (parallax.length) {
        //         parallax.css('transform', 'translateY(' + (scrolled * speed) + 'px)');
        //     }
        // });
        
        // Form validation for contact forms
        $('form').on('submit', function(e) {
            var hasError = false;
            
            $(this).find('input[required], textarea[required]').each(function() {
                if ($(this).val() === '') {
                    hasError = true;
                    $(this).addClass('error');
                } else {
                    $(this).removeClass('error');
                }
            });
            
            // Email validation
            var emailInputs = $(this).find('input[type="email"]');
            emailInputs.each(function() {
                var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if ($(this).val() !== '' && !emailRegex.test($(this).val())) {
                    hasError = true;
                    $(this).addClass('error');
                }
            });
            
            if (hasError) {
                e.preventDefault();
                alert('Please fill in all required fields with valid information.');
            }
        });
        
        // Smooth reveal animation for cards
        $('.feature-card').hover(
            function() {
                $(this).find('.feature-icon').addClass('bounce');
            },
            function() {
                $(this).find('.feature-icon').removeClass('bounce');
            }
        );

        // Lazy loading for images
        if ('IntersectionObserver' in window) {
            const imageObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        img.src = img.dataset.src;
                        img.classList.remove('lazy');
                        imageObserver.unobserve(img);
                    }
                });
            });

            document.querySelectorAll('img[data-src]').forEach(img => {
                imageObserver.observe(img);
            });
        }
        // Products tabs functionality

        $('.products-tabs-list button').on('click', function() {
            var tabId = $(this).data('target');
            console.log(tabId);
            
            $('.products-tabs-list button').removeClass('active');
            $(this).addClass('active');
            $('.feature-products-content').removeClass('active');
            $(tabId).addClass('active');
        });

        // Initialize Swiper sliders
        if (typeof Swiper !== 'undefined') {
            // Initialize all product sliders
            $('.swiper-slider').each(function() {
                var sliderId = $(this).attr('id');
                if (!sliderId) {
                    sliderId = 'swiper-slider-' + Math.random().toString(36).substring(2, 15);
                    $(this).attr('id', sliderId);
                }
                var swiper = new Swiper('#' + sliderId, {
                    slidesPerView: 1,
                    spaceBetween: 20,
                    loop: true,
                    pagination: {
                        el: '#' + sliderId + ' .swiper-pagination',
                        clickable: true,
                        dynamicBullets: true,
                    },
                    navigation: {
                        nextEl: '#' + sliderId + ' .swiper-button-next',
                        prevEl: '#' + sliderId + ' .swiper-button-prev',
                    },
                    breakpoints: {
                        640: {
                            slidesPerView: 2,
                            spaceBetween: 20,
                        },
                        1024: {
                            slidesPerView: 3,
                            spaceBetween: 30,
                        },
                    },
                });
            });
        }
    });

})(jQuery);
