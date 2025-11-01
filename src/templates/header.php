<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bebê ao juvenil! Desde 2014🙌 - Bia Fashion Kids</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="src/templates/style_header.css">
    <link rel="stylesheet" href="src/templates/style_footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="script_header.js"></script>
    <link rel="stylesheet" href="login_popup.css">
</head>

<body>
    <!--Parte de cima contendo novidades/promoções-->
    <div class="top-bar">
        <div class="container">
            <p>Aceitamos pagamento via <i class="fa-brands fa-pix"></i> pix | Compre parcelado e sem juros!</p>
        </div>
    </div>
    <!--Parte do Header do site // Fixo!-->
    <header class="main-header">
        <div class="container">
            <div class="header-content">
                <!--Logo da loja-->
                <div class="logo">
                    <a href="Index.php">
                        <img src="src/images/98368e1a-b1a8-4dfd-bffa-786a1f87a1f4.png" alt="Bia Fashion Kids Logo">
                    </a>
                </div>

                <!--Seções-->
                <nav class="sections-content">
                    <ul>
                        <li><a href="promos.php">Promos</a></li>
                        <li><a href="feminino.php">Feminino</a></li>
                        <li><a href="masculino.php">Masculino</a></li>
                        <li><a href="quentinhos.php">Quentinhos</a></li>
                        <li><a href="fresquinhos.php">Fresquinhos</a></li>
                        <li><a href="acessorios.php">Acessórios</a></li>
                        <li><a href="marcas.php">Marcas</a></li>
                    </ul>
                </nav>

                <!--Seção de pesquisa-->
                <div class="search-container">
                    <input type="text" placeholder="Digite o que você procura" class="search-input">
                    <button class="search-btn"><i class="fas fa-search"></i></button>
                </div>

                <div class="header-actions">
                    <a href="Login.php"><i class="fas fa-user"></i> Entrar</a>
                    <a href="#"><i class="fas fa-shopping-cart"></i> Carrinho</a>
                </div>

                <div class="mobile-menu-icon">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
        </div>
    </header>
    <div class="mobile-menu">
        <ul>
            <li><a href="promos.html">Promos</a></li>
            <li><a href="feminino.php">Feminino</a></li>
            <li><a href="#">Masculino</a></li>
            <li><a href="quentinhos.php">Quentinhos</a></li>
            <li><a href="fresquinhos.php">Fresquinhos</a></li>
            <li><a href="acessorios.php">Acessórios</a></li>
            <li><a href="marcas.php">Marcas</a></li>
            <li><a href="#">Entrar</a></li>
            <li><a href="#">Carrinho</a></li>
	        </ul>
	    </div>
	    <!-- Incluir o HTML do Popup de Login/Cadastro -->
	    <?php include 'login_popup.php'; ?>
	    <script src="login_popup.js"></script>
        <script>
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

        </script>
	