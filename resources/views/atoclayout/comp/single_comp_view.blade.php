@extends("atoclayout.main_layout")

@section('body')
@include('atoclayout.comp.comp_view')
@endsection
@section("vuescript")
@php
    $hash = hash('md5', public_path('js/singlecompview.js'));
@endphp
<script src={{"/js/singlecompview.js?".$hash}} type="text/javascript" ></script>
@endsection
