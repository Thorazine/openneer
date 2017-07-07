@extends('1.layouts.default')



@section('content')
	
	<div id="content" class="skill">
		<div id="wrapper-content">
			<div class="grid">
				<div class="grid-6">
					<img src="{{ asset('flags/en.png') }}">
					<a href="{{ route('page', ['slug' => 'en']) }}">English</a>
				</div>
				<div class="grid-6">
					<img src="{{ asset('flags/nl.png') }}">
					<a href="{{ route('page', ['slug' => 'nl']) }}">Nederlands</a>
				</div>
			</div>
		</div>
	</div>

@stop


@section('script')
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
@stop