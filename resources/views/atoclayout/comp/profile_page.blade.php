@extends("atoclayout.profile")

@section("host_menu")
@include("atoclayout.comp.comp_menu")
@endsection

@section("body")
@include("atoclayout.comp.profile_edit")
@endsection

@section("vuescript")
<script src="/js/comp_profile.js" type="text/javascript"></script>
@endsection
