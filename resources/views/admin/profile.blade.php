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
        <div class="card card-body mx-3 mx-md-4 mt-n6">
            <div class="row gx-4 mb-2">
                <div class="col-auto">
                    <div class="avatar avatar-xl position-relative">
                        <img src="../assets/img/bruce-mars.jpg" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                    </div>
                </div>
                <div class="col-auto my-auto">
                    <div class="h-100">
                        <h5 class="mb-1">
                            Si Ahmed
                        </h5>
                        <p class="mb-0 font-weight-normal text-sm">
                            CEO / Co-Founder
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-plain h-100">
                            <div class="card-header pb-0 p-3">
                                <div class="row">
                                    <div class="col-md-8 d-flex align-items-center">
                                        <h6 class="mb-0">Profile Information</h6>
                                    </div>
                                    <div class="col-md-4 text-end">
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
                                                            aria-label="Close">&times;</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form>
                                                            <div class="input-group input-group-outline mb-3">
                                                                <label for="recipient-name" class="form-label">Profile Information</label>
                                                                <input type="text" class="form-control"
                                                                    id="recipient-name">
                                                            </div>
                                                            <div class="input-group input-group-outline mb-3">
                                                                <label for="recipient-name"
                                                                    class="form-label">Full Name</label>
                                                                <input type="text" class="form-control"
                                                                    id="recipient-name">
                                                            </div>
                                                            <div class="input-group input-group-outline mb-3">
                                                              <label for="recipient-name"
                                                                  class="form-label">Mobile</label>
                                                              <input type="text" class="form-control"
                                                                  id="recipient-name">
                                                          </div>
                                                            <div class="input-group input-group-outline mb-3">
                                                                <label for="recipient-name"
                                                                    class="form-label">Email</label>
                                                                <input type="text" class="form-control"
                                                                    id="recipient-name">
                                                            </div>
                                                            <div class="input-group input-group-outline mb-3">
                                                              <label for="recipient-name"
                                                                  class="form-label">Location</label>
                                                              <input type="text" class="form-control"
                                                                  id="recipient-name">
                                                          </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button"
                                                            class="btn bg-gradient-primary">Ajouter</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-3">
                                <p class="text-sm">
                                    Hi, I’m Si Ahmed, Decisions: If you can’t decide, the answer is no. If two equally
                                    difficult paths, choose the one more painful in the short term (pain avoidance is
                                    creating an illusion of equality).
                                </p>
                                <hr class="horizontal gray-light my-4">
                                <ul class="list-group">
                                    <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Full
                                            Name:</strong> &nbsp; Si Ahmed</li>
                                    <li class="list-group-item border-0 ps-0 text-sm"><strong
                                            class="text-dark">Mobile:</strong> &nbsp; (212) 5 24 43 07 49</li>
                                    <li class="list-group-item border-0 ps-0 text-sm"><strong
                                            class="text-dark">Email:</strong> &nbsp; imanecom@outlook.fr</li>
                                    <li class="list-group-item border-0 ps-0 text-sm"><strong
                                            class="text-dark">Location:</strong> &nbsp; Marrakech</li>
                                </ul>
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
                        <a href="https://www.sykweb.ma" class="font-weight-bold text-dark" target="_blank">SykWeb</a>
                        pour un meilleur siteweb
                    </div>
                </div>
            </div>
        </div>
    </footer>
    </div>
@endsection
