@extends('1.layouts.default')



@section('content')
	
	<div id="content" class="skill">
		<div id="wrapper-content">

			<div class="portrait">
				<img src="{{ $page->portrait }}" title="{{ $page->portrait->title }}">
			</div>

			<div class="intro">
				<h1>
					{!! __('matthijs.intro') !!}
				</h1>
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

						@include('1.partials.education')
						@include('1.partials.education')
						@include('1.partials.education')

					</div>
					<div class="container">
						<h2 class="slashed">Ervaring</h2>

						@include('1.partials.experience')
						@include('1.partials.experience')
						@include('1.partials.experience')
					</div>
				</div>
				<div class="grid-5">
					<div class="container">
						<h2 class="slashed">Contact</h2>

						@include('1.partials.contact')
						@include('1.partials.contact')
						@include('1.partials.contact')
					</div>
					<div class="container">
						<h2 class="slashed">Skills</h2>

						@include('1.partials.skill')
						@include('1.partials.skill')
						@include('1.partials.skill')
					</div>
					<div class="container">
						<h2 class="slashed">Talen</h2>

						@include('1.partials.language')
						@include('1.partials.language')
						@include('1.partials.language')
					</div>
					<div class="container">
						<h2 class="slashed">Hobbies</h2>

						@include('1.partials.hobby')
						@include('1.partials.hobby')
						@include('1.partials.hobby')
					</div>
				</div>
			</div>
		</div>
	</div>

@stop