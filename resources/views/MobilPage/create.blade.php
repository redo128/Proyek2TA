@extends('HomePage.layout')
@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-12 mt-3">

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Data Mobil</h3>
                    </div>

                    <form method="post" action="{{ route('mobil.store') }}" enctype="multipart/form-data" class="p-3">
                        @csrf
                        <div class="form-group">
                            <label for="jenis_mobil">Jenis Mobil</label>
                            <input type="text" name="jenis_mobil" class="form-control" id="jenis_mobil" aria-describedby="jenis_mobil">
                        </div>
                        <div class="form-group">
                            <label for="varian">Varian</label>
                            <input type="varian" name="varian" class="form-control" id="varian" aria-describedby="varian">
                        </div>
                        <div class="form-group">
                            <label for="nomor_plat">Nomor Kendaraan</label>
                            <input type="nomor_plat" name="nomor_plat" class="form-control" id="nomor_plat" aria-describedby="nomor_plat">
                        </div>
                        <div class="form-group">
                            <label for="nama_merk">Nama Merk</label>
                            <select class="form-control" name="nama_merk">
                                @foreach($merk as $mrk)
                                <option value="{{ $mrk ->id }}">{{$mrk->nama_merk}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="image">Gambar Mobil</label>
                            <input type="file" class="form-control" required="required" name="image">
                        </div>
                        <div class="form-group">
                            <label for="tarif">Tarif per Hari</label>
                            <input type="tarif" name="tarif" class="form-control" id="tarif" aria-describedby="tarif">
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection