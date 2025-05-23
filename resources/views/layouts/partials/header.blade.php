<header>
    <div class="header-top-bar">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <ul class="top-bar-info list-inline-item pl-0 mb-0">
              <li class="list-inline-item">
                <a href="mailto:support@gmail.com"
                  ><i class="icofont-support-faq mr-2"></i
                  >globalgplus@gmail.com</a
                >
              </li>
              <li class="list-inline-item">
                <i class="icofont-location-pin mr-2"></i>Adresse : 05BP618 LOME05 lomé
              </li>
            </ul>
          </div>
          <div class="col-lg-6">
            <div class="text-lg-right top-right-bar mt-2 mt-lg-0">
              <a href="tel:+23-345-67890">
                <span>Appelez maintenant : </span>
                <span class="h4">90 32 51 17/99 43 85 79</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <nav class="navbar navbar-expand-lg navigation" id="navbar">
      <div class="container">
        <a class="navbar-brand" href="/">
          <img src="{{ asset('assets/images/logos.png') }}" alt="" class="img-fluid" />
        </a>

        <button
          class="navbar-toggler collapsed"
          type="button"
          data-toggle="collapse"
          data-target="#navbarmain"
          aria-controls="navbarmain"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="icofont-navigation-menu"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarmain">
          <ul class="navbar-nav ml-auto">
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
              <a
                class="nav-link dropdown-toggle"
                href="department.html"
                id="dropdown02"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
                >Actualites <i class="icofont-thin-down"></i
              ></a>
              <ul class="dropdown-menu" aria-labelledby="dropdown02">
                <li>
                  <a class="dropdown-item" href="{{ route('formation') }}"
                    >Farmations</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="department-single.html"
                    >Evenements</a
                  >
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
