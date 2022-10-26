@extends('layouts.admin')
@section('title')
    Reviews
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
                            <button class="btn-lg mr-1 btn bg-gradient-primary d-flex align-items-center legitRipple"
                                type="button" data-bs-toggle="modal" data-bs-target="#modal_Add">
                                <i class="fas fa-plus-circle position-left mr-4"></i>
                                Ajouter nouveau
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="modal_Add" data-bs-backdrop="static" data-bs-keyboard="false"
                                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Ajouter un nouveau Commentaire
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"><span class="fas fa-times" aria-hidden="true"></span></button>
                                        </div>
                                        <div class="modal-body">
                                            <form id="form_add_review" action="{{ route('reviews.store') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="input-group input-group-outline mb-3">
                                                    <label for="reviewer_name" class="form-label">Nom du Client</label>
                                                    <input type="text" name="reviewer_name" class="form-control" id="reviewer_name">
                                                </div>
                                                <div class="input-group input-group-outline mb-3">
                                                    <label for="reviewer_profession" class="form-label">Profession</label>
                                                    <input type="text" name="reviewer_profession" class="form-control" id="reviewer_profession">
                                                </div>
                                                <div class="input-group-outline mb-3 d-flex align-items-center">
                                                    <input type="file" name="image_url" id="review_img" hidden>
                                                    <label for="review_img" class="lbl_img_upload">Choisir Image</label>
                                                    <span id="file-chosen">Aucune Image choisie</span>
                                                </div>
                                                <div class="input-group input-group-outline mb-3">
                                                    <label for="reviewer_comment" class="form-label">Commentaire</label>
                                                    <input type="text" name="reviewer_comment" class="form-control" id="reviewer_comment">
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" form="form_add_review" class="btn bg-gradient-primary">Ajouter</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>


                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Client Name</th>
                                <th>Profession</th>
                                <th>Image</th>
                                <th>Comment</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($reviews) > 0)
                                @foreach ($reviews as $review)
                                    <tr>
                                        <td>{{ $review->client_name }}</td>
                                        <td>{{ $review->profession }}</td>
                                        <td><img src="{{ asset($review->image_url) }}" width="50%" alt="Image du visiteur">
                                        </td>
                                        <th>{{ $review->comment }}</th>
                                        <td>
                                            <button class="edit border-0" type="button" data-reviewer="{{ $review->id }}" data-bs-toggle="modal"
                                                data-bs-target="#edit_modal{{ $loop->iteration }}"><i class="material-icons" data-toggle="tooltip"
                                                    title="" data-original-title="Edit"></i></button>
                                            <!-- Modal -->
                                            <div class="modal fade" id="edit_modal{{ $loop->iteration }}" data-bs-backdrop="static"
                                                data-bs-keyboard="false" tabindex="-1"
                                                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="staticBackdropLabel">Modifier un
                                                                review
                                                            </h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal"
                                                                aria-label="Close"><span class="fas fa-times" aria-hidden="true"></span></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form id="form_edit_review{{ $loop->iteration }}" action="{{ route('reviews.update', ['review'=>$review->id]) }}" method="POST" enctype="multipart/form-data">
                                                                @csrf
                                                                @method('PUT')
                                                                <div class="input-group input-group-outline mb-3 is-filled">
                                                                    <label for="reviewer_name" class="form-label">Nom du Client</label>
                                                                    <input type="text" name="reviewer_name" class="form-control" id="reviewer_name" value="{{ $review->client_name }}">
                                                                </div>
                                                                <div class="input-group input-group-outline mb-3 is-filled">
                                                                    <label for="reviewer_profession" class="form-label">Profession</label>
                                                                    <input type="text" name="reviewer_profession" class="form-control" id="reviewer_profession" value="{{ $review->profession }}">
                                                                </div>
                                                                <div class="input-group-outline mb-3 d-flex align-items-center">
                                                                    <input type="file" name="image_url" id="review_img{{$loop->iteration}}" hidden onchange="changeTextContent(this, {{$loop->iteration}})">
                                                                    <label for="review_img{{$loop->iteration}}" class="lbl_img_upload">Choisir Image</label>
                                                                    <span id="file-chosen{{$loop->iteration}}">Aucune Image choisie</span>
                                                                </div>
                                                                <div class="input-group input-group-outline mb-3 is-filled">
                                                                    <label for="reviewer_comment" class="form-label">Commentaire</label>
                                                                    <input type="text" name="reviewer_comment" class="form-control" id="reviewer_comment" value="{{ $review->comment }}">
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" form="form_edit_review{{ $loop->iteration }}"
                                                                class="btn bg-gradient-primary">Modifier</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button data-reviewer="{{ $review->id }}" class="delete border-0" data-bs-toggle="modal"
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
                                                            <form id="form_delete_review{{ $loop->iteration }}" action="{{ route('reviews.destroy', ['review'=>$review->id]) }}" method="post">
                                                                @csrf
                                                                @method('DELETE')
                                                            </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Fermer</button>
                                                            <button type="submit" form="form_delete_review{{ $loop->iteration }}" class="btn bg-gradient-primary">Oui ,
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
                                    <td colspan="6">Il y a aucun commentaire.</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                    {{ $reviews->links('vendor.pagination.custom-pagination') }}
                    <!-- END customer-list -->

                </div> <!-- END card -->
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div>
@endsection
