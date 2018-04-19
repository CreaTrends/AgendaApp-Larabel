@extends('layouts.manage')

@section('top-title')

<h1 class="title"> Hey !!! {{Auth::user()->name}} </h1>

@endsection

@section('content')
	@role('superadministrator')
	
	<p>This is visible to users with the admin role. Gets translated to
	\Laratrust::hasRole('admin')</p>
	@endrole
@endsection