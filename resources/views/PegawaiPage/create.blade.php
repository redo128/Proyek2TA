@extends('HomePage.layout')
@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-12 mt-3">

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Data Pegawai</h3>
                    </div>

                    <form method="post" action="{{ route('pegawai.store') }}" id="myForm" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="id">ID Pegawai</label>
                                <input type="text" name="id" class="form-control" id="id" placeholder="Masukkan ID Pegawai">
                            </div>
                            <div class="form-group">
                                <label for="Foto">Foto Profil</label>
                                <input type="file" name="Foto" class="form-control" id="Foto" placeholder="Masukkan Foto Profil">
                            </div>
                            <div class="form-group">
                                <label for="Nama">Nama Pegawai</label>
                                <input type="text" name="Nama" class="form-control" id="Nama" placeholder="Masukkan Nama Pegawai">
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
                                <input type="text" name="Jabatan" class="form-control" id="Jabatan" placeholder="Masukkan Jabatan">
                            </div>
                            <div class="form-group">
                                <label for="Alamat">Alamat</label>
                                <input type="text" name="Alamat" class="form-control" id="Alamat" placeholder="Masukkan Alamat">
                            </div>
                            <div class="form-group">
                                <label for="Telepon">Nomor Telepon</label>
                                <input type="text" name="Telepon" class="form-control" id="Telepon" placeholder="Masukkan Nomor Telepon">
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <div class="float-right">
                                <a class="btn btn-info" href="{{ route('pegawai.index') }}">Kembali</a>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection