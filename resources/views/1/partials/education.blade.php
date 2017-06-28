<div class="education-item">
	<div class="timeline">
		{{ $education->year }}
		<div class="line"></div>
	</div>
	<div class="description">
		<h3>{{ $education->place }}</h3>
		{!! $education->description !!}
	</div>
</div>