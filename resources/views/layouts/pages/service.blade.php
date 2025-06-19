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
                    <img class="mb-3" src="{{ asset('assets/images/bg/soulign.png') }}" alt="Soulignement décoratif" />
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
                            <p>Nous vous aidons à développer vos ventes à travers des actions ciblées et efficaces sur le
                                terrain.</p>
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
                            <p>Créez un lien durable avec vos clients grâce à nos stratégies de marketing personnalisées.
                            </p>
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
                            <p>Nous formons vos équipes pour les rendre plus performantes, motivées et prêtes à relever tous
                                les défis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section service-2 py-5">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h2 class="section-title">Nos types de produits</h2>
                </div>
            </div>

            <div class="row gy-4">
                <div class="col-lg-4 col-md-6">
                    <div class="service-block">
                        <img src="{{ asset('assets/images/service/img7.jpg') }}" alt="Représentation commerciale"
                            class="img-fluid rounded" />
                        <div class="content">
                            <h4 class="mt-4 text-center  title-color">BURN Green tea</h4>
                            <p>
                                🔥 BURN Green Tea – Active ta journée naturellement !
                                ✨ Brûle les graisses, booste ton énergie, détoxifie ton corps.
                                🍃 100% naturel. 100% efficace.
                                💪 Pour un esprit léger et un corps tonique.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-block">
                        <img src="{{ asset('assets/images/service/img9.jpg') }}" alt="Formation"
                            class="img-fluid rounded" />
                        <div class="content">
                            <h4 class="mt-4 text-center  title-color">IP 24/7</h4>
                            <p>
                                🚀 IP 24/7 – Ta protection quotidienne, sans pause !
                                Défense complète contre les agressions extérieures.
                                💧 Hydratation et soin intensifs 24h/24, 7j/7.
                                🌿 Formule naturelle pour une peau saine et éclatante.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-block">
                        <img src="{{ asset('assets/images/service/img10.jpg') }}" alt="Représentation commerciale"
                            class="img-fluid rounded">
                        <div class="content">
                            <h4 class="mt-4 text-center mb-2 title-color"> IP 24/7</h4>
                            <p>IP 24/7 — Protection antibactérienne et antivirale continue, partout où tu vas !
                                🌬️ Bouclier contre les microbes aéroportés, idéal en mobilité (aéroports, transports…).
                                💧 Hydratation active 24h/24 pour une peau saine et protégée.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-block">
                        <img src="{{ asset('assets/images/service/img13.jpg') }}" alt="Marketing relationnel"
                            class="img-fluid rounded">
                        <div class="content">
                            <h4 class="mt-4 text-center mb-2 title-color">Vida (Maxx)</h4>
                            <p>Vida (Maxx) — Pour un cœur sain et une bonne circulation sanguine.
                                💪 Favorise la santé globale du corps en améliorant le flux sanguin.
                                🌿 Soutient l’énergie et le bien-être quotidien.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-block">
                        <img src="{{ asset('assets/images/service/img12.jpg') }}" alt="Formation" class="img-fluid rounded">
                        <div class="content">
                            <h4 class="mt-4 text-center mb-2 title-color">Vida (Maxx)</h4>
                            <p>Vida (Maxx) — Pour un cœur sain et une bonne circulation sanguine.
                                💪 Favorise la santé globale du corps en améliorant le flux sanguin.
                                🌿 Soutient l’énergie et le bien-être quotidien.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-block">
                        <img src="{{ asset('assets/images/service/img5.jpg') }}" alt="Représentation commerciale"
                            class="img-fluid rounded">
                        <div class="content">
                            <h4 class="mt-4 text-center mb-2 title-color">Natura-Ceuticals</h4>
                            <p>🌿 Natura-Ceuticals — Compléments naturels pour soutenir la santé globale.
                                Favorise le bien-être général grâce à des ingrédients issus de la nature.
                                Aide à renforcer le système immunitaire et à maintenir un équilibre sain du corps.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-block">
                        <img src="{{ asset('assets/images/service/img7.jpg') }}" alt="Représentation commerciale"
                            class="img-fluid rounded" />
                        <div class="content">
                            <h4 class="mt-4 text-center  title-color">Représentation commerciale</h4>
                            <p>
                            <div class="col-lg-4 col-md-6">
                                <div class="service-block">
                                    <img src="{{ asset('assets/images/service/img7.jpg') }}"
                                        alt="Représentation commerciale" class="img-fluid rounded" />
                                    <div class="content">
                                        <h4 class="mt-4 text-center  title-color">BURN Green tea</h4>
                                        <p>
                                            🔥 BURN Green Tea – Active ta journée naturellement !
                                            ✨ Brûle les graisses, booste ton énergie, détoxifie ton corps.
                                            🍃 100% naturel. 100% efficace.
                                            💪 Pour un esprit léger et un corps tonique.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-block">
                        <img src="{{ asset('assets/images/service/img7.jpg') }}" alt="Représentation commerciale"
                            class="img-fluid rounded" />
                        <div class="content">
                            <h4 class="mt-4 text-center  title-color">BURN Green tea</h4>
                            <p>
                                🔥 BURN Green Tea – Active ta journée naturellement !
                                ✨ Brûle les graisses, booste ton énergie, détoxifie ton corps.
                                🍃 100% naturel. 100% efficace.
                                💪 Pour un esprit léger et un corps tonique.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-block">
                        <img src="{{ asset('assets/images/service/img11.jpg') }}" alt="Formation"
                            class="img-fluid rounded">
                        <div class="content">
                            <h4 class="mt-4 text-center mb-2 title-color">Burn Slim RP </h4>
                            <p>Burn Slim RP – Le pack minceur complet pour transformer votre silhouette !
                                Brûlez les graisses, boostez votre énergie et contrôlez votre appétit naturellement.
                                Formulé avec des ingrédients puissants pour un résultat rapide et durable.
                                Commencez votre parcours minceur dès aujourd’hui avec Burn Slim RP !</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-block">
                        <img src="{{ asset('assets/images/service/img13.jpg') }}" alt="Représentation commerciale"
                            class="img-fluid rounded">
                        <div class="content">
                            <h4 class="mt-4 text-center mb-2 title-color">Vida (Maxx)</h4>
                            <p>Vida (Maxx) — Pour un cœur sain et une bonne circulation sanguine.
                                Favorise la santé globale du corps en améliorant le flux sanguin.
                                🌿 Soutient l’énergie et le bien-être quotidien.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-block">
                        <img src="{{ asset('assets/images/service/img11.jpg') }}" alt="Formation"
                            class="img-fluid rounded">
                        <div class="content">
                            <h4 class="mt-4 text-center mb-2 title-color">Burn Slim RP </h4>
                            <p>Burn Slim RP – Le pack minceur complet pour transformer votre silhouette !
                                Brûlez les graisses, boostez votre énergie et contrôlez votre appétit naturellement.
                                Formulé avec des ingrédients puissants pour un résultat rapide et durable.
                                Commencez votre parcours minceur dès aujourd’hui avec Burn Slim RP !</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-block">
                        <img src="{{ asset('assets/images/service/img15.jpg') }}" alt="Formation"
                            class="img-fluid rounded">
                        <div class="content">
                            <h4 class="mt-4 text-center mb-2 title-color">Formation</h4>
                            <p>Nous proposons des formations professionnelles adaptées pour renforcer les compétences de
                                vos
                                équipes et améliorer leurs performances.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-block">
                        <img src="{{ asset('assets/images/service/img16.jpg') }}" alt="Représentation commerciale"
                            class="img-fluid rounded">
                        <div class="content">
                            <h4 class="mt-4 text-center mb-2 title-color">Naturacentials </h4>
                            <p>🌿 Protège les dents et les gencives contre les infections.

                                🦷 Prévient les caries et la mauvaise haleine.
                                Rafraîchit l’haleine naturellement.
                                Effet antibactérien grâce aux extraits de Guava, Myrrhe, Aloe Vera et autres plantes.
                                ❄️ Sensation de fraîcheur intense sans produits chimiques agressifs.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-block">
                        <img src="{{ asset('assets/images/service/img16.jpg') }}" alt="Représentation commerciale"
                            class="img-fluid rounded">
                        <div class="content">
                            <h4 class="mt-4 text-center mb-2 title-color">Naturacentials </h4>
                            <p>Naturacentials Herbal Toothpaste aide à blanchir naturellement les dents, éliminer les
                                bactéries, renforcer les gencives et protéger toute la bouche grâce à sa formule 100% à base
                                de plantes. Une haleine fraîche et une santé bucco-dentaire optimale au naturel !</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-block">
                        <img src="{{ asset('assets/images/service/img16.jpg') }}" alt="Représentation commerciale"
                            class="img-fluid rounded">
                        <div class="content">
                            <h4 class="mt-4 text-center mb-2 title-color">Naturacentials </h4>
                            <p>🌿 Protège les dents et les gencives contre les infections.

                                🦷 Prévient les caries et la mauvaise haleine.
                                Rafraîchit l’haleine naturellement.
                                Effet antibactérien grâce aux extraits de Guava, Myrrhe, Aloe Vera et autres plantes.
                                ❄️ Sensation de fraîcheur intense sans produits chimiques agressifs.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-block">
                        <img src="{{ asset('assets/images/service/img16.jpg') }}" alt="Représentation commerciale"
                            class="img-fluid rounded">
                        <div class="content">
                            <h4 class="mt-4 text-center mb-2 title-color">Naturacentials </h4>
                            <p>Naturacentials Herbal Toothpaste aide à blanchir naturellement les dents, éliminer les
                                bactéries, renforcer les gencives et protéger toute la bouche grâce à sa formule 100% à base
                                de plantes. Une haleine fraîche et une santé bucco-dentaire optimale au naturel !</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-block">
                        <img src="{{ asset('assets/images/service/img20.jpg') }}" alt="Marketing relationnel"
                            class="img-fluid rounded">
                        <div class="content">
                            <h4 class="mt-4 text-center mb-2 title-color">Marketing relationnel</h4>
                            <p>Nous mettons en place des stratégies pour construire une relation de confiance durable entre
                                votre entreprise et vos clients.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-block">
                        <img src="{{ asset('assets/images/service/img21.jpg') }}" alt="Formation"
                            class="img-fluid rounded">
                        <div class="content">
                            <h4 class="mt-4 text-center mb-2 title-color">Choleduz </h4>
                            <p>Choleduz est un complément riche en oméga-3 pur (EPA & DHA) qui favorise la santé
                                cardiovasculaire, réduit le cholestérol, soutient le cerveau et aide à prévenir les
                                inflammations. Idéal pour un cœur et un esprit en pleine forme.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-block">
                        <img src="{{ asset('assets/images/service/img22.jpg') }}" alt="Représentation commerciale"
                            class="img-fluid rounded">
                        <div class="content">
                            <h4 class="mt-4 text-center mb-2 title-color">Choleduz </h4>
                            <p>Choleduz aide à maintenir un cœur en bonne santé grâce à sa forte teneur en oméga-3. Il
                                réduit le mauvais cholestérol, améliore la mémoire, soutient la circulation sanguine et
                                protège contre les inflammations. Un allié quotidien pour le bien-être général.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-block">
                        <img src="{{ asset('assets/images/service/img23.jpg') }}" alt="Marketing relationnel"
                            class="img-fluid rounded">
                        <div class="content">
                            <h4 class="mt-4 text-center mb-2 title-color">Choleduz </h4>
                            <p>Choleduz aide à réduire le mauvais cholestérol, protège le cœur, améliore la circulation
                                sanguine et soutient la mémoire. Il renforce aussi l’immunité, apaise les douleurs
                                articulaires et favorise la santé du cerveau, des yeux et de la peau.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-block">
                        <img src="{{ asset('assets/images/service/img24.jpg') }}" alt="Formation"
                            class="img-fluid rounded">
                        <div class="content">
                            <h4 class="mt-4 text-center mb-2 title-color">Choleduz</h4>
                            <p>Choleduz soutient la santé cardiovasculaire, aide à prévenir les maladies liées au
                                cholestérol, renforce les fonctions cérébrales et booste le système immunitaire grâce à
                                l’oméga-3.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-block">
                        <img src="{{ asset('assets/images/service/img25.jpg') }}" alt="Représentation commerciale"
                            class="img-fluid rounded" />
                        <div class="content">
                            <h4 class="mt-4 text-center mb-2 title-color">RestorLyf</h4>
                            <p>RestorLyf revitalise le corps, booste l’énergie et renforce le système immunitaire pour un
                                bien-être durable.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-block">
                        <img src="{{ asset('assets/images/service/img26.jpg') }}" alt="Marketing relationnel"
                            class="img-fluid rounded" />
                        <div class="content">
                            <h4 class="mt-4 text-center mb-2 title-color">MyChoco</h4>
                            <p>MyChoco offre une délicieuse source d’énergie naturelle, aide à réduire la fatigue, améliore
                                la concentration et soutient un mode de vie actif et équilibré.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-block">
                        <img src="{{ asset('assets/images/service/img27.jpg') }}" alt="Formation"
                            class="img-fluid rounded" />
                        <div class="content">
                            <h4 class="mt-4 text-center mb-2 title-color">Alzheimer </h4>
                            <p>Nos produits naturels aident à soutenir les fonctions cognitives, à améliorer la mémoire et à
                                ralentir la progression des troubles liés à la maladie d’Alzheimer, favorisant ainsi une
                                meilleure qualité de vie.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-block">
                        <img src="{{ asset('assets/images/service/img28.jpg') }}" alt="Représentation commerciale"
                            class="img-fluid rounded" />
                        <div class="content">
                            <h4 class="mt-4 text-center mb-2 title-color">Représentation commerciale</h4>
                            <p>Nous assurons la promotion et la représentation de vos produits ou services auprès de vos
                                clients cibles pour augmenter votre chiffre d’affaires.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-block">
                        <img src="{{ asset('assets/images/service/img29.jpg') }}" alt="Marketing relationnel"
                            class="img-fluid rounded" />
                        <div class="content">
                            <h4 class="mt-4 text-center mb-2 title-color">Marketing relationnel</h4>
                            <p>Nous mettons en place des stratégies pour construire une relation de confiance durable entre
                                votre entreprise et vos clients.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-block">
                        <img src="{{ asset('assets/images/service/img30.jpg') }}" alt="Formation"
                            class="img-fluid rounded" />
                        <div class="content">
                            <h4 class="mt-4 text-center mb-2 title-color">Nos produits</h4>
                            <p>Nos produits naturels aident à soutenir la santé cérébrale et peuvent contribuer à ralentir,
                                voire améliorer les symptômes.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-block">
                        <img src="{{ asset('assets/images/service/img31.jpg') }}" alt="Représentation commerciale"
                            class="img-fluid rounded" />
                        <div class="content">
                            <h4 class="mt-4 text-center mb-2 title-color">Naturacentials</h4>
                            <p>Naturacentials Herbal Toothpaste aide à blanchir naturellement les dents, éliminer les
                                bactéries, renforcer les gencives et protéger toute la bouche grâce à sa formule 100% à base
                                de plantes. Une haleine fraîche et une santé bucco-dentaire optimale au naturel !</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-block">
                        <img src="{{ asset('assets/images/service/img32.jpg') }}" alt="Marketing relationnel"
                            class="img-fluid rounded" />
                        <div class="content">
                            <h4 class="mt-4 text-center mb-2 title-color">Naturacentials</h4>
                            <p> Naturacentials Herbal Toothpaste est un dentifrice 100% naturel à base de plantes
                                médicinales.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-block">
                        <img src="{{ asset('assets/images/service/img33.jpg') }}" alt="Formation"
                            class="img-fluid rounded" />
                        <div class="content">
                            <h4 class="mt-4 text-center mb-2 title-color">RestorLyf</h4>
                            <p>RestorLyf aide à revitaliser le corps, renforcer l’immunité, améliorer l’énergie et soutenir
                                la santé globale pour un bien-être durable.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-block">
                        <img src="{{ asset('assets/images/service/img33.jpg') }}" alt="Représentation commerciale"
                            class="img-fluid rounded" />
                        <div class="content">
                            <h4 class="mt-4 text-center mb-2 title-color">RestorLyf</h4>
                            <p>RestorLyf aide à revitaliser le corps en stimulant l’énergie naturelle, améliore la
                                récupération, renforce le système immunitaire et favorise un bien-être global durable.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-block">
                        <img src="{{ asset('assets/images/service/img34.jpg') }}" alt="Marketing relationnel"
                            class="img-fluid rounded" />
                        <div class="content">
                            <h4 class="mt-4 text-center mb-2 title-color">Kiddi 24/7</h4>
                            <p>Kiddi 24/7 soutient la santé globale des enfants en renforçant leur système immunitaire,
                                favorisant une croissance saine et apportant énergie et vitalité au quotidien.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-block">
                        <img src="{{ asset('assets/images/service/img35.jpg') }}" alt="Formation"
                            class="img-fluid rounded" />
                        <div class="content">
                            <h4 class="mt-4 text-center mb-2 title-color">Kiddi 24/7</h4>
                            <p>Kiddi 24/7 aide à protéger les enfants contre les infections, améliore leur digestion et
                                soutient leur développement cognitif pour un bien-être optimal.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-block">
                        <img src="{{ asset('assets/images/service/img36.jpg') }}" alt="Représentation commerciale"
                            class="img-fluid rounded" />
                        <div class="content">
                            <h4 class="mt-4 text-center mb-2 title-color">Liven Coffee</h4>
                            <p>Liven Coffee stimule l'énergie naturelle, améliore la concentration et favorise une digestion
                                saine, tout en aidant à contrôler l'appétit pour un mode de vie équilibré.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-block">
                        <img src="{{ asset('assets/images/service/img37.jpg') }}" alt="Marketing relationnel"
                            class="img-fluid rounded" />
                        <div class="content">
                            <h4 class="mt-4 text-center mb-2 title-color">Naturacentials</h4>
                            <p>Naturacentials Herbal Toothpaste aide à blanchir naturellement les dents, éliminer les
                                bactéries, renforcer les gencives et protéger toute la bouche grâce à sa formule 100% à base
                                de plantes. Une haleine fraîche et une santé bucco-dentaire optimale au naturel !</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-block">
                        <img src="{{ asset('assets/images/service/img38.jpg') }}" alt="Formation"
                            class="img-fluid rounded" />
                        <div class="content">
                            <h4 class="mt-4 text-center mb-2 title-color">Natural Feminine Wash</h4>
                            <p>Natural Feminine Wash nettoie en douceur, protège contre les infections, équilibre le pH
                                intime et procure fraîcheur et confort tout au long de la journée.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-block">
                        <img src="{{ asset('assets/images/service/img39.jpg') }}" alt="Représentation commerciale"
                            class="img-fluid rounded" />
                        <div class="content">
                            <h4 class="mt-4 text-center mb-2 title-color">MyChoco</h4>
                            <p>MyChoco offre une délicieuse source d’énergie naturelle, aide à réduire la fatigue, améliore
                                la concentration et soutient un mode de vie actif et équilibré.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-block">
                        <img src="{{ asset('assets/images/service/img40.jpg') }}" alt="Marketing relationnel"
                            class="img-fluid rounded" />
                        <div class="content">
                            <h4 class="mt-4 text-center mb-2 title-color">Nos produits</h4>
                            <p>Nous assurons la promotion et la représentation de vos produits ou services
                                auprès de vos clients cibles pour augmenter votre chiffre d’affaires.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-block">
                        <img src="{{ asset('assets/images/service/img41.jpg') }}" alt="Marketing relationnel"
                            class="img-fluid rounded" />
                        <div class="content">
                            <h4 class="mt-4 text-center mb-2 title-color">Nos produits</h4>
                            <p>Nous assurons la promotion et la représentation de vos produits ou services
                                auprès de vos clients cibles pour augmenter votre chiffre d’affaires.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-block">
                        <img src="{{ asset('assets/images/service/img42.jpg') }}" alt="Représentation commerciale"
                            class="img-fluid" />
                        <div class="content">
                            <h4 class="mt-4 text-center mb-2 title-color">MyChoco</h4>
                            <p class="mb-4">MyChoco offre une délicieuse source d’énergie naturelle, aide à réduire la
                                fatigue, améliore
                                la concentration et soutient un mode de vie actif et équilibré.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-block mb-5">
                        <img src="{{ asset('assets/images/service/img43.jpg') }}" alt="Marketing relationnel"
                            class="img-fluid" />
                        <div class="content">
                            <h4 class="mt-4 text-center mb-2 title-color">Liven Coffee</h4>
                            <p class="mb-4">Liven Coffee stimule énergie naturelle, améliore la concentration et favorise
                                une digestion saine, tout en aidant à contrôler appétit pour un mode de vie équilibré.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-block mb-5">
                        <img src="{{ asset('assets/images/service/img44.jpg') }}" alt="Marketing relationnel"
                            class="img-fluid" />
                        <div class="content">
                            <h4 class="mt-4 text-center mb-2 title-color">Liven Coffee</h4>
                            <p class="mb-4">Liven Coffee stimule énergie naturelle, améliore la concentration et favorise
                                une digestion saine, tout en aidant à contrôler appétit pour un mode de vie équilibré.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-block">
                        <img src="{{ asset('assets/images/service/img45.jpg') }}" alt="Représentation commerciale"
                            class="img-fluid" />
                        <div class="content">
                            <h4 class="mt-4 text-center mb-2 title-color">Représentation commerciale</h4>
                            <p class="mb-4">Nous assurons la promotion et la représentation de vos produits ou services
                                auprès de vos clients cibles pour augmenter votre chiffre d’affaires.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-block mb-5">
                        <img src="{{ asset('assets/images/service/img46.jpg') }}" alt="Marketing relationnel"
                            class="img-fluid" />
                        <div class="content">
                            <h4 class="mt-4 text-center mb-2 title-color">iPro-tect</h4>
                            <p class="mb-4">iPro-tect est un dispositif portable qui aide à créer une barrière de
                                protection contre les virus et bactéries en suspension dans l’air. Il aide à réduire les
                                risques d'infections en purifiant l'air autour de vous, idéal pour les espaces publics,
                                transports ou lieux de travail.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-block mb-5">
                        <img src="{{ asset('assets/images/service/img47.jpg') }}" alt="Formation" class="img-fluid" />
                        <div class="content">
                            <h4 class="mt-4 text-center mb-2 title-color">Formation</h4>
                            <p class="mb-4">Nous proposons des formations professionnelles adaptées pour renforcer les
                                compétences de vos équipes et améliorer leurs performances.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-block">
                        <img src="{{ asset('assets/images/service/img48.jpg') }}" alt="Représentation commerciale"
                            class="img-fluid" />
                        <div class="content">
                            <h4 class="mt-4 text-center mb-2 title-color">Représentation commerciale</h4>
                            <p class="mb-4">Nous assurons la promotion et la représentation de vos produits ou services
                                auprès de vos clients cibles pour augmenter votre chiffre d’affaires.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-block mb-5">
                        <img src="{{ asset('assets/images/service/img49.jpg') }}" alt="Marketing relationnel"
                            class="img-fluid" />
                        <div class="content">
                            <h4 class="mt-4 text-center mb-2 title-color">Natura-Ceuticals</h4>
                            <p class="mb-4"> Natura-Ceuticals — Compléments naturels pour soutenir la santé globale.
                                ✨ Favorise le bien-être général grâce à des ingrédients issus de la nature.
                                💪 Aide à renforcer le système immunitaire et à maintenir un équilibre sain du corps.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-block mb-5">
                        <img src="{{ asset('assets/images/service/img50.jpg') }}" alt="Formation" class="img-fluid" />
                        <div class="content">
                            <h4 class="mt-4 text-center mb-2 title-color">Burn Slim</h4>
                            <p class="mb-4">Burn Slim est un complément naturel conçu pour favoriser la perte de poids.
                                Il aide à brûler les graisses, contrôler l’appétit, stimuler le métabolisme et augmenter
                                l’énergie, tout en soutenant un mode de vie sain.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-block">
                        <img src="{{ asset('assets/images/service/img51.jpg') }}" alt="Représentation commerciale"
                            class="img-fluid" />
                        <div class="content">
                            <h4 class="mt-4 text-center mb-2 title-color">CareLeaf</h4>
                            <p class="mb-4">CareLeaf soulage naturellement les douleurs musculaires et articulaires grâce
                                à sa technologie de patch à base d’ingrédients végétaux anti-inflammatoires.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-block mb-5">
                        <img src="{{ asset('assets/images/service/img52.jpg') }}" alt="Marketing relationnel"
                            class="img-fluid" />
                        <div class="content">
                            <h4 class="mt-4 text-center mb-2 title-color">Marketing relationnel</h4>
                            <p class="mb-4">Nous mettons en place des stratégies pour construire une relation de
                                confiance durable entre votre entreprise et vos clients.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-block mb-5">
                        <img src="{{ asset('assets/images/service/img53.jpg') }}" alt="Formation" class="img-fluid" />
                        <div class="content">
                            <h4 class="mt-4 text-center mb-2 title-color">Formation</h4>
                            <p class="mb-4">Nous proposons des formations professionnelles adaptées pour renforcer les
                                compétences de vos équipes et améliorer leurs performances.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-block">
                        <img src="{{ asset('assets/images/service/img54.jpg') }}" alt="Représentation commerciale"
                            class="img-fluid" />
                        <div class="content">
                            <h4 class="mt-4 text-center mb-2 title-color">Représentation commerciale</h4>
                            <p class="mb-4">Nous assurons la promotion et la représentation de vos produits ou services
                                auprès de vos clients cibles pour augmenter votre chiffre d’affaires.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-block mb-5">
                        <img src="{{ asset('assets/images/service/img55.jpg') }}" alt="Marketing relationnel"
                            class="img-fluid" />
                        <div class="content">
                            <h4 class="mt-4 text-center mb-2 title-color">Marketing relationnel</h4>
                            <p class="mb-4">Nous mettons en place des stratégies pour construire une relation de
                                confiance durable entre votre entreprise et vos clients.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-block mb-5">
                        <img src="{{ asset('assets/images/service/img56.jpg') }}" alt="Formation" class="img-fluid" />
                        <div class="content">
                            <h4 class="mt-4 text-center mb-2 title-color">Formation</h4>
                            <p class="mb-4">Nous proposons des formations professionnelles adaptées pour renforcer les
                                compétences de vos équipes et améliorer leurs performances.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-block">
                        <img src="{{ asset('assets/images/service/img60.jpg') }}" alt="Représentation commerciale"
                            class="img-fluid" />
                        <div class="content">
                            <h4 class="mt-4 text-center mb-2 title-color">Représentation commerciale</h4>
                            <p class="mb-4">Nous assurons la promotion et la représentation de vos produits ou services
                                auprès de vos clients cibles pour augmenter votre chiffre d’affaires.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-block mb-5">
                        <img src="{{ asset('assets/images/service/img61.jpg') }}" alt="Marketing relationnel"
                            class="img-fluid" />
                        <div class="content">
                            <h4 class="mt-4 text-center mb-2 title-color">Marketing relationnel</h4>
                            <p class="mb-4">Nous mettons en place des stratégies pour construire une relation de
                                confiance durable entre votre entreprise et vos clients.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-block mb-5">
                        <img src="{{ asset('assets/images/service/img62.jpg') }}" alt="Formation" class="img-fluid" />
                        <div class="content">
                            <h4 class="mt-4 text-center mb-2 title-color">Formation</h4>
                            <p class="mb-4">Nous proposons des formations professionnelles adaptées pour renforcer les
                                compétences de vos équipes et améliorer leurs performances.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-block">
                        <img src="{{ asset('assets/images/service/img63.jpg') }}" alt="Représentation commerciale"
                            class="img-fluid" />
                        <div class="content">
                            <h4 class="mt-4 text-center mb-2 title-color">Représentation commerciale</h4>
                            <p class="mb-4">Nous assurons la promotion et la représentation de vos produits ou services
                                auprès de vos clients cibles pour augmenter votre chiffre d’affaires.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-block mb-5">
                        <img src="{{ asset('assets/images/service/img64.jpg') }}" alt="Marketing relationnel"
                            class="img-fluid" />
                        <div class="content">
                            <h4 class="mt-4 text-center mb-2 title-color">Marketing relationnel</h4>
                            <p class="mb-4">Nous mettons en place des stratégies pour construire une relation de
                                confiance durable entre votre entreprise et vos clients.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-block mb-5">
                        <img src="{{ asset('assets/images/service/img65.jpg') }}" alt="Formation" class="img-fluid" />
                        <div class="content">
                            <h4 class="mt-4 text-center mb-2 title-color">Formation</h4>
                            <p class="mb-4">Nous proposons des formations professionnelles adaptées pour renforcer les
                                compétences de vos équipes et améliorer leurs performances.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-block">
                        <img src="{{ asset('assets/images/service/img66.jpg') }}" alt="Représentation commerciale"
                            class="img-fluid" />
                        <div class="content">
                            <h4 class="mt-4 text-center mb-2 title-color">Représentation commerciale</h4>
                            <p class="mb-4">Nous assurons la promotion et la représentation de vos produits ou services
                                auprès de vos clients cibles pour augmenter votre chiffre d’affaires.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-block mb-5">
                        <img src="{{ asset('assets/images/service/img67.jpg') }}" alt="Marketing relationnel"
                            class="img-fluid" />
                        <div class="content">
                            <h4 class="mt-4 text-center mb-2 title-color">Marketing relationnel</h4>
                            <p class="mb-4">Nous mettons en place des stratégies pour construire une relation de
                                confiance durable entre votre entreprise et vos clients.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-block mb-5">
                        <img src="{{ asset('assets/images/service/img68.jpg') }}" alt="Formation" class="img-fluid" />
                        <div class="content">
                            <h4 class="mt-4 text-center mb-2 title-color">Formation</h4>
                            <p class="mb-4">Nous proposons des formations professionnelles adaptées pour renforcer les
                                compétences de vos équipes et améliorer leurs performances.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-block">
                        <img src="{{ asset('assets/images/service/img69.jpg') }}" alt="Représentation commerciale"
                            class="img-fluid" />
                        <div class="content">
                            <h4 class="mt-4 text-center mb-2 title-color">Représentation commerciale</h4>
                            <p class="mb-4">Nous assurons la promotion et la représentation de vos produits ou services
                                auprès de vos clients cibles pour augmenter votre chiffre d’affaires.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-block mb-5">
                        <img src="{{ asset('assets/images/service/img80.jpg') }}" alt="Marketing relationnel"
                            class="img-fluid" />
                        <div class="content">
                            <h4 class="mt-4 text-center mb-2 title-color">Marketing relationnel</h4>
                            <p class="mb-4">Nous mettons en place des stratégies pour construire une relation de
                                confiance durable entre votre entreprise et vos clients.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-block mb-5">
                        <img src="{{ asset('assets/images/service/img81.jpg') }}" alt="Formation" class="img-fluid" />
                        <div class="content">
                            <h4 class="mt-4 text-center mb-2 title-color">Formation</h4>
                            <p class="mb-4">Nous proposons des formations professionnelles adaptées pour renforcer les
                                compétences de vos équipes et améliorer leurs performances.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-block">
                        <img src="{{ asset('assets/images/service/img82.jpg') }}" alt="Représentation commerciale"
                            class="img-fluid" />
                        <div class="content">
                            <h4 class="mt-4 text-center mb-2 title-color">Représentation commerciale</h4>
                            <p class="mb-4">Nous assurons la promotion et la représentation de vos produits ou services
                                auprès de vos clients cibles pour augmenter votre chiffre d’affaires.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-block mb-5">
                        <img src="{{ asset('assets/images/service/img83.jpg') }}" alt="Marketing relationnel"
                            class="img-fluid" />
                        <div class="content">
                            <h4 class="mt-4 text-center mb-2 title-color">Marketing relationnel</h4>
                            <p class="mb-4">Nous mettons en place des stratégies pour construire une relation de
                                confiance durable entre votre entreprise et vos clients.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-block mb-5">
                        <img src="{{ asset('assets/images/service/img52.jpg') }}" alt="Formation" class="img-fluid" />
                        <div class="content">
                            <h4 class="mt-4 text-center mb-2 title-color">Formation</h4>
                            <p class="mb-4">Nous proposons des formations professionnelles adaptées pour renforcer les
                                compétences de vos équipes et améliorer leurs performances.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-block">
                        <img src="{{ asset('assets/images/service/img4.jpg') }}" alt="Représentation commerciale"
                            class="img-fluid rounded" />
                        <div class="content">
                            <h4 class="mt-4 text-center  title-color">Représentation commerciale</h4>
                            <p>
                                Nous assurons la promotion et la représentation de vos produits ou services
                                auprès de vos clients cibles pour augmenter votre chiffre d’affaires.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-block">
                        <img src="{{ asset('assets/images/service/img7.jpg') }}" alt="Marketing relationnel"
                            class="img-fluid rounded" />
                        <div class="content">
                            <h4 class="mt-4 text-center  title-color">Marketing relationnel</h4>
                            <p>
                                Nous mettons en place des stratégies pour construire une relation de
                                confiance durable entre votre entreprise et vos clients.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-block">
                        <img src="{{ asset('assets/images/service/img6.jpg') }}" alt="Formation"
                            class="img-fluid rounded" />
                        <div class="content">
                            <h4 class="mt-4 text-center  title-color">Formation</h4>
                            <p>
                                Nous proposons des formations professionnelles adaptées pour renforcer
                                les compétences de vos équipes et améliorer leurs performances.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Répète pour les autres blocs -->
            </div>
        </div>
    </section>


    <section class="section cta-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="cta-content">
                        <div class="divider"></div>
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
