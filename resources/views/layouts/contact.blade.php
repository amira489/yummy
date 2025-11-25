<section id="contact" class="contact section">

      <!-- Titre de Section -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p><span>Besoin d'aide ?</span> <span class="description-title">Contactez-nous</span></p>
      </div><!-- Fin du Titre de Section -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="mb-5">
          <iframe style="width: 100%; height: 400px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen=""></iframe>
        </div><!-- Fin de la Carte Google -->

        <div class="row gy-4">

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
              <i class="icon bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Adresse</h3>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>
            </div>
          </div><!-- Fin de l'Item Info -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="300">
              <i class="icon bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Téléphone</h3>
                <p>+1 5589 55488 55</p>
              </div>
            </div>
          </div><!-- Fin de l'Item Info -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="400">
              <i class="icon bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email</h3>
                <p>info@example.com</p>
              </div>
            </div>
          </div><!-- Fin de l'Item Info -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="500">
              <i class="icon bi bi-clock flex-shrink-0"></i>
              <div>
                <h3>Horaires d'ouverture<br></h3>
                <p><strong>Lun-Sam :</strong> 11h - 23h ; <strong>Dimanche :</strong> Fermé</p>
              </div>
            </div>
          </div><!-- Fin de l'Item Info -->

        </div>

<form method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="600" onsubmit="return false;">          <div class="row gy-4">

            <div class="col-md-6">
              <input type="text" name="name" class="form-control" placeholder="Votre Nom" required="">
            </div>

            <div class="col-md-6 ">
              <input type="email" class="form-control" name="email" placeholder="Votre Email" required="">
            </div>

            <div class="col-md-12">
              <input type="text" class="form-control" name="subject" placeholder="Sujet" required="">
            </div>

            <div class="col-md-12">
              <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
            </div>

            <div class="col-md-12 text-center">
              <div class="loading">Chargement</div>
     
              <div class="sent-message">Votre message a bien été envoyé. Merci !</div>

              <button type="submit">Envoyer le message</button>
            </div>

          </div>
        </form><!-- Fin du Formulaire de Contact -->

      </div>

    </section><!-- /Section Contact -->
<script>
document.querySelector('.php-email-form').addEventListener('submit', function(e) {
    e.preventDefault();

    const form = this;
    const loading = form.querySelector('.loading');
    const sentMessage = form.querySelector('.sent-message');

    // Masquer les messages précédents
    loading.style.display = 'block';
    sentMessage.style.display = 'none';

    // Simuler l'envoi (à remplacer par votre logique réelle)
    setTimeout(() => {
        loading.style.display = 'none';

        // Simuler une réponse réussie
        sentMessage.style.display = 'block';
        form.reset();

        // Cacher le message après 5 secondes
        setTimeout(() => {
            sentMessage.style.opacity = '0';
            setTimeout(() => {
                sentMessage.style.display = 'none';
                sentMessage.style.opacity = '1';
            }, 500);
        }, 5000);

    }, 2000);
});
</script>
