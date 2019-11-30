@extends('layouts.app')

@section('content')
<!-- top navbar -->
@include('include.top-navbar')
<!-- Table -->
<div class="container-fluid mt--7">
<div class="row">
  <div class="col">
    <div class="card shadow">
      <div class="card-header border-0">
        <div class="row align-items-center">
          <div class="col-8">
            <h3 class="mb-0">Lista Usuarios</h3>
          </div>
          <div class="col-4 text-right">
            <a href="{{url('/admin/users/create')}}" class="btn btn-lg btn-success"><i class="ni ni-fat-add"></i>Nuevo Usuario</a>
          </div>
        </div>
      </div>

      <div class="table-responsive">
        <table class="table align-items-center table-flush">
          <thead class="thead-light">
            <tr>
              <th scope="col">Usuario</th>
              <th scope="col">Nombre</th>
              <th scope="col">Apellido</th>
              <th scope="col">Telefono</th>
              <th scope="col">Email</th>
              <th scope="col">Role</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            @foreach( $users as $user)
            <tr>
              <td>
                {{ $user->username}}
              </td>
              <td>
                {{ $user->firstname}}
              </td>
              <td>
                {{ $user->lastname}}
              </td>
              <td>
                {{ $user->phone}}
              </td>
              <td>
                {{ $user->email}}
              </td>
              <td>
                {{ $user->name}}
              </td>
              <td class="text-right">
                <div class="dropdown">
                  <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                    <form method="post" action="{{url('/admin/users/'.$user->id.'/delete')}}">
                      @csrf
                      <a class="dropdown-item" href="{{ route('profile')}} "><i class="ni ni-circle-08"></i> Ver</a>
                      <a class="dropdown-item" href="{{url('/admin/users/'.$user->id.'/edit')}}"><i class="ni ni-align-center"></i>Editar</a>
                      <button class="dropdown-item" href="#"><i class="ni ni-fat-remove"></i>

Eliminar</button>
                    </form>
                  </div>
                </div>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <div class="card-footer py-4">
        <nav aria-label="...">
          <ul class="pagination justify-content-end mb-0">
            {{$users->links()}}
          </ul>
        </nav>
      </div>
    </div>
  </div>
</div>
@include('include.footer')
</div>
@endsection