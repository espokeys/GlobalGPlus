@extends('layouts.master')

@section('content')
    <section class=" page-title banner_service">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <h1 class="text-capitalize mb-5 text-lg"></h1>


                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section services-section">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-8 heading-section text-center ftco-animate">
              <h2 class="mb-1">Nos <span>Services</span> Clés</h2>
              <img
                class="mb-3"
                src="{{ asset('assets/images/bg/soulign.png') }}"
                alt="Soulignement décoratif"
              />
            </div>
          </div>
          <div class="row no-gutters">

            <!-- Représentation commerciale -->
            <div class="col-md-4 d-flex align-self-stretch ftco-animate">
              <div class="media block-6 services d-block">
                <div class="line"></div>
                <div class="icon mb-3">
                  <i class="fa-solid fa-chart-line"></i>
                </div>
                <div class="media-body">
                  <h3 class="heading mb-3">Représentation commerciale</h3>
                  <p>Nous vous aidons à développer vos ventes à travers des actions ciblées et efficaces sur le terrain.</p>
                </div>
              </div>
            </div>

            <!-- Marketing relationnel -->
            <div class="col-md-4 d-flex align-self-stretch ftco-animate">
              <div class="media block-6 services d-block">
                <div class="line"></div>
                <div class="icon mb-3">
                  <i class="fa-solid fa-users"></i>
                </div>
                <div class="media-body">
                  <h3 class="heading mb-3">Marketing relationnel</h3>
                  <p>Créez un lien durable avec vos clients grâce à nos stratégies de marketing personnalisées.</p>
                </div>
              </div>
            </div>

            <!-- Formation -->
            <div class="col-md-4 d-flex align-self-stretch ftco-animate">
              <div class="media block-6 services d-block">
                <div class="line"></div>
                <div class="icon mb-3">
                  <i class="fa-solid fa-chalkboard-teacher"></i>
                </div>
                <div class="media-body">
                  <h3 class="heading mb-3">Formation</h3>
                  <p>Nous formons vos équipes pour les rendre plus performantes, motivées et prêtes à relever tous les défis.</p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </section>




    <section class="section service-2">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <h2 class="section-title">Nos types de produits</h2>
                </div>
            </div>
            <div class="row ">
                <!-- Représentation commerciale -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block .card-hover-effect">
                        <img src="{{ asset('assets/images/service/img1.jpg') }}" alt="Représentation commerciale" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Représentation commerciale</h4>
                            <p class="mb-4">Nous assurons la promotion et la représentation de vos produits ou services auprès de vos clients cibles pour augmenter votre chiffre d’affaires.</p>
                        </div>
                    </div>
                </div>

                <!-- Marketing relationnel -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5">
                        <img src="{{ asset('assets/images/service/img2.jpg') }}" alt="Marketing relationnel" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Marketing relationnel</h4>
                            <p class="mb-4">Nous mettons en place des stratégies pour construire une relation de confiance durable entre votre entreprise et vos clients.</p>
                        </div>
                    </div>
                </div>

                <!-- Formation -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5">
                        <img src="{{ asset('assets/images/service/img3.jpg') }}" alt="Formation" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Formation</h4>
                            <p class="mb-4">Nous proposons des formations professionnelles adaptées pour renforcer les compétences de vos équipes et améliorer leurs performances.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row " style="margin-top:150px">
                <!-- Représentation commerciale -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block ">
                        <img src="{{ asset('assets/images/service/img4.jpg') }}" alt="Représentation commerciale" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Représentation commerciale</h4>
                            <p class="mb-4">Nous assurons la promotion et la représentation de vos produits ou services auprès de vos clients cibles pour augmenter votre chiffre d’affaires.</p>
                        </div>
                    </div>
                </div>

                <!-- Marketing relationnel -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5">
                        <img src="{{ asset('assets/images/service/img7.jpg') }}" alt="Marketing relationnel" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Marketing relationnel</h4>
                            <p class="mb-4">Nous mettons en place des stratégies pour construire une relation de confiance durable entre votre entreprise et vos clients.</p>
                        </div>
                    </div>
                </div>

                <!-- Formation -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5">
                        <img src="{{ asset('assets/images/service/img6.jpg') }}" alt="Formation" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Formation</h4>
                            <p class="mb-4">Nous proposons des formations professionnelles adaptées pour renforcer les compétences de vos équipes et améliorer leurs performances.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row " style="margin-top:150px">
                <!-- Représentation commerciale -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block ">
                        <img src="{{ asset('assets/images/service/img7.jpg') }}" alt="Représentation commerciale" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Représentation commerciale</h4>
                            <p class="mb-4">Nous assurons la promotion et la représentation de vos produits ou services auprès de vos clients cibles pour augmenter votre chiffre d’affaires.</p>
                        </div>
                    </div>
                </div>

                <!-- Marketing relationnel -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5">
                        <img src="{{ asset('assets/images/service/img10.jpg') }}" alt="Marketing relationnel" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Marketing relationnel</h4>
                            <p class="mb-4">Nous mettons en place des stratégies pour construire une relation de confiance durable entre votre entreprise et vos clients.</p>
                        </div>
                    </div>
                </div>

                <!-- Formation -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5">
                        <img src="{{ asset('assets/images/service/img9.jpg') }}" alt="Formation" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Formation</h4>
                            <p class="mb-4">Nous proposons des formations professionnelles adaptées pour renforcer les compétences de vos équipes et améliorer leurs performances.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top:150px">
                <!-- Représentation commerciale -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block ">
                        <img src="{{ asset('assets/images/service/img10.jpg') }}" alt="Représentation commerciale" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Représentation commerciale</h4>
                            <p class="mb-4">Nous assurons la promotion et la représentation de vos produits ou services auprès de vos clients cibles pour augmenter votre chiffre d’affaires.</p>
                        </div>
                    </div>
                </div>

                <!-- Marketing relationnel -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5">
                        <img src="{{ asset('assets/images/service/img13.jpg') }}" alt="Marketing relationnel" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Marketing relationnel</h4>
                            <p class="mb-4">Nous mettons en place des stratégies pour construire une relation de confiance durable entre votre entreprise et vos clients.</p>
                        </div>
                    </div>
                </div>

                <!-- Formation -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5">
                        <img src="{{ asset('assets/images/service/img12.jpg') }}" alt="Formation" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Formation</h4>
                            <p class="mb-4">Nous proposons des formations professionnelles adaptées pour renforcer les compétences de vos équipes et améliorer leurs performances.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top:150px">
                <!-- Représentation commerciale -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block ">
                        <img src="{{ asset('assets/images/service/img5.jpg') }}" alt="Représentation commerciale" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Représentation commerciale</h4>
                            <p class="mb-4">Nous assurons la promotion et la représentation de vos produits ou services auprès de vos clients cibles pour augmenter votre chiffre d’affaires.</p>
                        </div>
                    </div>
                </div>

                <!-- Marketing relationnel -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5">
                        <img src="{{ asset('assets/images/service/img8.jpg') }}" alt="Marketing relationnel" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Marketing relationnel</h4>
                            <p class="mb-4">Nous mettons en place des stratégies pour construire une relation de confiance durable entre votre entreprise et vos clients.</p>
                        </div>
                    </div>
                </div>

                <!-- Formation -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5">
                        <img src="{{ asset('assets/images/service/img11.jpg') }}" alt="Formation" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Formation</h4>
                            <p class="mb-4">Nous proposons des formations professionnelles adaptées pour renforcer les compétences de vos équipes et améliorer leurs performances.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top:150px">
                <!-- Représentation commerciale -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block ">
                        <img src="{{ asset('assets/images/service/img13.jpg') }}" alt="Représentation commerciale" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Représentation commerciale</h4>
                            <p class="mb-4">Nous assurons la promotion et la représentation de vos produits ou services auprès de vos clients cibles pour augmenter votre chiffre d’affaires.</p>
                        </div>
                    </div>
                </div>

                <!-- Marketing relationnel -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5">
                        <img src="{{ asset('assets/images/service/img14.jpg') }}" alt="Marketing relationnel" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Marketing relationnel</h4>
                            <p class="mb-4">Nous mettons en place des stratégies pour construire une relation de confiance durable entre votre entreprise et vos clients.</p>
                        </div>
                    </div>
                </div>

                <!-- Formation -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5">
                        <img src="{{ asset('assets/images/service/img15.jpg') }}" alt="Formation" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Formation</h4>
                            <p class="mb-4">Nous proposons des formations professionnelles adaptées pour renforcer les compétences de vos équipes et améliorer leurs performances.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top:150px">
                <!-- Représentation commerciale -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block ">
                        <img src="{{ asset('assets/images/service/img16.jpg') }}" alt="Représentation commerciale" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Représentation commerciale</h4>
                            <p class="mb-4">Nous assurons la promotion et la représentation de vos produits ou services auprès de vos clients cibles pour augmenter votre chiffre d’affaires.</p>
                        </div>
                    </div>
                </div>

                <!-- Marketing relationnel -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5">
                        <img src="{{ asset('assets/images/service/img17.jpg') }}" alt="Marketing relationnel" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Marketing relationnel</h4>
                            <p class="mb-4">Nous mettons en place des stratégies pour construire une relation de confiance durable entre votre entreprise et vos clients.</p>
                        </div>
                    </div>
                </div>

                <!-- Formation -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5">
                        <img src="{{ asset('assets/images/service/img18.jpg') }}" alt="Formation" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Formation</h4>
                            <p class="mb-4">Nous proposons des formations professionnelles adaptées pour renforcer les compétences de vos équipes et améliorer leurs performances.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top:150px">
                <!-- Représentation commerciale -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block ">
                        <img src="{{ asset('assets/images/service/img19.jpg') }}" alt="Représentation commerciale" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Représentation commerciale</h4>
                            <p class="mb-4">Nous assurons la promotion et la représentation de vos produits ou services auprès de vos clients cibles pour augmenter votre chiffre d’affaires.</p>
                        </div>
                    </div>
                </div>

                <!-- Marketing relationnel -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5">
                        <img src="{{ asset('assets/images/service/img20.jpg') }}" alt="Marketing relationnel" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Marketing relationnel</h4>
                            <p class="mb-4">Nous mettons en place des stratégies pour construire une relation de confiance durable entre votre entreprise et vos clients.</p>
                        </div>
                    </div>
                </div>

                <!-- Formation -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5">
                        <img src="{{ asset('assets/images/service/img21.jpg') }}" alt="Formation" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Formation</h4>
                            <p class="mb-4">Nous proposons des formations professionnelles adaptées pour renforcer les compétences de vos équipes et améliorer leurs performances.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top:150px">
                <!-- Représentation commerciale -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block ">
                        <img src="{{ asset('assets/images/service/img22.jpg') }}" alt="Représentation commerciale" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Représentation commerciale</h4>
                            <p class="mb-4">Nous assurons la promotion et la représentation de vos produits ou services auprès de vos clients cibles pour augmenter votre chiffre d’affaires.</p>
                        </div>
                    </div>
                </div>

                <!-- Marketing relationnel -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5">
                        <img src="{{ asset('assets/images/service/img23.jpg') }}" alt="Marketing relationnel" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Marketing relationnel</h4>
                            <p class="mb-4">Nous mettons en place des stratégies pour construire une relation de confiance durable entre votre entreprise et vos clients.</p>
                        </div>
                    </div>
                </div>

                <!-- Formation -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5">
                        <img src="{{ asset('assets/images/service/img24.jpg') }}" alt="Formation" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Formation</h4>
                            <p class="mb-4">Nous proposons des formations professionnelles adaptées pour renforcer les compétences de vos équipes et améliorer leurs performances.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top:150px">
                <!-- Représentation commerciale -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block ">
                        <img src="{{ asset('assets/images/service/img25.jpg') }}" alt="Représentation commerciale" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Représentation commerciale</h4>
                            <p class="mb-4">Nous assurons la promotion et la représentation de vos produits ou services auprès de vos clients cibles pour augmenter votre chiffre d’affaires.</p>
                        </div>
                    </div>
                </div>

                <!-- Marketing relationnel -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5">
                        <img src="{{ asset('assets/images/service/img26.jpg') }}" alt="Marketing relationnel" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Marketing relationnel</h4>
                            <p class="mb-4">Nous mettons en place des stratégies pour construire une relation de confiance durable entre votre entreprise et vos clients.</p>
                        </div>
                    </div>
                </div>

                <!-- Formation -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5">
                        <img src="{{ asset('assets/images/service/img27.jpg') }}" alt="Formation" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Formation</h4>
                            <p class="mb-4">Nous proposons des formations professionnelles adaptées pour renforcer les compétences de vos équipes et améliorer leurs performances.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top:150px">
                <!-- Représentation commerciale -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block ">
                        <img src="{{ asset('assets/images/service/img28.jpg') }}" alt="Représentation commerciale" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Représentation commerciale</h4>
                            <p class="mb-4">Nous assurons la promotion et la représentation de vos produits ou services auprès de vos clients cibles pour augmenter votre chiffre d’affaires.</p>
                        </div>
                    </div>
                </div>

                <!-- Marketing relationnel -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5">
                        <img src="{{ asset('assets/images/service/img29.jpg') }}" alt="Marketing relationnel" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Marketing relationnel</h4>
                            <p class="mb-4">Nous mettons en place des stratégies pour construire une relation de confiance durable entre votre entreprise et vos clients.</p>
                        </div>
                    </div>
                </div>

                <!-- Formation -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5">
                        <img src="{{ asset('assets/images/service/img30.jpg') }}" alt="Formation" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Formation</h4>
                            <p class="mb-4">Nous proposons des formations professionnelles adaptées pour renforcer les compétences de vos équipes et améliorer leurs performances.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top:150px">
                <!-- Représentation commerciale -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block ">
                        <img src="{{ asset('assets/images/service/img31.jpg') }}" alt="Représentation commerciale" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Représentation commerciale</h4>
                            <p class="mb-4">Nous assurons la promotion et la représentation de vos produits ou services auprès de vos clients cibles pour augmenter votre chiffre d’affaires.</p>
                        </div>
                    </div>
                </div>

                <!-- Marketing relationnel -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5">
                        <img src="{{ asset('assets/images/service/img32.jpg') }}" alt="Marketing relationnel" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Marketing relationnel</h4>
                            <p class="mb-4">Nous mettons en place des stratégies pour construire une relation de confiance durable entre votre entreprise et vos clients.</p>
                        </div>
                    </div>
                </div>

                <!-- Formation -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5">
                        <img src="{{ asset('assets/images/service/img33.jpg') }}" alt="Formation" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Formation</h4>
                            <p class="mb-4">Nous proposons des formations professionnelles adaptées pour renforcer les compétences de vos équipes et améliorer leurs performances.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top:150px">
                <!-- Représentation commerciale -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block ">
                        <img src="{{ asset('assets/images/service/img33.jpg') }}" alt="Représentation commerciale" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Représentation commerciale</h4>
                            <p class="mb-4">Nous assurons la promotion et la représentation de vos produits ou services auprès de vos clients cibles pour augmenter votre chiffre d’affaires.</p>
                        </div>
                    </div>
                </div>

                <!-- Marketing relationnel -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5">
                        <img src="{{ asset('assets/images/service/img34.jpg') }}" alt="Marketing relationnel" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Marketing relationnel</h4>
                            <p class="mb-4">Nous mettons en place des stratégies pour construire une relation de confiance durable entre votre entreprise et vos clients.</p>
                        </div>
                    </div>
                </div>

                <!-- Formation -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5">
                        <img src="{{ asset('assets/images/service/img35.jpg') }}" alt="Formation" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Formation</h4>
                            <p class="mb-4">Nous proposons des formations professionnelles adaptées pour renforcer les compétences de vos équipes et améliorer leurs performances.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top:150px">
                <!-- Représentation commerciale -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block ">
                        <img src="{{ asset('assets/images/service/img36.jpg') }}" alt="Représentation commerciale" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Représentation commerciale</h4>
                            <p class="mb-4">Nous assurons la promotion et la représentation de vos produits ou services auprès de vos clients cibles pour augmenter votre chiffre d’affaires.</p>
                        </div>
                    </div>
                </div>

                <!-- Marketing relationnel -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5">
                        <img src="{{ asset('assets/images/service/img37.jpg') }}" alt="Marketing relationnel" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Marketing relationnel</h4>
                            <p class="mb-4">Nous mettons en place des stratégies pour construire une relation de confiance durable entre votre entreprise et vos clients.</p>
                        </div>
                    </div>
                </div>

                <!-- Formation -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5">
                        <img src="{{ asset('assets/images/service/img38.jpg') }}" alt="Formation" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Formation</h4>
                            <p class="mb-4">Nous proposons des formations professionnelles adaptées pour renforcer les compétences de vos équipes et améliorer leurs performances.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top:150px">
                <!-- Représentation commerciale -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block ">
                        <img src="{{ asset('assets/images/service/img39.jpg') }}" alt="Représentation commerciale" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Représentation commerciale</h4>
                            <p class="mb-4">Nous assurons la promotion et la représentation de vos produits ou services auprès de vos clients cibles pour augmenter votre chiffre d’affaires.</p>
                        </div>
                    </div>
                </div>

                <!-- Marketing relationnel -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5">
                        <img src="{{ asset('assets/images/service/img40.jpg') }}" alt="Marketing relationnel" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Marketing relationnel</h4>
                            <p class="mb-4">Nous mettons en place des stratégies pour construire une relation de confiance durable entre votre entreprise et vos clients.</p>
                        </div>
                    </div>
                </div>

                <!-- Formation -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5">
                        <img src="{{ asset('assets/images/service/img41.jpg') }}" alt="Formation" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Formation</h4>
                            <p class="mb-4">Nous proposons des formations professionnelles adaptées pour renforcer les compétences de vos équipes et améliorer leurs performances.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top:150px">
                <!-- Représentation commerciale -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block ">
                        <img src="{{ asset('assets/images/service/img42.jpg') }}" alt="Représentation commerciale" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Représentation commerciale</h4>
                            <p class="mb-4">Nous assurons la promotion et la représentation de vos produits ou services auprès de vos clients cibles pour augmenter votre chiffre d’affaires.</p>
                        </div>
                    </div>
                </div>

                <!-- Marketing relationnel -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5">
                        <img src="{{ asset('assets/images/service/img43.jpg') }}" alt="Marketing relationnel" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Marketing relationnel</h4>
                            <p class="mb-4">Nous mettons en place des stratégies pour construire une relation de confiance durable entre votre entreprise et vos clients.</p>
                        </div>
                    </div>
                </div>

                <!-- Formation -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5">
                        <img src="{{ asset('assets/images/service/img44.jpg') }}" alt="Formation" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Formation</h4>
                            <p class="mb-4">Nous proposons des formations professionnelles adaptées pour renforcer les compétences de vos équipes et améliorer leurs performances.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top:150px">
                <!-- Représentation commerciale -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block ">
                        <img src="{{ asset('assets/images/service/img45.jpg') }}" alt="Représentation commerciale" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Représentation commerciale</h4>
                            <p class="mb-4">Nous assurons la promotion et la représentation de vos produits ou services auprès de vos clients cibles pour augmenter votre chiffre d’affaires.</p>
                        </div>
                    </div>
                </div>

                <!-- Marketing relationnel -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5">
                        <img src="{{ asset('assets/images/service/img46.jpg') }}" alt="Marketing relationnel" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Marketing relationnel</h4>
                            <p class="mb-4">Nous mettons en place des stratégies pour construire une relation de confiance durable entre votre entreprise et vos clients.</p>
                        </div>
                    </div>
                </div>

                <!-- Formation -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5">
                        <img src="{{ asset('assets/images/service/img47.jpg') }}" alt="Formation" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Formation</h4>
                            <p class="mb-4">Nous proposons des formations professionnelles adaptées pour renforcer les compétences de vos équipes et améliorer leurs performances.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top:150px">
                <!-- Représentation commerciale -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block ">
                        <img src="{{ asset('assets/images/service/img48.jpg') }}" alt="Représentation commerciale" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Représentation commerciale</h4>
                            <p class="mb-4">Nous assurons la promotion et la représentation de vos produits ou services auprès de vos clients cibles pour augmenter votre chiffre d’affaires.</p>
                        </div>
                    </div>
                </div>

                <!-- Marketing relationnel -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5">
                        <img src="{{ asset('assets/images/service/img49.jpg') }}" alt="Marketing relationnel" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Marketing relationnel</h4>
                            <p class="mb-4">Nous mettons en place des stratégies pour construire une relation de confiance durable entre votre entreprise et vos clients.</p>
                        </div>
                    </div>
                </div>

                <!-- Formation -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5">
                        <img src="{{ asset('assets/images/service/img50.jpg') }}" alt="Formation" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Formation</h4>
                            <p class="mb-4">Nous proposons des formations professionnelles adaptées pour renforcer les compétences de vos équipes et améliorer leurs performances.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top:150px">
                <!-- Représentation commerciale -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block ">
                        <img src="{{ asset('assets/images/service/img51.jpg') }}" alt="Représentation commerciale" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Représentation commerciale</h4>
                            <p class="mb-4">Nous assurons la promotion et la représentation de vos produits ou services auprès de vos clients cibles pour augmenter votre chiffre d’affaires.</p>
                        </div>
                    </div>
                </div>

                <!-- Marketing relationnel -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5">
                        <img src="{{ asset('assets/images/service/img52.jpg') }}" alt="Marketing relationnel" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Marketing relationnel</h4>
                            <p class="mb-4">Nous mettons en place des stratégies pour construire une relation de confiance durable entre votre entreprise et vos clients.</p>
                        </div>
                    </div>
                </div>

                <!-- Formation -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5">
                        <img src="{{ asset('assets/images/service/img53.jpg') }}" alt="Formation" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Formation</h4>
                            <p class="mb-4">Nous proposons des formations professionnelles adaptées pour renforcer les compétences de vos équipes et améliorer leurs performances.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top:150px">
                <!-- Représentation commerciale -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block ">
                        <img src="{{ asset('assets/images/service/img54.jpg') }}" alt="Représentation commerciale" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Représentation commerciale</h4>
                            <p class="mb-4">Nous assurons la promotion et la représentation de vos produits ou services auprès de vos clients cibles pour augmenter votre chiffre d’affaires.</p>
                        </div>
                    </div>
                </div>

                <!-- Marketing relationnel -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5">
                        <img src="{{ asset('assets/images/service/img55.jpg') }}" alt="Marketing relationnel" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Marketing relationnel</h4>
                            <p class="mb-4">Nous mettons en place des stratégies pour construire une relation de confiance durable entre votre entreprise et vos clients.</p>
                        </div>
                    </div>
                </div>

                <!-- Formation -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5">
                        <img src="{{ asset('assets/images/service/img56.jpg') }}" alt="Formation" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Formation</h4>
                            <p class="mb-4">Nous proposons des formations professionnelles adaptées pour renforcer les compétences de vos équipes et améliorer leurs performances.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top:150px">
                <!-- Représentation commerciale -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block ">
                        <img src="{{ asset('assets/images/service/img57.jpg') }}" alt="Représentation commerciale" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Représentation commerciale</h4>
                            <p class="mb-4">Nous assurons la promotion et la représentation de vos produits ou services auprès de vos clients cibles pour augmenter votre chiffre d’affaires.</p>
                        </div>
                    </div>
                </div>

                <!-- Marketing relationnel -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5">
                        <img src="{{ asset('assets/images/service/img58.jpg') }}" alt="Marketing relationnel" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Marketing relationnel</h4>
                            <p class="mb-4">Nous mettons en place des stratégies pour construire une relation de confiance durable entre votre entreprise et vos clients.</p>
                        </div>
                    </div>
                </div>

                <!-- Formation -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5">
                        <img src="{{ asset('assets/images/service/img59.jpg') }}" alt="Formation" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Formation</h4>
                            <p class="mb-4">Nous proposons des formations professionnelles adaptées pour renforcer les compétences de vos équipes et améliorer leurs performances.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top:150px">
                <!-- Représentation commerciale -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block ">
                        <img src="{{ asset('assets/images/service/img60.jpg') }}" alt="Représentation commerciale" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Représentation commerciale</h4>
                            <p class="mb-4">Nous assurons la promotion et la représentation de vos produits ou services auprès de vos clients cibles pour augmenter votre chiffre d’affaires.</p>
                        </div>
                    </div>
                </div>

                <!-- Marketing relationnel -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5">
                        <img src="{{ asset('assets/images/service/img61.jpg') }}" alt="Marketing relationnel" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Marketing relationnel</h4>
                            <p class="mb-4">Nous mettons en place des stratégies pour construire une relation de confiance durable entre votre entreprise et vos clients.</p>
                        </div>
                    </div>
                </div>

                <!-- Formation -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5">
                        <img src="{{ asset('assets/images/service/img62.jpg') }}" alt="Formation" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Formation</h4>
                            <p class="mb-4">Nous proposons des formations professionnelles adaptées pour renforcer les compétences de vos équipes et améliorer leurs performances.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top:150px">
                <!-- Représentation commerciale -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block ">
                        <img src="{{ asset('assets/images/service/img63.jpg') }}" alt="Représentation commerciale" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Représentation commerciale</h4>
                            <p class="mb-4">Nous assurons la promotion et la représentation de vos produits ou services auprès de vos clients cibles pour augmenter votre chiffre d’affaires.</p>
                        </div>
                    </div>
                </div>

                <!-- Marketing relationnel -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5">
                        <img src="{{ asset('assets/images/service/img64.jpg') }}" alt="Marketing relationnel" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Marketing relationnel</h4>
                            <p class="mb-4">Nous mettons en place des stratégies pour construire une relation de confiance durable entre votre entreprise et vos clients.</p>
                        </div>
                    </div>
                </div>

                <!-- Formation -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5">
                        <img src="{{ asset('assets/images/service/img65.jpg') }}" alt="Formation" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Formation</h4>
                            <p class="mb-4">Nous proposons des formations professionnelles adaptées pour renforcer les compétences de vos équipes et améliorer leurs performances.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top:150px">
                <!-- Représentation commerciale -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block ">
                        <img src="{{ asset('assets/images/service/img66.jpg') }}" alt="Représentation commerciale" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Représentation commerciale</h4>
                            <p class="mb-4">Nous assurons la promotion et la représentation de vos produits ou services auprès de vos clients cibles pour augmenter votre chiffre d’affaires.</p>
                        </div>
                    </div>
                </div>

                <!-- Marketing relationnel -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5">
                        <img src="{{ asset('assets/images/service/img67.jpg') }}" alt="Marketing relationnel" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Marketing relationnel</h4>
                            <p class="mb-4">Nous mettons en place des stratégies pour construire une relation de confiance durable entre votre entreprise et vos clients.</p>
                        </div>
                    </div>
                </div>

                <!-- Formation -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5">
                        <img src="{{ asset('assets/images/service/img68.jpg') }}" alt="Formation" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Formation</h4>
                            <p class="mb-4">Nous proposons des formations professionnelles adaptées pour renforcer les compétences de vos équipes et améliorer leurs performances.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top:150px">
                <!-- Représentation commerciale -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block ">
                        <img src="{{ asset('assets/images/service/img69.jpg') }}" alt="Représentation commerciale" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Représentation commerciale</h4>
                            <p class="mb-4">Nous assurons la promotion et la représentation de vos produits ou services auprès de vos clients cibles pour augmenter votre chiffre d’affaires.</p>
                        </div>
                    </div>
                </div>

                <!-- Marketing relationnel -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5">
                        <img src="{{ asset('assets/images/service/img80.jpg') }}" alt="Marketing relationnel" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Marketing relationnel</h4>
                            <p class="mb-4">Nous mettons en place des stratégies pour construire une relation de confiance durable entre votre entreprise et vos clients.</p>
                        </div>
                    </div>
                </div>

                <!-- Formation -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5">
                        <img src="{{ asset('assets/images/service/img81.jpg') }}" alt="Formation" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Formation</h4>
                            <p class="mb-4">Nous proposons des formations professionnelles adaptées pour renforcer les compétences de vos équipes et améliorer leurs performances.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top:150px">
                <!-- Représentation commerciale -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block ">
                        <img src="{{ asset('assets/images/service/img82.jpg') }}" alt="Représentation commerciale" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Représentation commerciale</h4>
                            <p class="mb-4">Nous assurons la promotion et la représentation de vos produits ou services auprès de vos clients cibles pour augmenter votre chiffre d’affaires.</p>
                        </div>
                    </div>
                </div>

                <!-- Marketing relationnel -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5">
                        <img src="{{ asset('assets/images/service/img83.jpg') }}" alt="Marketing relationnel" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Marketing relationnel</h4>
                            <p class="mb-4">Nous mettons en place des stratégies pour construire une relation de confiance durable entre votre entreprise et vos clients.</p>
                        </div>
                    </div>
                </div>

                <!-- Formation -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block mb-5">
                        <img src="{{ asset('assets/images/service/img52.jpg') }}" alt="Formation" class="img-fluid">
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">Formation</h4>
                            <p class="mb-4">Nous proposons des formations professionnelles adaptées pour renforcer les compétences de vos équipes et améliorer leurs performances.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <section class="section cta-page">
        <div class="container">
          <div class="row">
            <div class="col-lg-7">
              <div class="cta-content">
                <div class="divider mb-4"></div>
                <h2 class="mb-5 text-lg">
                  <span class="title-color">Retrouvez la santé</span> naturellement
                </h2>
                <a href="{{ route('contact') }}" class="btn btn-main-2 btn-round-full">
                  Prendre rendez-vous<i class="icofont-simple-right ml-2"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>

@endsection
