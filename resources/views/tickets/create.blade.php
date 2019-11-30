@extends('layouts.app')

@section('content')
    <!-- top navbar -->
    @include('include.top-navbar')
<!-- Page content -->
    <div class="container-fluid mt--7">
      <div class="row ml-6">
        <div class="col-xl-11 order-xl-1">
          <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
              @if (session('notification'))
              <div class="alert alert-success" role="alert">
                  {{ session('notification') }}
              </div>
              @endif
              @if(isset($errors) && $errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                      <li>{{ $error }} </li>
                      @endforeach
                  </ul>
              </div>
              @endif

              @if(session()->has('success'))
              <div class="alert alert-success">
                  <ul>
                      @foreach (session()->get('success') as $message)
                      <li>{{ $message }} </li>
                      @endforeach
                  </ul>
              </div>
              @endif
              <div class="row align-items-center">
                <div class="col-8">
                  <?php
$cont = 0;
?>
                  <h3 class="mb-0">Agregar Tickets {{date('d').''.date('m').''.date('y').''.date('H:i')}} </h3>
                </div>
              </div>
            </div>
            <div class="card-body">
              <form action="{{url('/tickets')}} " method="POST">
                @csrf
                <h6 class="heading-small text-muted mb-4">Ingrese los datos del Tickets</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <?php
$a = 0;
?>
                    <input type="text" name="folio" value="{{date('d').''.date('m').''.date('y').''.rand()}} " style="display: none;">
                    <input type="text" name="user_id" value="{{auth()->user()->id}} " style="display: none;">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Usuario</label>
                        <input type="text" id="input-username" class="form-control form-control-alternative" value="{{auth()->user()->username}}" name="username" disabled>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="email">Email</label>
                        <input type="email" id="email" class="form-control form-control-alternative" value="{{auth()->user()->email}}" name="email" disabled>
                      </div>
                  </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="phone-fijo">Telefono fijo</label>
                        <input type="tel" id="phone-fijo" class="form-control form-control-alternative" value="{{auth()->user()->phone_fijo}}" name="phone-fijo" disabled>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="phone">Celular</label>
                        <input type="tel" id="phone" class="form-control form-control-alternative" value="{{auth()->user()->phone}}" disabled>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="phone-fijo">Turno</label>
                        <select class="form-control" name="turn_id" required>
                          <option selected disabled>Selecciona una opción</option>
                          @foreach($turnos as $turno)
                          <option value="{{$turno->id}}">{{$turno->name_tur}} </option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="phone">Categoria</label>
                        <select class="form-control" name="category_id" required>
                          <option disabled selected>Seleccion un opción</option>
                          @foreach($categories as $category)
                          <option value="{{$category->id}}">{{$category->name_cat}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label">Departamento</label>
                        <select name="client_id" class="form-control" required>
                          <option disabled selected>Selecciona una opción</option>
                          @foreach($clients as $client)
                          <option value="{{$client->id}} ">{{$client->name_cli}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label">Problema</label>
                        <select name="problem_id" class="form-control" required>
                          <option disabled selected>Selecciona una opción</option>
                          @foreach($problems as $problem)
                          <option value="{{$problem->id}} ">{{$problem->name_pro}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label">Prioridad</label>
                        <select name="priority_id" class="form-control" required>
                          <option disabled selected>Selecciona una opción</option>
                          @foreach($priorities as $priority)
                          <option value="{{$priority->id}} ">{{$priority->name_pri}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label">Status</label>
                        <select name="status_id" class="form-control" required>
                          <option disabled selected>Selecciona una opción</option>
                          @foreach($status as $statu)
                          <option value="{{$statu->id}} ">{{$statu->name_sta}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                  </div>
                  <!-- <div class="row">
                                      <div class="col-lg-12">
                                        <div class="form-group">
                                          <label class="form-control-label" for="description">Descripción</label>
                                          <textarea class="form-control" id="description" placeholder="Describa brevemente el problema..."></textarea>
                                        </div>
                                      </div>
                                    </div>
                                     -->                  <div class="row">
                    <div class="col-md-auto text-right">
                      <button type="submit" class="btn btn-lg btn-success">Crear</a>
                    </div>
                    <div class="col-md-auto text-right">
                      <a href="{{url('/admin/category')}} " class="btn btn-lg btn-default">Cancelar</a>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer -->
      @include('include.footer')
    </div>
@endsection