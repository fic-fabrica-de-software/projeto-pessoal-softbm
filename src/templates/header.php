<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>


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
                    <?php if (isset($_SESSION["name"])): ?>
                        <a href="#"><i class="fas fa-user"></i>
                          <a href="Login.php"> <?php echo htmlspecialchars($_SESSION["name"]); ?></a>
                        </a>
                    <?php else: ?>
                        <a href="Login.php"><i class="fas fa-user"></i> Entrar</a>
                    <?php endif; ?>

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
        document.addEventListener('DOMContentLoaded', function () {
            const mobileMenuIcon = document.querySelector('.mobile-menu-icon');
            const mobileMenu = document.querySelector('.mobile-menu');

            if (mobileMenuIcon && mobileMenu) {
                mobileMenuIcon.addEventListener('click', function () {
                    if (mobileMenu.style.display === 'block') {
                        mobileMenu.style.display = 'none';
                    } else {
                        mobileMenu.style.display = 'block';
                    }
                });

                // Close mobile menu when clicking outside
                document.addEventListener('click', function (event) {
                    if (!mobileMenuIcon.contains(event.target) && !mobileMenu.contains(event.target)) {
                        mobileMenu.style.display = 'none';
                    }
                });

                // Close mobile menu when window is resized to desktop size
                window.addEventListener('resize', function () {
                    if (window.innerWidth > 992) {
                        mobileMenu.style.display = 'none';
                    }
                });
            }
        });

        // Slideshow functionality
        let slideIndex = 1;
        let autoSlideInterval;

        document.addEventListener('DOMContentLoaded', function () {
            showSlides(slideIndex);
            startAutoSlide();
            addTouchSupport();
        });

        function startAutoSlide() {
            autoSlideInterval = setInterval(function () {
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

            slideContainer.addEventListener('touchstart', function (e) {
                startX = e.touches[0].clientX;
                stopAutoSlide();
            });

            slideContainer.addEventListener('touchend', function (e) {
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
        document.addEventListener('DOMContentLoaded', function () {
            const searchInput = document.querySelector('.search-input');
            const searchBtn = document.querySelector('.search-btn');

            if (searchBtn) {
                searchBtn.addEventListener('click', function () {
                    performSearch();
                });
            }

            if (searchInput) {
                searchInput.addEventListener('keypress', function (e) {
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
    <style>
        /* General Header Styles */

*  {
    font-family: Arial, Helvetica, sans-serif;
    text-decoration: none;
}

.top-bar {
    background: rgb(236,162,179);
    padding: 8px 0;
    text-align: center;
    font-size: 14px;
    color: #ffffff;
}

.top-bar p {
    margin: 0;
    font-weight: 500;
}

.top-bar .fa-brands.fa-pix {
    color: #00d4aa;
    margin: 0 4px;
}

.main-header {
    background: #ffffff;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    position: relative;
    z-index: 100;
}

.header-content {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 15px 0;
    gap: 20px;
}

/* Logo */
.logo img {
    width: 80px; /* Increased logo size */
    height: auto;
}

/* Navigation Sections */
.sections-content ul {
    display: flex;
    list-style-type: none;
    gap: 25px; /* Increased gap for better spacing */
}

.sections-content a {
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-size: 16px;
    color: #333;
    transition: color 0.3s ease;
}

.sections-content a:hover {
    color: rgb(236,162,179);
}

/* Search Container */
.search-container {
    flex-grow: 1;
    max-width: 400px; /* Adjusted max-width */
    position: relative;
    margin: 0 20px;
    display: flex; /* Added flex for search input and button */
}

.search-input {
    width: 100%;
    height: 40px; /* Increased height */
    padding: 10px 45px 10px 15px; /* Adjusted padding for icon */
    border: 1px solid #ddd; /* Lighter border */
    border-radius: 20px; /* More rounded corners */
    font-size: 14px;
    outline: none;
    transition: border-color 0.3s ease, box-shadow 0.3s ease;
}

.search-input::placeholder {
    color: #999;
}

.search-input:focus {
    border-color: rgb(236,162,179);
    box-shadow: 0 0 5px rgba(236,162,179,0.5);
}

.search-btn {
    position: absolute;
    right: 10px;
    top: 50%;
    transform: translateY(-50%);
    background: none;
    border: none;
    color: #555;
    font-size: 18px;
    cursor: pointer;
    transition: color 0.3s ease;
}

.search-btn:hover {
    color: rgb(236,162,179);
}

/* Header Actions (Login/Cart) */
.header-actions {
    display: flex;
    align-items: center;
    gap: 20px;
}

.header-actions a {
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-size: 16px;
    color: #333;
    display: flex;
    align-items: center;
    gap: 5px;
    transition: color 0.3s ease;
}

.header-actions a:hover {
    color: rgb(236,162,179);
}

.header-actions i {
    font-size: 18px;
}

/* Mobile Menu */
.mobile-menu-icon {
    display: none; /* Hidden by default */
    font-size: 24px;
    cursor: pointer;
    color: #333;
    transition: color 0.3s ease;
}

.mobile-menu-icon:hover {
    color: rgb(236,162,179);
}

.mobile-menu {
    display: none; /* Hidden by default */
    background-color: #fff;
    box-shadow: 0 4px 15px rgba(0,0,0,0.15);
    position: absolute;
    width: 100%;
    left: 0;
    top: 100%; /* Position below the header */
    padding: 15px 0;
    border-top: 1px solid #eee;
    z-index: 1000;
    animation: slideDown 0.3s ease-out;
}

@keyframes slideDown {
    from {
        opacity: 0;
        transform: translateY(-10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.mobile-menu ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.mobile-menu li {
    padding: 0;
    border-bottom: 1px solid #f0f0f0;
}

.mobile-menu li:last-child {
    border-bottom: none;
}

.mobile-menu a {
    color: #333;
    font-size: 16px;
    display: block;
    padding: 15px 25px;
    transition: all 0.3s ease;
    position: relative;
}

.mobile-menu a:hover {
    color: rgb(236,162,179);
    background-color: #f8f9fa;
    padding-left: 35px;
}

.mobile-menu a::before {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    bottom: 0;
    width: 0;
    background-color: rgb(236,162,179);
    transition: width 0.3s ease;
}

.mobile-menu a:hover::before {
    width: 4px;
}

/* Estilo do overlay */
.overlay {
    display: none; /* oculto por padrão */
    position: fixed;
    top: 0;
    left: 0;
    width: 100vw;
    height: 100vh;
    background-color: rgba(0, 0, 0, 0.5); /* fundo escuro semi-transparente */
    justify-content: center;
    align-items: center;
    z-index: 9999;
}

/* Estilo do modal */
.modal {
    background-color: white;
    padding: 30px;
    border-radius: 10px;
    width: 300px;
    max-width: 90%;
    box-shadow: 0 4px 10px rgba(0,0,0,0.3);
    text-align: center;
    font-size: 16px;
}


/* Responsive adjustments */
@media (max-width: 992px) {
    .sections-content, .header-actions {
        display: none; /* Hide desktop navigation and actions */
    }

    .search-container {
        max-width: 100%;
        margin: 0 10px;
    }

    .mobile-menu-icon {
        display: block; /* Show mobile menu icon */
    }

    .header-content {
        justify-content: space-between;
    }
}

@media (max-width: 768px) {
    .logo img {
        width: 70px;
    }

    .search-input {
        height: 35px;
        padding: 8px 40px 8px 12px;
    }

    .search-btn {
        font-size: 16px;
        right: 8px;
    }
}

@media (max-width: 480px) {
    .top-bar p {
        font-size: 12px;
    }

    .logo img {
        width: 60px;
    }

    .header-content {
        padding: 10px 0;
    }

    .search-container {
        margin: 0 5px;
    }

    .search-input {
        font-size: 12px;
    }

    .mobile-menu li {
        padding: 8px 15px;
    }

    .mobile-menu a {
        font-size: 14px;
    }
}

    </style>