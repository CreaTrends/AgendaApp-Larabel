@extends('layouts.manage')

@section('top-title')

<h1 class="title"> Hey !!! {{Auth::user()->name}} </h1>

@endsection

@section('content')
{{ Auth::user()->hasRole('role-name') }}
@endsection