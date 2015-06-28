@extends('layout')

@section('content')
	<div class="container">

		<div class="row">
			<div class="col s12 m6 l6">
				<div class="card">
					<div class="card-content">
						<div class="avatar">
							<img src="https://avatars3.githubusercontent.com/u/1228272?v=3&amp;s=460" class="circle left avy_100">
							<div class="col left">
								<span class="card-title grey-text">Wies Kueter</span>
								<p>I need help with math!</p>
								<span class="new badge">1</span>
								<span class="new badge">1</span>
								<span class="new badge">1</span>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col s12 m6 l6">
				<div class="card">
					<div class="card-content">
						<h2 class="header">My groups</h2>
						<a class="waves-effect waves-light btn">Start group</a>
						<ul class="collection">
							@for($i = 0; $i < 5; $i++)
								<li class="collection-item">Wiskunde <span class="new badge">20 issues</span></li>
								<li class="collection-item">English <span class="new badge">12 issues</span></li>
							@endfor
						</ul>
						<ul class="pagination">
						    <li class="disabled"><a href="#!"><i class="material-icons"></i></a></li>
						    <li class="active"><a href="#!">1</a></li>
						    <li class="waves-effect"><a href="#!">2</a></li>
						    <li class="waves-effect"><a href="#!">3</a></li>
						    <li class="waves-effect"><a href="#!">4</a></li>
						    <li class="waves-effect"><a href="#!">5</a></li>
						    <li class="waves-effect"><a href="#!"><i class="material-icons"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col s12 m6 l6">
				<div class="card">
					<div class="card-content">
						<h2>My issues</h2>
						<a href="{{route('issue/add')}}" class="waves-effect waves-light btn">Add issue</a>
						<div class="collection">
							<a href="{{route('detail')}}" class="collection-item">Wiskunde <span class="new badge">20 new solutions</span></a>
							<a class="collection-item">English <span class="new badge">12 issues</span></a>
						</div>
					</div>
				</div>
			</div>

			<div class="col s12 m6 l6">
				<div class="card">
					<div class="card-content">
						<h2 class="header">My groups</h2>
						<a class="waves-effect waves-light btn">Start group</a>
						<ul class="collection">
							<li class="collection-item">Wiskunde <span class="new badge">20 issues</span></li>
							<li class="collection-item">English <span class="new badge">12 issues</span></li>
						</ul>
					</div>
				</div>
			</div>
		</div>


	</div>
@stop

@section('js')

<script>
	$(function() {
		$('.modal-trigger').leanModal();
	});
</script>
@stop