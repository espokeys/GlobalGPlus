@extends('layouts.master')

@section('content')


   <!-- Slider Start -->
<section class="banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-12 col-xl-7">
          <div class="block">
            <div class="divider mb-3"></div>
            <span class="text-uppercase text-sm letter-spacing">
              Expert en représentation, marketing & formation
            </span>
            <h4 class="mb-3 mt-3" style="color: #223a66; font-size: 39px;">
                <span style="display: block; margin-bottom: 20px;">
                  Agence experte en représentation,
                </span>
                <span style="display: block;">
                  marketing et formation
                </span>
              </h4>



            <p class="mb-4 pr-5">
              Global G+ vous accompagne dans la représentation commerciale,
              le marketing relationnel et la formation, pour propulser votre activité
              vers de nouveaux sommets.
            </p>
            <div class="btn-container">
              <a
                href="{{ route('contact') }}"
                target="_blank"
                class="btn btn-main-2 btn-icon btn-round-full"
              >
                Prendre rendez-vous <i class="icofont-simple-right ml-2"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
      <section class="features">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="feature-block d-lg-flex">
                <div class="feature-item mb-5 mb-lg-0">
                    <div class="feature-icon mb-4">
                      <i class="icofont-business-man"></i>
                    </div>
                    <span>Nos pôles d’activités</span>
                    <h4 class="mb-3">Global G+ – Stratégie & Santé</h4>
                    <p class="mb-4">
                      Nos bureaux sont ouverts du lundi au vendredi.<br />
                      Nous sommes spécialisés dans la Représentation commerciale, le Marketing relationnel et la Formation.
                    </p>
                    <a href="{{ route('contact') }}" class="btn btn-main btn-round-full">
                      Contactez-nous
                    </a>
                  </div>
                  <div class="feature-item mb-5 mb-lg-0">
                    <div class="feature-icon mb-4">
                      <i class="icofont-ui-clock"></i>
                    </div>
                    <span>Horaires d'ouverture</span>
                    <h4 class="mb-3">Nos heures de service</h4>
                    <ul class="w-hours list-unstyled">
                      <li class="d-flex justify-content-between">
                        Lundi - Vendredi : <span>09h00 - 18h00</span>
                      </li>
                      <li class="d-flex justify-content-between">
                        Samedi : <span>09h00 - 15h00</span>
                      </li>
                      <li class="d-flex justify-content-between">
                        Dimanche : <span>Fermé</span>
                      </li>
                    </ul>
                  </div>
                  <div class="feature-item mb-5 mb-lg-0">
                    <div class="feature-icon mb-4">
                      <i class="icofont-support"></i>
                    </div>
                    <span>Contact & Support</span>
                    <h4 class="mb-3">+228 90 32 51 17</h4>
                    <p>
                      Pour toute demande ou assistance, notre équipe est à votre disposition pendant nos heures d'ouverture.<br />
                      Contactez-nous par téléphone ou par email à <a href="mailto:globalgplus@gmail.com">globalgplus@gmail.com</a>.
                    </p>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section about">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-4 col-sm-6">
              <div class="about-img">
                <img src="{{ asset('assets/images/about/img35.jpg') }}" alt="" class="img-fluid" />
                <img src="{{ asset('assets/images/about/img2.jpg') }}" alt="" class="img-fluid mt-4" />
              </div>
            </div>
            <div class="col-lg-4 col-sm-6">
              <div class="about-img mt-4 mt-lg-0">
                <img src="{{ asset('assets/images/about/img5.jpg') }}" alt="" class="img-fluid" />
              </div>
            </div>
            <div class="col-lg-4">
              <div class="about-content pl-4 mt-4 mt-lg-0">
                <h2 class="title-color">
                    Votre santé,<br /> & notre priorité
                </h2>
                <p class="mt-4 mb-5">
                  Global G+ est une entreprise engagée dans la représentation commerciale,
                  le marketing relationnel et la formation. Elle propose également des produits
                  et solutions favorisant une bonne santé et un meilleur bien-être.
                </p>

                <a
                  href="{{ route('service') }}"
                  class="btn btn-main-2 btn-round-full btn-icon"
                >
                  Nos services<i class="icofont-simple-right ml-3"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="cta-section">
        <div class="container">
          <div class="cta position-relative">
            <div class="row">
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="counter-stat">
                  <i class="icofont-doctor"></i>
                  <span class="h3">100</span>k
                  <p>Clients satisfaits</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="counter-stat">
                  <i class="icofont-flag"></i>
                  <span class="h3">700</span>+
                  <p>Produits disponibles</p>
                </div>
              </div>

              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="counter-stat">
                  <i class="icofont-badge"></i>
                  <span class="h3">01</span>+
                  <p>Partenaires experts</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="counter-stat">
                  <i class="icofont-globe"></i>
                  <span class="h3">5</span>
                  <p>Présence internationale</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section service gray-bg">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-7 text-center">
              <div class="section-title">
                <h2>Nos domaines d’expertise</h2>
                <div class="divider mx-auto my-4"></div>
                <p>
                  Global G+ vous accompagne avec des solutions professionnelles centrées sur le développement commercial, les relations humaines et le renforcement des compétences.
                </p>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="service-item mb-4">
                <div class="icon d-flex align-items-center">
                  <i class="icofont-handshake-deal text-lg"></i>
                  <h4 class="mt-3 mb-3">Représentation commerciale</h4>
                </div>
                <div class="content">
                  <p class="mb-4">
                    Mise en relation entre entreprises, négociation de contrats, prospection de clients et accompagnement terrain.
                  </p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="service-item mb-4">
                <div class="icon d-flex align-items-center">
                  <i class="icofont-network text-lg"></i>
                  <h4 class="mt-3 mb-3">Marketing relationnel</h4>
                </div>
                <div class="content">
                  <p class="mb-4">
                    Développement de réseaux, gestion de la relation client, vente directe, accompagnement des équipes et valorisation des performances.
                </p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
             <a href="{{ route('formation') }}">
                <div class="service-item mb-4">
                    <div class="icon d-flex align-items-center">
                      <i class="icofont-education text-lg"></i>
                      <h4 class="mt-3 mb-3">Formation</h4>
                    </div>
                    <div class="content">
                      <p class="mb-4">
                        Ateliers, séminaires et programmes pour renforcer les compétences commerciales, humaines et professionnelles.
                      </p>
                    </div>
                  </div></a>
            </div>
          </div>
        </div>
      </section>

      <section class="section testimonial-2 gray-bg" style="padding-top: 0px">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-7">
              <div class="section-title text-center">
                <h2>Plus de 5000 clients satisfaits</h2>
                <div class="divider mx-auto my-4"></div>
                <p>
                  Depuis de nombreuses années, Global G+ accompagne ses clients dans la représentation commerciale, le marketing relationnel, la formation professionnelle, ainsi que la distribution de produits garantissant une meilleure santé.
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-12 testimonial-wrap-2">
              <div class="testimonial-block style-2 gray-bg">
                <i class="icofont-quote-right"></i>

                <div class="testimonial-thumb">
                  <img
                    src="{{ asset('assets/images/team/img1.jpg') }}"
                    alt="Client satisfait"
                    class="img-fluid"
                  />
                </div>

                <div class="client-info">
                  <h4>Service commercial exceptionnel !</h4>
                  <span>Jean Dupont</span>
                  <p>
                    Grâce à Global G+, notre entreprise a développé son réseau commercial efficacement, avec un accompagnement professionnel et des solutions adaptées à nos besoins.
                  </p>
                </div>
              </div>

              <div class="testimonial-block style-2 gray-bg">
                <div class="testimonial-thumb">
                  <img
                    src="{{ asset('assets/images/team/img2.jpg') }}"
                    alt="Client satisfait"
                    class="img-fluid"
                  />
                </div>

                <div class="client-info">
                  <h4>Formation de qualité !</h4>
                  <span>Marie Lefèvre</span>
                  <p>
                    Les formations proposées par Global G+ sont enrichissantes et parfaitement adaptées à nos exigences professionnelles. Une vraie valeur ajoutée pour nos équipes.
                  </p>
                </div>

                <i class="icofont-quote-right"></i>
              </div>

              <div class="testimonial-block style-2 gray-bg">
                <div class="testimonial-thumb">
                  <img
                    src="{{ asset('assets/images/team/img3.jpg') }}"
                    alt="Client satisfait"
                    class="img-fluid"
                  />
                </div>

                <div class="client-info">
                  <h4>Produits de santé efficaces !</h4>
                  <span>Luc Martin</span>
                  <p>
                    Les produits pour la santé distribués par Global G+ ont amélioré notre bien-être au quotidien. Qualité et sérieux garantis.
                  </p>
                </div>

                <i class="icofont-quote-right"></i>
              </div>

              <div class="testimonial-block style-2 gray-bg">
                <div class="testimonial-thumb">
                  <img
                    src="{{ asset('assets/images/team/img4.jpg') }}"
                    alt="Client satisfait"
                    class="img-fluid"
                  />
                </div>

                <div class="client-info">
                  <h4>Support client réactif !</h4>
                  <span>Sophie Bernard</span>
                  <p class="mt-4">
                    L'équipe de Global G+ répond toujours rapidement à nos questions et propose des solutions efficaces. Une collaboration fiable et durable.
                  </p>
                </div>
                <i class="icofont-quote-right"></i>
              </div>

              <div class="testimonial-block style-2 gray-bg">
                <div class="testimonial-thumb">
                  <img
                    src="{{ asset('assets/images/team/img5.jpg') }}"
                    alt="Client satisfait"
                    class="img-fluid"
                  />
                </div>

                <div class="client-info">
                  <h4>Marketing relationnel performant !</h4>
                  <span>Paul Moreau</span>
                  <p>
                    Les stratégies de marketing relationnel proposées ont boosté notre fidélisation client. Un vrai partenaire de confiance.
                  </p>
                </div>
                <i class="icofont-quote-right"></i>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section clients">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-7">
              <div class="section-title text-center">
                <h2>Nos partenaires de confiance</h2>
                <div class="divider mx-auto my-4"></div>
                <p>
                  Global G+ collabore avec des partenaires stratégiques pour une meilleure santé.
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="container">
          <div class="row clients-logo">
            <div class="col-lg-2">
              <div class="client-thumb">
                <img src="{{ asset('assets/images/about/1.png') }}" alt="Partenaire 1" class="img-fluid" />
              </div>
            </div>
            <div class="col-lg-2">
              <div class="client-thumb">
                <img src="{{ asset('assets/images/about/2.png') }}" alt="Partenaire 2" class="img-fluid" />
              </div>
            </div>
            <div class="col-lg-2">
              <div class="client-thumb">
                <img src="{{ asset('assets/images/about/3.png') }}" alt="Partenaire 3" class="img-fluid" />
              </div>
            </div>
            <div class="col-lg-2">
              <div class="client-thumb">
                <img src="{{ asset('assets/images/about/4.png') }}" alt="Partenaire 4" class="img-fluid" />
              </div>
            </div>
            <div class="col-lg-2">
              <div class="client-thumb">
                <img src="{{ asset('assets/images/about/5.png') }}" alt="Partenaire 5" class="img-fluid" />
              </div>
            </div>
            <div class="col-lg-2">
              <div class="client-thumb">
                <img src="{{ asset('assets/images/about/6.png') }}" alt="Partenaire 6" class="img-fluid" />
              </div>
            </div>
            <!-- Répétition des logos si besoin -->
            <div class="col-lg-2">
              <div class="client-thumb">
                <img src="{{ asset('assets/images/about/3.png') }}" alt="Partenaire 3" class="img-fluid" />
              </div>
            </div>
            <div class="col-lg-2">
              <div class="client-thumb">
                <img src="{{ asset('assets/images/about/4.png') }}" alt="Partenaire 4" class="img-fluid" />
              </div>
            </div>
            <div class="col-lg-2">
              <div class="client-thumb">
                <img src="{{ asset('assets/images/about/5.png') }}" alt="Partenaire 5" class="img-fluid" />
              </div>
            </div>
            <div class="col-lg-2">
              <div class="client-thumb">
                <img src="{{ asset('assets/images/about/6.png') }}" alt="Partenaire 6" class="img-fluid" />
              </div>
            </div>
          </div>
        </div>
      </section>


@endsection
