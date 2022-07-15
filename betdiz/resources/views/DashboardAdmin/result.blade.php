@extends('DashboardAdmin.templates.master')
@section('title', 'Entrar')
@section('content')

@include('DashboardAdmin.includes.header')
<section>
	<div class="container-fluid">
		<div class="row">

			<div class="col-lg-12 table_v1">
				<div class="row table_one">

					<div class="col-lg-12">
						<p>Busque Por Agente / Geral</p>
					</div>

					<div class="row seach_table">

						<div class="col-lg-4"></div>

						<div class="col-lg-2 btn01">
							<button>Exportar Excel</button>
						</div>

						<div class="col-lg-4">
							<input type="" placeholder="Filtro pesquisa..." name="">
						</div>

						<div class="col-lg-2">
							<button>Agentes <i class="fas fa-angle-down"></i></button>
						</div>
					</div>

					<div class="col-lg-12">
						<p>Listas de Clientes</p>
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
@endsection