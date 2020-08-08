@extends('adminlte.master')

@section('content')
    <div class="mt-3 ml-3 mr-3">
        <h4>{{ $tampil->judul}}</h4>
        <p>{{$tampil->isi}}</p>
        
    </div>
@endsection