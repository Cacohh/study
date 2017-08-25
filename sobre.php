  <?php 
  $cabecalho_title = "Sobre Mirror Fashion";
  $cabecalho_css1 = '<link rel="stylesheet" href="css/sobre.css">';
  $cabecalho_css2 = '<link rel="stylesheet" href="css/mobile.css" media="(max-width: 939px)">';
  include("includes/cabecalho.php"); ?>
    <article class="container ">
        <section>
            <h1></h1>
            <p>
                A <strong>Mirror Fashion</strong> é a maior empresa comércio eletrônico no segmento de moda em todo o mundo. Fundada em 1932, possui filiais em 124 países, sendo líder de mercado com mais de 90% de participação em 118 deles.
            </p>
            <p>
                Nosso centro de distribuição fica em <a href="https://maps.google.com.br/?q=Jacarezinho " target="_blank ">Jacarezinho, no Paraná</a>. De lá, saem 48 aviões que distribuem nossos produtos às casas do mundo todo. Nosso centro de distribuição:
            </p>
            <figure id="centro-distribuicao ">
                <img src="img/centro-distribuicao.png ">
                <figcaption>Centro de distribuição da <strong>Mirror Fashion</strong></figcaption>
            </figure>
            <p>

                Compre suas roupas e acessórios na <strong>Mirror Fashion</strong>. Acesse <a href="index.html ">nossa loja</a> ou entre em contato se tiver dúvidas. Conheça também nossa <a href="#historia ">história</a> e nossos <a href="#diferenciais ">diferenciais</a>.
            </p>

        </section>
        <section>
            <h2 id="historia ">História</h2>
            <figure id="familia-pelho ">
                <img src="img/familia-pelho.jpg ">
                <figcaption>Família <em>Pelho</em></figcaption>
            </figure>
            <p>
                A fundação em 1932 ocorreu no momento da descoberta econônica do interior do Paraná. Fundada há <?php print date('Y') - 1932 ?> anos, a família <em>Pelho</em>, tradicional da região, investiu todas as suas economias nessa nova iniciativa, revolucionária para a época. O fundador <em>Eduardo Simões Pelho</em>,
                dotado de particular visão administrativa, guiou os negócios da empresa durante mais de 50 anos, muitos deles ao lado de seu filho <em>E. S. Pelho Filho</em>, atual CEO. O nome da empresa é inspirado no nome da família. O crescimento da
                empresa foi praticamente instantâneo. Nos primeiros 5 anos, já atendia 18 países. Bateu a marca de 100 países em apenas 15 anos de existência. Até hoje, já atendeu 740 milhões de usuários diferentes, em bilhões de diferentes pedidos. O
                crescimento em número de funcionários é também assombroso. Hoje, é a maior empregadora do Brasil, mas mesmo após apenas 5 anos de sua existência, já possuía 30 mil funcionários. Fora do Brasil, há 240 mil funcionários, além dos 890 mil
                brasileiros nas instalações de Jacarezinho e nos escritórios em todo país. Dada a importância econômica da empresa para o Brasil, a família <em>Pelho</em> já recebeu diversos prêmios, homenagens e condecorações. Todos os presidentes do
                Brasil já visitaram as instalações da Mirror Fashion, além de presidentes da União Européia, Ásia e o secretário-geral da ONU.
            </p>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/haXJbh5It10" frameborder="0" allowfullscreen></iframe>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.449481463326!2d-46.63454338537381!3d-23.58820766846854!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5a2b2ed7f3a1%3A0xab35da2f5ca62674!2sCaelum+-+Ensino+e+Inova%C3%A7%C3%A3o!5e0!3m2!1spt-BR!2sbr!4v1503686663378" width="1200" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </section>
        <section>
            <h2 id="diferenciais ">Diferenciais</h2>

            <ul>
                <li>Menor preço do varejo, garantido</li>
                <li>Se você achar uma loja mais barata, leva o produto de graça</li>
                <li>Pague em reais, dólares, euros ou bitcoins</li>
                <li>Todas as compras com frete grátis para o mundo todo</li>
                <li>Maior comércio eletrônico de moda do mundo</li>
                <li> Atendimento via telefone, email, chat, twitter, facebook, carta, fax e telegrama</li>
                <li>Presente em 124 países</li>
                <li>Mais de um milhão de funcionários em todo o mundo</li>
            </ul>
        </section>
    </article>
 <p><?php 
            print date('Y');
?></p>
  <?php include("includes/footer.php") ?>
</body>

</html>