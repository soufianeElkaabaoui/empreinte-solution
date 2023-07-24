@extends('layouts.app')
@section('title', 'Categories')
@section('stylesheets')
    <link rel="stylesheet" href="{{ asset('stylesheet/bootstrap-grid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('stylesheet/index.css') }}">
@endsection
@section('content')
    <div class="card-projects">
        @if (count($formationCategories) > 0)
            @foreach ($formationCategories as $formationCategory)
                <div class="card">
                    <div class="card-image">
                        <img src="{{ asset('storage/' . $formationCategory->image_url) }}" alt="{{ $formationCategory->name }}">
                    </div>
                    <div class="card-content">
                        <div class="card-title">
                            <a href="{{ route('categories.formations', ['formationCategory'=>$formationCategory->id]) }}">{{ $formationCategory->name }}</a>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
        {{-- <div class="card">
            <div class="card-image">
                <img src="{{ asset('img/image-static.jpg') }}" alt="image-static">
            </div>
            <div class="card-content">
                <div class="card-title">
                    <a href="#">management de projet</a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-image">
                <img src="{{ asset('img/image-static.jpg') }}" alt="image-static">
            </div>
            <div class="card-content">
                <div class="card-title">
                    <a href="#">management de projet</a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-image">
                <img src="{{ asset('img/image-static.jpg') }}" alt="image-static">
            </div>
            <div class="card-content">
                <div class="card-title">
                    <a href="#">management de projet</a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-image">
                <img src="{{ asset('img/image-static.jpg') }}" alt="image-static">
            </div>
            <div class="card-content">
                <div class="card-title">
                    <a href="#">management de projet</a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-image">
                <img src="{{ asset('img/image-static.jpg') }}" alt="image-static">
            </div>
            <div class="card-content">
                <div class="card-title">
                    <a href="#">management de projet</a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-image">
                <img src="{{ asset('img/image-static.jpg') }}" alt="image-static">
            </div>
            <div class="card-content">
                <div class="card-title">
                    <a href="#">management de projet</a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-image">
                <img src="{{ asset('img/image-static.jpg') }}" alt="image-static">
            </div>
            <div class="card-content">
                <div class="card-title">
                    <a href="#">management de projet</a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-image">
                <img src="{{ asset('img/image-static.jpg') }}" alt="image-static">
            </div>
            <div class="card-content">
                <div class="card-title">
                    <a href="#">management de projet</a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-image">
                <img src="{{ asset('img/image-static.jpg') }}" alt="image-static">
            </div>
            <div class="card-content">
                <div class="card-title">
                    <a href="#">management de projet</a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-image">
                <img src="{{ asset('img/image-static.jpg') }}" alt="image-static">
            </div>
            <div class="card-content">
                <div class="card-title">
                    <a href="#">management de projet</a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-image">
                <img src="{{ asset('img/image-static.jpg') }}" alt="image-static">
            </div>
            <div class="card-content">
                <div class="card-title">
                    <a href="#">management de projet</a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-image">
                <img src="{{ asset('img/image-static.jpg') }}" alt="image-static">
            </div>
            <div class="card-content">
                <div class="card-title">
                    <a href="#">management de projet</a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-image">
                <img src="{{ asset('img/image-static.jpg') }}" alt="image-static">
            </div>
            <div class="card-content">
                <div class="card-title">
                    <a href="#">management de projet</a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-image">
                <img src="{{ asset('img/image-static.jpg') }}" alt="image-static">
            </div>
            <div class="card-content">
                <div class="card-title">
                    <a href="#">management de projet</a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-image">
                <img src="{{ asset('img/image-static.jpg') }}" alt="image-static">
            </div>
            <div class="card-content">
                <div class="card-title">
                    <a href="#">management de projet</a>
                </div>
            </div>
        </div>   --}}
    </div>
@endsection
