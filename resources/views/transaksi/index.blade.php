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
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $item)
                    <li>{{$item}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @include('transaksi.show')
@endsection