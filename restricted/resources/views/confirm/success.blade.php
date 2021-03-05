@extends('confirm.layout')

@section('content')

<!-- Tabs Titles -->
<h2 class="active"> Confirmation Token </h2>
{{-- <h2 class="inactive underlineHover">Sign Up </h2> --}}

<!-- Icon -->
<div class="fadeIn first">
    <img src="{{ asset('assets/login/logo-lanis.png') }}" id="icon" alt="Lanis Icon" />
</div>
<div style="max-width: 80%;margin:20px auto;">
    @if (isset($status))
    <div class="m-12 alert  alert-success ">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        {{ $status }}
    </div>
    @endif
</div>
@endsection
