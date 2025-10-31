<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bia Fashion Kids Joinville</title>

    <link rel="stylesheet" href="/style.css">
    <script src="/script.js"></script>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Devanagari:wght@100;200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>


</head>

<body>

    <main>

        <header>
            <div class="intro-banner">
                <h1 id="bbb">Bia Fashion Kids Joinville</h1>
                <p id="bbb">Eleita melhor loja de roupas infantis por voto popular! </p>
            </div>
        </header>




        <div class="timeline">


            <div class="timeline-item">

                <div class="marcador">
                    </div>
                </div>

            <div class="timeline-item">

                <div class="marcador">
                    <div class="M-circuloE"></div>
                    <div class="M-anoE">2014</div>
                </div>

                <div class="timeline-conteudo">
                    <h3>Inauguração </h3>
                    <p>A loja Bia Fashion Kids inaugurou em Joinville- Santa Catarina, em 2014, no mês de Agosto, com o intuito de valorizar a Moda Infantil na cidade, 
                        através de peças de qualidade e preços justos.
                    </p>
                    <div class="carrosel">
                            <div class="imgCarrosel">
                                <img src="src/images/vitrine3.png"
                                    alt="isabella4">
                            </div>
                    </div>
                </div>
                <div class="timeline-conteudo">
                    <h3>Evolução </h3>
                    <p>Após um tempo, a estrutura da loja Bia Fashion Kids aumentou, proporcionando conforto e elevando a variedade de produtos disponíveis aos clientes.
                    </p>
                    <div class="carrosel">
                            <div class="imgCarrosel"><img
                                    src="src/images/vitrine1.png"
                                    alt="isabella4"></div>
                        </div>
                    </div>
                <div class="timeline-conteudo">
                    <h3>Dedicação</h3>
                    <p>Mesmo em uma equipe reduzida e pouco espaço, as vitrines eram realizadas com toda dedicação, adequando-se a períodos festivos, e facilitando a visualização de modelos 
                        disponibilizados na loja.
                    </p>
                    <div class="carrosel">
                            <div class="imgCarrosel"><img
                                    src="src/images/vitrine.png"
                                    alt="isabella4"></div>

                        </div>
                    </div>

                    <div class="timeline-conteudo">
                        <div class="marcador">
                    <div class="M-anoE">2024</div>
                </div>
                    <h3>Atualmente</h3>
                    <p> A loja conta com duas salas comerciais, onde estão disponíveis peças com preço reduzido (Outlet) e peças de coleção (Loja Principal), onde existem
                        profissionais qualificados para realizar um atendimento adequado.
                    </p>
                    <div class="carrosel">
                            <div class="imgCarrosel"><img
                                    src="src/images/vitrine4.png"
                                    alt="isabella4"></div>

                        </div>
                    </div>
                </div>
                
    </main>
    <footer>
        <div class="flex" style="justify-content: center;">
            <p>Bia Fasion Kids Joinville- Linha do Tempo
            </p>
        </div>
        <div class="flex" style="justify-content: center;">
            <p>© Todos os direitos reservados a Bia Fashion Kids Joinville.</p>
        </div>
        <br>
        <br>
    </footer>
</body>

</html>

