<div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
    <div class=" dropdown-header noti-title">
      <h6 class="text-overflow m-0">Bienvenido!</h6>
    </div>
    <a href="{{route('profile')}} " class="dropdown-item">
      <i class="ni ni-single-02"></i>
      <span>Mi Perfil</span>
    </a>
    <a href="#" class="dropdown-item">
      <i class="ni ni-settings-gear-65"></i>
      <span>Configuraciones</span>
    </a>
    <div class="dropdown-divider"></div>
    <a href=" {{route('logout')}} " onclick="event.preventDefault(); document.getElementById('formLogout').submit();" class="dropdown-item">
      <i class="ni ni-user-run"></i>
      <span>Logout</span>
    </a>
      <form action="{{ route('logout')}} " method="POST" style="display: none;" id="formLogout">
      @csrf
      </form>
</div>