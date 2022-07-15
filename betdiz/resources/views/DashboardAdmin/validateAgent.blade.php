@extends('DashboardAdmin.templates.master')
@section('title', 'Jogos Rodada')
@section('content')

@include('DashboardAdmin.includes.header')
<section>
	<div class="container-fluid">
		<div class="row">

			<div class="col-lg-9 table_v1">
				<div class="row table_one">

					<div class="col-lg-10 mauto">
						<p>Agentes Cadastrados</p>
					</div>

					<div class="col-lg-2 seach_table">
						<button>Agentes <i class="fas fa-angle-down"></i></button>
					</div>

					@if(session('success'))
					<div class="alert alert-success">{{session('success')}}</div>
					@endif
					@if ($errors->any())
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
					@endif

					<div class="table_one_inter table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th scope="col">Status</th>
									<th scope="col">Nome</th>
									<th scope="col">Código</th>
									<th scope="col">Telefone</th>
									<th scope="col">Pix</th>
									<th scope="col">Categoria</th>
									<th scope="col">Limite</th>
									<th scope="col">Ação</th>
								</tr>
							</thead>
							<tbody>
								@foreach($agents as $agent)
								<tr>
									<th scope="row">
										@if($agent->status == 'approved')
										Aprovado
										@else
										Pendente
										@endif
									</th>
									<td>{{$agent->name}}</td>
									<td>A0{{$agent->id}}</td>
									<td>{{$agent->number_phone}}</td>
									<td>{{$agent->pix}}</td>
									<td>
										@if($agent->category == 1)
										Bronze
										@elseif($agent->category == 2)
										Prata
										@elseif($agent->category == 3)
										Ouro
										@endif
									</td>
									<td>R${{$agent->limit}}</td>
									<td>
										@if($agent->status == 'pendding')
											Aprovar / Negar
										@else
											Editar 
										@endif
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>

				<div class="col-lg-12 login_footer">
					<p>Copyright ©2022 betfair </p>
				</div>

			</div>


			<div class="col-lg-3 coluna_table table_agent">
				<h3>Cadastrar Agente</h3>
				<div class="row">
					<div class="col-lg-12 perfil">
						<div class="row">
							<form action="{{ route('agent.auth.register.store') }}" method="post">
								@csrf
								<input type="text" placeholder="Nome" name="name">
								<input type="text" placeholder="E-mail" name="email">
								<input type="text" placeholder="Senha" name="password">
								<input type="hidden" value="approved" name="status">
								<select name="category" id="category" class="form-control mb-3">
									<option value="1">Bronze</option>
									<option value="2">Prata</option>
									<option value="3">Ouro</option>
								</select>
								<input type="text" placeholder="Telefone" name="number_phone" data-mask="(00) 0 0000-0000" >
								<input type="text" placeholder="Limite" name="limit" data-mask-reverse="true" data-mask="#,#00.00">
								<input type="text" placeholder="Chave PIX" name="pix">
								<input type="text" placeholder="Selecionar Thumbnail" name="">
								<button>Realizar cadastro</button>
							</form>
						</div>
					</div>
				</div>
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
				<h2>Valor que deseja resgatar?</h2>
				<input type="" placeholder="R$25,00" name="">
				<button>Solicitar resgate</button>
				<p>*Em até 24hrs nosso time irá altorizar sua solicitação</p>
			</div>
		</div>
	</div>
</div>



<!-- MODAL V2 -->
<div class="modal fade" id="modal_v3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-lg-4 modal_v3">
						<img src="assets/img/perfil.png">
						<h3>Rafael (C0000)</h3>
						<p>Seu agente, Roberto (A0000)</p>
					</div>
					<div class="col-lg-8 modal_v4">
						<h2>Alterar Informações</h2>
						<input type="text" placeholder="Nome" name="">
						<input type="text" placeholder="E-mail" name="">
						<input type="text" placeholder="Chave PIX" name="">
						<input type="text" placeholder="Senha" name="">
						<input type="text" placeholder="Senha" name="">
						<button>Salvar perfil</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection