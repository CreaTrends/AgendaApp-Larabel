@extends('layouts.app')
@section('top-title')
<h1 class="title"> Hey !!! {{Auth::user()->name}} </h1>
@endsection
@section('content')
<section class="section">
	<div class="container">
		<div class="columns">
			<div class="column is-3 is-fullheight is-primary">
				<!-- inicio menu lateral -->
				<aside class="menu has-background-primary admin-sidebar is-sticky">
					<p class="menu-label menu-title is-capitalized">General</p>
					<ul class="menu-list">
						<li><a href="">Dashboard</a></li>
						<li><a href="">Customers</a></li>
					</ul>
					<p class="menu-label menu-title is-capitalized">Cursos / Niveles</p>
					<ul class="menu-list">
						<li><a href="">Agregar</a></li>
						<li><a href="">Customers</a></li>
						<li><a>Invitations</a></li>
						<li><a>Cloud Storage Environment Settings</a></li>
						<li>
							<a>Authentication</a>
						</li>
					</ul>
					<p class="menu-label menu-title is-capitalized">Cursos / Niveles</p>
					<ul class="menu-list">
						<li><a href="">Agregar</a></li>
						<li><a href="">Customers</a></li>
						<li><a>Invitations</a></li>
						<li><a>Cloud Storage Environment Settings</a></li>
						<li><a>Authentication</a></li>
					</ul>
				</aside>
				<!-- fin menu lateral -->
			</div>
			<div class="column is-9">
				<!-- if notification -->
				@if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{Auth::user()->name}}
				<section class="section">
					<div class="block">
						<b-radio v-model="radio"
						native-value="Flint">
						Flint
						</b-radio>
						<b-radio v-model="radio"
						native-value="Silver">
						Silver
						</b-radio>
						<b-radio v-model="radio"
						native-value="Jack">
						Jack
						</b-radio>
						<b-radio v-model="radio"
						native-value="Vane"
						disabled>
						Vane
						</b-radio>
					</div>
					<p class="content">
						<b>Selection:</b>
						@{{ radio }}
					</p>
					<input type="text" class="input" name="password" id="password" v-if="radio == 'Silver'" placeholder="Manually give a password to this user">
				</section>
				<!-- end notifications -->
				<!-- inicio widgets -->
				<h1 class="title is-4">Tu escritorio</h1>
				<h1 class="subtitle is-6">Aqui puedes encontrar algunas funciones para comenzar a trabajar </h1>
				<!-- widget add student -->
				<div class="columns">
					<div class="column">
						<div class="card is-a-widget">
							<header class="card-header">
								<p class="card-header-title is-large is-size-5">
									Cursos / Niveles
								</p>
								<a href="#" class="card-header-icon" aria-label="more options">
									<span class="icon">
										<i class="fa fa-angle-down fa-2x" aria-hidden="true"></i>
									</span>
								</a>
							</header>
							<div class="card-content">
								<div class="content has-text-centered">
									<p class="title is-3 has-text-weight-semibold">20</p>
									<p class="subtitle">Cursos</p>
								</div>
							</div>
							<footer class="card-footer">
								<a class="button is-success is-fullwidth">
									<span class="icon is-small">
										<i class="icofont icofont-plus is-large"></i>
									</span>
									<span>Agregar Cursos</span>
								</a>
							</footer>
						</div>
					</div>
					<!-- widget add Staff -->
					<div class="column">
						<div class="card is-a-widget">
							<header class="card-header">
								<p class="card-header-title is-large is-size-5">
									Profesores / Staff
								</p>
								<a href="#" class="card-header-icon" aria-label="more options">
									<span class="icon">
										<i class="fa fa-angle-down fa-2x" aria-hidden="true"></i>
									</span>
								</a>
							</header>
							<div class="card-content">
								<div class="content has-text-centered">
									<p class="title is-3 has-text-weight-semibold">5</p>
									<p class="subtitle">Profesores</p>
								</div>
							</div>
							<footer class="card-footer">
								<a class="button is-success is-fullwidth">
									<span class="icon is-small">
										<i class="icofont icofont-plus is-large"></i>
									</span>
									<span>Agregar Cursos</span>
								</a>
							</footer>
						</div>
					</div>
					<!-- widget add Parent -->
					<div class="column">
						<div class="card is-a-widget">
							<header class="card-header">
								<p class="card-header-title is-large is-size-5">
									Apoderados
								</p>
								<a href="#" class="card-header-icon" aria-label="more options">
									<span class="icon">
										<i class="fa fa-angle-down fa-2x" aria-hidden="true"></i>
									</span>
								</a>
							</header>
							<div class="card-content">
								<div class="content has-text-centered">
									<p class="title is-3 has-text-weight-semibold">5</p>
									<p class="subtitle">Profesores</p>
								</div>
							</div>
							<footer class="card-footer">
								<a class="button is-success is-fullwidth">
									<span class="icon is-small">
										<i class="icofont icofont-plus is-large"></i>
									</span>
									<span>Agregar Apoderados</span>
								</a>
							</footer>
						</div>
					</div>
				</div>
				<!-- fin widgets -->
			</div>
		</div>
	</div>
</section>
@endsection
@section('scripts')
<script>
var app = new Vue({
	el:"#app",
	data:function(){
		return {
			radio: {!!json_encode(LaraFlash::allByType())!!},
			notification: {!!json_encode(LaraFlash::allByType())!!},
		}
	}
});
</script>
@endsection