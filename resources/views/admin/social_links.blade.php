@extends('layouts.admin')
@section('title')
    Social Links
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
                                            <h5 class="modal-title" id="staticBackdropLabel">Ajouter un Social Link</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <form id="form_add_social_link" action="{{ route('social-links.store') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="input-group input-group-outline mb-3">
                                                    <label for="social_media_name" class="form-label">Nom du social media</label>
                                                    <input type="text" name="social_media_name" class="form-control" id="social_media_name">
                                                </div>
                                                <div class="input-group input-group-outline mb-3">
                                                    <label for="social_media_link" class="form-label">Link</label>
                                                    <input type="text" name="social_media_link" class="form-control" id="social_media_link">
                                                </div>
                                                <div class="input-group input-group-outline mb-3">
                                                    <label class="input-group-text" for="drop_service">Choisir</label>
                                                    <select class="form-select" name="member" id="drop_service">
                                                        <option selected>Le membre concerné</option>
                                                        @if (count($members) > 0)
                                                            @foreach ($members as $member)
                                                                <option value="{{ $member->id }}">{{ $member->name }}</option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" form="form_add_social_link" class="btn bg-gradient-primary">Ajouter</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="btn btn-danger ms-3 d-flex align-items-center" data-toggle="modal"><i
                                    class="material-icons"></i> <span>Supprimer</span></a>
                        </div>
                        <div class="btn-group heading-btn ms-3">
                            <button type="button" class="btn bg-gray-200 btn-lg btn-icon dropdown-toggle legitRipple"
                                data-toggle="dropdown">
                                <i class="fas fa-upload mr-4"></i>
                            </button>
                        </div>

                        <div class="order-lg-1 ">
                            <form name="rp-search-form" id="rp-search-form" action=""
                                class="form-inline justify-content-center">
                                <div class="form-group">
                                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                                        <div class="input-group input-group-outline">
                                            <label class="form-label">Chercher Ici...</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>


                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="selectAll">
                                        <label for="selectAll"></label>
                                    </span>
                                </th>
                                <th>Nom du social media</th>
                                <th>Lien</th>
                                <th>Nom du membre </th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($members) > 0)
                                @foreach ($members as $member)
                                    @if (count($member->social_links) > 0)
                                        @foreach ($member->social_links as $social_link)
                                            <tr>
                                                <td>
                                                    <span class="custom-checkbox">
                                                        <input type="checkbox" id="checkbox1" name="options[]" value="1">
                                                        <label for="checkbox1"></label>
                                                    </span>
                                                </td>
                                                <td>{{ $social_link->name }}</td>
                                                <td>{{ $social_link->link }}</td>
                                                <td>{{ $member->name }}</td>
                                                <td>
                                                    <button class="edit border-0" type="button" data-bs-toggle="modal"
                                                        data-bs-target="#edit_modal"><i class="material-icons" data-toggle="tooltip"
                                                            title="" data-original-title="Edit"></i></button>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="edit_modal" data-bs-backdrop="static"
                                                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="staticBackdropLabel">Modifier un social link
                                                                    </h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                        aria-label="Close">&times;</button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form>
                                                                        <div class="input-group input-group-outline mb-3">
                                                                            <label for="recipient-name" class="form-label">Nom</label>
                                                                            <input type="text" class="form-control" id="recipient-name">
                                                                        </div>
                                                                        <div class="input-group input-group-outline mb-3">
                                                                            <label for="recipient-name" class="form-label">Link</label>
                                                                            <input type="text" class="form-control" id="recipient-name">
                                                                        </div>
                                                                        <div class="input-group input-group-outline mb-3">
                                                                            <label class="input-group-text" for="drop_service">Choisir</label>
                                                                            <select class="form-select" id="drop_service">
                                                                                <option selected>ID du Membre</option>
                                                                                <option value="1">One</option>
                                                                                <option value="2">Two</option>
                                                                                <option value="3">Three</option>
                                                                            </select>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button"
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
                                                                    <h5 class="modal-title" id="exampleModalLabel">Vous êtes sûre ?</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-bs-dismiss="modal">Fermer</button>
                                                                    <button type="button" class="btn bg-gradient-primary">Oui ,
                                                                        Supprimer</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="4">Il y a aucun membre. Veuillez remplir les membres.</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                    <!-- END customer-list -->

                </div> <!-- END card -->
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div>
@endsection
