@extends('HomePage.layout')
@section('content')

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header mt-2">
                Detail Data Mobil
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Jenis Mobil: </b>{{$mobil->jenis_mobil}}</li>
                </ul>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Varian: </b>{{$mobil->varian}}</li>
                </ul>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Nomor Kendaraan: </b>{{$mobil->nomor_plat}}</li>
                </ul>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Tarif per Hari: </b>{{$mobil->tarif}}</li>
                </ul>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><img width="100" height="100" src="{{ asset('storage/'.$mobil->featured_image) }}"></li>
                </ul>
            </div>
            <a class="btn btn-success mt-3 mb-2" href="{{ route('mobil.index') }}">Kembali</a>
        </div>
    </div>
</div>

@endsection