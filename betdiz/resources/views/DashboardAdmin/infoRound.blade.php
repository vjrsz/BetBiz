@extends('DashboardAdmin.templates.master')
@section('title', 'Entrar')
@section('content')

@include('DashboardAdmin.includes.header')
  <section>
    <div class="container-fluid">
      <div class="row">

        <div class="col-lg-12 table_v1">
          <div class="row table_one">

            <div class="row seach_table tb_space">
              <div class="col-lg-4 mauto left">
                <p>Cadastrar Tabela de Premiação</p>
              </div>

              <div class="col-lg-2 btn01">
                <button type="button" data-bs-toggle="modal" data-bs-target="#modal_v2">Exportar Excel</button>
              </div>

              <div class="col-lg-4">
                <input type="" placeholder="Filtro pesquisa..." name="">
              </div>

              <div class="col-lg-2">
                <button>Agentes <i class="fas fa-angle-down"></i></button>
              </div>
            </div>

            <div class="col-lg-3">
                <p>Listas de Clientes</p>
            </div>

            <div class="col-lg-3">
                <p>Rodada 
                  <button>
                    <i class="fas fa-chevron-left" aria-hidden="true"></i> 0000 
                    <i class="fas fa-chevron-right" aria-hidden="true"></i>
                  </button>
                </p>
            </div>

            <div class="col-lg-3">
                <p>Bilhetes: 85458</p>
            </div>

            <div class="col-lg-3">
                <p>Encerramento: 25/07/2022</p>
            </div>

            <div class="table_one_inter table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Agentes</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Rodada</th>
                    <th scope="col">Nr Bilhete</th>
                    <th scope="col">Prêmio Bilhete</th>
                    <th scope="col">Cms Bilhete</th>
                    <th scope="col">Cms Prêmio</th>
                    <th scope="col">Cms Total</th>
                    <th scope="col">Status</th>
                    <th scope="col">Ident</th>
                    <th scope="col">Data</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">A0002</th>
                    <td>C001</td>
                    <td>0001</td>
                    <td>20220157</td>
                    <td>1.000,00</td>
                    <td>1,25</td>
                    <td>50,00</td>
                    <td>51,25</td>
                    <td>Pago</td>
                    <td>Pix</td>
                    <td>12/05/2022</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="col-lg-12 login_footer">
              <p>Copyright ©2022 betfair </p>
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
        <div class="modal-body">
          <div class="modal_v2">
            <h2>Cadastar Bilhete</h2>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <input type="" placeholder="Time 01" name="">
            </div>

            <div class="col-lg-6">
              <input type="" placeholder="Time 02" name="">
            </div>

            <div class="col-lg-6">
              <input type="" placeholder="Data Inicial" name="">
            </div>

            <div class="col-lg-6">
              <input type="" placeholder="Data Final" name="">
            </div>

            <div class="col-lg-6">
              <input type="" placeholder="Hora Inicial" name="">
            </div>

            <div class="col-lg-6">
              <input type="" placeholder="Horal Final" name="">
            </div>

            <div class="col-lg-6">
              <input type="" placeholder="Primiação" name="">
            </div>

            <div class="col-lg-6">
              <input type="" placeholder="Comissão" name="">
            </div>
          </div>
          <button>Cadastrar Bilhete</button>
        </div>
      </div>
    </div>
  </div>


<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>