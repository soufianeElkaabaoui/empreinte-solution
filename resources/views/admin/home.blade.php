@extends('layouts.admin')
@section('content')
    <div class="row" style="justify-content: center;">
        <div class="col-xl-3 col-sm-6 mt-8 mb-4">
            <div class="card">
                <div class="card-header p-3 pt-2">
                    <div
                        class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">calendar_month</i>
                    </div>
                    <div class="text-end pt-1">
                        <p class="text-lg-start mb-0 mt-5 text-capitalize">Années Expériences</p>
                        <h4 class="mb-0">{{$years_experience}}</h4>
                    </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">
                    <a class="btn bg-gradient-primary shadow-success w-100" href="#" type="button">Modifier</a>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mt-8 mb-4">
            <div class="card">
                <div class="card-header p-3 pt-2 ">
                    <div
                        class="icon icon-lg icon-shape bg-gradient-primary shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">people</i>
                    </div>
                    <div class="text-end pt-1">
                        <p class="text-lg-start mb-0 mt-5 text-capitalize">Members</p>
                        <h4 class="mb-0">{{$nb_members}}</h4>
                    </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">
                    <a class="btn bg-gradient-primary shadow-success w-100" href="#" type="button">Modifier</a>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mt-8 mb-4">
            <div class="card">
                <div class="card-header p-3 pt-2">
                    <div
                        class="icon icon-lg icon-shape bg-gradient-success shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">done</i>
                    </div>
                    <div class="text-end pt-1">
                        <p class="text-lg-start mb-0 mt-5 text-capitalize">Projets Terminés</p>
                        <h4 class="mb-0">{{$nb_projects_finished}}</h4>
                    </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">
                    <a class="btn bg-gradient-primary shadow-success w-100" href="#" type="button">Modifier</a>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mt-8 mb-4">
            <div class="card">
                <div class="card-header p-3 pt-2 ">
                    <div
                        class="icon icon-lg icon-shape bg-gradient-secondary shadow-success text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">sentiment_satisfied</i>
                    </div>
                    <div class="text-end pt-1">
                        <p class="text-lg-start mb-0 mt-5 text-capitalize">Client Satisfait</p>
                        <h4 class="mb-0">{{$nb_clients}}</h4>
                    </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">
                    <a class="btn bg-gradient-primary shadow-success w-100" href="#" type="button">Modifier</a>
                </div>
            </div>
        </div>
    </div>
    @endsection
