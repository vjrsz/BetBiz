@extends('DashboardAgent.templates.master')
@section('title', 'Recuperar Senha')
@section('content')
  <section class="login">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 mauto section_login_l">
          <div class="row">

            <div class="col-lg-6 col-6">
              <img src="{{asset('assets_agent/img/logo.png')}}">
            </div>

            <div class="col-lg-6 col-6 mauto login_agente">
              <a href="{{route('agent.auth.formLogin')}}"><i class="fas fa-user-plus"></i> Área do Agente</a>
            </div>

            <div class="col-lg-9">
              <div class="row">
                <div class="col-lg-12 login_form">
                  <h2>Esqueceu a senha?</h2>
                  <p>Digite o seu e-mal e recupe o seu acesso.</p>
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
        </div>
      </div>
    </div>
  </section>

@endsection