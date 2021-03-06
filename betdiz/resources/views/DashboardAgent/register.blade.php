@extends('DashboardAgent.templates.master')
@section('title', 'Registrar')
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

            <div class="col-lg-12">
              <div class="row">
                <div class="col-lg-12 login_form">
                  <h2>Quer se tornar um agente da BetBiz?</h2>
                  <p>Temos vagas limitadas de agentes, portanto não fique triste se seu cadastro não foi aprovado na primeira. Agradecemos muito seu interesse.</p>
                  <form>
                    <div class="row">
                      <div class="col-lg-6">
                        <input placeholder="Nome" type="" name="">
                      </div>
                      <div class="col-lg-6">
                        <input placeholder="E-mail" type="" name="">
                      </div>
                      <div class="col-lg-6">
                        <input placeholder="Como conheceu BetBiz?" type="" name="">
                      </div>
                      <div class="col-lg-6">
                        <input placeholder="Anexar RG/CNH" type="" name="">
                      </div>
                      <div class="col-lg-12">
                        <input placeholder="Chave PIX" type="" name="">
                      </div>
                      <div class="col-lg-12">
                        <textarea placeholder="Por que você pode ser um grande agente para plataforma?"></textarea>
                      </div>
                    </div>
                    <button type="button" data-bs-toggle="modal" data-bs-target="#modal_v2">Realizar cadastro</button>
                  </form>
                </div>

                <div class="col-lg-8 login_password">
                  <p>Qual é o papel de um agente? <b>conheça clicando aqui</b></p>
                </div>

                <div class="col-lg-4 login_agente login_password">
                  <a href="{{route('agent.auth.password')}}">Esqueceu a senha?</a>
                </div>


              </div>
            </div>


            <div class="col-lg-12 login_footer">
              <p>Copyright ©2022 betfair </p>
            </div>

          </div>
        </div>


        <div class="col-lg-6 login_container_register">
        </div>
      </div>
    </div>
  </section>


    <!-- MODAL V1 -->
  <div class="modal fade" id="modal_v2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body modal_v2">
          <h2>Qual é o papel de um Agente?</h2>
          <p>Ajudar na divulgação da plataforma e cuidar com carinho de nossos maiores torcedores/ clientes</p>

          <p>Aprovar/ validar Bilhetes na plataforma dos seus clientes (quanto mais clientes, maiores suas chances de ganhar como agente também);</p>

          <p>Prestar assistência/ informação aos clientes, sempre que tiverem alguma duvida;</p>

          <p>Escutar nossos clientes e fazer sugestões de melhoria para fortalecer a plataforma;</p>

          <p>Manter um volume mínimo de Bilhetes na plataforma sob pena de perder o status de agente;</p>

          <p>Em troca, você poderá ganhar até 6,0% de comissão dos bilhetes e premiação dependendo de sua categoria (volume de bilhetes/ mês), no qua todos começam com bronze e são mensalmente reavaliados;</p>

          <p>Um agente pode entrar/ sair quando quiser, inclusive removido pelo próprio administrador, caso seu volume de Bilhetes esteja muito baixo por 3 meses consecutivos (pe. Menos de 25 Bilhetes em 90 dias);</p>

          <div class="row modal_v3">
            
            <h2>Categorias</h2>

            <div class="col-lg-4">
              <p>Broze <img src="assets_agent/img/bz01.png"></p>
            </div>
            <div class="col-lg-4">
              <p>Broze <img src="assets_agent/img/bz02.png"></p>
            </div>
            <div class="col-lg-4">
              <p>Broze <img src="assets_agent/img/bz03.png"></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection