<div>
    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-body footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Adresse</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>{{$company->adress_location}}</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>{{$company->phone_number}}</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>{{$company->email}}</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-secondary rounded-circle me-1" href="{{$company->facebook_url}}"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-secondary rounded-circle me-1" href="{{$company->twitter_url}}"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-secondary rounded-circle me-0" href="{{$company->insta_url}}"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Liens rapides</h5>
                    <a class="btn btn-link" href="{{ route('about') }}">Qui somme-nous?</a>
                    <a class="btn btn-link" href="{{ route('contact') }}">Contactez-nous</a>
                    <a class="btn btn-link" href="#">Nos Services</a>
                    <a class="btn btn-link" href="{{ route('team.index') }}">Notre Equipe</a>
                    <a class="btn btn-link" href="#">Projets</a>
                </div>
            </div>
        </div>
        <div class="container-fluid copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a href="/">{{$company->name}}</a>, Tous droits réservés
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        Designé par <a href="#">SYKWEB</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->
</div>

