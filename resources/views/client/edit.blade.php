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
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Fichier CSS principal -->
  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

<div class="container section-title">
  <h2>Modifier votre commande</h2>
  <p><span>Modifier</span> <span class="description-title">Votre Commande</span></p>
</div>

<div class="container my-5">
  <div class="row">
    <div class="col-md-6">
      <h2>Informations de commande</h2>

      @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
    </div>
  </div>

  <form action="{{ route('commandes.update', $commande->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
      <!-- Formulaire -->
      <div class="col-md-6">
        <div class="mb-3">
          <label for="nom" class="form-label">Nom</label>
          <input type="text" class="form-control" id="nom" name="first_name" value="{{ old('first_name', $commande->first_name) }}" required>
        </div>
        <div class="mb-3">
          <label for="prenom" class="form-label">Prénom</label>
          <input type="text" class="form-control" id="prenom" name="last_name" value="{{ old('last_name', $commande->last_name) }}" required>
        </div>
        <div class="mb-3">
          <label for="numero" class="form-label">Numéro de téléphone</label>
          <input type="tel" class="form-control" id="numero" name="phone" value="{{ old('phone', $commande->phone) }}" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $commande->email) }}">
        </div>
        <div class="mb-3">
          <label class="form-label">Type de livraison</label><br>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="livraison" id="surplace" value="surplace" {{ old('livraison', $commande->livraison) == 'surplace' ? 'checked' : '' }}>
            <label class="form-check-label" for="surplace">Sur place</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="livraison" id="domicile" value="domicile" {{ old('livraison', $commande->livraison) == 'domicile' ? 'checked' : '' }}>
            <label class="form-check-label" for="domicile">À domicile</label>
          </div>
        </div>
        <div id="adresse-fields" style="display: {{ old('livraison', $commande->livraison) == 'domicile' ? 'block' : 'none' }};">
          <div class="mb-3">
            <label for="adresse" class="form-label">Adresse</label>
            <input type="text" class="form-control" id="adresse" name="adresse" value="{{ old('adresse', $commande->adresse) }}">
          </div>
          <div class="mb-3">
            <label for="ville" class="form-label">Ville</label>
            <input type="text" class="form-control" id="ville" name="ville" value="{{ old('ville', $commande->ville) }}">
          </div>
        </div>
      </div>

      <!-- Plats avec checkboxes -->
      <div class="col-md-6">
        <h2>Articles sélectionnés</h2>
        <div class="row gy-4">
          @php
            $menuItems = [
                1 => ['name' => 'Menu 1', 'price' => '5.95€', 'image' => 'menu-item-1.png'],
                2 => ['name' => 'Menu 2', 'price' => '14.95€', 'image' => 'menu-item-3.png'],
                3 => ['name' => 'Menu 3', 'price' => '17.95€', 'image' => 'menu-item-4.png'],
                4 => ['name' => 'Menu 4', 'price' => '20.95€', 'image' => 'menu-item-5.png'],
                5 => ['name' => 'Menu 5', 'price' => '12.95€', 'image' => 'menu-item-6.png'],
                6 => ['name' => 'Menu 6', 'price' => '21.95€', 'image' => 'menu-item-2.png']
            ];
          @endphp

          @foreach($menuItems as $id => $menuItem)
          <div class="col-md-6 text-center">
            <label class="d-block">
              <input type="checkbox" name="menu_items[]" value="{{ $id }}" class="form-check-input mb-2" {{ in_array($id, old('menu_items', json_decode($commande->menu_items))) ? 'checked' : '' }}>
              <img src="{{ asset('assets/img/menu/' . $menuItem['image']) }}" class="img-fluid rounded" alt="{{ $menuItem['name'] }}">
              <h5 class="mt-2">{{ $menuItem['name'] }}</h5>
              <p>{{ $menuItem['price'] }}</p>
            </label>
          </div>
          @endforeach
        </div>
      </div>
    </div>

    <!-- ✅ Submit button outside row to be aligned properly -->
    <div class="text-center mt-4">
      <a href="{{ url()->previous() }}" class="btn btn-outline-danger rounded-pill px-4 me-2">Page précédente</a>
      <form action="{{ route('logout') }}" method="POST" class="d-inline">
        @csrf
        <button type="submit" class="btn btn-outline-danger rounded-pill px-4 me-2">Déconnexion</button>
      </form>
      <button type="submit" class="btn btn-danger rounded-pill px-4">Modifier la commande</button>
    </div>
  </form>
</div>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const radioDomicile = document.getElementById('domicile');
    const radioSurplace = document.getElementById('surplace');
    const adresseFields = document.getElementById('adresse-fields');

    radioDomicile.addEventListener('change', function () {
      if (this.checked) {
        adresseFields.style.display = 'block';
      }
    });

    radioSurplace.addEventListener('change', function () {
      if (this.checked) {
        adresseFields.style.display = 'none';
      }
    });
  });
</script>


