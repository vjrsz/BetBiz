@extends('DashboardAdmin.templates.master')
@section('title', 'Dashboard')
@section('content')

@include('DashboardAdmin.includes.header')
	<section>
		<div class="container-fluid">
			<div class="row">

				<div class="col-lg-8 table_v1">
					<div class="row table_one">

						<div class="col-lg-12">
							<p>Busque Por Agente / Geral</p>
						</div>

						<div class="row seach_table">
							<div class="col-lg-4">
								<input type="" placeholder="Filtro pesquisa..." name="">
							</div>

							<div class="col-lg-2">
								<button>Agentes <i class="fas fa-angle-down"></i></button>
							</div>

							<div class="col mauto">
								<p>Status atual do meu Perfil: Bronze <img src="{{asset('assets_admin/img/broze.png')}}"></p>
							</div>
						</div>


						<div class="row table_box">
						<div class="col-md-3 col-lg">
							<div class="row box_v1">
								<div class="col-lg-12 box_v2">
									<img src="{{asset('assets_admin/img/icon01.png')}}">
									<h3>{{$quantity->client}}</h3>
									<p>Clientes</p>
								</div>
							</div>
						</div>

						<div class="col-md-3 col-lg">
							<div class="row box_v1">
								<div class="col-lg-12 box_v2">
									<img src="{{asset('assets_admin/img/icon02.png')}}">
									<h3>30</h3>
									<p>Ativos (15d)</p>
								</div>
							</div>
						</div>

						<div class="col-md-3 col-lg">
							<div class="row box_v1">
								<div class="col-lg-12 box_v2">
									<img src="{{asset('assets_admin/img/icon03.png')}}">
									<h3>60</h3>
									<p>Ativos (30d)</p>
								</div>
							</div>
						</div>

						<div class="col-md-3 col-lg">
							<div class="row box_v1">
								<div class="col-lg-12 box_v2">
									<img src="{{asset('assets_admin/img/icon04.png')}}">
									<h3>{{$quantity->ticket_off}}</h3>
									<p>Bilhetes Realizados</p>
								</div>
							</div>
						</div>

						<div class="col-md-3 col-lg">
							<div class="row box_v1">
								<div class="col-lg-12 box_v2">
									<img src="{{asset('assets_admin/img/icon05.png')}}">
									<h3>{{$quantity->ticket_on}}</h3>
									<p>Bilhetes Ativos</p>
								</div>
							</div>
						</div>
					</div>


					<div class="col-lg-12">
							<p>Pendencias na Rodada</p>
					</div>


						<div class="table_one_inter table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th scope="col">Agente</th>
										<th scope="col">Nome</th>
										<th scope="col">Código</th>
										<th scope="col">Telefone</th>
										<th scope="col">Pix</th>
										<th scope="col">Dta Nasc</th>
										<th scope="col">Ação</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row">0001</th>
										<td>Wanderson Lima</td>
										<td>C0000</td>
										<td>(62) 9 9999-9999</td>
										<td>(62) 9 9999-9999</td>
										<td>25/09/1997</td>
										<td>Aprovar / Negar</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>

					<div class="col-lg-12 login_footer">
						<p>Copyright ©2022 betfair </p>
					</div>
				</div>


				<div class="col-lg-4 coluna_table">
						<h3>Busque Por Agente / Geral</h3>

						<div class="row">
							<div class="col-lg-12 perfil">
								<div class="row perfil_v4">

									<!-- COLUNA 01 -->
									<div class="col-lg-8">
										<p>Agentes:</p>
									</div>

									<div class="col-lg-4">
										<p><b>{{$quantity->agent}}</b></p>
									</div>

									<hr>

									<!-- COLUNA 02 -->
									<div class="col-lg-8">
										<p>Qtde Bilhetes Totais:</p>
									</div>

									<div class="col-lg-4">
										<p><b>{{$quantity->ticket}}</b></p>
									</div>

									<hr>

									<!-- COLUNA 03 -->
									<div class="col-lg-8">
										<p>Bilhetes Ativos Rodada (xx):</p>
									</div>

									<div class="col-lg-4">
										<p><b>{{$quantity->ticket_on}}</b></p>
									</div>

									<hr>

									<!-- COLUNA 04 -->
									<div class="col-lg-8">
										<p>Total Arrecadado:</p>
									</div>

									<div class="col-lg-4">
										<p><b>R$850,00</b></p>
									</div>

									<hr>

									<!-- COLUNA 05 -->
									<div class="col-lg-8">
										<p>Limite Total Concedido:</p>
									</div>

									<div class="col-lg-4">
										<p><b>R$850,00</b></p>
									</div>

									<hr>

									<!-- COLUNA 06 -->
									<div class="col-lg-8">
										<p>Limite Utilizado Agentes:</p>
									</div>

									<div class="col-lg-4">
										<p><b>R$850,00</b></p>
									</div>

									<hr>

									<!-- COLUNA 07 -->
									<div class="col-lg-8">
										<p>Valor Para Acerto:</p>
									</div>

									<div class="col-lg-4">
										<p><b>Pedente</b></p>
									</div>

									</div>

							</div>
						</div>
				</div>

			</div>
		</div>
	</section>

@endsection