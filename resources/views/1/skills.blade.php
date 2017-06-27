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

			<div class="container">
				<div class="divider"></div>
			</div>

			<div class="grid">
				<div class="grid-7">
					<div class="container">
						<h2 class="slashed">{{ __('matthijs.about_me') }}</h2>
						<div class="wysiwyg">
							{!! $page->body !!}
						</div>
					</div>
					<div class="container education">
						<h2 class="slashed">{{ __('matthijs.education') }}</h2>

						<div class="startline"></div>

						@include('1.partials.education')
						@include('1.partials.education')
						@include('1.partials.education')

					</div>
					<div class="container experience">
						<h2 class="slashed">{{ __('matthijs.experiences') }}</h2>

						@include('1.partials.experience')
						@include('1.partials.experience')
						@include('1.partials.experience')
					</div>
				</div>
				<div class="grid-5">
					<div class="container contact">
						<h2 class="slashed">{{ __('matthijs.contact') }}</h2>

						@include('1.partials.contact')
						@include('1.partials.contact')
						@include('1.partials.contact')
					</div>
					<div class="container skill">
						<h2 class="slashed">{{ __('matthijs.skills') }}</h2>

						@include('1.partials.skill')
						@include('1.partials.skill')
						@include('1.partials.skill')
					</div>
					<div class="container language">
						<h2 class="slashed">{{ __('matthijs.languages') }}</h2>

						@include('1.partials.language')
						@include('1.partials.language')
						@include('1.partials.language')
					</div>
					<div class="container hobby">
						<h2 class="slashed">{{ __('matthijs.hobbys') }}</h2>

						@include('1.partials.hobby')
						@include('1.partials.hobby')
						@include('1.partials.hobby')
					</div>
				</div>
			</div>
		</div>
	</div>

@stop