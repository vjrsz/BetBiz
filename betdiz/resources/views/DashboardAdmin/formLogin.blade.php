@extends('DashboardAdmin.templates.master')
@section('title', 'Entrar')
@section('content')
<section class="login">
	<div class="container-fluid">
		<div class="row">

			<div class="col-lg-6 login_container"></div>


			<div class="col-lg-6 mauto section_login_l">
				<div class="row">

					<div class="col-lg-6 col-6">
						<img src="{{asset('assets_admin/img/logo_login.png')}}">
					</div>

					<div class="col-lg-6 col-6 mauto login_agente">
						<a href=""><i class="fas fa-user-plus"></i> Área do Agente</a>
					</div>

					<div class="col-lg-9">
						<div class="row">
							<div class="col-lg-12 login_form">
								<h2>Área Restrita</h2>
								<p>Bem vindo Administrador</p>
								<form action="{{ route('admin.auth.login') }}" method="post">
									@csrf
									@if ($errors->any())
									<div class="alert alert-danger">
										<ul>
											@foreach ($errors->all() as $error)
											<li>{{ $error }}</li>
											@endforeach
										</ul>
									</div>
									@endif
									<input placeholder="E-mail" type="text" name="email">
									<input placeholder="Senha" type="text" name="password">
									<button>Acessar</button>
								</form>
							</div>


							<div class="col-lg-6 login_password">
								<p>Ainda não possui cadastro?</p>
							</div>

							<div class="col-lg-6 login_agente login_password">
								<a href="">Esqueceu a senha?</a>
							</div>
						</div>
					</div>


					<div class="col-lg-12 login_footer">
						<p>Copyright ©2022 betfair </p>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>
@endsection