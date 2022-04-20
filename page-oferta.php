<?php
get_header();
?>

<!-- <div class="oferta-front container-fluid center margin">
    <div class="row h-100">
        <div class="col-sm-12 align-self-center center">
            <h1>Usuwamy rysy z szyb</h1>
            <h2>oraz nasze pozostałe usługi</h2>
        </div>
    </div>
</div> -->
<div class="container  margin-top-large border-bottom ">

  <div class="row mt-5 mb-5 from-right">
    <div class="col-sm-12 col-md-6 center align-self-center">
      <img class="img-fluid" src="<?php echo get_template_directory_uri() . '/assets/oferta.jpg'; ?>" alt="oferta rehasquad" />
    </div>
    <div class="col-sm-12 col-md-6  border-title text-with-header">
      <h2 class="text-center">Nasza oferta</h2>
      <p class="oferta_p">Nasz gabinet to miejsce, w którym możesz uciec od zgiełku i tłumu ludzi. Jest to kameralne miejsce
        przyjazne dla Pacjentów w każdym wieku. Nie ważne czy masz pięć, piętnaście, pięćdziesiąt czy sto pięć
        lat u nas znajdziesz terapię dopasowaną do Twoich potrzeb. Jeśli szukasz miejsca, w którym
        najważniejszy jest Pacjent jako osoba a nie jako dysfunkcja to dobrze trafiłeś. Mając na uwadze obecną
        sytuację dokładamy wszelkich starań w celu ochrony Waszego zdrowia, dlatego gabinet i cały sprzęt jest
        regularnie dezynfekowany.</p>
    </div>
  </div>
</div>
<div class="container margin-top-medium margin-bottom-medium hover">
  <h2 class="uslugi_tytul ">Usługi</h2>

  <div id="accordion">
    <div class="card">
      <div class="card-header">
        <a class="card-link" data-toggle="collapse" href="#collapseOne">
          &hercon; Masaż karku
        </a>
      </div>
      <div id="collapseOne" class="collapse" data-parent="#accordion">
        <div class="card-body">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
          &hercon; Masaż głowy
        </a>
      </div>
      <div id="collapseTwo" class="collapse" data-parent="#accordion">
        <div class="card-body">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
          &hercon; Masaż pleców
        </a>
      </div>
      <div id="collapseThree" class="collapse" data-parent="#accordion">
        <div class="card-body">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="card-link" data-toggle="collapse" href="#collapseFour">
          &hercon; Masaż nogi lewej
        </a>
      </div>
      <div id="collapseFour" class="collapse" data-parent="#accordion">
        <div class="card-body">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="card-link" data-toggle="collapse" href="#collapseFive">
          &hercon; Masaż nogi prawej
        </a>
      </div>
      <div id="collapseFive" class="collapse" data-parent="#accordion">
        <div class="card-body">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </div>
      </div>
    </div>
  </div>
</div>
<div class="photo-gallery margin-bottom-medium">
  <div class="container">
    <div class="intro">
      <h2 class="text-center">Galeria</h2>

    </div>
    <div class="row photos">
      <div class="col-sm-6 col-md-4 item"><a href="<?php echo get_template_directory_uri() . '/assets/gabinet_1.jpg'; ?>" data-lightbox="photos"><img class="img-fluid" src="<?php echo get_template_directory_uri() . '/assets/gabinet_1.jpg'; ?>"></a></div>
      <div class="col-sm-6 col-md-4 item"><a href="<?php echo get_template_directory_uri() . '/assets/gabinet_3.jpg'; ?>" data-lightbox="photos"><img class="img-fluid" src="<?php echo get_template_directory_uri() . '/assets/gabinet_3.jpg'; ?>"></a></div>
      <div class="col-sm-6 col-md-4 item"><a href="<?php echo get_template_directory_uri() . '/assets/gabinet_4.jpg'; ?>" data-lightbox="photos"><img class="img-fluid" src="<?php echo get_template_directory_uri() . '/assets/gabinet_4.jpg'; ?>"></a></div>
    </div>
  </div>
</div>


<?php get_footer(); ?>