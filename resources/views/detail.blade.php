@extends('layout')

@section('content')

	<!-- Modal Structure -->
	<div id="modal1" class="modal">
		<div class="modal-content">
		  <h4>Modal Header</h4>
		  <iframe width="560" height="315" src="https://www.youtube.com/embed/ERvx0pngqqc" frameborder="0" allowfullscreen></iframe>
		  <p>A bunch of text</p>
		</div>
		<div class="modal-footer">
		  <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
		</div>
	</div>

	
	<div class="row">
		<div class="col s12 m12 l12">
			<div class="card">
				<div class="card-content">
					<div class="row">
						<div class="col s6">
							<img src="https://avatars3.githubusercontent.com/u/1228272?v=3&amp;s=460" class="circle">
						</div>
						<div class="col s6">
							<span class="card-title grey-text">Wies Kueter</span>
							<h3>Hoe bouw ik een hut?</h3>
							<p>Ik wil een hut bouwen maar weet niet zo goed hoe ik moet geginnen..</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="container">
		<div class="row solutions">
			
			<ul class="collection">
				@for($i = 0; $i < 10; $i++)
					<li class="avatar">
						<div class="">
							<div class="row">
								<div class="col s6">
									<img src="https://avatars3.githubusercontent.com/u/1228272?v=3&amp;s=460" class="circle">
								</div>
								<div class="col s6">
									<span class="card-title grey-text">Dmitri</span>
								</div>
								<p>Dkadkj kja kjd aakjdf klj akj a</p>
								<div class="">
									<a class="btn-floating btn-large waves-effect waves-light red"></a>
									<a class="btn-floating btn-large waves-effect waves-light green"></a>
								</div>
							</div>
						</div>

						<div class="solution-documents card-action">
							<a href="#modal1" data-target="modal1" class="modal-trigger">Video</a> <a href="">Explaination</a>
						</div>
					</li>
				@endfor
			</ul>
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