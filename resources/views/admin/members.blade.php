@extends('layouts.admin')
@section('title')
    Members
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
                                            <h5 class="modal-title" id="staticBackdropLabel">Ajouter un nouveau membre</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <form id="form_add_member" method="post" action="{{ route('members.store') }}" enctype="multipart/form-data">
                                                @csrf
                                                <div class="input-group input-group-outline mb-3">
                                                    <label for="recipient-name" class="form-label">Nom</label>
                                                    <input type="text" name="member_name" class="form-control" id="recipient-name">
                                                </div>
                                                <label for="recipient-name" class="form-label">Image:</label>
                                                <div class="input-group-outline mb-3 d-flex align-items-center">
                                                    <input type="file" name="image_url" id="member_img" hidden>
                                                    <label for="member_img" class="lbl_img_upload">Choose File</label>
                                                    <span id="file-chosen">No file chosen</span>
                                                </div>
                                                <div class="input-group input-group-outline mb-3">
                                                    <label for="recipient-name" class="form-label">Poste</label>
                                                    <input type="text" name="member_status" class="form-control" id="recipient-name">
                                                </div>
                                                <div class="input-group input-group-outline mb-3">
                                                    <label for="member_fb_url" class="form-label">Lien de Facebook</label>
                                                    <input type="text" name="member_fb_url" class="form-control" id="member_fb_url">
                                                </div>
                                                <div class="input-group input-group-outline mb-3">
                                                    <label for="member_insta_url" class="form-label">Lien de Instagram</label>
                                                    <input type="text" name="member_insta_url" class="form-control" id="member_insta_url">
                                                </div>
                                                <div class="input-group input-group-outline mb-3">
                                                    <label for="member_twitter_url" class="form-label">Lien de Twitter</label>
                                                    <input type="text" name="member_twitter_url" class="form-control" id="member_twitter_url">
                                                </div>
                                                <div class="input-group input-group-outline mb-3">
                                                    <label for="member_linkedin_url" class="form-label">Lien de LinkedIn</label>
                                                    <input type="text" name="member_linkedin_url" class="form-control" id="member_linkedin_url">
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" form="form_add_member" class="btn bg-gradient-primary">Ajouter</button>
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
                                <th>Status</th>
                                <th>Lien du Facebook</th>
                                <th>Lien du Instagram</th>
                                <th>Lien du Twitter</th>
                                <th>Lien du LinkedIn</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($members))
                                @foreach ($members as $member)
                                    <tr>
                                        <td>{{ $member->name }}</td>
                                        <td><img src="{{ asset($member->image_url) }}" width="50%" alt="Image du membre">
                                        </td>
                                        <td>{{ $member->status }}</td>
                                        <td>{{ $member->facebook_url }}</td>
                                        <td>{{ $member->instagram_url }}</td>
                                        <td>{{ $member->twitter_url }}</td>
                                        <td>{{ $member->linkedin_url }}</td>
                            <td>
                                <button class="edit border-0" type="button" data-bs-toggle="modal"
                                    data-bs-target="#edit_modal"><i class="material-icons" data-toggle="tooltip"
                                        title="" data-original-title="Edit"></i></button>
                                <!-- Modal -->
                                <div class="modal fade" id="edit_modal" data-bs-backdrop="static" data-bs-keyboard="false"
                                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Modifier un membre
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <form id="form_edit_member" method="post" action="{{ route('members.update', ['member' => $member->id]) }}" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="input-group input-group-outline mb-3">
                                                        <label for="member_name" class="form-label">Nom du member</label>
                                                        <input type="text" name="member_name" class="form-control" id="member_name" value="{{ $member->name }}">
                                                    </div>
                                                    <label for="member_img" class="form-label">Image:</label>
                                                    <div class="input-group-outline mb-3 d-flex align-items-center">
                                                        <input type="file" name="image_url" id="member_img" hidden>
                                                        <label for="member_img" class="lbl_img_upload">Choose File</label>
                                                        <span id="file-chosen">Aucun fichier séléctionné</span>
                                                    </div>
                                                    <div class="input-group input-group-outline mb-3">
                                                        <label for="member_status" class="form-label">Poste</label>
                                                        <input type="text" name="member_status" class="form-control" id="member_status" value="{{ $member->status }}">
                                                    </div>
                                                    <div class="input-group input-group-outline mb-3">
                                                        <label for="member_fb_url" class="form-label">Lien de Facebook</label>
                                                        <input type="text" name="member_fb_url" class="form-control" id="member_fb_url" value="{{ $member->facebook_url }}">
                                                    </div>
                                                    <div class="input-group input-group-outline mb-3">
                                                        <label for="member_insta_url" class="form-label">Lien de Instagram</label>
                                                        <input type="text" name="member_insta_url" class="form-control" id="member_insta_url" value="{{ $member->instagram_url }}">
                                                    </div>
                                                    <div class="input-group input-group-outline mb-3">
                                                        <label for="member_twitter_url" class="form-label">Lien de Twitter</label>
                                                        <input type="text" name="member_twitter_url" class="form-control" id="member_twitter_url" value="{{ $member->twitter_url }}">
                                                    </div>
                                                    <div class="input-group input-group-outline mb-3">
                                                        <label for="member_linkedin_url" class="form-label">Lien de LinkedIn</label>
                                                        <input type="text" name="member_linkedin_url" class="form-control" id="member_linkedin_url" value="{{ $member->linkedin_url }}">
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" form="form_edit_member" class="btn bg-gradient-primary">Modifier</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="delete border-0"  data-bs-toggle="modal" data-bs-target="#delete_modal">
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
                                                <form id="form_delete_member" action="{{ route('members.destroy', ['member'=>$member->id]) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Fermer</button>
                                                <button type="submit" form="form_delete_member" class="btn bg-gradient-primary">Oui , Supprimer</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            </tr>
                            @endforeach
                            @else
                                <tr>
                                    <td colspan="5">Il y a aucun membre.</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                    {{ $members->links('vendor.pagination.custom-pagination', ['members' => $members]) }}
                    <!-- END customer-list -->

                </div> <!-- END card -->
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div>
@endsection
