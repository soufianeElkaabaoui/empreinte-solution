
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border position-relative text-primary" style="width: 6rem; height: 6rem;" role="status"></div>
        <i class="fa fa-laptop-code fa-2x text-primary position-absolute top-50 start-50 translate-middle"></i>
    </div>
    <!-- Spinner End -->

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">
                    <img class="img-fluid" src="images/carousel-1.jpg" alt="Image">
                </button>
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="1" aria-label="Slide 2">
                    <img class="img-fluid" src="images/carousel-2.jpg" alt="Image">
                </button>
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="2" aria-label="Slide 3">
                    <img class="img-fluid" src="images/carousel-3.jpg" alt="Image">
                </button>
            </div>
            <div class="carousel-inner">
                @if (count($services) > 0)
                    @foreach ($services as $service)
                        <div class="carousel-item active">
                            <img class="w-100" src="{{ asset('images/' . $service->image_url) }}" alt="image de service">
                            <div class="carousel-caption">
                                <div class="p-3" style="max-width: 900px;">
                                    <h4 class="text-white text-uppercase mb-4 animated zoomIn">Nous sommes leader dans</h4>
                                    <h1 class="display-1 text-white mb-0 animated zoomIn">{{$service->name}}</h1>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="">Il y a aucun service ce moment là.</div>
                @endif
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Précédent</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Suivant</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Facts Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <i class="fa fa-certificate fa-4x text-primary mb-4"></i>
                        <h5 class="mb-3">Années d’expérience</h5>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">{{$years_experience}}</h1>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <i class="fa fa-users-cog fa-4x text-primary mb-4"></i>
                        <h5 class="mb-3">Membres de l’équipe</h5>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">{{$nb_members}}</h1>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <i class="fa fa-users fa-4x text-primary mb-4"></i>
                        <h5 class="mb-3">Clients satisfaits</h5>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">{{$nb_clients}}</h1>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <i class="fa fa-check fa-4x text-primary mb-4"></i>
                        <h5 class="mb-3">Projets terminés</h5>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">{{$nb_projects_finished}}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="img-border">
                        <img class="img-fluid" src="images/about.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h6 class="section-title bg-white text-start text-primary pe-3">Qui somme-nous?</h6>
                        <p>Notre équipe se compose de spécialistes de la publicité, de créatifs et de designersNotre démarche : Créer des concepts novateurs, élaborer différentes stratégies de communication et réaliser des produits adaptés à vos besoinsNous concevons et réalisons vos logos, chartes graphiques, documents imprimés administratifs et commerciaux, cartes de visites, chemises commerciales, plaquettes commerciales, dépliants, papiers en-tete, CD-Rom et DVD, signalétiques sur véhicules / magasins, panneaux, etc...</p>
                        <div class="d-flex align-items-center mb-4 pb-2">
                            <img class="flex-shrink-0 rounded-circle" src="images/team-1.jpg" alt="" style="width: 50px; height: 50px;">
                            <div class="ps-4">
                                <h6>Ahmed</h6>
                                <small>Founder</small>
                            </div>
                        </div>
                        <a class="btn btn-primary rounded-pill py-3 px-5" href="{{ route('about') }}">Lire Plus</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="section-title bg-white text-center text-primary px-3">Services</h6>
                <h1 class="display-6 mb-4">Nous nous focussons pour tirer le meilleur dans tous les secteurs</h1>
            </div>
            <div class="row g-4">
                @if (count($services) > 0)
                    @php
                        $time_counter = 1;
                    @endphp
                    @foreach ($services as $service)
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.{{$time_counter}}s">
                            <a class="service-item d-block rounded text-center h-100 p-4" href="{{ route('services', ['id'=>$service->id]) }}">
                                <img class="img-fluid rounded mb-4" src="{{ asset('images/' . $service->image_url) }}" alt="image de service">
                                <h4 class="mb-0">{{$service->name}}</h4>
                            </a>
                        </div>
                        @php
                            $time_counter +=2
                        @endphp
                    @endforeach
                @else
                    <div class="col-12">Il ya aucun service ce moment là.</div>
                @endif
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Feature Start -->
    {{-- <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="h-100">
                        <h6 class="section-title bg-white text-start text-primary pe-3">Pourquoi Nous Choisir</h6>
                        <h1 class="display-6 mb-4">Pourquoi les gens nous font-ils confiance? En savoir plus sur nous!</h1>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="skill">
                                    <div class="d-flex justify-content-between">
                                        <p class="mb-2">Design</p>
                                        <p class="mb-2">85%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="skill">
                                    <div class="d-flex justify-content-between">
                                        <p class="mb-2">Print</p>
                                        <p class="mb-2">90%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="skill">
                                    <div class="d-flex justify-content-between">
                                        <p class="mb-2">Lettrage 3D</p>
                                        <p class="mb-2">95%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="img-border">
                        <img class="img-fluid" src="images/feature.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Feature End -->


    <!-- Project Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="section-title bg-white text-center text-primary px-3">Nos Projets</h6>
                <h1 class="display-6 mb-4">En savoir plus sur nos projets complets</h1>
            </div>
            <div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.1s">
                @if (count($projects)>0)
                    @foreach ($projects as $project)
                        <div class="project-item border rounded h-100 p-4" data-dot="0{{$loop->iteration}}">
                            <div class="position-relative mb-4">
                                <img class="img-fluid rounded" src="{{ asset('images/' . $project->image_url) }}" alt="">
                                <a href="{{ asset('images/' . $project->image_url) }}" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                            </div>
                            <h6>{{$project->name}}</h6>
                            <span>Pour la société: {{$project->company_client}}</span>
                        </div>
                    @endforeach
                @else
                    <div class="">Il y a aucun projets ce moment là.</div>
                @endif
            </div>
        </div>
    </div>
    <!-- Project End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="section-title bg-white text-center text-primary px-3">Nos Team</h6>
                <h1 class="display-6 mb-4">Nous sommes une équipe créative pour votre projet de rêve</h1>
            </div>
            <div class="row g-4">
                @if (count($members) > 0)
                    @php
                        $time_counter = 1;
                    @endphp
                    @foreach ($members as $member)
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.{{$time_counter}}s">
                            <div class="team-item text-center p-4">
                                <img class="img-fluid border rounded-circle w-75 p-2 mb-4" src="{{ asset('images/' . $member->image_url) }}" alt="Image d'un membre">
                                <div class="team-text">
                                    <div class="team-title">
                                        <h5>{{$member->name}}</h5>
                                        <span>{{$member->status}}</span>
                                    </div>
                                    <div class="team-social">
                                        <a class="btn btn-square btn-primary rounded-circle" href="{{$member->social_links()->where('name', 'fb')->first()->link}}"><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-square btn-primary rounded-circle" href="{{$member->social_links()->where('name', 'twitter')->first()->link}}"><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-square btn-primary rounded-circle" href="{{$member->social_links()->where('name', 'insta')->first()->link}}"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @php
                            $time_counter +=2
                        @endphp
                    @endforeach
                @else
                    <div class="">Il y a aucun membre dans l'équipe</div>
                @endif
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="section-title bg-white text-center text-primary px-3">Témoignage</h6>
                <h1 class="display-6 mb-4">Ce que disent nos clients!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                @if (count($reviews) > 0)
                    @foreach ($reviews as $review)
                        <div class="testimonial-item bg-light rounded p-4">
                            <div class="d-flex align-items-center mb-4">
                                <img class="flex-shrink-0 rounded-circle border p-1" src="{{ asset('images/' . $review->image_url) }}" alt="Image du visiteur">
                                <div class="ms-4">
                                    <h5 class="mb-1">{{$review->client_name}}</h5>
                                    <span>{{$review->profession}}</span>
                                </div>
                            </div>
                            <p class="mb-0">{{$review->comment}}</p>
                        </div>
                    @endforeach
                @else
                    <div class="">Il y a aucun commentaire.</div>
                @endif
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
