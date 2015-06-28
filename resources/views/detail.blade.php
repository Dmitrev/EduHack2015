@extends('layout')

@section('content')

	<!-- Modal Structure -->
	<div id="modal1" class="modal">
		<div class="modal-content">
		  <h4>Wat is kansrekening?</h4>
		  <iframe width="560" height="315" src="https://www.youtube.com/embed/ERvx0pngqqc" frameborder="0" allowfullscreen></iframe>
		  <p>Uitleg video over kansberekeningen.</p>
		</div>
		<div class="modal-footer">
		  <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
		</div>
	</div>

	<div class="row">
		<div class="col s12 m12 l12">
			<div class="card">
				<div class="card-content">
					<div class="container">
						<div class="row">
							<div class="col s2">
								<a href="{{route('profile/detail')}}"><img src="https://avatars3.githubusercontent.com/u/1228272?v=3&amp;s=460" class="med circle"></a>
							</div>
							<div class="col s10">
								<span class="card-title grey-text">Wies Kueter</span>
							</div>
							<div class="col s12">
								<h4>{{$issue->titel or '[Geen titel beschikbaar]'}}</h4>
								<p>{{$issue->description or '[Geen description beschikbaar]'}}</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="container">
		<div class="row solutions">

				@for($i = 0; $i < 10; $i++)
					<div class="card">
						<div class="collection-header">
							<div class="row top-padded">
								<div class="col s3">
									<img src="https://avatars3.githubusercontent.com/u/1228272?v=3&amp;s=460" class="small circle">
								</div>
								<div class="col s7">
									<span class="card-title grey-text">Dmitri</span>
									<p>Dkadkj kja kjd aakjdf klj akj a</p>
								</div>
								<div class="col s2">
									<div class="row less-margin">
										<a class="btn-floating btn-large waves-effect waves-light green accent-2">
											<i class="material-icons">check</i>
										</a>
										</div>
									<div class="row">
										<a class="btn-floating btn-large waves-effect waves-light red accent-1">
											<i class="material-icons">clear</i>
										</a>
									</div>
								</div>
							</div>
						</div>

						<div class="solution-documents card-action">
							<a href="#modal1" data-target="modal1" class="modal-trigger">Video</a> <a href="">Explaination</a>
						</div>
					</div>
				@endfor
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