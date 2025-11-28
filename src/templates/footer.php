<footer class="footer-div">
    <div class="footer-container">
        <div class="footer-col">
            <img src="src/images/logo_bfk.JPG" alt="logo Bia Fashion Kids" class="footer-logo">
            <h3>Venha nos fazer uma visita!</h3>
            <p>
                Rua Laura Auler, 164<br>
                Joinville<br>
                <a href="mailto:biafashionkids@gmail.com">biafashionkids@gmail.com</a>
            </p>
        </div>
        <div class="footer-col">
            <h3>Nos Contate!</h3>
            <p>
                Brasil<br>
                <a href="tel:+554730174337">+55 (47) 3017-4337</a>
            </p>
        </div>
        <div class="footer-col">
            <h3>Companhia</h3>
            <ul>
                <li><a href="#">Sobre Nós</a></li>
                <li><a href="linhadotempo.php">Linha do Tempo</a></li>
                <li><a href="marcas.php">Marcas</a></li>
                <li><a href="idealizadores.php">Idealizadores</a></li>
            </ul>
        </div>
        <div class="footer-col">
            <h3>Detalhes</h3>
            <ul>
                <li><a href="promos.php">Promos</a></li>
                <li><a href="feminino.php">Feminino</a></li>
                <li><a href="masculino.php">Masculino</a></li>
                <li><a href="quentinhos.php">Quentinhos</a></li>
                <li><a href="fresquinhos.php">Fresquinhos</a></li>
                <li><a href="acessorios.php">Acessórios</a></li>
                <li><a href="marcas.php">Marcas</a></li>
            </ul>
        </div>
        <div class="footer-col">
            <h3>Redes Sociais</h3>
            <ul>
                <li><a href="https://www.instagram.com/biafashionkidsjoinville?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==">Instagram</a></li>
                <li><a href="#">Facebook</a></li>
                <li><a href="https://www.threads.com/@biafashionkidsjoinville">Threads</a></li>
                <li><a href="https://share.google/FyuN1r9SmFOGoQ7ox">Localização</a></li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2025 Bia Fashion Kids. Todos os direitos reservados.</p>
    </div>
</footer>
</body>
<style>
    /* Footer Styles */
.footer-div {
    background: #fff;
    box-shadow: 0 -2px 10px rgba(0,0,0,0.05);
    padding: 40px 0 0 0;
    margin-top: 40px;
}

.footer-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    max-width: 1200px;
    margin: 0 auto;
    gap: 30px;
    padding: 0 20px;
}

.footer-col {
    flex: 1 1 180px;
    min-width: 180px;
    margin-bottom: 30px;
}

.footer-logo {
    width: 80px; /* Increased logo size */
    height: auto;
    margin-bottom: 15px;
    border-radius: 8px; /* Added border radius for modern look */
}

.footer-col h3 {
    font-size: 18px;
    color: rgb(236,162,179);
    margin-bottom: 15px;
    font-weight: 600;
}

.footer-col p {
    color: #666;
    font-size: 15px;
    line-height: 1.6;
    margin-bottom: 10px;
}

.footer-col ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.footer-col ul li {
    margin-bottom: 10px;
}

.footer-col ul li a {
    color: #666;
    font-size: 15px;
    text-decoration: none;
    transition: color 0.3s ease;
}

.footer-col ul li a:hover {
    color: rgb(236,162,179);
}

.footer-col a {
    color: #4a90e2;
    text-decoration: none;
    font-size: 15px;
    transition: color 0.3s ease;
}

.footer-col a:hover {
    color: rgb(236,162,179);
}

.footer-bottom {
    text-align: center;
    padding: 20px 0;
    background: #f8f9fa;
    color: #666;
    font-size: 14px;
    margin-top: 20px;
    border-top: 1px solid #eee;
}

/* Responsive adjustments */
@media (max-width: 992px) {
    .footer-container {
        justify-content: center;
        text-align: center;
    }

    .footer-col {
        flex: 1 1 250px;
    }
}

@media (max-width: 768px) {
    .footer-container {
        flex-direction: column;
        align-items: center;
        gap: 20px;
    }

    .footer-col {
        width: 100%;
        text-align: center;
        margin-bottom: 20px;
    }

    .footer-logo {
        width: 70px;
    }

    .footer-col h3 {
        font-size: 16px;
    }

    .footer-col p,
    .footer-col ul li a {
        font-size: 14px;
    }
}

@media (max-width: 480px) {
    .footer-div {
        padding: 30px 0 0 0;
        margin-top: 30px;
    }

    .footer-container {
        padding: 0 15px;
    }

    .footer-logo {
        width: 60px;
    }

    .footer-col h3 {
        font-size: 15px;
        margin-bottom: 10px;
    }

    .footer-col p,
    .footer-col ul li a {
        font-size: 13px;
    }

    .footer-bottom {
        padding: 15px 0;
        font-size: 12px;
    }
}

</style>
</html>
