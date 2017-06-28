<div class="experience-item">
	<div class="company">
		<span>{{ $experience->company }}</span>
		{{ $experience->year_from }}@if($experience->year_to) - {{ $experience->year_to }}@endif
	</div>
	<div class="description">
		<h3>{{ $experience->job_title }}</h3>
		{!! $experience->description !!}
	</div>
</div>