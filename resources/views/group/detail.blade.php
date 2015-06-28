@extends('layout')

@section('content')

	<div class="container">
		<div class="row">

			<div class="col s12 m7 l7 left">
				<div class="card">
					<div class="card-content">
						<h2>Group description</h2>
						<p>All problems that we encounter during the hackaton can be added to this group.</p>
					</div>
				</div>

				<div class="card">
					<div class="card-content">
						<h2>Group description</h2>
						<p>All problems that we encounter during the hackaton can be added to this group.</p>
						<ul class="collapsable" data-collapsible="accordion">
							<li></li>
						</ul>
					</div>
				</div>

			</div>

			<div class="col s12 m5 l5 left">
				<div class="card">
					<div class="card-content">
						<h2>Members of this group</h2>
						<div class="row">
						@for($i = 0; $i < 6; $i++)
							<div class="user col s4 m4 l4">
								<img src="https://avatars3.githubusercontent.com/u/1228272?v=3&amp;s=460" class="circle avy_100">
							</div>
						@endfor
						</div>
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