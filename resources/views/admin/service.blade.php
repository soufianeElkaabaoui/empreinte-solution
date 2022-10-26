@extends('layouts.admin')
@section('title')
    Service
@endsection
@section('content')
    <div class="content-wrapper">
        <div id="msg"></div>
        <div class="row">
            <div class="col">
                <div class="card bg-white mr-4">
                    <div class="card-header d-lg-flex flex-wrap justify-content-between bg-gray-100">

                        <hr class="w-100 d-lg-none">

                        <div class="d-flex order-lg-0">
                            <button
                                class="btn-lg mr-1 btn bg-gradient-primary d-flex align-items-center legitRipple"type="button"
                                data-bs-toggle="modal" data-bs-target="#modal_Add">
                                <i class="fas fa-plus-circle position-left mr-4"></i>
                                Ajouter nouveau
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="modal_Add" data-bs-backdrop="static" data-bs-keyboard="false"
                                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Ajouter un nouveau Service</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"><span class="fas fa-times" aria-hidden="true"></span></button>
                                        </div>
                                        <div class="modal-body">
                                          <form id="form_add_service" method="post" action="{{ route('masterServices.store') }}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="input-group input-group-outline mb-3">
                                                <label for="recipient-name" class="form-label">Nom</label>
                                                <input type="text" name="service_name" class="form-control" id="recipient-name">
                                            </div>
                                            <label for="recipient-name" class="form-label">Image:</label>
                                            <div class="input-group-outline mb-3 d-flex align-items-center">
                                                <input type="file" name="image_url" id="member_img" hidden>
                                                <label for="member_img" class="lbl_img_upload">Choose File</label>
                                                <span id="file-chosen">No file chosen</span>
                                            </div>
                                            <div class="input-group input-group-outline mb-3">
                                                <label for="recipient-name" class="form-label">Description</label>
                                                <input type="text" name="service_description" class="form-control" id="recipient-name">
                                            </div>
                                        </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" form="form_add_service" class="btn bg-gradient-primary">Ajouter</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>


                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Desc</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($services) > 0)
                                @foreach ($services as $service)
                                    <tr>
                                        <td>{{ $service->name }}</td>
                                        <td><img src="{{ asset($service->image_url) }}" width="50%" alt="Image du service">
                                        </td>
                                        <td>{{ $service->description }}</td>
                                        <td>
                                            <button class="edit border-0" type="button" data-bs-toggle="modal"
                                                data-bs-target="#edit_modal"><i class="material-icons" data-toggle="tooltip"
                                                    title="" data-original-title="Edit"></i></button>
                                            <!-- Modal -->
                                            <div class="modal fade" id="edit_modal" data-bs-backdrop="static"
                                                data-bs-keyboard="false" tabindex="-1"
                                                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="staticBackdropLabel">Modifier un
                                                                service
                                                            </h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal"
                                                                aria-label="Close"><span class="fas fa-times" aria-hidden="true"></span></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form id="form_edit_service" method="post" action="{{ route('masterServices.update', ['masterService' => $service->id]) }}" enctype="multipart/form-data">
                                                                @csrf
                                                                @method('PUT')
                                                                <div class="input-group input-group-outline mb-3 is-filled">
                                                                    <label for="service_name" class="form-label">Nom du service</label>
                                                                    <input type="text" name="service_name" class="form-control " id="service_name" value="{{ $service->name }}">
                                                                </div>
                                                                <label for="service_img" class="form-label">Image:</label>
                                                                <div class="input-group-outline mb-3 d-flex align-items-center">
                                                                    <input type="file" name="image_url" id="service_img" hidden>
                                                                    <label for="service_img" class="lbl_img_upload">Choose File</label>
                                                                    <span id="file-chosen">No file chosen</span>
                                                                </div>
                                                                <div class="input-group input-group-outline mb-3 is-filled">
                                                                    <label for="service_description" class="form-label">Description</label>
                                                                    <input type="text" name="service_description" class="form-control" id="service_description" value="{{ $service->description }}">
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" form="form_edit_service"
                                                                class="btn bg-gradient-primary">Modifier</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="delete border-0" data-bs-toggle="modal"
                                                data-bs-target="#delete_modal">
                                                <i class="material-icons" data-toggle="tooltip" title=""
                                                    data-original-title="Delete">
                                                </i>
                                            </button>
                                            <!-- Modal -->
                                            <div class="modal fade" id="delete_modal" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Vous êtes sûre
                                                                ?</h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"><span class="fas fa-times" aria-hidden="true"></span></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form id="form_delete_service" action="{{ route('masterServices.destroy', ['masterService' => $service->id]) }}" method="post">
                                                                @csrf
                                                                @method('DELETE')
                                                            </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Fermer</button>
                                                            <button type="submit" form="form_delete_service" class="btn bg-gradient-primary">Oui ,
                                                                Supprimer</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="5">Il y a aucun service.</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                    {{ $services->links('vendor.pagination.custom-pagination', ['paginator' => $services]) }}
                    <!-- END customer-list -->

                </div> <!-- END card -->
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div>
@endsection
