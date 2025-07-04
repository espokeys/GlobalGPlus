@extends('layouts.master')

@section('content')
    <section class=" page-title banner_evenement">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <h1 class="text-capitalize text-lg "></h1>


                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section team-page"  style="margin-bottom: 500px">
        <div class="container">


            <div class="row mb-5 ">
                <div class="col-12 text-center">
                    <h1 style="font-size: 52px; font-weight: 700; color: #223a66;">
                        Nos <span style="color: tomato;">Evenements</span>
                    </h1>
                    <img src="{{ asset('assets/images/bg/soulign.png') }}" alt="Soulignement décoratif"
                        style="display: block; margin: 10px auto 0; height: 25px;">
                </div>
            </div>

            <!--
                        <div class="row">

                            <div class="col-md-4 mb-4 text-center">
                                <div class="gallery-item">
                                    <a href="{{ asset('assets/images/team/img5.jpg') }}" class="glightbox" data-gallery="formation1">
                                        <img src="{{ asset('assets/images/team/img6.jpg') }}" alt="Santé & Bien-être"
                                            class="img-fluid rounded shadow" style="height: 250px; object-fit: cover;">
                                        <div class="overlay"><i class="fa fa-search-plus"></i></div>
                                    </a>
                                </div>
                                <h4 class="mt-3">Santé & Bien-être</h4>
                                <p>Apprenez les fondamentaux de la santé naturelle à travers les compléments alimentaires SHINY.</p>
                                <a href="{{ asset('assets/images/team/img15.jpg') }}" class="glightbox d-none"
                                    data-gallery="formation1"></a>
                                <a href="{{ asset('assets/images/team/img18.jpg') }}" class="glightbox d-none"
                                    data-gallery="formation1"></a>
                                <a href="{{ asset('assets/images/team/img19.jpg') }}" class="glightbox d-none"
                                    data-gallery="formation1"></a>
                            </div>

                           
                            <div class="col-md-4 mb-4 text-center">
                                <div class="gallery-item">
                                    <a href="{{ asset('assets/images/team/img7.jpg') }}" class="glightbox" data-gallery="formation2">
                                        <img src="{{ asset('assets/images/team/img8.jpg') }}" alt="Marketing Relationnel"
                                            class="img-fluid rounded shadow" style="height: 250px; object-fit: cover;">
                                        <div class="overlay"><i class="fa fa-search-plus"></i></div>
                                    </a>
                                </div>
                                <h4 class="mt-3">Marketing Relationnel</h4>
                                <p>Découvrez les stratégies de vente directe et de développement d’un réseau de distribution SHINY.</p>
                                <a href="{{ asset('assets/images/team/img9.jpg') }}" class="glightbox d-none"
                                    data-gallery="formation2"></a>
                                <a href="{{ asset('assets/images/team/img13.jpg') }}" class="glightbox d-none"
                                    data-gallery="formation2"></a>
                                <a href="{{ asset('assets/images/team/img14.jpg') }}" class="glightbox d-none"
                                    data-gallery="formation2"></a>
                            </div>

                            <div class="col-md-4 mb-4 text-center">
                                <div class="gallery-item">
                                    <a href="{{ asset('assets/images/team/img16.jpg') }}" class="glightbox" data-gallery="formation3">
                                        <img src="{{ asset('assets/images/team/img20.jpg') }}" alt="Leadership & Autonomie Financière"
                                            class="img-fluid rounded shadow" style="height: 250px; object-fit: cover;">
                                        <div class="overlay"><i class="fa fa-search-plus"></i></div>
                                    </a>
                                </div>
                                <h4 class="mt-3">Leadership & Autonomie</h4>
                                <p>Développez votre potentiel de leader pour atteindre l'indépendance financière avec SHINY.</p>
                                <a href="{{ asset('assets/images/team/img21.jpg') }}" class="glightbox d-none"
                                    data-gallery="formation3"></a>
                                <a href="{{ asset('assets/images/team/img22.jpg') }}" class="glightbox d-none"
                                    data-gallery="formation3"></a>
                                <a href="{{ asset('assets/images/team/img23.jpg') }}" class="glightbox d-none"
                                    data-gallery="formation3"></a>
                            </div>

                        </div>
                        -->
        </div>
    </section>

    <section class="section cta-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="cta-content">
                        <div class="divider mb-4"></div>
                        <h2 class="mb-5 text-lg text-white">
                            <span class="title-color text-white">Retrouvez la santé</span> naturellement
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
