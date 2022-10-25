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
                        <p> <span class="text-dark text-lg font-weight-bolder">Logo :</span> <img width="78%" height="50" src="{{asset($company->logo_url)}}" alt="Logo de la société"></p>
                        <p> <span class="text-dark text-lg font-weight-bolder">N° de telephone :</span> {{$company->phone_number}}</p>
                        <p> <span class="text-dark text-lg font-weight-bolder">Email :</span> {{$company->email}}</p>
                        <p> <span class="text-dark text-lg font-weight-bolder">Adresse Location :</span> {{$company->adress_location}}</p>
                    </div>
                    <div class="box">
                        <p> <span class="text-dark text-lg font-weight-bolder">Heure d'ouverture :</span> {{$company->opening_hour}}</p>
                        <p> <span class="text-dark text-lg font-weight-bolder">Heure de fermeture :</span> {{$company->closing_hour}}</p>
                        <p> <span class="text-dark text-lg font-weight-bolder">Instagram Link :</span></p>
                        <p> <span class="text-dark text-lg font-weight-bolder">Facebook Link :</span></p>
                        <p> <span class="text-dark text-lg font-weight-bolder">Twitter Link :</span></p>
                    </div>
                  </div>
                    <!-- END customer-list -->
                </div> <!-- END card -->
                <button class="btn bg-gradient-primary shadow-success w-30 mt-4" type="button" data-bs-toggle="modal"
                    data-bs-target="#modal_company">Modifier
                </button>
                <!-- Modal -->
                <div class="modal fade" id="modal_company" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content bg-gray-100">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Modifier company</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"><span class="fas fa-times" aria-hidden="true"></span></button>
                            </div>
                            <div class="modal-body">
                                <form id="form_edit_company" action="{{ route('companies.update', ['company'=>$company->id]) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="input-group input-group-outline mb-3">
                                        <label for="company_name" class="form-label">Nom</label>
                                        <input type="text" name="company_name" class="form-control" id="company_name" value="{{$company->name}}">
                                    </div>
                                    <div class="input-group-outline mb-3 d-flex align-items-center">
                                      <input type="file" name="image_url" id="company_img" hidden onchange="changeTextContent(this, '')">
                                      <label for="company_img" class="lbl_img_upload">Choisir Logo</label>
                                      <span id="file-chosen">Aucun logo choisi</span>
                                    </div>
                                    <div class="input-group input-group-outline mb-3">
                                        <label for="comapny_phone" class="form-label">Numéro de téléphone:</label>
                                        <input type="text" name="comapny_phone" class="form-control" id="comapny_phone" value="{{$company->phone_number}}">
                                    </div>
                                    <div class="input-group input-group-outline mb-3">
                                        <label for="company_email" class="form-label">Email:</label>
                                        <input type="text" name="company_email" class="form-control" id="company_email" value="{{$company->email}}">
                                    </div>
                                    <div class="input-group input-group-outline mb-3">
                                        <label for="company_adresse" class="form-label">Adresse:</label>
                                        <input type="text" name="company_adresse" class="form-control" id="company_adresse" value="{{$company->adress_location}}">
                                    </div>
                                    <div class="input-group input-group-outline mb-3">
                                        <label for="company_adresse" class="form-label">Facebook Link:</label>
                                        <input type="text" name="company_facebook" class="form-control" id="company_facebook" value="">
                                    </div>
                                    <div class="input-group input-group-outline mb-3">
                                        <label for="company_adresse" class="form-label">Instagram Link:</label>
                                        <input type="text" name="company_instagram" class="form-control" id="company_instagram" value="">
                                    </div>
                                    <div class="input-group input-group-outline mb-3">
                                        <label for="company_adresse" class="form-label">Twitter Link:</label>
                                        <input type="text" name="company_twitter" class="form-control" id="company_twitter" value="">
                                    </div>
                                    <div class="input-group input-group-outline mb-3">
                                        <label for="comapny_open_hour" class="form-label">Heures d'ouverture:</label>
                                        <input type="time" name="comapny_open_hour" class="form-control" id="comapny_open_hour" value="{{$company->opening_hour}}">
                                    </div>
                                    <div class="input-group input-group-outline mb-3">
                                        <label for="company_close_hour" class="form-label">Heures de fermeture:</label>
                                        <input type="time" name="company_close_hour" class="form-control" id="company_close_hour" value="{{$company->closing_hour}}">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" form="form_edit_company" class="btn bg-gradient-primary">Confirmer</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div>
@endsection
