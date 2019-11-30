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
            <h3 class="mb-0">Lista de Departamentos </h3>
          </div>
          <div class="col-4 text-right">
            <a href="{{url('/admin/client/create')}}" class="btn btn-lg btn-success">Nuevo Departamento</a>
          </div>
        </div>
      </div>

      <div class="table-responsive">
        <table class="table align-items-center table-flush">
          <thead class="thead-light">
            <tr>
              <th scope="col">Nombre</th>
              <th scope="col"></th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            @foreach( $clients as $client)
            <tr>
              <th scope="row">
                <div class="media align-items-center">
                  <div class="media-body">
                    <span class="mb-0 text-sm">{{ $client->name_cli}} </span>
                  </div>
                </div>
              </th>
              <td class="text-right">
                <div class="dropdown">
                  <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                  <form method="post" action="{{url('/admin/client/'.$client->id.'/delete')}}">
                      @csrf
                      <a class="dropdown-item" href="{{url('/admin/client/'.$client->id.'/edit')}}"><i class="ni ni-align-center"></i>Editar</a>
                      <button class="dropdown-item" href="#"><i class="ni ni-fat-remove"></i>Eliminar</button>
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
            {{$clients->links()}}
          </ul>
        </nav>
      </div>
    </div>
  </div>
</div>
@include('include.footer')
</div>
@endsection