<header class="d-flex justify-content-center py-3">
    <ul class="nav nav-pills">
        <li class="nav-item">
          <a href="{{ route("home") }}" class="nav-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }}" aria-current="page">
            Home
          </a>
        </li>

        <li class="nav-item">
          <a href="{{ route("comics.index") }}" class="nav-link {{ Route::currentRouteName() == 'comics.index' ? 'active' : '' }}">
            Elenco Fumetti
          </a>
        </li>

        <li class="nav-item">
          <a href="{{ route("comics.create") }}" class="nav-link {{ Route::currentRouteName() == 'comics.create' ? 'active' : '' }}">
            Nuovo fumetto
          </a>
        </li>
    </ul>
  </header>