<nav class="navbar navbar-expand-lg navbar-light ">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('admin.index')}}">
            <img  src="{{asset('assets_admin/img/logo.png')}}">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="ms-auto my-2 order-0 order-md-1 position-relative">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav_bar">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page"
                           href="{{route('admin.index')}}">Jogos Rodada</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " aria-current="page"
                           href="{{route('admin.validateAgent')}}">Validar Agente</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " aria-current="page"
                           href="{{route('admin.evolution')}}">Evolução</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " aria-current="page"
                           href="{{route('admin.result')}}">Resultados</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " aria-current="page"
                           href="{{route('admin.infoRound')}}">Informações Rodada</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " aria-current="page"
                           href="{{route('admin.registerTicket')}}">Cadastrar Bilhete</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " aria-current="page"
                           href="{{route('admin.logout')}}">Sair</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>