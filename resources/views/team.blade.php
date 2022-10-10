  <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border position-relative text-primary" style="width: 6rem; height: 6rem;" role="status"></div>
        <i class="fa fa-laptop-code fa-2x text-primary position-absolute top-50 start-50 translate-middle"></i>
    </div>
    <!-- Spinner End -->
@extends('layouts.app')
@section('title', 'Notre équipe page')
@section('content')
    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="section-title bg-white text-center text-primary px-3">Notre Equipe</h6>
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
@endsection

