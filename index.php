
<?php include 'src/templates/header.php'; ?>
<link rel="stylesheet" href="src/templates/style_index.css">

<style>
    /* ===== MODAL ===== */
    .modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%; /* Garante que o overlay cubra toda a largura */
        height: 100%; /* Garante que o overlay cubra toda a altura */
        background-color: rgba(0, 0, 0, 0.7); /* Fundo preto mais escuro (70% de opacidade) */
        z-index: 1000;
        align-items: center; /* Centralização vertical */
        justify-content: center; /* Centralização horizontal */
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
        /* Removendo margin: auto; pois o display: flex no .modal já faz a centralização */
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

    .product-image-placeholder img {
        max-width: 100%;
        max-height: 100%;
        object-fit: contain;
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
        background-color:  #4a90e2;
        color: #333333  ;
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
        background-color: #4a90e2;
        color: white;
        border: 2px solid #4a90e2;
    }

    .btn-secondary:hover {
        background-color:rgb(135, 173, 216);
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

<main>
    <section> <!--Carrousel-->
        <div class="slideshow-container"> <!-- 1920x840 Resolução-->
            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div> <img src="src/images/Banner01.png" style="width:100%">
            </div>
            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div> <img src="src/images/banner03.png" style="width:100%">
            </div>
            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div> <img src="src/images/Banner biafashionkids.png" style="width:100%">
            </div> <!-- Next and previous buttons --> 
        </div> <br> <!-- The dots/circles -->
        <div class="dots-container"> <span class="dot" onclick="currentSlide(1)"></span> <span class="dot"
                onclick="currentSlide(2)"></span> <span class="dot" onclick="currentSlide(3)"></span> </div>
    </section> <!--Carrousel mini-->
    <section class="mini-carousel-section">
        <div class="carrousel-sections"> <a href="">
                <div class="carrousel-photos"> <img
                        src="https://static.vecteezy.com/system/resources/previews/010/994/276/original/adidas-logo-symbol-clothes-design-icon-abstract-football-illustration-free-vector.jpg">
                    <p>Adidas</p>
                </div>
            </a> <a href="">
                <div class="carrousel-photos"> <img src="/projeto-pessoal-softbm/src/images/pampili.png">
                    <p>Pampili</p>
                </div>
            </a> <a href="">
                <div class="carrousel-photos"> <img src="/projeto-pessoal-softbm/src/images/charpey.png">
                    <p>Charpey</p>
                </div>
            </a> <a href="">
                <div class="carrousel-photos"> <img src="src/images/pimpolho.png">
                    <p>Pimpolho</p>
                </div>
            </a> <a href="">
                <div class="carrousel-photos"> <img src="src/images/kyly.png">
                    <p>Kyly</p>
                </div>
            </a> <a href="">
                <div class="carrousel-photos"> <img src="src/images/momi-circulo.png">
                    <p>Momi</p>
                </div>
            </a> <a href="">
                <div class="carrousel-photos"> <img src="src/images/lemon.png">
                    <p>Lemon</p>
                </div>
            </a> <a href="">
                <div class="carrousel-photos"> <img src="src/images/kukie.png">
                    <p>Kukiê</p>
                </div>
            </a> <a href="">
                <div class="carrousel-photos"> <img src="src/images/infantin.png">
                    <p>Infanti</p>
                </div>
            </a> <a href="">
                <div class="carrousel-photos"> <img src="src/images/kukie.png">
                    <p>Kukiê</p>
                </div>
            </a> <a href="">
                <div class="carrousel-photos"> <img src="/projeto-pessoal-softbm/src/images/charpey.png">
                    <p>Charpey</p>
                </div>
            </a> <a href="">
                <div class="carrousel-photos"> <img src="src/images/lemon.png">
                    <p>Lemon</p>
                </div>
            </a> <a href="">
                <div class="carrousel-photos"> <img src="/projeto-pessoal-softbm/src/images/pampili.png">
                    <p>Pampili</p>
                </div>
            </a> </div>
    </section> <!--Section de images de roupas tops-->
    <section class="product-section">
        <div class="tshirt-sections"> 
            <a href="#" onclick="openModal('hellokitty'); return false;">
                <div class="tshirt-photos"> <img src="src/images/imgs-produto/hellokity.png">
                    <p>Sandália HELLO KITTY © Licenciado/Original</p> <span><strong>R$ 61,96</strong></span>
                </div>
            </a> 
            <a href="">
                <div class="tshirt-photos"> <img src="src/images/imgs-produto/fila.png">
                    <p>Chinelo Fila Drifter Basic</p> <span><strong>R$ 135,91</strong></span>
                </div>
            </a> <a href="">
                <div class="tshirt-photos"> <img src="src/images/imgs-produto/flor.png">
                    <p>Babuche Capivara em tons de marrom </p> <span><strong>R$ 59,41</strong></span>
                </div>
            </a> <a href="">
                <div class="tshirt-photos"> <img src="src/images/imgs-produto/rider.png">
                    <p>Chinelo Rider © Licenciado/Original </p> <span><strong>R$ 110,41</strong></span>
                </div>
            </a> <a href="">
                <div class="tshirt-photos"> <img src="src/images/imgs-produto/klin.png">
                    <p>Tênis Klin © Licenciado/Original </p> <span><strong>R$ 110,41</strong></span>
                </div>
            </a> <a href="">
                <div class="tshirt-photos"> <img src="src/images/imgs-produto/capivara.png">
                    <p>Babuche Capivaras</p> <span><strong>R$ 84,91</strong></span>
                </div>
            </a> <a href="">
                <div class="tshirt-photos"> <img src="src/images/imgs-produto/mormaii.png">
                    <p>Tênis Mormaii© Licenciado/Original</p> <span><strong>R$ 169,91</strong></span>
                </div>
            </a> <a href="">
                <div class="tshirt-photos"> <img src="src/images/imgs-produto/minisuacia.png">
                    <p>Tênis delicado com flores </p> <span><strong>R$ 118,91</strong></span>
                </div>
            </a> </div>
    </section>
</main>

<!-- MODAL HELLO KITTY -->
<div class="modal" id="productModal">
    <div class="modal-content">
        <button class="modal-close" onclick="closeModal()">&times;</button>

        <div class="modal-body">
            <!-- Product Image -->
            <div class="modal-image">
                <div class="product-image-placeholder">
                    <img src="src/images/imgs-produto/hellokity.png" alt="Sandália Hello Kitty">
                </div>
            </div>

            <!-- Product Details -->
            <div class="modal-details">
                <div class="product-header">
                    <div>
                        <h2 class="product-title">Sandália HELLO KITTY © Licenciado/Original</h2>
                        <div class="product-rating">
                            <span class="stars">★★★★★</span>
                            <span class="rating-value">5.0</span>
                        </div>
                    </div>
                    <button class="favorite-btn unfavorited" onclick="toggleFavorite(this)">♡</button>
                </div>

                <!-- Price -->
                <div class="product-price">
                    <div class="price-original">De: R$ 79,90</div>
                    <div class="price-current">R$ 61,96</div>
                </div>

                <!-- Color Selection -->
                <div class="color-section">
                    <label class="section-label">Cor</label>
                    <div class="color-options">
                        <button class="color-option color-pink selected" onclick="selectColor(this)" data-color="Rosa" title="Rosa"></button>
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

        alert(`Compra realizada!\nCor: ${selectedColor}\nTamanho: ${selectedSize}\nPreço: R$ 61,96`);
        console.log('Compra:', { color: selectedColor, size: selectedSize, price: 61.96 });
    }

    // Add to Cart
    function addToCart() {
        const selectedColor = document.querySelector('.color-option.selected')?.dataset.color;
        const selectedSize = document.querySelector('.size-option.selected')?.textContent;

        if (!selectedColor || !selectedSize) {
            alert('Selecione uma cor e um tamanho válidos.');
            return;
        }

        // Update cart badge (se existir no header)
        const cartBadge = document.querySelector('.cart-badge');
        if (cartBadge) {
            const currentCount = parseInt(cartBadge.textContent);
            cartBadge.textContent = currentCount + 1;
        }

        alert(`Produto adicionado ao carrinho!\nCor: ${selectedColor}\nTamanho: ${selectedSize}`);
        console.log('Adicionado ao carrinho:', { color: selectedColor, size: selectedSize });
    }

    // Close Modal
    function closeModal() {
        document.getElementById('productModal').classList.remove('active');
    }

    // Open Modal
    function openModal(productId) {
        document.getElementById('productModal').classList.add('active');
    }

    // Close modal when clicking outside
    document.getElementById('productModal').addEventListener('click', function(event) {
        if (event.target === this) {
            closeModal();
        }
    });
</script>

<?php include 'src/templates/footer.php'; ?>
