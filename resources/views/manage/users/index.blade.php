@extends('layouts.manage')

@section('top-title')
<h1 class="title"> Manage users</h1>
@endsection


@section('content')

<div class="flex-container">
	<div class="columns m-t-10">
		<div class="column">
			<h1 class="title">Manage Users</h1>
		</div>
		<div class="column ">
			<a href="{{route('users.create')}}" class="button is-primary is-pulled-right">Create New Users</a>
		</div>
	</div>
	<hr>
	<div class="card">
		<div class="card-content">
			<table class="table is-narrow is-fullwidth is-narrow">
				<thead>
					<tr>
						<th>#id</th>
						<th>Name</th>
						<th>Email</th>
						<th>Date Created</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					
					@foreach ($users as $user)
					<tr>
						<td>{{$user->id}}</td>
						<td>{{$user->name}}</td>
						<td>{{$user->email}}</td>
						<td>{{$user->created_at->toformattedDateString()}}</td>
						<td class="has-text-right">
							<a class="button is-outlined m-r-5" href="{{route('users.show', $user->id)}}">View</a>
							<a class="button is-light m-r-5" href="{{route('users.edit', $user->id)}}">Edit</a>
							<form action="{{route('users.destroy', $user->id)}}" method="POST">
    					<input type="hidden" name="_method" value="DELETE">
   						<input type="hidden" name="_token" value="{{ csrf_token() }}">
   						<input type="submit" class="button is-danger" value="Delete"/>
   				  </form>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
	{{$users->links()}}
</div>

@endsection