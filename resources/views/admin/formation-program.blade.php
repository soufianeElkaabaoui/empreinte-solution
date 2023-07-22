@extends('layouts.admin')
@section('title')
    Formation Program
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
                                            <h5 class="modal-title" id="staticBackdropLabel">Ajouter un nouveau Formation Program</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"><span class="fas fa-times" aria-hidden="true"></span></button>
                                        </div>
                                        <div class="modal-body">
                                          <form id="form_add_formation_program" method="post" action="{{ route('formationPrograms.store') }}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="input-group input-group-outline mb-3">
                                                <label for="formation-program-name" class="form-label">Nom</label>
                                                <input type="text" name="formation_program_name" class="form-control" id="formation-program-name">
                                            </div>
                                            <div class="input-group input-group-outline mb-3">
                                                <label for="formation-program-titles" class="form-label">Titles</label>
                                                <input type="text" name="formation_program_titles[]" class="form-control" id="formation-program-titles">
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
                                            <button type="submit" form="form_add_formation_program" class="btn bg-gradient-primary">Ajouter</button>
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
                                    <th>Name</th>
                                    <th>Titles</th>
                                    <th>Formation</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($formationPrograms) > 0)
                                    @foreach ($formationPrograms as $formationProgram)
                                        <tr>
                                            <td>{{ $formationProgram->name }}</td>
                                            <td>{{ $formationProgram->titles }}</td>
                                            <td>{{ $formationProgram->formation ? $formationProgram->formation->name : '' }}</td>
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
                                                                <h5 class="modal-title" id="staticBackdropLabel">Modifier un program
                                                                    formation 
                                                                </h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal"
                                                                    aria-label="Close"><span class="fas fa-times" aria-hidden="true"></span></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form id="form_edit_formation_program{{ $loop->iteration }}" method="post" action="{{ route('formationPrograms.update', ['formationProgram' => $formationProgram->id]) }}" enctype="multipart/form-data">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <div class="input-group input-group-outline mb-3 is-filled">
                                                                        <label for="formation-program-name-{{ $loop->iteration }}" class="form-label">Nom du program formation</label>
                                                                        <input type="text" name="formation_program_name" class="form-control " id="formation-program-name-{{ $loop->iteration }}" value="{{ $formationProgram->name }}">
                                                                    </div>
                                                                    <div class="input-group input-group-outline mb-3 is-filled">
                                                                        <label for="formation-program-titles{{ $loop->iteration }}" class="form-label">Titles</label>
                                                                        <input type="text" name="formation_program_titles[]" class="form-control" id="formation-program-titles{{ $loop->iteration }}" value="{{ $formationProgram->titles }}">
                                                                    </div>
                                                                    <div class="input-group input-group-outline mb-3">
                                                                        <label class="input-group-text" for="formation{{ $loop->iteration }}">Choisir</label>
                                                                        <select class="form-select" name="formation" id="formation{{ $loop->iteration }}">
                                                                          <option>Choisir Formation</option>
                                                                          @if (count($formations) > 0)
                                                                              @foreach ($formations as $formation)
                                                                                <option value="{{ $formation->id }}" {{$formationProgram->formation && $formation->id == $formationProgram->formation->id ? 'selected' : ''}}>{{ $formation->name }}</option>
                                                                              @endforeach
                                                                          @endif
                                                                        </select>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" form="form_edit_formation_program{{ $loop->iteration }}"
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
                                                                <form id="form_delete_formation_program{{ $loop->iteration }}" action="{{ route('formationPrograms.destroy', ['formationProgram' => $formationProgram->id]) }}" method="post">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                </form>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Fermer</button>
                                                                <button type="submit" form="form_delete_formation_program{{ $loop->iteration }}" class="btn bg-gradient-primary">Oui ,
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
                                        <td colspan="5">Il y a aucun program formation.</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                    {{ $formationPrograms->links('vendor.pagination.custom-pagination', ['paginator' => $formationPrograms]) }}
                    <!-- END customer-list -->

                </div> <!-- END card -->
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div>
@endsection
