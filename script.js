  // GSAP Animations
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize GSAP
            gsap.registerPlugin(ScrollTrigger);
            
            // Animate hero content dengan cara yang lebih dinamis
            gsap.timeline()
                .from('.hero-content h1', { duration: 1, y: 50, opacity: 0, ease: 'power2.out' })
                .from('.hero-content p', { duration: 0.8, y: 30, opacity: 0, ease: 'power2.out' }, '-=0.5')
                .from('.mobile-cta-buttons', { duration: 0.6, y: 30, opacity: 0, ease: 'power2.out' }, '-=0.3')
                .from('.mobile-stats', { duration: 0.6, y: 30, opacity: 0, ease: 'power2.out' }, '-=0.2');
            
            // Animate hero image container
            gsap.from('.hero-image-container', {
                duration: 1.5,
                scale: 0.8,
                opacity: 0,
                rotationY: 15,
                rotationX: 10,
                ease: 'back.out(1.7)'
            });
            
            // Animate floating elements
            gsap.from('.floating-element', {
                duration: 1.2,
                scale: 0,
                opacity: 0,
                stagger: 0.2,
                ease: 'back.out(1.7)'
            });
            
            // Animate floating icons
            gsap.from('.floating-icon', {
                duration: 1.2,
                scale: 0,
                opacity: 0,
                stagger: 0.3,
                ease: 'back.out(1.7)'
            });
            
            // Animate elements on scroll
           // FIXED: Animate elements on scroll - Perbaikan untuk sections yang tidak muncul
gsap.utils.toArray('.animate-slide-in').forEach(element => {
    gsap.fromTo(element, {
        y: 50,
        opacity: 0
    }, {
        scrollTrigger: {
            trigger: element,
            start: 'top 80%',
            end: 'bottom 20%',
            toggleActions: 'play none none reverse'
        },
        y: 0,
        opacity: 1,
        duration: 0.8,
        ease: 'power2.out'
    });
}); 
            // Sticky navbar effect
            const navbar = document.querySelector('.sticky-nav');
            window.addEventListener('scroll', function() {
                if (window.scrollY > 100) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            });
            
            // Progress bar
            const progressBar = document.querySelector('.progress-bar');
            window.addEventListener('scroll', function() {
                const windowHeight = window.innerHeight;
                const documentHeight = document.documentElement.scrollHeight;
                const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                const scrollPercent = (scrollTop / (documentHeight - windowHeight)) * 100;
                progressBar.style.width = scrollPercent + '%';
            });
            
            // Floating action button
            const fab = document.querySelector('.floating-action-btn');
            fab.addEventListener('click', function() {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
            
            // Contact form submission
            document.getElementById('contactForm').addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Get form values
                const name = document.getElementById('name').value;
                const email = document.getElementById('email').value;
                const phone = document.getElementById('phone').value;
                const service = document.getElementById('service').value;
                const message = document.getElementById('message').value;
                
                // In a real application, you would send this data to a server
                // For this example, we'll just show an alert
                alert(`Terima kasih ${name}! Pesan Anda telah berhasil dikirim. Kami akan menghubungi Anda segera melalui ${phone} atau ${email}.`);
                
                // Reset form
                this.reset();
            });
            
            // Smooth scrolling for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    const targetId = this.getAttribute('href');
                    if (targetId === '#') return;
                    
                    const targetElement = document.querySelector(targetId);
                    if (targetElement) {
                        window.scrollTo({
                            top: targetElement.offsetTop - 80,
                            behavior: 'smooth'
                        });
                    }
                    
                    // Close mobile menu if open
                    closeMobileMenu();
                });
            });
            
            // Active nav link
            const sections = document.querySelectorAll('section[id]');
            const navLinks = document.querySelectorAll('.nav-link');
            
            window.addEventListener('scroll', function() {
                let current = '';
                
                sections.forEach(section => {
                    const sectionTop = section.offsetTop;
                    const sectionHeight = section.clientHeight;
                    
                    if (scrollY >= (sectionTop - 100)) {
                        current = section.getAttribute('id');
                    }
                });
                
                navLinks.forEach(link => {
                    link.classList.remove('active', 'text-blue-700');
                    link.classList.add('text-gray-600');
                    
                    if (link.getAttribute('href') === `#${current}`) {
                        link.classList.add('active', 'text-blue-700');
                        link.classList.remove('text-gray-600');
                    }
                });
            });
            
            // Mobile menu functionality
            const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
            const mobileNavMenu = document.getElementById('mobile-nav-menu');
            const mobileNavOverlay = document.getElementById('mobile-nav-overlay');
            const mobileNavClose = document.getElementById('mobile-nav-close');
            
            function openMobileMenu() {
                mobileNavMenu.classList.add('active');
                mobileNavOverlay.classList.add('active');
                document.body.style.overflow = 'hidden';
            }
            
            function closeMobileMenu() {
                mobileNavMenu.classList.remove('active');
                mobileNavOverlay.classList.remove('active');
                document.body.style.overflow = '';
            }
            
            mobileMenuToggle.addEventListener('click', openMobileMenu);
            mobileNavClose.addEventListener('click', closeMobileMenu);
            mobileNavOverlay.addEventListener('click', closeMobileMenu);
            
            // Mobile dropdown functionality
            const mobileDropdownToggles = document.querySelectorAll('.mobile-dropdown-toggle');
            
            mobileDropdownToggles.forEach(toggle => {
                toggle.addEventListener('click', function() {
                    const dropdown = this.parentElement;
                    dropdown.classList.toggle('active');
                });
            });
        });

        // Counter Animation yang Diperbarui
        function animateCounter(element, start, end, duration) {
            let startTimestamp = null;
            const step = (timestamp) => {
                if (!startTimestamp) startTimestamp = timestamp;
                const progress = Math.min((timestamp - startTimestamp) / duration, 1);
                const value = Math.floor(progress * (end - start) + start);
                element.textContent = value;
                if (progress < 1) {
                    window.requestAnimationFrame(step);
                } else {
                    // Add pulse effect when animation completes
                    element.classList.add('pulse-counter');
                    setTimeout(() => {
                        element.classList.remove('pulse-counter');
                    }, 2000);
                }
            };
            window.requestAnimationFrame(step);
        }

        function startCounters() {
            const counters = document.querySelectorAll('.counter-number');
            
            counters.forEach(counter => {
                const target = parseInt(counter.getAttribute('data-target'));
                animateCounter(counter, 0, target, 2000);
            });
        }

        // Start counters when hero section is in view
        const heroSection = document.getElementById('home');
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    startCounters();
                    observer.unobserve(heroSection);
                }
            });
        }, { threshold: 0.5 });

        observer.observe(heroSection);

        // Alternative method for older browsers
        window.addEventListener('load', function() {
            // Start counters after a short delay for better visual effect
            setTimeout(() => {
                startCounters();
            }, 1000);
        }); 
        
        // Sticky navbar effect - Diperbarui untuk navbar transparan
