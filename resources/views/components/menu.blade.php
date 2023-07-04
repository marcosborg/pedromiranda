<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center justify-content-between">
            <a href="/" class="logo"><img src="/theme/assets/img/logo-white.png" alt="" class="img-fluid"></a>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="{{ request()->routeIs('home') ? '' : '/' }}#hero">Início</a></li>    
                    <li><a class="nav-link scrollto" href="{{ request()->routeIs('home') ? '' : '/' }}#about">Sobre nós</a></li>
                    <li><a class="nav-link scrollto" href="{{ request()->routeIs('home') ? '' : '/' }}#features">Serviços</a></li>
                    <li><a class="nav-link scrollto" href="{{ request()->routeIs('home') ? '' : '/' }}#clients">Parcerias</a></li>
                    <li><a class="nav-link scrollto" href="{{ request()->routeIs('home') ? '' : '/' }}#portfolio">Notícias</a></li>
                    <li><a class="nav-link scrollto" href="{{ request()->routeIs('home') ? '' : '/' }}#team">Equipa</a></li>
                    <li><a class="nav-link scrollto" href="{{ request()->routeIs('home') ? '' : '/' }}#contact">Contactos</a></li>
                    <li><a class="getstarted scrollto" href="{{ request()->routeIs('home') ? '' : '/' }}#contact">Pedir contacto</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->