<style>
 #bbb {
       color:rgb(46, 86, 126);
   }

   body {
       width: auto;
       height: auto;
       background: rgb(231, 180, 192);
       margin: 0;
       padding: 0;
       font-family: Comic Sans MS, Comic Sans;
   }

   #rodape {
       view-transition-name: footer-content;
       position: fixed;
       left: 0;
       bottom: 0;
       width: 100%;
       height: 11.76%;
       text-align: center;
   }

   #rodape h1 {
       background: -webkit-linear-gradient(180deg, #E017C5 2.02%, #8343C5 52.31%, #545AC5 77.46%, #3D429C 100%);
       -webkit-background-clip: text;
       background-clip: text;
       -webkit-text-fill-color: transparent;
       font-size: 260%;
       opacity: 65%;

   }

   #line {
       background-color: #9D9D9D;
       width: 100%;
       height: 2px;
       position: fixed;
       left: 0;
       bottom: 0;
   }

   #line2 {
       background-color: #9D9D9D;
       width: 100%;
       height: 2px;
       position: fixed;
       left: 0;
       bottom: 11.76%;
   }

   .flex {
       display: flex;
       margin: 0;
       padding: 0;
   }

   .grid {
       display: grid;
       grid-template-columns: auto auto auto;
   }

   @media screen and (max-width: 768px) {
       #rodape .grid {
           gap: 0.75rem;
       }

       #rodape h1 {
           font-size: clamp(1.1rem, 3vw, 2.2rem);
       }
   }

   @media screen and (max-width: 480px) {
       #rodape .grid {
           gap: 0.75rem;
       }

       #rodape h1 {
           font-size: clamp(0.5rem, 2vw, 1rem);
       }
   }

   .gradient {
       background: linear-gradient(90deg, #E017C5 2.02%, #8343C5 52.31%, #545AC5 77.46%, #3D429C 102.61%);
       background-clip: text;
       -webkit-background-clip: text;
       -webkit-text-fill-color: transparent;
   }

   .gradient h1 {
       font-feature-settings: 'liga' off, 'clig' off;
       font-family: "IBM Plex Sans Devanagari";
       font-size: 12.5rem;
       font-style: normal;
       font-weight: 700;
       line-height: 64%;
       /* 64% */

       margin-bottom: 0;
       margin-left: 6.813rem;
       margin-top: 14.563rem;
   }

   .gradient h2 {
       font-feature-settings: 'liga' off, 'clig' off;
       font-family: "IBM Plex Sans Devanagari";
       font-size: 8rem;
       font-style: normal;
       font-weight: 700;
       line-height: 128%;
       /* 128% */

       margin: 0;
       margin-left: 7.75rem;
   }

   #perfil {
       margin-left: 14rem;
       width: 43.813rem;
       height: 60.625rem;
   }

   .buttonI {
       background-color: black;
       border: none;
   }

   .animate:hover {
       transition: 0.1s;
       font-size: 105%;
       opacity: 1;
       filter: brightness(1.6);
       cursor: pointer;
   }

   .line {

       width: 0.100rem;
       background-color: white;
       border: white;
       color: white;

       margin-left: 7.75rem;
       margin-right: 2%;
   }

   .descricao {
       -webkit-text-fill-color: white;
       max-width: 43.063rem;
   }

   p {
       margin: 0;
   }

   .redeS {
       text-align: center;
       align-items: center;
       justify-content: center;

       width: 9rem;
       height: 2.625rem;

       background-color: black;
       border: black;
       border-radius: 20.5px;

       margin-top: 1.2rem;
       margin-left: 1rem;
   }

   .r1 {
       margin-left: 7.75rem;
   }

   .redeS p {
       -webkit-text-fill-color: white;
       margin-left: 5%;
   }

   .redes:hover {
       cursor: pointer;
   }



   /*   Transições config */

   @view-transition {
       navigation: auto;
   }

   main {
       view-transition-name: main-content;
   }

   @keyframes expand-out {
       from {
           transform: scale(1);
           opacity: 1;
       }

       to {
           transform: scale(1.5);
           opacity: 0;
       }
   }

   @keyframes contract-in {
       from {
           transform: scale(0.5);
           opacity: 0;
       }

       to {
           transform: scale(1);
           opacity: 1;
       }
   }

   ::view-transition-old(main-content) {
       animation: expand-out 0.5s ease forwards;
   }

   ::view-transition-new(main-content) {
       animation: contract-in 0.8s ease forwards;
   }

   ::view-transition-old(footer-content) {
       animation: expand-out 0.5s ease forwards;
   }

   ::view-transition-new(footer-content) {
       animation: contract-in 0.8s ease forwards;
   }

   /*   Transições config END*/





   /*  animation for Robotics  */

   .timeline {
       position: relative;
       margin: 4rem auto;
       padding: 4rem 2rem;
       width: 100%;
       max-width: 1200px;
   }

   /* Linha  */
   .timeline::before {
       content: '';
       position: absolute;
       left: 50%;
       top: 0;
       transform: translateX(-50%);
       width: 4px;
       height: 100%;
       background-color: #9D9D9D;
   }

   .timeline-item {
       position: relative;
       width: 50%;
       padding: 2rem;
       box-sizing: border-box;
   }

   /* esquerda ou direita */
   .timeline-item:nth-child(odd) {
       left: 0;
       text-align: right;
   }

   .timeline-item:nth-child(even) {
       left: 50%;
       text-align: left;
   }

   /* fim esquerda ou direita */


   /* Marcador */
   .marcador {
       position: absolute;
       top: 0;
       left: 100%;
       transform: translate(0%, -50%);
       display: flex;
       align-items: center;
       gap: 0.5rem;
   }

   .timeline-item:nth-child(even) .marcador {
       left: 0%;
       flex-direction: row-reverse;
   }

   .M-circulo {
       width: 20px;
       transform: translate(-50%, -0%);
       height: 20px;
       background-color: rgb(123, 153, 153);
       border-radius: 50%;
       border: 2px solid rgb(255, 255, 255);
       z-index: 2;
   }

   .M-ano {
       font-size: 1.2rem;
       font-weight: bold;
       color: black;
   }

   .M-circuloE {
       width: 20px;
       transform: translate(-310%, -0%);
       height: 20px;
       background-color: rgb(123, 153, 153);
       border-radius: 50%;
       border: 2px solid rgb(255, 255, 255);
       z-index: 2;
   }

   .M-anoE {
       font-size: 1.2rem;
       transform: translate(-150%, -0%);
       font-weight: bold;
       color: black;
   }

   /* Fim Marcador */


   .timeline-conteudo {
       background-color:rgb(69, 76, 107);
       color: white;
       padding: 2rem;
       border-radius: 10px;
       box-shadow: 0 4px 16px rgba(121, 175, 211, 0.3);
       margin: 4%;

       opacity: 0;
       transform: scale(0.8);
       animation: slide-in-right 0.6s ease forwards;
       animation-timeline: view();
       animation-range: entry 10% cover 80%;
   }

   .timeline-conteudoE {
       background-color: #1c1f2b;
       color: white;
       padding: 2rem;
       border-radius: 10px;
       box-shadow: 0 4px 16px rgba(0, 0, 0, 0.3);
       margin: 4%;

       opacity: 0;
       transform: scale(0.8);
       animation: slide-in-left 0.6s ease forwards;
       animation-timeline: view();
       animation-range: entry 10% cover 80%;
   }

   .timeline-conteudo h3 {
       color: white;
       font-size: 1.5rem;
       margin-top: 0;
   }

   .timeline-conteudo p {
       line-height: 1.6;
   }

   .timeline-conteudo img {
       margin-top: 1rem;
       max-width: 100%;
       border-radius: 10px;
   }

   .timeline-conteudoE h3 {
       color: white;
       font-size: 1.5rem;
       margin-top: 0;
   }

   .timeline-conteudoE p {
       line-height: 1.6;
   }

   .timeline-conteudoE img {
       margin-top: 1rem;
       max-width: 100%;
       border-radius: 10px;
   }

   /* ANIMAÇÃO */
   @keyframes fade-in {
       from {
           opacity: -1;
           transform: scale(0.6);
       }

       to {
           opacity: 1;
           transform: scale(1);
       }
   }

   @keyframes slide-in-right {
       from {
           opacity: 0;
           transform: translateX(100px);
       }

       to {
           opacity: 1;
           transform: translateX(0);
       }
   }

   @keyframes slide-in-left {
       from {
           opacity: 0;
           transform: translateX(-100px);
       }

       to {
           opacity: 1;
           transform: translateX(0);
       }
   }

   /* end of animation for Robotics  */





   /* Carrosel de imagem externo */

   * {
       -webkit-box-sizing: border-box;
       box-sizing: border-box;
   }

   body {
       font-family: sans-serif;
   }

   .gallery {
       background-color: #1c1f2b;
   }

   
   /* cell number */
   
   /* Carrosel de imagem */

   .carrosel {
       margin-top: 5%;
   }

   .imgCarrosel {
       max-height: 60%;
   }

   /* Fim Carrosel de imagem */




   /* BANNER Robotics */
   .intro-banner {
       position: relative;
       height: 18.75rem;

       background-color: transparent;



       display: flex;
       flex-direction: column;
       justify-content: center;

       align-items: center;
       text-align: center;

       color: #fff;
   }

   .intro-banner h1 {
       font-size: 3rem;
       margin: 0;
       text-transform: uppercase;
       letter-spacing: 0.125rem;
   }

   .intro-banner p {
       font-size: 1.2rem;
       margin-top: 0.5rem;
       opacity: 0.85;
   }

   /* Fim BANNER Robotics */


   /* Projects */

   #navProjects {
       height: 12rem;

       background-color: transparent;

       align-items: center;
       text-align: center;

       color: #fff;

       margin-top: 7.06rem;
       color: #FFF;
       font-size: 1.5rem;
       font-style: normal;
       font-weight: 700;
       line-height: var(--Label-Large-Line-Height, 1.25rem);
       letter-spacing: var(--Label-Large-Tracking, 0.00625rem);
   }

   .project {
       margin-left: 3rem;
       margin-right: 3rem;


   }

   .tituloP {
       color: #FFF;
       font-family: "IBM Plex Sans Devanagari";
       font-size: 1.5rem;
       font-style: normal;
       font-weight: 700;
       line-height: var(--Label-Large-Line-Height, 1.25rem);
       letter-spacing: var(--Label-Large-Tracking, 0.006rem);
   }

   .gridP {
       display: grid;
       grid-template-columns: auto auto auto;
       grid-row: auto auto;

       row-gap: 0.563rem;
       column-gap: 1.476rem;

       max-width: 32.438rem;
       max-height: 5.688rem;
       margin-bottom: 2.438rem;
   }

   .preojectType {
       width: 9.891rem;
       height: 2.563rem;

       border-radius: 20.5px;
       background: #121212;

       text-align: center;

   }

   .preojectType p {
       color: white;
       margin-top: 7%;
   }

   .lineP {
       width: 1rem;
       background-color: white;
       border: white;
       color: white;

       margin-right: 2%;
   }

   .descricao {
       max-width: 39.688rem;

       text-align: justify;
       text-justify: inter-word;

   }

   .descricao p {
       color: #FFF;
       font-family: "IBM Plex Sans Devanagari";
       font-size: 1.25rem;
       font-style: normal;
       font-weight: 500;
       line-height: var(--Label-Large-Line-Height, 1.25rem);
       letter-spacing: var(--Label-Large-Tracking, 0.00625rem);
   }

   .git {
       position: relative;
       display: inline-block;
       width: 3rem;
       height: 3rem;
       margin-top: 0.8rem;
       margin-left: 1.5rem;
   }

   .github-icon {
       width: 100%;
       height: 100%;
       border: 2.2px solid #121212;
       border-radius: 50%;
       display: block;
   }

   
   #ProjecsMain {
       display: flex;
       flex-direction: column;
   }

   .project {
       display: flex;
       justify-content: flex-start;
       padding: 2rem;
       margin-bottom: 18rem;

   }

   .project-right {
       justify-content: flex-end;
   }

   .fotos img {
    width: 150px;
    height: 150px;
    border-radius: 100px;
   }

   .container-fotos {
       display: flex;
       justify-content: center;
       gap: 20px;
   }
   </style>