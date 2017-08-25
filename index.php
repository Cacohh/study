  <?php 
  $cabecalho_title = "Página Inicial";
  $cabecalho_css1 = '<link rel="stylesheet" href="css/reset.css">';
  $cabecalho_css2 = '<link rel="stylesheet" href="css/estilos.css">';
  $cabecalho_css3 = '<link rel="stylesheet" href="css/mobile.css" media="(max-width: 939px)">';
  include("includes/cabecalho.php"); ?>
    <section id="main">
        <!-- Conteúdo principal -->
        <div class="container destaque">
            <section class="busca">
                <h2>Busca</h2>
                <form>
                    <input type="search">
                    <input type="image" src="img/busca.png">
                </form>
            </section>
            <!-- fim .busca -->
            <section class="menu-departamentos">
                <h2>Departamentos</h2>
                <nav>
                    <ul>
                        <li><a href="#">Blusas e Camisas</a>
                            <ul>
                                <li><a href="#">Manga curta</a></li>
                                <li><a href="#">Manga comprida</a></li>
                                <li><a href="#">Camisa social</a></li>
                                <li><a href="#">Camisa casual</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Calças</a></li>
                        <li><a href="#">Saias</a></li>
                        <li><a href="#">Vestidos</a></li>
                        <li><a href="#">Sapatos</a></li>
                        <li><a href="#">Bolsas e Carteiras</a></li>
                        <li><a href="#">Acessórios</a></li>
                    </ul>
                </nav>
            </section>
            <!-- fim .menu-departamentos -->
            <a href="#" class="pause"></a> 
            <img src="img/destaque-home.png" alt="Promoção: Big City Night">
        </div>
        <!-- fim .container .destaque -->

    </section>
    <section id="destaques">
        <!-- Painéis com destaques -->
        <div class="container paineis">
            <!-- os paines de novidades e mais vendidos entrarão aqui -->
            <section class="painel  novidades">
                <h2>Novidades</h2>
                <ol>
                    <!-- Primeiro produto -->
                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura1.png">
                                <figcaption>Fuzz Cardigan por R$129,00</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura2.png">
                                <figcaption>Fuzz Cardigan por R$129,00</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura3.png">
                                <figcaption>Fuzz Cardigan por R$129,00</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura4.png">
                                <figcaption>Fuzz Cardigan por R$129,00</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura5.png">
                                <figcaption>Fuzz Cardigan por R$129,00</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura6.png">
                                <figcaption>Fuzz Cardigan por R$129,00</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura6.png">
                                <figcaption>Fuzz Cardigan por R$129,00</figcaption>
                            </figure>
                        </a>
                    </li>
                </ol>
                <button  type="button">Mostra mais</button>
            </section>
            <section class="painel  mais-vendidos">
                <h2>Mais vendidos</h2>
                <ol>
                    <!-- Primeiro produto -->
                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura1.png">
                                <figcaption>Fuzz Cardigan por R$129,00</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura2.png">
                                <figcaption>Fuzz Cardigan por R$129,00</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura3.png">
                                <figcaption>Fuzz Cardigan por R$129,00</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura4.png">
                                <figcaption>Fuzz Cardigan por R$129,00</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura5.png">
                                <figcaption>Fuzz Cardigan por R$129,00</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura6.png">
                                <figcaption>Fuzz Cardigan por R$129,00</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura5.png">
                                <figcaption>Fuzz Cardigan por R$129,00</figcaption>
                            </figure>
                        </a>
                    </li>
                </ol>
                <button  type="button">Mostra mais</button>
            </section>
        </div>
    </section>
    <?php include("includes/footer.php") ?>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="js/index.js"></script>
</body>
</html>