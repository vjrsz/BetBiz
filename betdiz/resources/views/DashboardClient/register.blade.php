@extends('DashboardClient.templates.master')
@section('title', 'Registrar')
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

            <div class="col-lg-12">
              <div class="row">
                <div class="col-lg-12 login_form">
                  <h2>Quero me Cadastrar</h2>
                  <p>Seja bem-vindo a comunidade esportiva da BetBiz.</p>
                  <form>
                    <div class="row">
                      <div class="col-lg-6">
                        <input placeholder="Nome" type="" name="">
                      </div>
                      <div class="col-lg-6">
                        <input placeholder="Data de nascimento (18+)" type="" name="">
                      </div>
                      <div class="col-lg-6">
                        <input placeholder="E-mail" type="" name="">
                      </div>
                      <div class="col-lg-6">
                        <input placeholder="Celular" type="" name="">
                      </div>
                      <div class="col-lg-6">
                        <input placeholder="Chave PIX" type="" name="">
                      </div>
                      <div class="col-lg-6">
                        <input placeholder="Código Agente" type="" name="">
                      </div>
                      <div class="col-lg-6">
                        <input placeholder="Senha" type="" name="">
                      </div>
                      <div class="col-lg-6">
                        <input placeholder="Confirmar Senha" type="" name="">
                      </div>
                    </div>
                    <button>Recuperar Senha</button>
                  </form>
                </div>

                <div class="col-lg-6 login_password">
                  <a href="{{route('client.auth.formLogin')}}">Já possui cadastro? </a>
                </div>


              </div>
            </div>


            <div class="col-lg-12 login_footer">
              <p>Copyright ©2022 betfair </p>
            </div>

          </div>
        </div>


        <div class="col-lg-6 login_container_register">
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