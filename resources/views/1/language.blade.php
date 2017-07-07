@extends('1.layouts.default')



@section('content')
	
	<div id="content" class="language">
		<div id="wrapper-content">
			<div class="grid space-20">
				<div class="grid-6">
					<a class="flag" href="{{ route('page', ['slug' => 'en']) }}">
						<img src="{{ asset('images/flags/en.png') }}">
					</a>
				</div>
				<div class="grid-6">
					<a class="flag" href="{{ route('page', ['slug' => 'nl']) }}">
						<img src="{{ asset('images/flags/nl.png') }}">
					</a>
				</div>
			</div>
		</div>
	</div>

@stop


@section('script')
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
@stop