const navbar = document.querySelector('.sticky-nav');
window.addEventListener('scroll', function() {
    if (window.scrollY > 100) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});

// Testimonial Carousel Functionality
function initTestimonialCarousel() {
    const track = document.getElementById('carouselTrack');
    const slides = document.querySelectorAll('.carousel-slide');
    const dotsContainer = document.getElementById('carouselDots');
    const prevBtn = document.querySelector('.carousel-prev');
    const nextBtn = document.querySelector('.carousel-next');
    
    let currentIndex = 0;
    let autoPlayInterval;
    const slideCount = slides.length;
    
    // Calculate how many slides to show based on screen size
    function getSlidesToShow() {
        if (window.innerWidth >= 1024) return 3; // lg screens
        if (window.innerWidth >= 768) return 2;  // md screens
        return 1; // sm screens
    }
    
    // Create dots indicator
    function createDots() {
        dotsContainer.innerHTML = '';
        const slidesToShow = getSlidesToShow();
        const dotCount = Math.max(1, slideCount - slidesToShow + 1);
        
        for (let i = 0; i < dotCount; i++) {
            const dot = document.createElement('div');
            dot.className = 'carousel-dot';
            if (i === 0) dot.classList.add('active');
            dot.addEventListener('click', () => goToSlide(i));
            dotsContainer.appendChild(dot);
        }
    }
    
    // Update carousel position
    function updateCarousel() {
        const slidesToShow = getSlidesToShow();
        const slideWidth = 100 / slidesToShow;
        const translateX = -currentIndex * slideWidth;
        
        track.style.transform = `translateX(${translateX}%)`;
        
        // Update active dots
        const dots = document.querySelectorAll('.carousel-dot');
        dots.forEach((dot, index) => {
            dot.classList.toggle('active', index === currentIndex);
        });
        
        // Handle infinite loop
        if (currentIndex >= slideCount - slidesToShow + 1) {
            setTimeout(() => {
                track.style.transition = 'none';
                currentIndex = 0;
                track.style.transform = `translateX(0%)`;
                setTimeout(() => {
                    track.style.transition = 'transform 0.5s ease-in-out';
                }, 50);
            }, 500);
        }
        
        if (currentIndex < 0) {
            setTimeout(() => {
                track.style.transition = 'none';
                currentIndex = slideCount - slidesToShow;
                track.style.transform = `translateX(-${currentIndex * slideWidth}%)`;
                setTimeout(() => {
                    track.style.transition = 'transform 0.5s ease-in-out';
                }, 50);
            }, 500);
        }
    }
    
    // Navigate to specific slide
    function goToSlide(index) {
        currentIndex = index;
        updateCarousel();
        resetAutoPlay();
    }
    
    // Next slide
    function nextSlide() {
        const slidesToShow = getSlidesToShow();
        if (currentIndex < slideCount - slidesToShow) {
            currentIndex++;
        } else {
            currentIndex = 0; // Loop back to start
        }
        updateCarousel();
    }
    
    // Previous slide
    function prevSlide() {
        const slidesToShow = getSlidesToShow();
        if (currentIndex > 0) {
            currentIndex--;
        } else {
            currentIndex = slideCount - slidesToShow; // Loop to end
        }
        updateCarousel();
    }
    
    // Auto-play functionality
    function startAutoPlay() {
        autoPlayInterval = setInterval(nextSlide, 5000); // Change slide every 5 seconds
    }
    
    function resetAutoPlay() {
        clearInterval(autoPlayInterval);
        startAutoPlay();
    }
    
    // Event listeners
    prevBtn.addEventListener('click', () => {
        prevSlide();
        resetAutoPlay();
    });
    
    nextBtn.addEventListener('click', () => {
        nextSlide();
        resetAutoPlay();
    });
    
    // Pause auto-play on hover
    track.addEventListener('mouseenter', () => {
        clearInterval(autoPlayInterval);
    });
    
    track.addEventListener('mouseleave', () => {
        startAutoPlay();
    });
    
    // Handle window resize
    window.addEventListener('resize', () => {
        createDots();
        updateCarousel();
    });
    
    // Touch/swipe support for mobile
    let startX = 0;
    let endX = 0;
    
    track.addEventListener('touchstart', (e) => {
        startX = e.touches[0].clientX;
    });
    
    track.addEventListener('touchend', (e) => {
        endX = e.changedTouches[0].clientX;
        handleSwipe();
    });
    
    function handleSwipe() {
        const swipeThreshold = 50;
        if (startX - endX > swipeThreshold) {
            nextSlide(); // Swipe left
        } else if (endX - startX > swipeThreshold) {
            prevSlide(); // Swipe right
        }
        resetAutoPlay();
    }
    
    // Initialize
    createDots();
    updateCarousel();
    startAutoPlay();
}

