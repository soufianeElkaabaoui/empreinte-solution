@extends('layouts.admin')
@section('title')
    Projets
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
                                  <h5 class="modal-title" id="staticBackdropLabel">Ajouter un nouveau projet</h5>
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
                                    <label for="member_img" class="lbl_img_upload">Choisir Image</label>
                                    <span id="file-chosen">Aucune Image choisie</span>
                                  </div>
                                  <div class="input-group input-group-outline mb-3">
                                      <label for="recipient-name" class="form-label">Nom du Client:</label>
                                      <input type="text" class="form-control" id="recipient-name">
                                  </div>
                                  <div class="input-group input-group-outline mb-3">
                                    <label class="input-group-text" for="drop_service">Choisir</label>
                                    <select class="form-select" id="drop_service">
                                      <option selected>Type de Services</option>
                                      <option value="1">One</option>
                                      <option value="2">Two</option>
                                      <option value="3">Three</option>
                                    </select>
                                  </div>
                              </form>
                              </div>
                              <div class="modal-footer">
                                  <button type="button" class="btn bg-gradient-primary">Ajouter</button>
                              </div>
                          </div>
                      </div>
                  </div>
                  <a href="#" class="btn btn-danger ms-3 d-flex align-items-center"
                                data-toggle="modal"><i class="material-icons"></i> <span>Supprimer</span></a>
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
                  <th>Name</th>
                  <th>Image</th>
                  <th>Client Name</th>
                  <th>Service Type</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                @if (count($projects) > 0)
                    @foreach ($projects as $project)
                        <tr>
                            <td>
                                <span class="custom-checkbox">
                                <input type="checkbox" id="checkbox{{$loop->iteration}}" name="options[]" value="1">
                                <label for="checkbox{{$loop->iteration}}"></label>
                                </span>
                            </td>
                            <td>{{$project->name}}</td>
                            <td><img src="{{ asset('images/' . $project->image_url) }}" alt="Image du projet"></td>
                            <td>{{$project->company_client}}</td>
                            <td>{{$project->service->name}}</td>
                            <td>
                                <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="" data-original-title="Edit"></i></a>
                                <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="" data-original-title="Delete"></i></a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="5">Il y a aucun projets.</td>
                    </tr>
                @endif
              </tbody>
            </table>
            {{ $projects->links('vendor.pagination.custom-pagination') }}
            <!-- END customer-list -->

          </div> <!-- END card -->
        </div> <!-- end col -->
      </div> <!-- end row -->
    </div>
@endsection