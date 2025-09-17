// Mobile menu functionality
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuIcon = document.querySelector('.mobile-menu-icon');
    const mobileMenu = document.querySelector('.mobile-menu');
    
    if (mobileMenuIcon && mobileMenu) {
        mobileMenuIcon.addEventListener('click', function() {
            if (mobileMenu.style.display === 'block') {
                mobileMenu.style.display = 'none';
            } else {
                mobileMenu.style.display = 'block';
            }
        });

        // Close mobile menu when clicking outside
        document.addEventListener('click', function(event) {
            if (!mobileMenuIcon.contains(event.target) && !mobileMenu.contains(event.target)) {
                mobileMenu.style.display = 'none';
            }
        });

        // Close mobile menu when window is resized to desktop size
        window.addEventListener('resize', function() {
            if (window.innerWidth > 992) {
                mobileMenu.style.display = 'none';
            }
        });
    }
});

// Slideshow functionality
let slideIndex = 1;
let autoSlideInterval;

document.addEventListener('DOMContentLoaded', function() {
    showSlides(slideIndex);
    startAutoSlide();
    addTouchSupport();
});

function startAutoSlide() {
    autoSlideInterval = setInterval(function() {
        plusSlides(1);
    }, 5000);
}

function stopAutoSlide() {
    clearInterval(autoSlideInterval);
}

function restartAutoSlide() {
    stopAutoSlide();
    setTimeout(startAutoSlide, 3000); // Restart after 3 seconds
}

// Touch support for mobile devices
function addTouchSupport() {
    const slideContainer = document.querySelector('.slideshow-container');
    if (!slideContainer) return;

    let startX = 0;
    let endX = 0;

    slideContainer.addEventListener('touchstart', function(e) {
        startX = e.touches[0].clientX;
        stopAutoSlide();
    });

    slideContainer.addEventListener('touchend', function(e) {
        endX = e.changedTouches[0].clientX;
        handleSwipe();
        restartAutoSlide();
    });

    function handleSwipe() {
        const threshold = 50; // Minimum distance for swipe
        const diff = startX - endX;

        if (Math.abs(diff) > threshold) {
            if (diff > 0) {
                // Swipe left - next slide
                plusSlides(1);
            } else {
                // Swipe right - previous slide
                plusSlides(-1);
            }
        }
    }
}

// Next/previous controls
function plusSlides(n) {
    showSlides(slideIndex += n);
    restartAutoSlide(); // Restart auto-slide when manually navigating
}

// Thumbnail image controls
function currentSlide(n) {
    showSlides(slideIndex = n);
    restartAutoSlide(); // Restart auto-slide when manually navigating
}

function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    
    if (slides.length === 0) return; // Exit if no slides found
    
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    
    if (slides[slideIndex - 1]) {
        slides[slideIndex - 1].style.display = "block";
    }
    
    if (dots[slideIndex - 1]) {
        dots[slideIndex - 1].className += " active";
    }
}

// Search functionality
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.querySelector('.search-input');
    const searchBtn = document.querySelector('.search-btn');
    
    if (searchBtn) {
        searchBtn.addEventListener('click', function() {
            performSearch();
        });
    }
    
    if (searchInput) {
        searchInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                performSearch();
            }
        });
    }
    
    function performSearch() {
        const query = searchInput.value.trim();
        if (query) {
            // Implement search functionality here
            console.log('Searching for:', query);
            // You can redirect to a search results page or filter products
        }
    }
});
