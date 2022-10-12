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
                    {{-- <div class="box-container p-4 d-flex justify-content-around">
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
                  </div> --}}
                    <!-- END customer-list -->
                </div> <!-- END card -->
                <button class="btn bg-gradient-primary shadow-success w-30 mt-4" type="button" data-bs-toggle="modal"
                    data-bs-target="#modal_company">Modifier</button>
                <!-- Modal -->
                <div class="modal fade" id="modal_company" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content bg-gray-100">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Modifier company</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close">&times;</button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="input-group input-group-outline mb-3">
                                        <label for="recipient-name" class="form-label">Nom</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                    </div>
                                    <div class="input-group-outline mb-3 d-flex align-items-center">
                                      <input type="file" id="member_img" hidden>
                                      <label for="member_img" class="lbl_img_upload">Choisir Logo</label>
                                      <span id="file-chosen">Aucun logo choisi</span>
                                    </div>
                                    <div class="input-group input-group-outline mb-3">
                                        <label for="recipient-name" class="form-label">Numéro de téléphone:</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                    </div>
                                    <div class="input-group input-group-outline mb-3">
                                        <label for="recipient-name" class="form-label">Email:</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                    </div>
                                    <div class="input-group input-group-outline mb-3">
                                        <label for="recipient-name" class="form-label">Adresse:</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                    </div>
                                    <div class="input-group input-group-outline mb-3">
                                        <label for="recipient-name" class="form-label">Heures d'ouverture:</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                    </div>
                                    <div class="input-group input-group-outline mb-3">
                                        <label for="recipient-name" class="form-label">Heures de fermeture:</label>
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
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div>
@endsection
