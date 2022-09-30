@extends('HomePage.layout')
@section('content')

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header mt-2">
                Detail Data Merk
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Nama Merk: </b>{{$merk->nama_merk}}</li>
                </ul>
            </div>
            <a class="btn btn-success mt-3 mb-2" href="{{ route('merk.index') }}">Kembali</a>
        </div>
    </div>
</div>

@endsection