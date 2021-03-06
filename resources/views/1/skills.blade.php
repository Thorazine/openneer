@extends('1.layouts.default')



@section('content')
	<div class="flags">
		@if($page['language'] != 'en')
			<a class="flag" href="{{ route('page', ['slug' => 'en']) }}">
				<img src="{{ asset('images/flags/small/en.png') }}">
			</a>
		@elseif($page['language'] != 'nl')
			<a class="flag" href="{{ route('page', ['slug' => 'nl']) }}">
				<img src="{{ asset('images/flags/small/nl.png') }}">
			</a>
		@endif
	</div>

	<div id="content" class="skill">

		<div id="wrapper-content">

			<div class="portrait">
				<img src="{{ $page->portrait }}" title="{{ $page->portrait->title }}">
			</div>

			<div class="intro">
				<h1>
					{!! __('matthijs.intro.matthijs') !!}
				</h1>
			</div>

			<div class="container">
				<div class="divider"></div>
			</div>

			<div class="grid break-md">
				<div class="grid-7">
					<div class="container experience">
						<h2 class="slashed">{{ __('matthijs.experiences') }}</h2>

						@foreach($page->experiences as $experience)
							@include('1.partials.experience')
						@endforeach

					</div>
					<div class="container">
						<h2 class="slashed">{{ __('matthijs.about_me') }}</h2>
						<div class="wysiwyg">
							{!! $page->body !!}
						</div>
					</div>
					<div class="container education">
						<h2 class="slashed">{{ __('matthijs.education') }}</h2>

						<div class="startline"></div>

						@foreach($page->educations as $education)
							@include('1.partials.education')
						@endforeach

					</div>
				</div>
				<div class="grid-5">
					<div class="container contact">
						<h2 class="slashed">{{ __('matthijs.contact') }}</h2>

						@foreach($page->contacts as $contact)
							@include('1.partials.contact')
						@endforeach

					</div>

					<div class="container skills">
						<h2 class="slashed">{{ __('matthijs.skills') }}</h2>

						@foreach($page->skills as $skill)
							@include('1.partials.skill')
						@endforeach

						<div class="legend">
							<div class="indicator beginner"></div>
							<div class="indicator proficient"></div>
							<div class="indicator expert"></div>
							<div class="indicator master"></div>
							<div class="label beginner">{{ __('matthijs.level.beginner') }}</div>
							<div class="label proficient">{{ __('matthijs.level.proficient') }}</div>
							<div class="label expert">{{ __('matthijs.level.expert') }}</div>
							<div class="label master">{{ __('matthijs.level.master') }}</div>
						</div>
					</div>

					<div class="container tags">
						<h2 class="slashed">{{ __('matthijs.tags') }}</h2>

						@foreach($page->tags as $tag)
							<div class="tag">
							    {{ $tag->tag }}
							</div>
						@endforeach
					</div>

					<div class="container language">
						<h2 class="slashed">{{ __('matthijs.languages') }}</h2>

						@foreach($page->mylanguages as $language)
							@include('1.partials.language')
						@endforeach

					</div>
					<div class="container hobby">
						<h2 class="slashed">{{ __('matthijs.hobbys') }}</h2>

						@foreach($page->hobbies as $hobby)
							@include('1.partials.hobby')
						@endforeach

					</div>
				</div>
			</div>
		</div>
	</div>

@stop


@section('script')
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	<script>
		$(document).ready(function() {
			$('.skill-item').each(function() {
				$(this).css('width', $(this).data('width'));
			});
		});
	</script>
@stop
