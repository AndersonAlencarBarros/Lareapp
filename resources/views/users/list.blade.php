@extends('layout.template')

@section('title', 'Lista de Usuários')

@section('content')
  <div
    class="right_col d-flex justify-content-center"
    role="main"
  >
    <div class="x_panel">
      <div class="x_title">
        <h2>Usuários</h2>
        <div class="clearfix"></div>
      </div>

      <div class="x_content">
        <div class="row">
          <div class="col-sm-12">
            <div class="card-box table-responsive">
              <div
                class="dataTables_wrapper container-fluid dt-bootstrap no-footer"
                id="datatable-fixed-header_wrapper"
              >

                <table
                  class="display table-striped"
                  id="users-datatable"
                  style="width:100%"
                >
                  <thead>
                    <tr>
                      <th>Nome Completo</th>
                      <th>E-mail</th>
                      <th>Telefone</th>
                      <th>Ações</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($users as $user)
                      <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>
                          <div class='d-flex flex-wrap justify-content-center'>
                            <a
                              class="fa fa-eye btn btn-success mx-1"
                              href="{{ route('users.update', $user->id) }}"
                            >
                            </a>

                            <form
                              action="{{ route('users.destroy', $user->id) }}"
                              method="POST"
                            >
                              @csrf
                              @method('DELETE')
                              <input
                                type="hidden"
                                name="user_id"
                                value='{{ $user->id }}'
                              />
                              <button
                                class='fa fa-trash btn btn-danger mx-1'
                                type='submit'
                                name="user_id"
                                value="{{ $user->id }}"
                              >
                              </button>
                            </form>
                          </div>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
