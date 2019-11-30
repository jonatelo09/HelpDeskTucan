<!-- Navigation -->
<ul class="navbar-nav">
  <li class="nav-item">
    <a class="nav-link" href="{{route('home')}} ">
      <i class="ni ni-tv-2 text-primary"></i> Dashboard
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{url('/tickets')}} ">
      <i class="ni ni-ruler-pencil text-success"></i>Tickets
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href=" {{url('/admin/problem')}} ">
      <i class="ni ni-bell-55 text-blue"></i>Problema
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href=" {{url('/admin/category')}} ">
      <i class="ni ni-bullet-list-67 text-info"></i>Categoria
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{url('/admin/client')}} ">
      <i class="ni ni-pin-3 text-orange"></i>Departamento
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/admin/users">
      <i class="ni ni-single-02 text-yellow"></i> Usuarios
    </a>
  </li>
</ul>
<!-- Divider -->
<hr class="my-3">
<!-- Heading -->
<h6 class="navbar-heading text-muted">Documentation</h6>
<!-- Navigation -->
<ul class="navbar-nav mb-md-3">
  <!--<li class="nav-item">
    <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/getting-started/overview.html">
      <i class="ni ni-spaceship"></i> Getting started
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/foundation/colors.html">
      <i class="ni ni-palette"></i> Foundation
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/components/alerts.html">
      <i class="ni ni-ui-04"></i> Components
    </a>
  </li>-->
  <li class="nav-item">
    <a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('formLogout').submit();">
      <i class="ni ni-single-02"></i> Cerrar Sesion
    </a>
    <form action="{{ route('logout')}} " method="POST" style="display: none;" id="formLogout">
      @csrf
    </form>
  </li>
</ul>