@extends('DashboardClient.templates.master')
@section('title', 'Bolas divididas')
@section('content')
<section>
    <div class="container-fluid">
      <div class="row">

        <div class="col-lg-12 table_v1">
          @include('DashboardClient.includes.header')

          <div class="row infos_v2">
            <div class="col-lg-12">
              <h2>Informações Importantes</h2>
              <h3>Conheça um pouco melhor como funciona Bolas divididas</h3>

              <span><b>1. Como saberei se meus Bilhetes estão ativos?</b></span>
              <p>Após efetuar seus Bilhetes e realizar o pagamento, o agente validará automaticamente seus Bilhetes e você receberá um comprovante automático no WhatsApp(?) para acompanhar todos os Bilhetes da rodada</p>

              <span><b>2. Como receberei o prêmio do sorteio, caso seja contemplado?</b></span>
              <p>Após o termino de cada rodada, haverá um comunicado informando os ganhadores por WhatsApp (?), com o prêmios creditados na conta e com possibilidade de solicitar o resgate imediato, no qual os prêmios serão creditados em até 48h na conta cadastrada (pix);</p>

              <span><b>3. Como funcionará a distribuição do prêmio para os ganhadores de cada rodada?</b></span>
              <p>Vide tabela. Caso haja mais de um ganhador com mais pontos, por exemplo, três com 10 pontos (mais pontos), mas também haja vice-líderes com 9 pontos, os vice serão descartados e a premiação do líder e vice-líder somada e distribuída entre os três ganhadores (lideres). Caso nenhum bilhete faça 07 pontos (ou mais), os prêmios da rodada serão acumulados para a próxima rodada, exceto para quem fez zero pontos. Caso ninguém tenha feito zero pontos, o prêmio também será acumulado.</p>

              <span><b>4. Quais são as deduções que tenho do prêmio informado?</b></span>
              <p>Toda e qualquer premiação que você ganhar será descontado o valor de 5% que será direcionado aos agentes responsáveis.</p>
            </div>
          </div>

          <div class="col-lg-12 login_footer">
            <p>Copyright ©2022 betfair </p>
          </div>

        </div>

      </div>
    </div>
</section>

@endsection