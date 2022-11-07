@extends('HomePage.layout')
@section('content')

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header mt-2">
                Detail Data Pegawai
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>ID Pegawai: </b>{{$pegawai->id_pegawai}}</li>
                    <li class="list-group-item"><b>Foto Profil: </b><br>
                        <img src="{{ asset('storage/'.$pegawai->foto_pegawai) }}" alt="" width="100px">
                    </li>
                    <li class="list-group-item"><b>Nama Pegawai: </b>{{$pegawai->nama_pegawai}}</li>
                    <li class="list-group-item"><b>Jenis Kelamin: </b>
                        @if($pegawai->jenis_kelamin==0)
                        Perempuan
                        @else
                        Laki-laki
                        @endif
                    </li>
                    <li class="list-group-item"><b>Jabatan: </b>{{$pegawai->jabatan}}</li>
                    <li class="list-group-item"><b>Alamat: </b>{{$pegawai->alamat}}</li>
                    <li class="list-group-item"><b>Telepon: </b>{{$pegawai->telepon}}</li>
                </ul>
            </div>
            <a class="btn btn-success mt-3 mb-2" href="{{ route('pegawai.index') }}">Kembali</a>
        </div>
    </div>
</div>

@endsection