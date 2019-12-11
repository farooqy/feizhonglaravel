@extends("atoclayout.profile")

@section("host_menu")
@include("atoclayout.comp.comp_menu")
@endsection

@section("body")
@include("atoclayout.comp.comp_post")
@endsection

@section("vuescript")
<script src="/js/comp_post.js" type="text/javascript"></script>
@endsection
