@extends('layouts.admin')
@section('title')
    users
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
                                  <h5 class="modal-title" id="staticBackdropLabel">Ajouter un nouveau user</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal"
                                      aria-label="Close"><span class="fas fa-times" aria-hidden="true"></span></button>
                              </div>
                              <div class="modal-body">
                                <form id="form_add_user" action="{{ route('users.store') }}" method="POST">
                                    @csrf
                                  <div class="input-group input-group-outline mb-3">
                                      <label for="user_name" class="form-label">Nom d'utilisateur</label>
                                      <input type="text" name="user_name" class="form-control" id="user_name">
                                  </div>
                                  <div class="input-group input-group-outline mb-3">
                                      <label for="user_email" class="form-label">Email</label>
                                      <input type="email" name="user_email" class="form-control" id="user_email">
                                  </div>
                                  <div class="input-group input-group-outline mb-3">
                                    <label for="user_password" class="form-label">Password</label>
                                    <input type="text" name="user_password" class="form-control" id="user_password">
                                </div>
                              </form>
                              </div>
                              <div class="modal-footer">
                                  <button type="submit" form="form_add_user" class="btn bg-gradient-primary">Ajouter</button>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

          </div>


            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th>Nom d'utilisateur</th>
                  <th>Email</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                @if (count($users) > 0)
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
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
                                                <h5 class="modal-title" id="staticBackdropLabel">Modifier un user
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"><span class="fas fa-times" aria-hidden="true"></span></button>
                                            </div>
                                            <div class="modal-body">
                                                <form id="form_edit_user" action="{{ route('users.update', ['user'=>$user->id]) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="input-group input-group-outline mb-3">
                                                        <label for="user_name" class="form-label">Nom d'utilisateur</label>
                                                        <input type="text" name="user_name" class="form-control" id="user_name" value="{{ $user->name }}">
                                                    </div>
                                                    <div class="input-group input-group-outline mb-3">
                                                        <label for="user_email" class="form-label">Email</label>
                                                        <input type="email" name="user_email" class="form-control" id="user_email" value="{{ $user->email }}">
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" form="form_edit_user" class="btn bg-gradient-primary">Modifier</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="delete border-0"  data-bs-toggle="modal" data-bs-target="#delete_modal{{$loop->iteration}}">
                                    <i class="material-icons" data-toggle="tooltip" title=""
                                        data-original-title="Delete">
                                    </i>
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="delete_modal{{$loop->iteration}}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Vous êtes sûre ?</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"><span class="fas fa-times" aria-hidden="true"></span></button>
                                            </div>
                                            <div class="modal-body">
                                                <form id="form_delete_user" action="{{ route('users.destroy', ['user'=>$user->id]) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Fermer</button>
                                                <button type="submit" form="form_delete_user" class="btn bg-gradient-primary">Oui , Supprimer</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="3">Il y a aucun utilisateur</td>
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
