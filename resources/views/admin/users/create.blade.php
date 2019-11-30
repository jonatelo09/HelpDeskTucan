@extends('layouts.app')

@section('content')
<!-- Top navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <p class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block">Crear Usuario</p>
        <!-- Form -->
        <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
          <div class="form-group mb-0">
            <div class="input-group input-group-alternative">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-search"></i></span>
              </div>
              <input class="form-control" placeholder="Search" type="text">
            </div>
          </div>
        </form>
        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <img alt="Image placeholder" src="{{asset('img/theme/team-1-800x800.jpg')}}">
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold">{{ auth()->user()->name}} </span>
                </div>
              </div>
            </a>
            @include('include.contenido')
          </li>
        </ul>
      </div>
    </nav>
    <!-- Header -->
    <div class="header pb-5 pt-1 pt-lg-0 d-flex align-items-center" style="min-height: 450px; background-image: url('img/theme/profile-cover.jpg'); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-7 col-md-10">
            <h1 class="display-2 text-white">Hola {{ auth()->user()->firstname}} </h1>
            <p class="text-white mt-0 mb-5"></p>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
      <div class="row">
        <div class="col-xl-12 order-xl-1">
          <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Mi Cuenta</h3>
                </div>

              </div>
            </div>
            <div class="card-body">
              <form>
                <h6 class="heading-small text-muted mb-4">Informacion de Usuario</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Usuario</label>
                        <input type="text" id="input-username" class="form-control form-control-alternative" name="username" placeholder="Nombre de Usuario...">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Email</label>
                        <input type="email" id="input-email" class="form-control form-control-alternative" name="email" placeholder="Email...">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Nombre</label>
                        <input type="text" id="input-first-name" class="form-control form-control-alternative" name="firstname" placeholder="Nombre">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name">Apellido</label>
                        <input type="text" id="input-last-name" class="form-control form-control-alternative" name="lastname" placeholder="Apellido...">
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4" />
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">Informacion de Contacto</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">Direccion</label>
                        <input id="input-address" class="form-control form-control-alternative" name="address" placeholder="Direccion..." type="text">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">Role</label>
                        <select class="form-control" name="role">
                          <option>hola</option>
                          <option>mundo</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="phone">Celular</label>
                        <input type="text" id="phone" class="form-control form-control-alternative" name="phone" placeholder="Celular...">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="phone_fijo">Teléfono Fijo</label>
                        <input type="text" id="phone_fijo" class="form-control form-control-alternative" name="phone_fijo" placeholder="Telefono Fijo...">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 text-center mt-4">
                  <button type="submit" class="btn btn-lg btn-success">Crear</button>
                  <a href="{{url('/admin/users')}} " class="btn btn-lg btn-default">Cancelar</a>
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