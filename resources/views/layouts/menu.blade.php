  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Polices -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">

  <!-- Fichiers CSS des fournisseurs -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">

  <!-- Style pour cacher la navigation -->
  <style>
    #navmenu ul {
      display: none !important;
    }
  </style>

@include('layouts.header', ['hideNav' => true])

<!-- Menu Section -->
<section id="menu" class="menu section">
  <div class="container">
    <div class="section-header text-center">
      <h2>Notre Menu</h2>
      <p>Découvrez notre <span>Menu Gourmand</span></p>
    </div>

    <!-- Menu Navigation -->
    <div class="text-center mb-5">
      <nav id="navmenu1" class="navmenu">
        <ul>
          <li><a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }} nav-link">Accueil</a></li>
          <li><a href="{{ url('/') }}#about" class="nav-link">À propos</a></li>
          <li><a href="{{ url('/') }}#events" class="nav-link">Événements</a></li>
          <li><a href="{{ url('/') }}#chefs" class="nav-link">Chefs</a></li>
          <li><a href="{{ url('/') }}#gallery" class="nav-link">Galerie</a></li>
          <li><a href="{{ route('menu') }}" class="{{ request()->is('menu') ? 'active' : '' }} nav-link">Menu</a></li>
          <li><a href="{{ url('/') }}#contact" class="nav-link">Contact</a></li>
          @auth
            @if(Auth::user()->role === 'employe')
              <li><a href="{{ route('employe') }}" class="nav-link">Mode employe</a></li>
            @endif
          @endauth
          @auth
            <li><a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Déconnexion</a></li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
          @else
            <li><a href="{{ route('login') }}" class="nav-link">Connexion</a></li>
          @endauth
        </ul>
      </nav>
    </div>

    <div class="tab-content">
      <!-- Starters Tab Content -->
      <div class="tab-pane fade active show" id="menu-starters" role="tabpanel" aria-labelledby="starters-tab">
        <div class="tab-header text-center">
          <p>Menu</p>
          <h3>Entrées</h3>
        </div>

        <div class="row gy-3">
          <div class="col-lg-4 menu-item">
            <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img src="assets/img/menu/menu-item-1.png" class="menu-img img-fluid" alt=""></a>
            <h4>Magnam Tiste</h4>
            <p class="ingredients">
              Lorem, deren, trataro, filede, nerada
            </p>
            <p class="price">
              $5.95
            </p>
          </div><!-- Menu Item -->

          <div class="col-lg-4 menu-item">
            <a href="assets/img/menu/menu-item-2.png" class="glightbox"><img src="assets/img/menu/menu-item-2.png" class="menu-img img-fluid" alt=""></a>
            <h4>Aut Luia</h4>
            <p class="ingredients">
              Lorem, deren, trataro, filede, nerada
            </p>
            <p class="price">
              $14.95
            </p>
          </div><!-- Menu Item -->

          <div class="col-lg-4 menu-item">
            <a href="assets/img/menu/menu-item-3.png" class="glightbox"><img src="assets/img/menu/menu-item-3.png" class="menu-img img-fluid" alt=""></a>
            <h4>Est Eligendi</h4>
            <p class="ingredients">
              Lorem, deren, trataro, filede, nerada
            </p>
            <p class="price">
              $8.95
            </p>
          </div><!-- Menu Item -->

          <div class="col-lg-4 menu-item">
            <a href="assets/img/menu/menu-item-4.png" class="glightbox"><img src="assets/img/menu/menu-item-4.png" class="menu-img img-fluid" alt=""></a>
            <h4>Eos Luibusdam</h4>
            <p class="ingredients">
              Lorem, deren, trataro, filede, nerada
            </p>
            <p class="price">
              $12.95
            </p>
          </div><!-- Menu Item -->

          <div class="col-lg-4 menu-item">
            <a href="assets/img/menu/menu-item-5.png" class="glightbox"><img src="assets/img/menu/menu-item-5.png" class="menu-img img-fluid" alt=""></a>
            <h4>Eos Luibusdam</h4>
            <p class="ingredients">
              Lorem, deren, trataro, filede, nerada
            </p>
            <p class="price">
              $12.95
            </p>
          </div><!-- Menu Item -->

          <div class="col-lg-4 menu-item">
            <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img src="assets/img/menu/menu-item-6.png" class="menu-img img-fluid" alt=""></a>
            <h4>Laboriosam Direva</h4>
            <p class="ingredients">
              Lorem, deren, trataro, filede, nerada
            </p>
            <p class="price">
              $9.95
            </p>
          </div><!-- Menu Item -->
        </div>
      </div><!-- End Starter Menu Content -->

      <!-- Breakfast Tab Content -->
      <div class="tab-pane fade" id="menu-breakfast" role="tabpanel" aria-labelledby="breakfast-tab">
        <div class="tab-header text-center">
          <p>Menu</p>
          <h3>Petit-déjeuner</h3>
        </div>

        <div class="row gy-3">
          <div class="col-lg-4 menu-item">
            <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img src="assets/img/menu/menu-item-1.png" class="menu-img img-fluid" alt=""></a>
            <h4>Magnam Tiste</h4>
            <p class="ingredients">
              Lorem, deren, trataro, filede, nerada
            </p>
            <p class="price">
              $5.95
            </p>
          </div><!-- Menu Item -->

          <div class="col-lg-4 menu-item">
            <a href="assets/img/menu/menu-item-2.png" class="glightbox"><img src="assets/img/menu/menu-item-2.png" class="menu-img img-fluid" alt=""></a>
            <h4>Aut Luia</h4>
            <p class="ingredients">
              Lorem, deren, trataro, filede, nerada
            </p>
            <p class="price">
              $14.95
            </p>
          </div><!-- Menu Item -->

          <div class="col-lg-4 menu-item">
            <a href="assets/img/menu/menu-item-3.png" class="glightbox"><img src="assets/img/menu/menu-item-3.png" class="menu-img img-fluid" alt=""></a>
            <h4>Est Eligendi</h4>
            <p class="ingredients">
              Lorem, deren, trataro, filede, nerada
            </p>
            <p class="price">
              $8.95
            </p>
          </div><!-- Menu Item -->

          <div class="col-lg-4 menu-item">
            <a href="assets/img/menu/menu-item-4.png" class="glightbox"><img src="assets/img/menu/menu-item-4.png" class="menu-img img-fluid" alt=""></a>
            <h4>Eos Luibusdam</h4>
            <p class="ingredients">
              Lorem, deren, trataro, filede, nerada
            </p>
            <p class="price">
              $12.95
            </p>
          </div><!-- Menu Item -->

          <div class="col-lg-4 menu-item">
            <a href="assets/img/menu/menu-item-5.png" class="glightbox"><img src="assets/img/menu/menu-item-5.png" class="menu-img img-fluid" alt=""></a>
            <h4>Eos Luibusdam</h4>
            <p class="ingredients">
              Lorem, deren, trataro, filede, nerada
            </p>
            <p class="price">
              $12.95
            </p>
          </div><!-- Menu Item -->

          <div class="col-lg-4 menu-item">
            <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img src="assets/img/menu/menu-item-6.png" class="menu-img img-fluid" alt=""></a>
            <h4>Laboriosam Direva</h4>
            <p class="ingredients">
              Lorem, deren, trataro, filede, nerada
            </p>
            <p class="price">
              $9.95
            </p>
          </div><!-- Menu Item -->
        </div>
      </div><!-- End Breakfast Menu Content -->

      <!-- Lunch Tab Content -->
      <div class="tab-pane fade" id="menu-lunch" role="tabpanel" aria-labelledby="lunch-tab">
        <div class="tab-header text-center">
          <p>Menu</p>
          <h3>Déjeuner</h3>
        </div>

        <div class="row gy-3">
          <div class="col-lg-4 menu-item">
            <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img src="assets/img/menu/menu-item-1.png" class="menu-img img-fluid" alt=""></a>
            <h4>Magnam Tiste</h4>
            <p class="ingredients">
              Lorem, deren, trataro, filede, nerada
            </p>
            <p class="price">
              $5.95
            </p>
          </div><!-- Menu Item -->

          <div class="col-lg-4 menu-item">
            <a href="assets/img/menu/menu-item-2.png" class="glightbox"><img src="assets/img/menu/menu-item-2.png" class="menu-img img-fluid" alt=""></a>
            <h4>Aut Luia</h4>
            <p class="ingredients">
              Lorem, deren, trataro, filede, nerada
            </p>
            <p class="price">
              $14.95
            </p>
          </div><!-- Menu Item -->

          <div class="col-lg-4 menu-item">
            <a href="assets/img/menu/menu-item-3.png" class="glightbox"><img src="assets/img/menu/menu-item-3.png" class="menu-img img-fluid" alt=""></a>
            <h4>Est Eligendi</h4>
            <p class="ingredients">
              Lorem, deren, trataro, filede, nerada
            </p>
            <p class="price">
              $8.95
            </p>
          </div><!-- Menu Item -->

          <div class="col-lg-4 menu-item">
            <a href="assets/img/menu/menu-item-4.png" class="glightbox"><img src="assets/img/menu/menu-item-4.png" class="menu-img img-fluid" alt=""></a>
            <h4>Eos Luibusdam</h4>
            <p class="ingredients">
              Lorem, deren, trataro, filede, nerada
            </p>
            <p class="price">
              $12.95
            </p>
          </div><!-- Menu Item -->

          <div class="col-lg-4 menu-item">
            <a href="assets/img/menu/menu-item-5.png" class="glightbox"><img src="assets/img/menu/menu-item-5.png" class="menu-img img-fluid" alt=""></a>
            <h4>Eos Luibusdam</h4>
            <p class="ingredients">
              Lorem, deren, trataro, filede, nerada
            </p>
            <p class="price">
              $12.95
            </p>
          </div><!-- Menu Item -->

          <div class="col-lg-4 menu-item">
            <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img src="assets/img/menu/menu-item-6.png" class="menu-img img-fluid" alt=""></a>
            <h4>Laboriosam Direva</h4>
            <p class="ingredients">
              Lorem, deren, trataro, filede, nerada
            </p>
            <p class="price">
              $9.95
            </p>
          </div><!-- Menu Item -->
        </div>
      </div><!-- End Lunch Menu Content -->

      <!-- Dinner Tab Content -->
      <div class="tab-pane fade" id="menu-dinner" role="tabpanel" aria-labelledby="dinner-tab">
        <div class="tab-header text-center">
          <p>Menu</p>
          <h3>Dîner</h3>
        </div>

        <div class="row gy-3">
          <div class="col-lg-4 menu-item">
            <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img src="assets/img/menu/menu-item-1.png" class="menu-img img-fluid" alt=""></a>
            <h4>Magnam Tiste</h4>
            <p class="ingredients">
              Lorem, deren, trataro, filede, nerada
            </p>
            <p class="price">
              $5.95
            </p>
          </div><!-- Menu Item -->

          <div class="col-lg-4 menu-item">
            <a href="assets/img/menu/menu-item-2.png" class="glightbox"><img src="assets/img/menu/menu-item-2.png" class="menu-img img-fluid" alt=""></a>
            <h4>Aut Luia</h4>
            <p class="ingredients">
              Lorem, deren, trataro, filede, nerada
            </p>
            <p class="price">
              $14.95
            </p>
          </div><!-- Menu Item -->

          <div class="col-lg-4 menu-item">
            <a href="assets/img/menu/menu-item-3.png" class="glightbox"><img src="assets/img/menu/menu-item-3.png" class="menu-img img-fluid" alt=""></a>
            <h4>Est Eligendi</h4>
            <p class="ingredients">
              Lorem, deren, trataro, filede, nerada
            </p>
            <p class="price">
              $8.95
            </p>
          </div><!-- Menu Item -->

          <div class="col-lg-4 menu-item">
            <a href="assets/img/menu/menu-item-4.png" class="glightbox"><img src="assets/img/menu/menu-item-4.png" class="menu-img img-fluid" alt=""></a>
            <h4>Eos Luibusdam</h4>
            <p class="ingredients">
              Lorem, deren, trataro, filede, nerada
            </p>
            <p class="price">
              $12.95
            </p>
          </div><!-- Menu Item -->

          <div class="col-lg-4 menu-item">
            <a href="assets/img/menu/menu-item-5.png" class="glightbox"><img src="assets/img/menu/menu-item-5.png" class="menu-img img-fluid" alt=""></a>
            <h4>Eos Luibusdam</h4>
            <p class="ingredients">
              Lorem, deren, trataro, filede, nerada
            </p>
            <p class="price">
              $12.95
            </p>
          </div><!-- Menu Item -->

          <div class="col-lg-4 menu-item">
            <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img src="assets/img/menu/menu-item-6.png" class="menu-img img-fluid" alt=""></a>
            <h4>Laboriosam Direva</h4>
            <p class="ingredients">
              Lorem, deren, trataro, filede, nerada
            </p>
            <p class="price">
              $9.95
            </p>
          </div><!-- Menu Item -->
        </div>
      </div><!-- End Dinner Menu Content -->
    </div>
  </div>
</section>

@include('layouts.footer')

<!-- Vendor JS Files -->
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

<!-- Main JS File -->
<script src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>