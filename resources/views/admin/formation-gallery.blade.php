@extends('layouts.admin')
@section('title')
    Formation Gallery
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
                                            <h5 class="modal-title" id="staticBackdropLabel">Ajouter une nouvelle Formation Gallery</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"><span class="fas fa-times" aria-hidden="true"></span></button>
                                        </div>
                                        <div class="modal-body">
                                          <form id="form_add_formation_gallery" method="post" action="{{ route('formationGalleries.store') }}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="input-group input-group-outline mb-3">
                                                <label for="formation-gallery-name" class="form-label">Titre</label>
                                                <input type="text" name="formation_gallery_name" class="form-control" id="formation-gallery-name">
                                            </div>
                                            <div class="input-group-outline mb-3 d-flex align-items-center">
                                                <input type="file" name="image_url" id="formation-gallery-img" hidden onchange="changeTextContent(this, '')">
                                                <label for="formation-gallery-img" class="lbl_img_upload">Choose File</label>
                                                <span id="file-chosen">No file chosen</span>
                                            </div>
                                            <div class="input-group input-group-outline mb-3">
                                                <label for="formation-gallery-description" class="form-label">Description</label>
                                                <input type="text" name="formation_gallery_description" class="form-control" id="formation-gallery-description">
                                            </div>
                                            <div class="input-group input-group-outline mb-3">
                                                <label class="input-group-text" for="formation">Choisir</label>
                                                <select class="form-select" name="formation" id="formation">
                                                  <option selected>Choisir Formation</option>
                                                  @if (count($formations) > 0)
                                                      @foreach ($formations as $formation)
                                                        <option value="{{ $formation->id }}">{{ $formation->name }}</option>
                                                      @endforeach
                                                  @endif
                                                </select>
                                            </div>
                                        </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" form="form_add_formation_gallery" class="btn bg-gradient-primary">Ajouter</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Titre</th>
                                    <th>Image</th>
                                    <th>Description</th>
                                    <th>Formation</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($formationGalleries) > 0)
                                    @foreach ($formationGalleries as $formationGallery)
                                        <tr>
                                            <td>{{ $formationGallery->name }}</td>
                                            <td>
                                                <img src="{{ asset('storage/' . $formationGallery->image_url) }}" width="50%" alt="Image de la gallery">
                                            </td>
                                            <td>{{ $formationGallery->description }}</td>
                                            <td>{{ $formationGallery->formation ? $formationGallery->formation->name : '' }}</td>
                                            <td>
                                                <button class="edit border-0" type="button" data-bs-toggle="modal"
                                                    data-bs-target="#edit_modal{{ $loop->iteration }}"><i class="material-icons" data-toggle="tooltip"
                                                        title="" data-original-title="Edit"></i></button>
                                                <!-- Modal -->
                                                <div class="modal fade" id="edit_modal{{ $loop->iteration }}" data-bs-backdrop="static"
                                                    data-bs-keyboard="false" tabindex="-1"
                                                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="staticBackdropLabel">Modifier une gallery
                                                                    formation 
                                                                </h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal"
                                                                    aria-label="Close"><span class="fas fa-times" aria-hidden="true"></span></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form id="form_edit_formation_gallery{{ $loop->iteration }}" method="post" action="{{ route('formationGalleries.update', ['formationGallery' => $formationGallery->id]) }}" enctype="multipart/form-data">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <div class="input-group input-group-outline mb-3 is-filled">
                                                                        <label for="formation-gallery-name-{{ $loop->iteration }}" class="form-label">Titre de la gallery formation</label>
                                                                        <input type="text" name="formation_gallery_name" class="form-control " id="formation-gallery-name-{{ $loop->iteration }}" value="{{ $formationGallery->name }}">
                                                                    </div>
                                                                    <div class="input-group-outline mb-3 d-flex align-items-center">
                                                                        <input type="file" name="image_url" id="formation-gallery-img-{{ $loop->iteration }}" hidden onchange="changeTextContent(this, {{ $loop->iteration }})">
                                                                        <label for="formation-gallery-img-{{ $loop->iteration }}" class="lbl_img_upload">Choose File</label>
                                                                        <span id="file-chosen{{ $loop->iteration }}">No file chosen</span>
                                                                    </div>
                                                                    <div class="input-group input-group-outline mb-3 is-filled">
                                                                        <label for="formation-gallery-description{{ $loop->iteration }}" class="form-label">Description</label>
                                                                        <input type="text" name="formation_gallery_description" class="form-control" id="formation-gallery-description{{ $loop->iteration }}" value="{{ $formationGallery->description }}">
                                                                    </div>
                                                                    <div class="input-group input-group-outline mb-3">
                                                                        <label class="input-group-text" for="formation{{ $loop->iteration }}">Choisir</label>
                                                                        <select class="form-select" name="formation" id="formation{{ $loop->iteration }}">
                                                                          <option>Choisir Formation</option>
                                                                          @if (count($formations) > 0)
                                                                              @foreach ($formations as $formation)
                                                                                <option value="{{ $formation->id }}" {{$formationGallery->formation && $formation->id == $formationGallery->formation->id ? 'selected' : ''}}>{{ $formation->name }}</option>
                                                                              @endforeach
                                                                          @endif
                                                                        </select>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" form="form_edit_formation_gallery{{ $loop->iteration }}"
                                                                    class="btn bg-gradient-primary">Modifier</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="delete border-0" data-bs-toggle="modal"
                                                    data-bs-target="#delete_modal{{ $loop->iteration }}">
                                                    <i class="material-icons" data-toggle="tooltip" title=""
                                                        data-original-title="Delete">
                                                    </i>
                                                </button>
                                                <!-- Modal -->
                                                <div class="modal fade" id="delete_modal{{ $loop->iteration }}" tabindex="-1"
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
                                                                <form id="form_delete_formation_gallery{{ $loop->iteration }}" action="{{ route('formationGalleries.destroy', ['formationGallery' => $formationGallery->id]) }}" method="post">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                </form>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Fermer</button>
                                                                <button type="submit" form="form_delete_formation_gallery{{ $loop->iteration }}" class="btn bg-gradient-primary">Oui ,
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
                                        <td colspan="5">Il y a aucune gallery formation.</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                    {{ $formationGalleries->links('vendor.pagination.custom-pagination', ['paginator' => $formationGalleries]) }}
                    <!-- END customer-list -->

                </div> <!-- END card -->
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div>
@endsection
