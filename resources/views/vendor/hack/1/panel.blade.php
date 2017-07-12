@extends('hack::layouts.cms')



@section('content')

	@include('hack::partials.menu')
	
	<div class="content panel">

		@include('hack::partials.header')

		<div class="grid space-10">

			@if($maintenance)
				<div class="grid-12">
					<div class="panel panel-warning">
						<div class="panel-heading">{!! trans('modules.panel.maintenance', ['start_date' => $maintenance->start_date, 'end_date' => $maintenance->end_date]) !!}</div>
						<div class="panel-body">
							{!! $maintenance->message !!}
						</div>
					</div>
				</div>
			@endif
		</div>

		<iframe src="https://uptime.statuscake.com/?TestID=UqarMKOI4Q"></iframe>
	</div>

	<div class="footer">
		<span class="version">Version {{ Cms::getVersion() }}</span>
	</div>

@stop