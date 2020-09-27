  {{--
    Mobile Navigation
    --}}
  <aside class="main-aside">
    <a class="navbar-brand" href="{{ route("welcome.index") }}">
        <img src="{{asset('pizza-slices/assets/img/logo.png')}}" alt="logo">
    </a>

    <div class="aside-scroll">
      <ul>
        <li class="menu-item">
          <a href="{{ route("welcome.index") }}">Página inicial</a>
        </li>
        <li class="menu-item">
          <a href="">Sobre</a>
        </li>
        <li class="menu-item">
          <a href="">Informações</a>
        </li>
        <li class="menu-item">
          <a href="">Preços</a>
        </li>
        <li class="menu-item">
          <a href="">Contato</a>
        </li>
        <li class="menu-item">
          <a href="">Entrar</a>
        </li>
      </ul>
    </div>
  </aside>
  <div class="aside-overlay aside-trigger"></div>

  {{--
    Desktop nav
    --}}
  <header class="main-header header-2">

    <nav class="navbar">
      <!-- Logo -->
      <a class="navbar-brand" href="{{ route("welcome.index") }}"> <img src="{{asset('pizza-slices/assets/img/logo.png')}}" alt="logo"> </a>
      <!-- Menu -->
      <ul class="navbar-nav">
        <li class="menu-item">
          <a href="{{ route("welcome.index") }}">Página inicial</a>
        </li>
        <li class="menu-item">
          <a href="">Sobre</a>
        </li>
        <li class="menu-item">
          <a href="">Informações</a>
        </li>
        <li class="menu-item">
          <a href="">Preços</a>
        </li>
        <li class="menu-item">
          <a href="">Contato</a>
        </li>
      </ul>

      <a href="{{ route("franchise.login") }}" class="header-cta">Entrar</a>
      <a href="#" class="header-cta" style="background-color: #4e4e4e">Suporte Online</a>
    </nav>
  </header>
