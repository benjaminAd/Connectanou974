<nav class="navbar navbar-expand-lg fixed-top navbar-transparent " color-on-scroll="50">
    <div class="container">
        <div class="navbar-translate">
        <a class="navbar-brand" href="<?php echo e(url("/")); ?>" rel="tooltip" data-placement="bottom" style="color:#E0363E;">
                 <img  src="img/logo_transp.png" id="favicon" style="width:150px;height:50px;">
            </a>
            <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="https://demos.creative-tim.com/paper-kit-2/docs/1.0/getting-started/introduction.html" class="nav-link" style="color:#1E4F87;">L'association</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" title="Notre équipe" data-placement="bottom" href="<?php echo e(route('equipe')); ?>" style="color:#1E4F87;">
                        Equipe
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" title="Like us on Facebook" data-placement="bottom" href="#" style="color:#1E4F87;">
                        Realisateur
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" title="Follow us on Instagram" data-placement="bottom" href="#" style="color:#1E4F87;">
                        Projets
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" title="Contactez-nous" data-placement="bottom" href="<?php echo e(url('Contact')); ?>" style="color:#1E4F87;">
                        Contact
                    </a>
                </li>
                <div class="btn-group">
                <a  class="btn btn-primary " title="Se Connecter"  href="<?php echo e(url('login')); ?>" aria-haspopup="true" aria-expanded="false" style="line-height:25px;">
                        Connexion
                </a>
                </div>
                <div class="btn-group">
                    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        S'inscrire
                    </button>
                    <div class="dropdown-menu">
                    <a class="dropdown-item" href="<?php echo e(route('PortProjetSub')); ?>">Porteur</a>
                    <a class="dropdown-item" href="<?php echo e(route('SubscribeRea')); ?>">Réalisateur</a>
                    </div>
                </div>
            </ul>
        </div>
    </div>
</nav>