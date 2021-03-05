@extends('confirm.layout')

@section('content')

<!-- Tabs Titles -->
<h2 class="active"> Re-Send Confirmation Token </h2>
{{-- <h2 class="inactive underlineHover">Sign Up </h2> --}}

<!-- Icon -->
<div class="fadeIn first">
    <img src="{{ asset('assets/login/logo-lanis.png') }}" id="icon" alt="Lanis Icon" />
</div>

<div style="max-width: 80%;margin:20px auto;">
    <x-alert />
</div>

<form action="{{ route('confirm.request-new-token') }}" method="POST">
    @csrf
    <input type="text" id="email" class="fadeIn second"
        style="border-radius: 4px;padding: 10px;border: 1px solid #ccc;display:block;width:80%;margin: auto;font-size: 18px;"
        name="email" placeholder="62xxxx">
    <input type="submit" class="fadeIn fourth" value="Kirim Ulang">
</form>
@endsection
