@extends('1.layouts.default')



@section('content')
	
	<div id="content" class="skill">
		<div id="wrapper-content">

			<div class="portrait">
				<img src="{{ $page->portrait }}" title="{{ $page->portrait->title }}">
			</div>

			<div class="grid">
				<div class="grid-7">
					<div class="container">
						<h2 class="slashed">{{ $page->title }}</h2>
						<div class="wysiwyg">
							{!! $page->body !!}
						</div>
					</div>
					<div class="container">
						<h2 class="slashed">Opleiding</h2>
					</div>
					<div class="container">
						<h2 class="slashed">Ervaring</h2>
					</div>
				</div>
				<div class="grid-5">
					<div class="container">
						<h2 class="slashed">Contact</h2>
					</div>
					<div class="container">
						<h2 class="slashed">Skills</h2>
					</div>
					<div class="container">
						<h2 class="slashed">Talen</h2>
					</div>
					<div class="container">
						<h2 class="slashed">Hobbies</h2>
					</div>
				</div>
			</div>
		</div>
	</div>

@stop