// Initialize carousel when DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    // ... existing code ...
    
    // Initialize testimonial carousel
    initTestimonialCarousel();
    
    // ... rest of existing code ...
});

// Floating Action Button Visibility Control
function updateFABVisibility() {
    const fab = document.querySelector('.floating-action-btn');
    const sectionsToHideFAB = ['home', 'features', 'about']; // Sesuaikan dengan section yang diinginkan
    
    let shouldHide = false;
    
    sectionsToHideFAB.forEach(sectionId => {
        const section = document.getElementById(sectionId);
        if (section) {
            const rect = section.getBoundingClientRect();
            // Cek jika section terlihat di viewport
            if (rect.top >= 0 && rect.bottom <= window.innerHeight) {
                shouldHide = true;
            }
        }
    });
    
    // Atau gunakan pendekatan berdasarkan scroll position
    const scrollPosition = window.scrollY;
    const homeSection = document.getElementById('home');
    
    if (homeSection && scrollPosition < homeSection.offsetHeight * 0.7) {
        shouldHide = true;
    }
    
    if (shouldHide) {
        fab.style.opacity = '0';
        fab.style.visibility = 'hidden';
        fab.style.transform = 'scale(0.8)';
    } else {
        fab.style.opacity = '1';
        fab.style.visibility = 'visible';
        fab.style.transform = 'scale(1)';
    }
}

// Panggil fungsi saat scroll dan load
window.addEventListener('scroll', updateFABVisibility);
window.addEventListener('load', updateFABVisibility);

// Juga panggil saat resize untuk memastikan konsistensi
window.addEventListener('resize', updateFABVisibility);

document.addEventListener('DOMContentLoaded', function() {
    // ... kode existing ...
    
    // Floating action button dengan kontrol visibility
    const fab = document.querySelector('.floating-action-btn');
    fab.addEventListener('click', function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
    
    // Initialize FAB visibility
    updateFABVisibility();
    
    // ... kode existing lainnya ...
});
