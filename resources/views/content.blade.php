@extends('layout')

@section('content')
    <content-page
        language="{{ $language }}"
        :initial-content='@json(__('content'))'
    ></content-page>
@endsection
