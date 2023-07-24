@extends('layouts.app')
@section('title', 'Formations')
@section('stylesheets')
    <link rel="stylesheet" href="{{ asset('stylesheet/bootstrap-grid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('stylesheet/programme.css') }}">
@endsection
@section('content')
    <div class="programme-head">
        <h2 class="title">Objectif :</h2>
        <p class="description">
            {!! $formation->description !!}
        </p>
    </div>
    <div class="value__accordation">
        <h2 class="programme-head-title">programme</h2>
        @if (count($formation->formationPrograms) > 0)
            @foreach ($formation->formationPrograms as $formationProgram)
                <div class="value__accordation-item">
                    <header class="value__accordation-header">
                        <h3 class="value__accordation-title">
                            {{ $formationProgram->name }}
                        </h3>
                    </header>
                    <div class="value__accordation-content">
                        @php
                            $titles = Str::of($formationProgram->titles)->explode(',');
                        @endphp
                        <ol>
                            @if (count($titles) > 0)
                                @foreach ($titles as $title)
                                    <li><a href="#">{{ $title }}</a></li>
                                @endforeach
                            @endif
                            {{-- <li><a href="">Comment fonctionne un site WEB ?</a></li>
                            <li><a href="">Comment fonctionne un site WEB ?</a></li>
                            <li><a href="">Comment fonctionne un site WEB ?</a></li> --}}
                        </ol>
                    </div>
                </div>
            @endforeach
        @endif
        {{-- <div class="value__accordation-item">
            <header class="value__accordation-header">
                <h3 class="value__accordation-title">
                    Développement WEB
                </h3>
            </header>
            <div class="value__accordation-content">
                <ol>
                    <li><a href="">Comment fonctionne un site WEB ?</a></li>
                    <li><a href="">Comment fonctionne un site WEB ?</a></li>
                    <li><a href="">Comment fonctionne un site WEB ?</a></li>
                    <li><a href="">Comment fonctionne un site WEB ?</a></li>
                </ol>
            </div>
        </div>
        <div class="value__accordation-item">
            <header class="value__accordation-header">
                <h3 class="value__accordation-title">
                    Développement WEB
                </h3>
            </header>
            <div class="value__accordation-content">
                <ol>
                    <li><a href="">Comment fonctionne un site WEB ?</a></li>
                    <li><a href="">Comment fonctionne un site WEB ?</a></li>
                    <li><a href="">Comment fonctionne un site WEB ?</a></li>
                    <li><a href="">Comment fonctionne un site WEB ?</a></li>
                </ol>
            </div>
        </div>
        <div class="value__accordation-item">
            <header class="value__accordation-header">
                <h3 class="value__accordation-title">
                    Développement WEB
                </h3>
            </header>
            <div class="value__accordation-content">
                <ol>
                    <li><a href="">Comment fonctionne un site WEB ?</a></li>
                    <li><a href="">Comment fonctionne un site WEB ?</a></li>
                    <li><a href="">Comment fonctionne un site WEB ?</a></li>
                    <li><a href="">Comment fonctionne un site WEB ?</a></li>
                </ol>
            </div>
        </div> --}}
    </div>
    <div class="programme-en-images">
        <h2 class="programme-head-title">nos formations en images</h2>
        @if (count($formation->formationGalleries) > 0)
            @foreach ($formation->formationGalleries as $formationGallery)
                <div class="programme-row">
                    <div class="programme-content">
                        <h3 class="programme-title">{{ $formationGallery->name }}</h3>
                        <p class="programme-desc">{{ $formationGallery->description }}</p>
                    </div>
                    <div class="programme-image">
                        <img src="{{ asset('storage/' . $formationGallery->image_url) }}" alt="image-static">
                    </div>
                </div>
            @endforeach
        @endif
        <div class="programme-row">
            <div class="programme-content">
                <h3 class="programme-title">Learning by doing</h3>
                <p class="programme-desc">Nos sessions de formations sont basées sur l’approche LEARNING BY DOING,  ce qui permet  d’assimiler par la pratique les méthodologies et de transposer plus rapidement aux situations de travail.</p>
            </div>
            <div class="programme-image">
                <img src="{{ asset('img/image-static.jpg') }}" alt="image-static">
            </div>
        </div>
        {{-- <div class="programme-row">
            <div class="programme-content">
                <h3 class="programme-title">Learning by doing</h3>
                <p class="programme-desc">Nos sessions de formations sont basées sur l’approche LEARNING BY DOING,  ce qui permet  d’assimiler par la pratique les méthodologies et de transposer plus rapidement aux situations de travail.</p>
            </div>
            <div class="programme-image">
                <img src="./assets/images/image-static.jpg" alt="image-static">
            </div>
        </div> --}}
    </div>
    @section('scripts')
        <script src="{{ asset('js/mentions_legales.js') }}"></script>
    @endsection
@endsection
