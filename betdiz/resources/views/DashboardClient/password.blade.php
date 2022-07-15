@extends('DashboardClient.templates.master')
@section('title', 'Recuperar Senha')
@section('content')
<section class="login">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 mauto section_login_l">
          <div class="row">

            <div class="col-lg-6 col-6">
              <img src="{{asset('assets_client/img/logo.png')}}">
            </div>

            <div class="col-lg-6 col-6 mauto login_agente">
              <a href="{{ route('agent.auth.login') }}"><i class="fas fa-user-plus"></i> Área do Agente</a>
            </div>

            <div class="col-lg-9">
              <div class="row">
                <div class="col-lg-12 login_form">
                  <h2>Esqueceu a senha?</h2>
                  <p>Digite o seu e-mal e recupere o seu acesso.</p>
                  <form>
                    <input placeholder="E-mail" type="" name="">
                    <button>Recuperar Senha</button>
                  </form>
                </div>
              </div>
            </div>


            <div class="col-lg-12 login_footer">
              <p>Copyright ©2022 betfair </p>
            </div>

          </div>
        </div>


        <div class="col-lg-6 login_container">
          <h2>Onde suas odds <br> te premiam!</h2>
          <p>01 - Nunca foi tão fácil e divertido fazer uma fezinha com os amigos para quem é amante do futebol;</p>
          <p>02 - Basta apenas você se cadastrar e esta pronto para iniciar;</p>
          <p>03 - Seu agente será seu ponto focal e fará toda interação com você/ validação dos Bilhetes;</p>
          <p>04 - Não se preocupe se você não tem um agente, nos cuidamos disso pra você;</p>
        </div>
      </div>
    </div>
</section>
@endsection