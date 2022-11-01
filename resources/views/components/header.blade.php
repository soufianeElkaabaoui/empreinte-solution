<div>
    <!-- Brand & Contact Start -->
    <div class="container-fluid py-4 px-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="row align-items-center top-bar">
            <div class="col-lg-4 col-md-12 text-center text-lg-start">
                <a href="/" class="navbar-brand m-0 p-0">
                    <img src={{asset( $company->logo_url )}} class="w-100" alt="">
                </a>
            </div>
            <div class="col-lg-8 col-md-7 d-none d-lg-block">
                <div class="row">
                    <div class="col-4">
                        <div class="d-flex align-items-center justify-content-end">
                            <div class="flex-shrink-0 btn-lg-square border rounded-circle">
                                <i class="far fa-clock text-primary"></i>
                            </div>
                            <div class="ps-3">
                                <p class="mb-2">Heures d’ouverture</p>
                                <h6 class="mb-0">Lundi - Vendredi, {{ $company->opening_hour }} - {{ $company->closing_hour }}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="d-flex align-items-center justify-content-end">
                            <div class="flex-shrink-0 btn-lg-square border rounded-circle">
                                <i class="fa fa-phone text-primary"></i>
                            </div>
                            <div class="ps-3">
                                <p class="mb-2">Appelez-nous</p>
                                <h6 class="mb-0">{{ $company->phone_number }}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="d-flex align-items-center justify-content-end">
                            <div class="flex-shrink-0 btn-lg-square border rounded-circle">
                                <i class="far fa-envelope text-primary"></i>
                            </div>
                            <div class="ps-3">
                                <p class="mb-2">Envoyez-nous un mail</p>
                                <h6 class="mb-0">{{ $company->email }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Brand & Contact End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark sticky-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="#" class="navbar-brand ms-3 d-lg-none">MENU</a>
        <button type="button" class="navbar-toggler me-3" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav me-auto p-3 p-lg-0">
                <a href="/" class="nav-item nav-link active">Acceuil</a>
                <a href="about" class="nav-item nav-link">Qui somme-nous?</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                    <div class="dropdown-menu border-0 rounded-0 rounded-bottom m-0">
                        @if (count($services))
                            @foreach ($services as $service)
                                <a href="{{ route('services.show', ['service'=>$service->id]) }}" class="dropdown-item">{{$service->name}}</a>
                            @endforeach
                        @else
                            <a href="#" class="dropdown-item">Pas de projet</a>
                        @endif
                    </div>
                </div>
                <a href="{{ route('team.index') }}" class="nav-item nav-link">Notre Equipe</a>
                <a href="contact" class="nav-item nav-link">Contactez-nous</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->
</div>

