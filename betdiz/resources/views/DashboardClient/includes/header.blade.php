<nav class="navbar navbar-expand-lg navbar-light ">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('client.index') }}">
            <img  src="{{asset('assets_client/img/logo.png')}}">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="my-2 order-0 order-md-1 position-relative">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav_bar">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('client.index') }}">Inicio</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('client.table') }}">Tabela de Premiação</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " aria-current="page"
                        href="{{ route('client.balls') }}">Bolas divididas</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " aria-current="page"
                         href="{{ route('client.contact') }}">Fale Conosco</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " aria-current="page"
                          href="{{ route('client.logout') }}">Sair</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>