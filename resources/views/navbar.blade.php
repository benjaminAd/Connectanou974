<nav class="navbar navbar-expand-lg fixed-top navbar-transparent " color-on-scroll="50">
  <div class="container">
    <div class="navbar-translate">
      <a class="navbar-brand" href="{{ url("/") }}" rel="tooltip" data-placement="bottom" style="color:#E0363E;">
        <img src="img/logo_transp.png" id="favicon" style="width:150px;height:50px;">
      </a>
      <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
        aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-bar bar1"></span>
        <span class="navbar-toggler-bar bar2"></span>
        <span class="navbar-toggler-bar bar3"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse justify-content-end" id="navigation">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a href="{{ url('a-propos') }}" class="nav-link" style="color:#1E4F87;">L'association</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" title="Recherche de projets" data-placement="bottom"
            href="{{ route('RechercheAnnonce') }}" style="color:#1E4F87;">
            Recherche de projets
          </a>
        </li>
        @if (Auth::guard('porteur')->check())
        <li class="nav-item">
          <a class="nav-link" title="Depot de projet" data-placement="bottom" href="{{ route('annonce.create') }}"
            style="color:#1E4F87;">
            Dépot de Projet
          </a>
        </li>
        @endif
        <li class="nav-item">
          <a class="nav-link" title="Equipe" data-placement="bottom" href="{{ route('equipe') }}"
            style="color:#1E4F87;">
            Equipe
          </a>
        </li>
        @if (!Auth::guard('porteur')->check() ?? !Auth::guard('real')->check())
        <div class="btn-group">
          <a class="btn btn-primary " title="Se Connecter" href="{{ url('login') }}" aria-haspopup="true"
            aria-expanded="false" style="line-height:25px;">
            Connexion
          </a>
        </div>
        <div class="btn-group">
          <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            S'inscrire
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="{{ route('PortProjetSub') }}">Porteur</a>
            <a class="dropdown-item" href="{{ route('SubscribeRea') }}">Réalisateur</a>
          </div>
        </div>
        @endif
        @if (Auth::guard('porteur')->check() ?? Auth::guard('real')->check())
        <div class="btn-group">
          <a class="btn btn-primary " title="Se Connecter" href="{{ url('logout') }}" aria-haspopup="true"
            aria-expanded="false" style="line-height:25px;">
            Déconnexion
          </a>
        </div>
        @endif
      </ul>
    </div>
  </div>
</nav>