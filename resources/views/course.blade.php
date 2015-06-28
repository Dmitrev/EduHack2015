@extends('layout')

@section('content')

	<div class="container">
		<div class="row">
			@for($i = 0; $i < 10; $i++)
				<div class="col s12 m6 l4">
					<div class="card">
						<a href="{{route('detail')}}">
							<div class="card-content">
								<span class="card-title grey-text">Wiskunde</span>
								<div class="row">
									<span class="title">Total issues: 200</span>
								</div>
							</div>
						</a>
					</div>
		    	</div>
		    @endfor
		</div>
	</div>
@stop