<header>
    <!-- Top Bar -->
    <div class="header-top-bar">
        <div class="container">
            <div class="row align-items-center">
                <!-- Infos de gauche -->
                <div class="col-md-12 col-lg-6 mb-2 mb-lg-0 text-center text-lg-left">
                    <ul class="top-bar-info list-inline mb-0">
                        <li class="list-inline-item d-block d-md-inline">
                            <a href="mailto:globalgplus@gmail.com">
                                <i class="icofont-support-faq mr-1"></i> globalgplus@gmail.com
                            </a>
                        </li>
                        <li class="list-inline-item d-block d-md-inline">
                            <i class="icofont-location-pin mr-1"></i> 05BP618 LOME05 Lomé
                        </li>
                    </ul>
                </div>

                <!-- Contact de droite -->
                <div class="col-md-12 col-lg-6 text-center text-lg-right">
                    <a href="tel:+22890325117" class="text-decoration-none text-white">
                        <span>Appelez maintenant : </span>
                        <span class="h5 font-weight-bold d-block d-md-inline">
                            90 32 51 17 / 99 43 85 79
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navigation" id="navbar">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('assets/images/logos.png') }}" alt="Logo" class="img-fluid" />
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarmain"
                aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarmain">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('apropos') }}">À propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('service') }}">Services</a>
                    </li>
                    <li class="nav-item dropdown">
                        <!-- Ton bouton menu -->
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown02" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Actualités
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="dropdown02">
                            <li>
                                <a class="dropdown-item" href="{{ route('formation') }}">Formations</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('evenement') }}">Évènements</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
