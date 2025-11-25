@include('layouts.header')

<!-- Section Title -->
<div class="container section-title">
  <h2>Place Your Order</h2>
  <p><span>Order</span> <span class="description-title">Your Favorite Meals</span></p>
</div>

<div class="container my-5">
  <div class="mb-4">
    <div class="d-flex justify-content-between align-items-center">
      
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <h2>Passer une commande</h2>

      @if (session()->has('success'))
        <div class="alert alert-success">
          {{ session()->get('success') }}
        </div>
      @endif

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

  <form action="{{ route('commande.store') }}" method="POST">
    @csrf
    <div class="row">
      <!-- Formulaire -->
      <div class="col-md-6">
        <div class="mb-3">
          <label for="nom" class="form-label">Nom</label>
          <input type="text" class="form-control" id="nom" name="first_name" required>
        </div>
        <div class="mb-3">
          <label for="prenom" class="form-label">Prénom</label>
          <input type="text" class="form-control" id="prenom" name="last_name" required>
        </div>
        <div class="mb-3">
          <label for="numero" class="form-label">Numéro de téléphone</label>
          <input type="tel" class="form-control" id="numero" name="phone" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="mb-3">
          <label class="form-label">Type de livraison</label><br>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="livraison" id="surplace" value="surplace" checked>
            <label class="form-check-label" for="surplace">Sur place</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="livraison" id="domicile" value="domicile">
            <label class="form-check-label" for="domicile">À domicile</label>
          </div>
        </div>
        <div id="adresse-fields" style="display: none;">
          <div class="mb-3">
            <label for="adresse" class="form-label">Adresse</label>
            <input type="text" class="form-control" id="adresse" name="adresse">
          </div>
          <div class="mb-3">
            <label for="ville" class="form-label">Ville</label>
            <input type="text" class="form-control" id="ville" name="ville">
          </div>

        </div>
      </div>

      <!-- Plats avec checkboxes -->
      <div class="col-md-6">
        <h2>Choisissez vos plats</h2>
        <div class="row gy-4">
          <div class="col-md-6 text-center">
            <label class="d-block">
              <input type="checkbox" name="menu_items[]" value="1" class="form-check-input mb-2">
              <img src="{{ asset('assets/img/menu/menu-item-1.png') }}" class="img-fluid rounded" alt="Magnam Tiste">
              <h5 class="mt-2">Magnam Tiste</h5>
              <p>$5.95</p>
            </label>
          </div>

          <div class="col-md-6 text-center">
            <label class="d-block">
              <input type="checkbox" name="menu_items[]" value="2" class="form-check-input mb-2">
              <img src="{{ asset('assets/img/menu/menu-item-3.png') }}" class="img-fluid rounded" alt="Aut Luia">
              <h5 class="mt-2">Aut Luia</h5>
              <p>$14.95</p>
            </label>
          </div>

          <div class="col-md-6 text-center">
            <label class="d-block">
              <input type="checkbox" name="menu_items[]" value="3" class="form-check-input mb-2">
              <img src="{{ asset('assets/img/menu/menu-item-4.png') }}" class="img-fluid rounded" alt="Aut Luia">
              <h5 class="mt-2">Aut Luia</h5>
              <p>$17.95</p>
            </label>
          </div>

          <div class="col-md-6 text-center">
            <label class="d-block">
              <input type="checkbox" name="menu_items[]" value="4" class="form-check-input mb-2">
              <img src="{{ asset('assets/img/menu/menu-item-5.png') }}" class="img-fluid rounded" alt="Aut Luia">
              <h5 class="mt-2">Aut Luia</h5>
              <p>$20.95</p>
            </label>
          </div>

          <div class="col-md-6 text-center">
            <label class="d-block">
              <input type="checkbox" name="menu_items[]" value="5" class="form-check-input mb-2">
              <img src="{{ asset('assets/img/menu/menu-item-6.png') }}" class="img-fluid rounded" alt="Aut Luia">
              <h5 class="mt-2">Aut Luia</h5>
              <p>$12.95</p>
            </label>
          </div>

          <div class="col-md-6 text-center">
            <label class="d-block">
              <input type="checkbox" name="menu_items[]" value="6" class="form-check-input mb-2">
              <img src="{{ asset('assets/img/menu/menu-item-2.png') }}" class="img-fluid rounded" alt="Aut Luia">
              <h5 class="mt-2">Aut Luia</h5>
              <p>$21.95</p>
            </label>
          </div>
        </div>
      </div>
    </div>

    <!-- ✅ Submit button outside row to be aligned properly -->
    <div class="text-center mt-4">
      <button type="submit" class="btn btn-primary">Valider la commande</button>
      <a href="{{ url()->previous() }}" class="btn btn-outline-danger rounded-pill px-4">Retour</a>

    </div>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}<br>
        @if(session('receipt'))
            <a href="{{ session('receipt') }}" class="btn btn-primary mt-2" download>Télécharger le reçu</a>
        @endif
    </div>
    @endif
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

    // Run it once on page load
    if (radioDomicile.checked) {
      adresseFields.style.display = 'block';
    }
  });
</script>

@include('layouts.footer')
