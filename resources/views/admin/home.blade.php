@extends('layouts.admin')
@section('title')
    Home
@endsection
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
                        <h4 class="mb-0">{{ $years_experience }}</h4>
                    </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">
                    <button class="btn bg-gradient-primary shadow-success w-100" type="button" data-bs-toggle="modal"
                        data-bs-target="#modal_annéees">Modifier</button>
                    <!-- Modal -->
                    <div class="modal modal-sm fade" id="modal_annéees" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content bg-gray-100">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Modifier</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"><span class="fas fa-times" aria-hidden="true"></span></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <label for="recipient-name" class="form-label">Années D'expérience:</label>
                                        <div class="input-group input-group-outline mb-3">
                                            <label for="recipient-name" class="form-label">Combien d'années?</label>
                                            <input type="text" class="form-control" id="recipient-name">
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn bg-gradient-primary">Confirmer</button>
                                </div>
                            </div>
                        </div>
                    </div>
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
                        <h4 class="mb-0">{{ $nb_members }}</h4>
                    </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">
                    <button class="btn bg-gradient-primary shadow-success w-100" type="button" data-bs-toggle="modal"
                        data-bs-target="#modal_Members">Modifier</button>
                    <!-- Modal -->
                    <div class="modal modal-sm fade" id="modal_Members" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Modifier</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"><span class="fas fa-times" aria-hidden="true"></span></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <label for="recipient-name" class="form-label">Members:</label>
                                        <div class="input-group input-group-outline mb-3">
                                            <label for="recipient-name" class="form-label">Combien de membres?</label>
                                            <input type="text" class="form-control" id="recipient-name">
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn bg-gradient-primary">Confirmer</button>
                                </div>
                            </div>
                        </div>
                    </div>
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
                        <h4 class="mb-0">{{ $nb_projects_finished }}</h4>
                    </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">
                    <button class="btn bg-gradient-primary shadow-success w-100" type="button" data-bs-toggle="modal"
                        data-bs-target="#modal_Projets">Modifier</button>
                    <!-- Modal -->
                    <div class="modal modal-sm fade" id="modal_Projets" data-bs-backdrop="static"
                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Modifier</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"><span class="fas fa-times" aria-hidden="true"></span></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <label for="recipient-name" class="form-label">Projets Terminés:</label>
                                        <div class="input-group input-group-outline mb-3">
                                            <label for="recipient-name" class="form-label">Combien de projets?</label>
                                            <input type="text" class="form-control" id="recipient-name">
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn bg-gradient-primary">Confirmer</button>
                                </div>
                            </div>
                        </div>
                    </div>
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
                        <h4 class="mb-0">{{ $nb_clients }}</h4>
                    </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">
                    <button class="btn bg-gradient-primary shadow-success w-100" type="button" data-bs-toggle="modal"
                        data-bs-target="#modal_Client">Modifier</button>
                    <!-- Modal -->
                    <div class="modal modal-sm fade" id="modal_Client" data-bs-backdrop="static"
                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Modifier</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"><span class="fas fa-times" aria-hidden="true"></span></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <label for="recipient-name" class="form-label">Client Satisfait:</label>
                                        <div class="input-group input-group-outline mb-3">
                                            <label for="recipient-name" class="form-label">Combien de clients?</label>
                                            <input type="text" class="form-control" id="recipient-name">
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn bg-gradient-primary">Confirmer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
