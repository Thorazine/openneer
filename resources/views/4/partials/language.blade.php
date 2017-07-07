<div class="language-item">
	{{ __('matthijs.language.'.$language->language) }}
	<div class="stars">
		@for($i = 0; $i < 5; $i++)
			@if($language->proficiency > $i)
				<i class="fa fa-star active"></i>
			@else
				<i class="fa fa-star"></i>
			@endif
		@endfor
	</div>
</div>