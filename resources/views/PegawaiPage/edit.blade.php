@extends('HomePage.layout')
@section('content')

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Edit Data Pegawai
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="post" action="{{ route('pegawai.update', $pegawai->id_pegawai) }}" id="myForm" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class=" form-group">
                        <label for="id">ID Pegawai</label>
                        <input type="text" name="id" class="form-control" id="id" value="{{ $pegawai->id_pegawai }}" aria-describedby="id">
                    </div>
                    <div class="form-group">
                        <label for="Foto">Foto Profil</label>
                        <input type="file" name="Foto" class="form-control" id="Foto" value="{{ $pegawai->foto_pegawai }}" aria-describedby="Foto">
                    </div>
                    <div class="form-group">
                        <label for="Nama">Nama Pegawai</label>
                        <input type="text" name="Nama" class="form-control" id="Nama" value="{{ $pegawai->nama_pegawai }}" aria-describedby="Nama">
                    </div>
                    <div class="form-group">
                        <label for="JenisKelamin">Jenis Kelamin</label>
                        <select id="JenisKelamin" class="form-control" name="JenisKelamin">
                            <option value="1" selected>Laki-laki</option>
                            <option value="0">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Jabatan">Jabatan</label>
                        <input type="text" name="Jabatan" class="form-control" id="Jabatan" value="{{ $pegawai->jabatan }}" aria-describedby="Jabatan">
                    </div>
                    <div class="form-group">
                        <label for="Alamat">Alamat</label>
                        <input type="text" name="Alamat" class="form-control" id="Alamat" value="{{ $pegawai->alamat }}" aria-describedby="Alamat">
                    </div>
                    <div class="form-group">
                        <label for="Telepon">Nomor Telepon</label>
                        <input type="text" name="Telepon" class="form-control" id="Telepon" value="{{ $pegawai->telepon }}" aria-describedby="Telepon">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a class="btn btn-success mt-2 mb-2" href="{{ route('pegawai.index') }}">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection