<?php
include_once("cabecalho.php");
include_once("conexao.php");

//VERIFICAR SE EXISTE UM USUÁRIO ADMINISTRADOR, CASO NÃO EXISTA, CRIAR.
$senha = '123';
$res_usuarios = $pdo->query("SELECT * from usuarios where nivel = 'Admin'");
$dados_usuarios = $res_usuarios->fetchAll(PDO::FETCH_ASSOC);
$total_usuarios = count($dados_usuarios);

if ($total_usuarios == 0) {
  $res_insert = $pdo->query("INSERT into usuarios (nome, cpf, telefone, usuario, senha, nivel) values ('Administrador', '000.000.000-00', '3333-3333', '$email_adm', '$senha', 'Admin')");
}


?>


<script>
      window.alert('Atenção! esse site é um trabalho de faculdade proposto pela universidade cruseiro do sul para o trabalho de conclução de curso, por tanto a empressa coffee cookie é uma empressa imaginaria, você pode ficar a vontade para testar, já existe um usuario ADM (adm@gmail.com 123) e de Balconista (balc@gmail.com 123) cadastrado e cliente (cliente@gmail.com 123), você pode cadastrar mais usuarios de nivel cliente e usuarios de nivel balconista.');
</script>


<!-- Swiper-->
<section class="section swiper-container swiper-slider swiper-slider-modern" data-loop="true" data-autoplay="5000" data-simulate-touch="true" data-nav="true" data-slide-effect="fade">

  <div class="swiper-wrapper text-left">

    <div class="swiper-slide context-dark" data-slide-bg="images/banner/01.jpg">
      <div class="swiper-slide-caption">
        <div class="container">
          <div class="row justify-content-center justify-content-xxl-start">
            <div class="col-md-10 col-xxl-6">
              <div class="slider-modern-box">
                <h1 class="slider-modern-title"><span data-caption-animate="slideInDown" data-caption-delay="0">Coffee Cookie</span></h1>
                <p data-caption-animate="fadeInRight" data-caption-delay="400">O melhor café expresso e os melhores cookies da cidade.</p>
                <div class="oh button-wrap"><a class="button button-primary button-ujarak" href="produtos" target="_blank" data-caption-animate="slideInLeft" data-caption-delay="400">Veja mais..</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="swiper-slide" data-slide-bg="images/banner/02.jpg">
      <div class="swiper-slide-caption">
        <div class="container">
          <div class="row justify-content-center justify-content-xxl-start">
            <div class="col-md-10 col-xxl-6">
              <div class="slider-modern-box">
                <h1 class="slider-modern-title"><span data-caption-animate="slideInDown" data-caption-delay="0">Coffee Cookie</span></h1>
                <p data-caption-animate="fadeInRight" data-caption-delay="400">O melhor café expresso e os melhores cookies da cidade.</p>
                <div class="oh button-wrap"><a class="button button-primary button-ujarak" href="produtos" target="_blank" data-caption-animate="slideInUp" data-caption-delay="400">Veja mais..</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Swiper Navigation-->
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>
  <!-- Swiper Pagination-->
  <div class="swiper-pagination swiper-pagination-style-2"></div>
</section>



<!-- Icons Ruby-->
<!--<section class="section section-md bg-default section-top-image">
  <div class="container">
    <div class="row row-30 justify-content-center">
      <div class="col-sm-6 col-lg-4 wow fadeInRight" data-wow-delay="0s">
        <article class="box-icon-ruby">
          <div class="unit box-icon-ruby-body flex-column flex-md-row text-md-left flex-lg-column align-items-center text-lg-center flex-xl-row text-xl-left">
            <div class="unit-left">
              <div class="box-icon-ruby-icon bi bi-cup-hot"></div>
            </div>
            <div class="unit-body">
              <h4 class="box-icon-ruby-title"><a href="#">Bebidas</a></h4>
            </div>
          </div>
        </article>
      </div>
      <div class="col-sm-6 col-lg-4 wow fadeInRight" data-wow-delay=".1s">
        <article class="box-icon-ruby">
          <div class="unit box-icon-ruby-body flex-column flex-md-row text-md-left flex-lg-column align-items-center text-lg-center flex-xl-row text-xl-left">
            <div class="unit-left">
              <div class="box-icon-ruby-icon bi bi-cake"></div>
            </div>
            <div class="unit-body">
              <h4 class="box-icon-ruby-title"><a href="#">Bolos</a></h4>
            </div>
          </div>
        </article>
      </div>
      <div class="col-sm-6 col-lg-4 wow fadeInRight" data-wow-delay=".2s">
        <article class="box-icon-ruby">
          <div class="unit box-icon-ruby-body flex-column flex-md-row text-md-left flex-lg-column align-items-center text-lg-center flex-xl-row text-xl-left">
            <div class="unit-left">
              <div class="box-icon-ruby-icon bi bi-cookie"></div>
            </div>
            <div class="unit-body">
              <h4 class="box-icon-ruby-title"><a href="#">Cookies</a></h4>
            </div>
          </div>
        </article>
      </div>
    </div>
  </div>
</section>-->


<div style="padding-top: 20px;">
  <h2 class="wow slideInUp" data-wow-delay="0s">Ultimos produtos adcionados</h2>
</div>
<!-- Trending products-->
<section class="section section-md bg-default">
  <div class="container">
     <div class="row row-40 justify-content-center">
            <!--<div class="col-sm-8 col-md-7 col-lg-6 wow fadeInLeft" data-wow-delay="0s">
              <div class="product-banner"><img src="images/banner/imagem05.jpg" alt="" width="570" height="715"/>
                <div class="product-banner-content">
                  <div class="product-banner-inner">
                    <h3 class="text-secondary-1">Cafés</h3>
                    <h3 class="text-secondary-1">&</h3>
                    <h2 class="text-primary">Cookies</h2>
                    <h3 class="text-primary">Promoções</h3>
                  </div>
                </div>
              </div>
            </div> -->

    <div class="col-md-12 col-lg-12">
      <div class="row row-30 justify-content-center">

        <?php
        $res = $pdo->query("SELECT * from produtos order by vendas desc LIMIT 8");
        $dados = $res->fetchAll(PDO::FETCH_ASSOC);

        for ($i = 0; $i < count($dados); $i++) {
          foreach ($dados[$i] as $key => $value) {
          }

          $id = $dados[$i]['id'];
          $nome = $dados[$i]['nome'];

          $descricao = $dados[$i]['descricao'];
          $descricao_longa = $dados[$i]['descricao_longa'];
          $valor = $dados[$i]['valor'];
          $categoria = $dados[$i]['categoria'];
          $imagem = $dados[$i]['imagem'];

          $valor_sem_desconto = $valor+($valor*0.10);
          $valor_sem_desconto = number_format($valor_sem_desconto, 2, ',', '.');
          $valor = number_format($valor, 2, ',', '.');

        ?>

          <div class="col-sm-12 col-md-3 col-lg-3">
            <div class="oh-desktop">
              <!-- Product-->
              <article class="product product-2 box-ordered-item wow slideInRight" data-wow-delay="0s">
                <div class="unit flex-row flex-lg-column">
                  <div class="unit-left">
                    <div class="product-figure"><img src="images/produtos/<?php echo $imagem ?>" alt="" width="270" height="280" />
                      <div class="product-button"><a class="button button-md button-white button-ujarak" href="produtos" >ver produto</a></div>
                    </div>
                  </div>
                  <div class="unit-body">
                    <h6 class="product-title"><a href="" onclick="setaDadosModal ('<?php echo $descricao?>','<?php echo $descricao_longa?>')" data-toggle="modal" data-target="#modal-desc"><?php echo $nome ?></a></h6>
                    <div class="product-price-wrap">
                      <div class="product-price product-price-old"></div>
                      <div class="product-price"><?php echo 'R$ ' . $valor ?></div>
                    </div><a class="button button-sm button-secondary button-ujarak" href="produtos">ver produto</a>
                  </div>
                </div>
              </article>
            </div>
          </div>


          

        <?php } ?>

      </div>
    </div>
  </div>
  </div>
</section>

<!-- Section CTA 2
      <section class="section text-center">
        <div class="parallax-container" data-parallax-img="images/banner/06.jpg">
          <div class="parallax-content section-xl section-inset-custom-1 context-dark bg-overlay-40">
            <div class="container">
              <h2 class="oh font-weight-normal"><span class="d-inline-block wow slideInDown" data-wow-delay="0s">Promoção</span></h2>
              <p class="oh big text-width-large"><span class="d-inline-block wow slideInUp" data-wow-delay=".2s">Café preto de 100ml</span></p><a class="button button-primary button-icon button-icon-left button-ujarak wow fadeInUp" href="" data-lightgallery="item" data-wow-delay=".1s"><span class="icon mdi mdi-play"></span>Veja Mais...</a>
            </div>
          </div>
        </div>-->
</section>




<!-- Improve your interior with deco-->
<section class="section section-md bg-default section-top-image">
  <div class="container">
    <div class="oh h2-title">
      <h2 class="wow slideInUp" data-wow-delay="0s" style='text-align:center'>Nossa Galeria</h2>
    </div>
    <div class="row row-30" data-lightgallery="group">
      <div class="col-sm-6 col-lg-4">
        <div class="oh-desktop">
          <!-- Thumbnail Classic-->
          <article class="thumbnail thumbnail-mary thumbnail-sm wow slideInLeft" data-wow-delay="0s">
            <div class="thumbnail-mary-figure"><img src="images/galeria/grid-gallery-01.jpg" alt="" width="370" height="303" />
            </div>
            <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/galeria/gallery-original-01.jpg" data-lightgallery="item"><img src="images/galeria/grid-gallery-01.jpg" alt="" width="370" height="303" /></a>
              <h4 class="thumbnail-mary-title"><a href="#"></a></h4>
            </div>
          </article>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4">
        <div class="oh-desktop">
          <!-- Thumbnail Classic-->
          <article class="thumbnail thumbnail-mary thumbnail-sm wow slideInUp" data-wow-delay=".1s">
            <div class="thumbnail-mary-figure"><img src="images/galeria/grid-gallery-02.jpg" alt="" width="370" height="303" />
            </div>
            <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/galeria/gallery-original-02.jpg" data-lightgallery="item"><img src="images/galeria/grid-gallery-02.jpg" alt="" width="370" height="303" /></a>
              <h4 class="thumbnail-mary-title"><a href="#"></a></h4>
            </div>
          </article>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4">
        <div class="oh-desktop">
          <!-- Thumbnail Classic-->
          <article class="thumbnail thumbnail-mary thumbnail-sm wow slideInRight" data-wow-delay=".0s">
            <div class="thumbnail-mary-figure"><img src="images/galeria/grid-gallery-03.jpg" alt="" width="370" height="303" />
            </div>
            <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/galeria/gallery-original-03.jpg" data-lightgallery="item"><img src="images/galeria/grid-gallery-03.jpg" alt="" width="370" height="303" /></a>
              <h4 class="thumbnail-mary-title"><a href="#"></a></h4>
            </div>
          </article>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4">
        <div class="oh-desktop">
          <!-- Thumbnail Classic-->
          <article class="thumbnail thumbnail-mary thumbnail-sm wow slideInUp" data-wow-delay=".1s">
            <div class="thumbnail-mary-figure"><img src="images/galeria/grid-gallery-04.jpg" alt="" width="370" height="303" />
            </div>
            <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/galeria/gallery-original-04.jpg" data-lightgallery="item"><img src="images/galeria/grid-gallery-04.jpg" alt="" width="370" height="303" /></a>
              <h4 class="thumbnail-mary-title"><a href="#"></a></h4>
            </div>
          </article>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4">
        <div class="oh-desktop">
          <!-- Thumbnail Classic-->
          <article class="thumbnail thumbnail-mary thumbnail-sm wow slideInLeft" data-wow-delay="0s">
            <div class="thumbnail-mary-figure"><img src="images/galeria/grid-gallery-05.jpg" alt="" width="370" height="303" />
            </div>
            <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/galeria/gallery-original-05.jpg" data-lightgallery="item"><img src="images/galeria/grid-gallery-05.jpg" alt="" width="370" height="303" /></a>
              <h4 class="thumbnail-mary-title"><a href="#"></a></h4>
            </div>
          </article>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4">
        <div class="oh-desktop">
          <!-- Thumbnail Classic-->
          <article class="thumbnail thumbnail-mary thumbnail-sm wow slideInDown" data-wow-delay=".1s">
            <div class="thumbnail-mary-figure"><img src="images/galeria/grid-gallery-06.jpg" alt="" width="370" height="303" />
            </div>
            <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/galeria/gallery-original-06.jpg" data-lightgallery="item"><img src="images/galeria/grid-gallery-06.jpg" alt="" width="370" height="303" /></a>
              <h4 class="thumbnail-mary-title"><a href="#"></a></h4>
            </div>
          </article>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include_once("rodape.php") ?>

<!-- Global Mailform Output-->
<div class="snackbars" id="form-output-global"></div>
<!-- Javascript-->
<script src="js/core.min.js"></script>
<script src="js/script.js"></script>
<!-- coded by Ragnar-->
</body>

</html>

<!--MODAL DA DESCRIÇÃO-->
<div class="modal fade" id="modal-desc" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 id="texto-descricao" class="modal-title"></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <span id="texto-descricao-longa"> </span>

                </div>
              </div>
            </div>
          </div>

<script>
function setaDadosModal (descricao, descricaolonga){

  $('#texto-descricao').text(descricao);
  $('#texto-descricao-longa').text(descricaolonga);

}

</script>



    <script src="js/mascaras.js"></script>

    <?php include_once("modal-carrinho.php") ?>