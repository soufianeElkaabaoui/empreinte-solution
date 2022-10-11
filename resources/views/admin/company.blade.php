@extends('layouts.admin')
@section('title')
company
@endsection
@section('content')
    <div class="content-wrapper mt-5">
        <div id="msg"></div>
        <div class="row">
            <div class="col d-flex flex-column align-items-center">
                <div class="card bg-white mr-4 w-100">
                  <div class="box-container p-4 d-flex justify-content-around">
                    <div class="box">
                        <p> <span class="text-dark text-lg font-weight-bolder">Nom de la société :</span> {{$company->name}}</p>
                        <p> <span class="text-dark text-lg font-weight-bolder">Logo :</span> <img src="{{$company->logo_url}}" alt="Logo de la société"></p>
                        <p> <span class="text-dark text-lg font-weight-bolder">N° de telephone :</span> {{$company->phone_number}}</p>
                        <p> <span class="text-dark text-lg font-weight-bolder">Email :</span> {{$company->email}}</p>
                    </div>
                    <div class="box">
                        <p> <span class="text-dark text-lg font-weight-bolder">Adresse Location :</span> {{$company->adress_location}}</p>
                        <p> <span class="text-dark text-lg font-weight-bolder">Heure d'ouverture :</span> {{$company->opening_hour}}</p>
                        <p> <span class="text-dark text-lg font-weight-bolder">Heure de fermeture :</span> {{$company->closing_hour}}</p>
                    </div>
                  </div>
                    <!-- END customer-list -->
                </div> <!-- END card -->
                <a class="btn bg-gradient-primary shadow-success w-30 mt-4" href="#" type="button">Modifier</a>
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div>
@endsection
