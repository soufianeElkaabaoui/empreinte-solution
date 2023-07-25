@extends('layouts.admin')
@section('title')
    Profile
@endsection
@section('content')
    <div class="container-fluid px-2 px-md-4">
        <div class="page-header min-height-300 border-radius-xl mt-4"
            style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
            <span class="mask  bg-gradient-primary  opacity-6"></span>
        </div>
        <div class="card card-body mx-3 mx-md-4 mt-n6 profile">
            <div class="row gx-4 mb-2 d-flex flex-column">
                <div class="col-auto align-self-center">
                    <div class="avatar avatar-xxl position-relative">
                        <img src="{{ asset($user->image_url) }}" alt="profile_image" class="w-120 border-radius-lg shadow-sm">
                    </div>
                </div>
                {{-- <div class="col-auto my-auto">
                    <div class="h-100">
                        <h5 class="mb-1">
                             {{$user->name}}
                        </h5>
                    </div>
                </div> --}}
            </div>
            <div class="row">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-plain h-100 profile">
                            <div class="card-header pb-0 p-3 d-flex mb-4">
                                <div class="row">
                                    <div class="col-md-8 d-flex align-items-center">
                                        <h6 class="mb-0">Profile Information</h6>
                                    </div>
                                    {{-- <div class="col-md-4 text-end mdl-mb">
                                        <a href="javascript:;" type="button"
                                        data-bs-toggle="modal" data-bs-target="#modal_profile1">
                                            <i class="fas fa-user-edit text-secondary text-sm" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Edit Profile"></i>
                                        </a>
                                        <div class="modal fade" id="modal_profile1" data-bs-backdrop="static"
                                            data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="staticBackdropLabel">Modifier le profile</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"><span class="fas fa-times" aria-hidden="true"></span></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form id="form_edit_profile" action="{{ route('users.update', ['user'=>$user->id]) }}" method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="input-group input-group-outline mb-3 is-filled">
                                                                <label for="user_name"
                                                                    class="form-label">Votre Nom complet</label>
                                                                <input type="text" class="form-control"
                                                                    id="user_name" name="user_name" value="{{ $user->name }}">
                                                            </div>
                                                            <div class="input-group input-group-outline mb-3 is-filled">
                                                                <label for="user_email"
                                                                    class="form-label">Email</label>
                                                                <input type="text" class="form-control"
                                                                    id="user_email" name="user_email" value="{{ $user->email }}">
                                                            </div>
                                                            <div class="input-group-outline mb-3 d-flex align-items-center">
                                                                <input type="file" name="image_url" id="user_img" hidden onchange="changeTextContent(this, '')">
                                                                <label for="user_img" class="lbl_img_upload">Choisir Image</label>
                                                                <span id="file-chosen">Aucune Image choisie</span>
                                                            </div>
                                                            <div class="input-group input-group-outline mb-3">
                                                                <label for="user_password"
                                                                    class="form-label">Nouveau mot de passe</label>
                                                                <input type="text" class="form-control"
                                                                    id="user_password" name="user_password">
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" form="form_edit_profile"
                                                            class="btn bg-gradient-primary">Ajouter</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>      --}}
                           </div>
                            </div>
                            <div class="card-body p-3">
                                <ul class="list-group">
                                    <li class="list-group-item border-0 ps-0 pt-0 text-sm">
                                        <strong class="text-dark">Nom Complet:</strong> &nbsp; {{$user->name}}
                                    </li>
                                    <li class="list-group-item border-0 ps-0 text-sm">
                                        <strong class="text-dark">Email:</strong> &nbsp; {{$user->email}}
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-4 text-end mdl-mb-show">
                                <a href="javascript:;" type="button"
                                data-bs-toggle="modal" data-bs-target="#modal_profile">
                                    <i class="fas fa-user-edit text-secondary text-sm" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Edit Profile"></i>
                                </a>
                                <div class="modal fade" id="modal_profile" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Modifier le profile</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"><span class="fas fa-times" aria-hidden="true"></span></button>
                                            </div>
                                            <div class="modal-body">
                                                <form id="form_edit_profile" action="{{ route('users.update', ['user'=>$user->id]) }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="input-group input-group-outline mb-3 is-filled">
                                                        <label for="user_name"
                                                            class="form-label">Votre Nom complet</label>
                                                        <input type="text" class="form-control"
                                                            id="user_name" name="user_name" value="{{ $user->name }}">
                                                    </div>
                                                    <div class="input-group input-group-outline mb-3 is-filled">
                                                        <label for="user_email"
                                                            class="form-label">Email</label>
                                                        <input type="text" class="form-control"
                                                            id="user_email" name="user_email" value="{{ $user->email }}">
                                                    </div>
                                                    <div class="input-group-outline mb-3 d-flex align-items-center">
                                                        <input type="file" name="image_url" id="user_img" hidden onchange="changeTextContent(this, '')">
                                                        <label for="user_img" class="lbl_img_upload">Choisir Image</label>
                                                        <span id="file-chosen">Aucune Image choisie</span>
                                                    </div>
                                                    <div class="input-group input-group-outline mb-3">
                                                        <label for="user_password"
                                                            class="form-label">Nouveau mot de passe</label>
                                                        <input type="text" class="form-control"
                                                            id="user_password" name="user_password">
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" form="form_edit_profile"
                                                    class="btn bg-gradient-primary">Ajouter</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-12 col-md-6 my-auto">
                    <div class="copyright text-center text-sm text-lg-start">
                        ©
                        <script>
                            document.write(new Date().getFullYear())
                        </script>,
                        Créer avec <i class="fa fa-heart" aria-hidden="true"></i> par
                        <a href="https://www.sykweb.net" class="font-weight-bold text-dark" target="_blank">SykWeb</a>
                        pour un meilleur siteweb
                    </div>
                </div>
            </div>
        </div>
    </footer>
    </div>
@endsection
