
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bia Fashion Kids</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #ffffff;
            color: #333333;
            line-height: 1.6;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Playfair Display', serif;
        }

        /* ===== HEADER ===== */
        .header-top {
            background-color: #ec6b9f;
            color: white;
            text-align: center;
            padding: 8px 16px;
            font-size: 12px;
        }

        header {
            background-color: white;
            border-bottom: 1px solid #e5e5e5;
            padding: 16px 0;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .header-container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 16px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 32px;
        }

        .logo {
            width: 48px;
            height: 48px;
            background-color: #ec6b9f;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            font-size: 18px;
            flex-shrink: 0;
        }

        nav {
            display: none;
            gap: 24px;
            flex: 1;
        }

        nav a {
            color: #333333;
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
            transition: color 0.3s;
        }

        nav a:hover {
            color: #ec6b9f;
        }

        @media (min-width: 1024px) {
            nav {
                display: flex;
            }
        }

        .search-bar {
            display: none;
            flex: 1;
            max-width: 280px;
        }

        .search-bar input {
            width: 100%;
            padding: 8px 16px;
            font-size: 14px;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            outline: none;
            transition: border-color 0.3s;
        }

        .search-bar input:focus {
            border-color: #ec6b9f;
        }

        @media (min-width: 768px) {
            .search-bar {
                display: flex;
            }
        }

        .header-actions {
            display: flex;
            gap: 16px;
            align-items: center;
        }

        .header-actions button {
            background: none;
            border: none;
            cursor: pointer;
            color: #333333;
            transition: color 0.3s;
            padding: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .header-actions button:hover {
            color: #ec6b9f;
        }

        .cart-badge {
            position: absolute;
            top: -8px;
            right: -8px;
            background-color: #ec6b9f;
            color: white;
            font-size: 10px;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }

        .cart-icon-wrapper {
            position: relative;
        }

        /* ===== PROMO BANNER ===== */
        .promo-banner {
            background: linear-gradient(135deg, #ffd700 0%, #ffed4e 100%);
            padding: 48px 16px;
            text-align: center;
        }

        .promo-banner-container {
            max-width: 1280px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 32px;
        }

        .promo-content {
            flex: 1;
            text-align: left;
        }

        .promo-content h2 {
            font-size: 32px;
            color: white;
            margin-bottom: 8px;
            font-weight: bold;
        }

        .promo-content p {
            font-size: 20px;
            color: white;
            font-weight: 600;
        }

        .promo-badge {
            width: 128px;
            height: 128px;
            background-color: #ec6b9f;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        .promo-badge-content {
            text-align: center;
            color: white;
            font-weight: bold;
        }

        .promo-badge-content p {
            font-size: 12px;
            margin: 2px 0;
        }

        @media (max-width: 768px) {
            .promo-badge {
                display: none;
            }

            .promo-content h2 {
                font-size: 24px;
            }

            .promo-content p {
                font-size: 16px;
            }
        }

        /* ===== MAIN CONTENT ===== */
        main {
            flex: 1;
        }

        .container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 32px 16px;
        }

        /* ===== MODAL ===== */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1000;
            align-items: center;
            justify-content: center;
            padding: 16px;
        }

        .modal.active {
            display: flex;
        }

        .modal-content {
            background-color: white;
            border-radius: 8px;
            max-width: 1000px;
            width: 100%;
            max-height: 90vh;
            overflow-y: auto;
            position: relative;
        }

        .modal-close {
            position: absolute;
            top: 16px;
            right: 16px;
            background: none;
            border: none;
            cursor: pointer;
            font-size: 24px;
            color: #999999;
            z-index: 10;
            transition: color 0.3s;
        }

        .modal-close:hover {
            color: #333333;
        }

        .modal-body {
            display: flex;
            gap: 32px;
            padding: 32px;
        }

        .modal-image {
            flex: 1;
            display: none;
            align-items: center;
            justify-content: center;
                }

        @media (min-width: 768px) {
            .modal-image {
                display: flex;
            }
        }

        .product-image-placeholder {
            background: linear-gradient(135deg, #fce4ec 0%, #f8bbd0 100%);
            width: 256px;
            height: 256px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ec6b9f;
            font-weight: 600;
            text-align: center;
            padding: 16px;
        }

        .modal-details {
            flex: 1;
        }

        .product-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 16px;
        }

        .product-title {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 24px;
            font-weight: bold;
            color: #333333;
            margin-bottom: 8px;
        }

        .product-rating {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 16px;
        }

        .stars {
            color: #ffc107;
            font-size: 16px;
        }

        .rating-value {
            color: #666666;
            font-size: 14px;
        }

        .favorite-btn {
            background: none;
            border: none;
            cursor: pointer;
            font-size: 24px;
            transition: all 0.3s;
            padding: 8px;
        }

        .favorite-btn.unfavorited {
            color: #d1d5db;
        }

        .favorite-btn.favorited {
            color: #ec6b9f;
        }

        .product-price {
            margin-bottom: 24px;
        }

        .price-original {
            color: #999999;
            font-size: 14px;
            margin-bottom: 4px;
        }

        .price-current {
            font-size: 32px;
            font-weight: bold;
            color: #333333;
        }

        /* ===== COLOR SELECTOR ===== */
        .color-section {
            margin-bottom: 24px;
        }

        .section-label {
            font-size: 14px;
            font-weight: 600;
            color: #333333;
            margin-bottom: 12px;
            display: block;
        }

        .color-options {
            display: flex;
            gap: 12px;
        }

        .color-option {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            border: 2px solid #d1d5db;
            cursor: pointer;
            transition: all 0.3s;
        }

        .color-option.selected {
            border-color: #333333;
            transform: scale(1.1);
        }

        .color-pink {
            background-color: #ec6b9f;
        }

        .color-black {
            background-color: #000000;
        }

        .color-white {
            background-color: #ffffff;
            border-color: #999999;
        }

        .color-gray {
            background-color: #9ca3af;
        }

        /* ===== SIZE SELECTOR ===== */
        .size-section {
            margin-bottom: 24px;
        }

        .size-options {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 8px;
        }

        .size-option {
            padding: 8px 12px;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            background-color: white;
            cursor: pointer;
            font-weight: 500;
            transition: all 0.3s;
            text-align: center;
        }

        .size-option:hover {
            border-color: #333333;
        }

        .size-option.selected {
            background-color: #333333;
            color: white;
            border-color: #333333;
        }

        /* ===== ACTION BUTTONS ===== */
        .action-buttons {
            display: flex;
            gap: 12px;
            margin-bottom: 32px;
        }

        .btn {
            flex: 1;
            padding: 12px 16px;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            font-size: 14px;
        }

        .btn-primary {
            background-color: #ec6b9f;
            color: white;
        }

        .btn-primary:hover {
            background-color: #d85a8c;
        }

        .btn-secondary {
            background-color: white;
            color: #ec6b9f;
            border: 2px solid #ec6b9f;
        }

        .btn-secondary:hover {
            background-color: #fce4ec;
        }

        /* ===== RELATED PRODUCTS ===== */
        .related-products {
            border-top: 1px solid #e5e5e5;
            padding-top: 32px;
        }

        .related-title {
            font-size: 18px;
            font-weight: bold;
            color: #333333;
            text-align: center;
            margin-bottom: 24px;
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 24px;
        }

        .product-card {
            text-align: center;
        }

        .product-card-image {
            background: linear-gradient(135deg, #e9d5ff 0%, #d8b4fe 100%);
            width: 100%;
            aspect-ratio: 1;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #a78bfa;
            font-weight: 600;
            margin-bottom: 16px;
        }

        .product-card-name {
            font-size: 14px;
            color: #333333;
            font-weight: 500;
            margin-bottom: 8px;
        }

        .product-card-price {
            color: #666666;
            font-size: 12px;
            margin-bottom: 8px;
        }

        .product-card-price-current {
            font-size: 18px;
            font-weight: bold;
            color: #333333;
            margin-bottom: 12px;
        }

        .btn-small {
            width: 100%;
            padding: 8px 12px;
            border: 2px solid #ec6b9f;
            background-color: white;
            color: #ec6b9f;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            font-size: 12px;
            transition: all 0.3s;
        }

        .btn-small:hover {
            background-color: #fce4ec;
        }

        /* ===== FOOTER ===== */
        footer {
            background-color: #f3f4f6;
            border-top: 1px solid #d1d5db;
            padding: 48px 16px;
        }

        .footer-container {
            max-width: 1280px;
            margin: 0 auto;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 32px;
            margin-bottom: 32px;
        }

        .footer-section h4 {
            font-weight: bold;
            color: #333333;
            margin-bottom: 16px;
            font-size: 16px;
        }

        .footer-section ul {
            list-style: none;
        }

        .footer-section ul li {
            margin-bottom: 8px;
        }

        .footer-section ul li a {
            color: #666666;
            text-decoration: none;
            font-size: 14px;
            transition: color 0.3s;
        }

        .footer-section ul li a:hover {
            color: #ec6b9f;
        }

        .footer-brand {
            margin-bottom: 16px;
        }

        .footer-logo {
            width: 48px;
            height: 48px;
            background-color: #ec6b9f;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            margin-bottom: 16px;
        }

        .footer-text {
            color: #666666;
            font-size: 14px;
            margin-bottom: 8px;
        }

        .social-links {
            display: flex;
            gap: 16px;
            margin-top: 16px;
        }

        .social-links a {
            color: #666666;
            text-decoration: none;
            transition: color 0.3s;
            font-size: 18px;
        }

        .social-links a:hover {
            color: #ec6b9f;
        }

        .footer-bottom {
            border-top: 1px solid #d1d5db;
            padding-top: 32px;
            text-align: center;
            color: #666666;
            font-size: 14px;
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 768px) {
            .modal-body {
                flex-direction: column;
                padding: 16px;
                gap: 16px;
            }

            .product-title {
                font-size: 18px;
            }

            .price-current {
                font-size: 24px;
            }

            .action-buttons {
                flex-direction: column;
            }

            .products-grid {
                grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
                gap: 16px;
            }
        }
    </style>
</head>
<body>

    <!-- MAIN CONTENT -->
    

    <!-- MODAL -->
    <div class="modal active" id="productModal">
        <div class="modal-content">
            <button class="modal-close" onclick="closeModal()">&times;</button>

            <div class="modal-body">
                <!-- Product Image -->
                <div class="modal-image">
                <img src="src/images/imgs-produto/hellokity.png"> 
                    </div>
                </div>

                <!-- Product Details -->
                <div class="modal-details">
                    <div class="product-header">
                        <div>
                            <h2 class="product-title">Sapato infantil tipo CROCS em tons de rosa</h2>
                            <div class="product-rating">
                                <span class="stars">★★★★★</span>
                                <span class="rating-value">5.0</span>
                            </div>
                        </div>
                        <button class="favorite-btn unfavorited" onclick="toggleFavorite(this)">♡</button>
                    </div>

                    <!-- Price -->
                    <div class="product-price">
                        <div class="price-original">De: R$ 129,90</div>
                        <div class="price-current">R$ 109,90</div>
                    </div>

                    <!-- Color Selection -->
                    <div class="color-section">
                        <label class="section-label">Cor</label>
                        <div class="color-options">
                            <button class="color-option color-pink selected" onclick="selectColor(this)" data-color="pink" title="Rosa"></button>
                            <button class="color-option color-black" onclick="selectColor(this)" data-color="black" title="Preto"></button>
                            <button class="color-option color-white" onclick="selectColor(this)" data-color="white" title="Branco"></button>
                            <button class="color-option color-gray" onclick="selectColor(this)" data-color="gray" title="Cinza"></button>
                        </div>
                    </div>

                    <!-- Size Selection -->
                    <div class="size-section">
                        <label class="section-label">Tamanho</label>
                        <div class="size-options">
                            <button class="size-option" onclick="selectSize(this)">22</button>
                            <button class="size-option" onclick="selectSize(this)">23</button>
                            <button class="size-option" onclick="selectSize(this)">24</button>
                            <button class="size-option" onclick="selectSize(this)">25</button>
                            <button class="size-option" onclick="selectSize(this)">26</button>
                            <button class="size-option" onclick="selectSize(this)">27</button>
                            <button class="size-option" onclick="selectSize(this)">28</button>
                            <button class="size-option" onclick="selectSize(this)">29</button>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="action-buttons">
                        <button class="btn btn-primary" onclick="buyProduct()">COMPRAR</button>
                        <button class="btn btn-secondary" onclick="addToCart()">ADICIONAR AO CARRINHO</button>
                    </div>
                </div>
            </div>

            <!-- Related Products -->
            <div class="related-products" style="padding: 32px;">
                <h3 class="related-title">OS MAIS VENDIDOS COM BASE NO SEU INTERESSE</h3>
                <div class="products-grid">
                    <?php for ($i = 1; $i <= 3; $i++): ?>
                    <div class="product-card">
                        <div class="product-card-image">
                            [Produto <?php echo $i; ?>]
                        </div>
                        <p class="product-card-name">Sapato infantil tipo CROCS roxo</p>
                        <p class="product-card-price">De: <span style="text-decoration: line-through;">R$ 99,00</span></p>
                        <p class="product-card-price-current">R$ 79,00</p>
                        <button class="btn-small" onclick="addToCart()">ADICIONAR AO CARRINHO</button>
                    </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </div>
    <script>
        // Color Selection
        function selectColor(element) {
            document.querySelectorAll('.color-option').forEach(btn => {
                btn.classList.remove('selected');
            });
            element.classList.add('selected');
            console.log('Cor selecionada:', element.dataset.color);
        }

        // Size Selection
        function selectSize(element) {
            document.querySelectorAll('.size-option').forEach(btn => {
                btn.classList.remove('selected');
            });
            element.classList.add('selected');
            console.log('Tamanho selecionado:', element.textContent);
        }

        // Toggle Favorite
        function toggleFavorite(element) {
            element.classList.toggle('unfavorited');
            element.classList.toggle('favorited');
            const isFavorited = element.classList.contains('favorited');
            element.textContent = isFavorited ? '♥' : '♡';
            console.log('Produto favoritado:', isFavorited);
        }

        // Buy Product
        function buyProduct() {
            const selectedColor = document.querySelector('.color-option.selected')?.dataset.color;
            const selectedSize = document.querySelector('.size-option.selected')?.textContent;

            if (!selectedColor || !selectedSize) {
                alert('Por favor, selecione uma cor e um tamanho!');
                return;
            }

            alert(`Compra realizada!\nCor: ${selectedColor}\nTamanho: ${selectedSize}\nPreço: R$ 109,90`);
            console.log('Compra:', { color: selectedColor, size: selectedSize, price: 109.90 });
        }

        // Add to Cart
        function addToCart() {
            const selectedColor = document.querySelector('.color-option.selected')?.dataset.color;
            const selectedSize = document.querySelector('.size-option.selected')?.textContent;

            if (!selectedColor || !selectedSize) {
                alert('Por favor, selecione uma cor e um tamanho!');
                return;
            }

            // Update cart badge
            const cartBadge = document.querySelector('.cart-badge');
            const currentCount = parseInt(cartBadge.textContent);
            cartBadge.textContent = currentCount + 1;

            alert(`Produto adicionado ao carrinho!\nCor: ${selectedColor}\nTamanho: ${selectedSize}`);
            console.log('Adicionado ao carrinho:', { color: selectedColor, size: selectedSize });
        }

        // Close Modal
        function closeModal() {
            document.getElementById('productModal').classList.remove('active');
        }

        // Open Modal
        function openModal() {
            document.getElementById('productModal').classList.add('active');
        }

        // Close modal when clicking outside
        document.getElementById('productModal').addEventListener('click', function(event) {
            if (event.target === this) {
                closeModal();
            }
        });
    </script>
</body>
</html>
