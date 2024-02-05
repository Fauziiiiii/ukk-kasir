@extends('layout.app')

@section('content')
@if (Session::get('success'))
    <div class="alert alert-success">
        {{ Session::get('success')}}
    </div>
@elseif(Session::get('error'))
<div class="alert alert-danger">
    {{ Session::get('error')}}
</div>
@endif
    @include('kasir.show')
@endsection
