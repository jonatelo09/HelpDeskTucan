@extends('layouts.app')

@section('content')
<!-- top navbar -->
@include('include.top-navbar')
<!-- Page content -->
<div class="container-fluid mt--7">
  <div class="row ml-7">
    <div class="col-xl-10 order-xl-1">
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
              <h3 class="mb-0">Nueva Categoria</h3>
            </div>
          </div>
        </div>
        <div class="card-body">
          <form action="{{ url('/admin/category') }}" method="post">
          	@csrf
            <h6 class="heading-small text-muted mb-4">Ingrese los datos de la Categoria</h6>
            <div class="pl-lg-4">
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="form-control-label" for="category">Nombre de la Categoria</label>
                    <input type="text" id="category" name="name_cat" class="form-control form-control-alternative" placeholder="Nombre de categoria...">
                  </div>
                </div>
              </div>
              <div class="row">
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