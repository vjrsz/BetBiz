@extends('DashboardClient.templates.master')
@section('title', 'Fale Conosco')
@section('content')
<section>
    <div class="container-fluid">
      <div class="row">

        <div class="col-lg-12 table_v1">
          @include('DashboardClient.includes.header')

          <div class="row infos_v2">
            <div class="col-lg-12">
              <h2>Ficou alguma dúvida?</h2>
              <h3>Solicite uma mensagem via formulario de contato</h3>

              <div class="row">
                <div class="col-lg-6">
                  <input type="" placeholder="Assunto" name="">
                </div>
                <div class="col-lg-6">
                  <input type="" placeholder="Tipo de atendimento" name="">
                </div>
                <div class="col-lg-12">
                  <textarea placeholder="Descreva o seu problema"></textarea>
                </div>
                <div class="col-lg-4">
                  <button type="button" data-bs-toggle="modal" data-bs-target="#modal_v4">Enviar</button>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-12 login_footer">
            <p>Copyright ©2022 betfair </p>
          </div>
          
        </div>

      </div>
    </div>
  </section>



  <!-- MODAL V4 -->
  <div class="modal fade" id="modal_v4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body modal_v2">
          <img src="assets_client/img/check.png">
          <h2>Mensagem Enviada com Sucesso!</h2>
          <p>Nossa equipe entrará em <br>contato em até 24hrs, obrigado</p>
        </div>
      </div>
    </div>
  </div>

@endsection