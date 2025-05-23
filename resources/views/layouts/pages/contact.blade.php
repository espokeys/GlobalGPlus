@extends('layouts.master')

@section('content')

<section class="page-title bg-1">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="block text-center">
            <h1 class="text-capitalize mb-4 text-lg">Parlez-nous de votre besoin</h1>
            <p class="text-white-50">Remplissez notre formulaire ou appelez-nous. Nous sommes là pour vous accompagner.</p>

          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- contact form start -->

  <section class="section contact-info pb-0">
    <div class="container">
      <div class="row">

        <!-- Téléphone -->
        <div class="col-lg-4 col-sm-6 col-md-6">
          <div class="contact-block mb-4 mb-lg-0">
            <i class="icofont-live-support"></i>
            <h5>Appelez-nous</h5>
            +228 90 32 51 17
          </div>
        </div>

        <!-- Email -->
        <div class="col-lg-4 col-sm-6 col-md-6">
          <div class="contact-block mb-4 mb-lg-0">
            <i class="icofont-support-faq"></i>
            <h5>Envoyez-nous un email</h5>
            globalgplus@gmail.com
          </div>
        </div>

        <!-- Localisation -->
        <div class="col-lg-4 col-sm-6 col-md-6">
          <div class="contact-block mb-4 mb-lg-0">
            <i class="icofont-location-pin"></i>
            <h5>Adresse</h5>
            Lomé, Togo
          </div>
        </div>

      </div>

      <div class="row mt-4">
        <!-- Site Web -->
        <div class="col-lg-4 col-sm-6 col-md-6">
          <div class="contact-block mb-4 mb-lg-0">
            <i class="icofont-ui-globe"></i>
            <h5>Notre site web</h5>
            <a href="https://globalgplus.net/globalgplus" target="_blank">globalgplus.net/globalgplus</a>
          </div>
        </div>

        <!-- Statut -->
        <div class="col-lg-4 col-sm-6 col-md-6">
          <div class="contact-block mb-4 mb-lg-0">
            <i class="icofont-check-circled"></i>
            <h5>Statut</h5>
            Actuellement ouvert
          </div>
        </div>

        <!-- Secteurs -->
        <div class="col-lg-4 col-sm-6 col-md-6">
          <div class="contact-block mb-4 mb-lg-0">
            <i class="icofont-briefcase-2"></i>
            <h5>Secteurs</h5>
            Représentation commerciale, Marketing relationnel, Formation
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="contact-form-wrap section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="section-title text-center">
            <h2 class="text-md mb-2">Contactez-nous</h2>
            <div class="divider mx-auto my-4"></div>
            <p class="mb-5">
              Vous avez une question, un besoin spécifique ou souhaitez simplement nous joindre ? Remplissez le formulaire ci-dessous, notre équipe vous répondra dans les plus brefs délais.
            </p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <form id="contact-form" class="contact__form" method="post" action="mail.php">

            <!-- form message -->
            <div class="row">
              <div class="col-12">
                <div class="alert alert-success contact__msg" style="display: none" role="alert">
                  Votre message a été envoyé avec succès.
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <input name="name" id="name" type="text" class="form-control" placeholder="Votre nom complet">
                </div>
              </div>

              <div class="col-lg-6">
                <div class="form-group">
                  <input name="email" id="email" type="email" class="form-control" placeholder="Votre adresse e-mail">
                </div>
              </div>

              <div class="col-lg-6">
                <div class="form-group">
                  <input name="subject" id="subject" type="text" class="form-control" placeholder="Sujet de votre demande">
                </div>
              </div>

              <div class="col-lg-6">
                <div class="form-group">
                  <input name="phone" id="phone" type="text" class="form-control" placeholder="Votre numéro de téléphone">
                </div>
              </div>
            </div>

            <div class="form-group-2 mb-4">
              <textarea name="message" id="message" class="form-control" rows="8" placeholder="Votre message"></textarea>
            </div>

            <div class="text-center">
              <input class="btn btn-main btn-round-full" name="submit" type="submit" value="Envoyer le message">
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>



  <div class="google-map">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.3476608526094!2d1.2097289!3d6.2178014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x102159ea50d293bd%3A0xd48e062b07f231ca!2sGLOBAL%20G%2B%20Sarl!5e0!3m2!1sfr!2stg!4v1747673343578!5m2!1sfr!2stg"
      width="100%"
      height="450"
      style="border:0;"
      allowfullscreen=""
      loading="lazy"
      referrerpolicy="no-referrer-when-downgrade">
    </iframe>
  </div>


@endsection
