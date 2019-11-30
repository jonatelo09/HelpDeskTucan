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
            <h3 class="mb-0">Lista de Tickets</h3>
          </div>
          <div class="col-4 text-right">
            <a href="{{url('/tickets/create')}} " class="btn btn-lg btn-success">Nuevo Ticket</a>
          </div>
        </div>
      </div>

      <div class="table-responsive">
        <table class="table align-items-center table-flush">
          <thead class="thead-light">
            <tr>
              <th scope="col">Folio</th>
              <th scope="col">Problema</th>
              <th scope="col">Turno</th>
              <th scope="col">Status</th>
              <th scope="col">Prioridad</th>
              <th scope="col">Opciones</th>
            </tr>
          </thead>
          <tbody>
            @foreach($tickets as $ticket)
            <tr>
              <th scope="row">
                <div class="media align-items-center">
                  <div class="media-body">
                    <span class="mb-0 text-sm">{{$ticket->folio}} </span>
                  </div>
                </div>
              </th>
              <td>{{$ticket->name_pro}} </td>
              <td>{{$ticket->name_tur}} </td>
              <td>{{$ticket->name_sta}} </td>
              <td>
                <span class="badge badge-dot mr-4"> {{$ticket->name_pri}}
                </span>
              </td>
              <td class="text-right">
                <div class="dropdown">
                  <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                    <a class="dropdown-item" href="#">Ver</a>
                    <a class="dropdown-item" href="#">Editar</a>
                    <a class="dropdown-item" href="#">Eliminar</a>
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
            {{$tickets->links()}}
          </ul>
        </nav>
      </div>
    </div>
  </div>
</div>
@include('include.footer')
</div>
@endsection