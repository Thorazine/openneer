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
<<<<<<< HEAD
=======

						<div class="startline"></div>
>>>>>>> f52a012c579fbe7c28aa17f92045921a5870f450

						<div class="startline"></div>

						@foreach($page->educations as $education)
							@include('1.partials.education')
						@endforeach

					</div>
					<div class="container experience">
						<h2 class="slashed">{{ __('matthijs.experiences') }}</h2>
<<<<<<< HEAD

						@foreach($page->experiences as $experience)
							@include('1.partials.experience')
						@endforeach
=======
>>>>>>> f52a012c579fbe7c28aa17f92045921a5870f450

					</div>
				</div>
				<div class="grid-5">
					<div class="container contact">
						<h2 class="slashed">{{ __('matthijs.contact') }}</h2>
<<<<<<< HEAD

						@foreach($page->contacts as $contact)
							@include('1.partials.contact')
						@endforeach
=======
>>>>>>> f52a012c579fbe7c28aa17f92045921a5870f450

					</div>
<<<<<<< HEAD
					<div class="container skills">
=======
					<div class="container skill">
>>>>>>> f52a012c579fbe7c28aa17f92045921a5870f450
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
					<div class="container language">
						<h2 class="slashed">{{ __('matthijs.languages') }}</h2>
<<<<<<< HEAD

						@foreach($page->languages as $language)
							@include('1.partials.language')
						@endforeach
=======
>>>>>>> f52a012c579fbe7c28aa17f92045921a5870f450

					</div>
					<div class="container hobby">
						<h2 class="slashed">{{ __('matthijs.hobbys') }}</h2>
<<<<<<< HEAD

						@foreach($page->hobbies as $hobby)
							@include('1.partials.hobby')
						@endforeach
=======
>>>>>>> f52a012c579fbe7c28aa17f92045921a5870f450

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