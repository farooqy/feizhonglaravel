@extends('atoclayout.main_layout')

@section('body')
@include('atoclayout.homePage')
@endsection
@section("vuescript")
 @php $hash = hash('md5', file_get_contents(public_path()."/js/homepage.js"));
 $file_name = "/js/homepage.js?".$hash ;@endphp
 <script src="{{$file_name}}"></script>
@endsection
