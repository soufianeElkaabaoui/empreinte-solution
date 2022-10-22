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
                                <form id="form_add_project" action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                  <div class="input-group input-group-outline mb-3">
                                      <label for="project_name" class="form-label">Nom du projet</label>
                                      <input type="text" name="project_name" class="form-control" id="project_name">
                                  </div>
                                  <div class="input-group-outline mb-3 d-flex align-items-center">
                                    <input type="file" name="image_url" id="project_img" hidden>
                                    <label for="project_img" class="lbl_img_upload">Choisir Image</label>
                                    <span id="file-chosen">Aucune Image choisie</span>
                                  </div>
                                  <div class="input-group input-group-outline mb-3">
                                      <label for="project_owner" class="form-label">Nom de la société</label>
                                      <input type="text" name="project_owner" class="form-control" id="project_owner">
                                  </div>
                                  <div class="input-group input-group-outline mb-3">
                                    <label class="input-group-text" for="project_type">Choisir</label>
                                    <select class="form-select" name="project_type" id="project_type">
                                      <option selected>Choisir services</option>
                                      @if (count($services) > 0)
                                          @foreach ($services as $service)
                                            <option value="{{ $service->id }}">{{ $service->name }}</option>
                                          @endforeach
                                      @endif
                                    </select>
                                  </div>
                              </form>
                              </div>
                              <div class="modal-footer">
                                  <button type="submit" form="form_add_project" class="btn bg-gradient-primary">Ajouter</button>
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
                            <td><img src="{{ asset($project->image_url) }}" width="100%" height="100%" alt="Image du projet"></td>
                            <td>{{$project->company_client}}</td>
                            <td>{{$project->service->name}}</td>
                            <td>
                              <button class="edit border-0" type="button" data-bs-toggle="modal"
                              data-bs-target="#edit_modal{{$loop->iteration}}"><i class="material-icons" data-toggle="tooltip"
                                  title="" data-original-title="Edit"></i></button>
                          <!-- Modal -->
                          <div class="modal fade" id="edit_modal{{$loop->iteration}}" data-bs-backdrop="static" data-bs-keyboard="false"
                              tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h5 class="modal-title" id="staticBackdropLabel">Modifier un projet
                                          </h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal"
                                              aria-label="Close">&times;</button>
                                      </div>
                                      <div class="modal-body">
                                        <form id="form_edit_project{{$loop->iteration}}" action="{{ route('projects.update', ['project'=>$project->id]) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                          <div class="input-group input-group-outline mb-3">
                                              <label for="project_name" class="form-label">Nom du projet</label>
                                              <input type="text" name="project_name" class="form-control" id="project_name" value="{{$project->name}}">
                                          </div>
                                          <div class="input-group-outline mb-3 d-flex align-items-center">
                                            <input type="file" name="image_url" id="member_img{{$loop->iteration}}" hidden onchange="changeTextContent(this, {{$loop->iteration}})">
                                            <label for="member_img{{$loop->iteration}}" class="lbl_img_upload">Choisir Image</label>
                                            <span id="file-chosen{{$loop->iteration}}">Aucune Image choisie</span>
                                          </div>
                                          <div class="input-group input-group-outline mb-3">
                                              <label for="project_owner" class="form-label">Nom de la société</label>
                                              <input type="text" name="project_owner" class="form-control" id="project_owner"  value="{{$project->company_client}}">
                                          </div>
                                          <div class="input-group input-group-outline mb-3">
                                            <label class="input-group-text" for="project_type">Choisir</label>
                                            <select class="form-select" name="project_type" id="project_type">
                                              <option>Choisir services</option>
                                              @if (count($services) > 0)
                                                  @foreach ($services as $service)
                                                    <option value="{{ $service->id }}" {{$service->id == $project->service->id ? 'selected' : ''}}>{{ $service->name }}</option>
                                                  @endforeach
                                              @endif
                                            </select>
                                          </div>
                                      </form>
                                      </div>
                                      <div class="modal-footer">
                                          <button type="submit" form="form_edit_project{{$loop->iteration}}" class="btn bg-gradient-primary">Modifier</button>
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
                                      </div>
                                      <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary"
                                              data-bs-dismiss="modal">Fermer</button>
                                          <button type="button" class="btn bg-gradient-primary">Oui , Supprimer</button>
                                      </div>
                                  </div>
                              </div>
                          </div>                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="6">Il y a aucun projets.</td>
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
