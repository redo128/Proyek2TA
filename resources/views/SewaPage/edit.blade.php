@extends('HomePage.layout')
@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-12 mt-3">

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit Data Sewa</h3>
                    </div>

                    <form method="post" action="{{ route('sewa.update', $sewa->id) }}" id="myForm" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="NamaPegawai">Nama Pegawai</label>
                                <select class="form-control" name="NamaPegawai">
                                    @foreach($pegawai as $p)
                                    <option value="{{ $p ->id_pegawai }}" {{ $sewa->pegawai_id == $p ->id_pegawai ? 'selected' : '' }}>{{$p->nama_pegawai}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="Alamat">Alamat</label>
                                <input type="text" name="Alamat" class="form-control" id="Alamat" placeholder="Masukkan Alamat" value="{{ $sewa->alamat }}">
                            </div>
                            <div class="form-group">
                                <label for="Varian">Varian Mobil</label>
                                <select class="form-control" name="Varian">
                                    @foreach($mobil as $m)
                                    <option value="{{ $m -> id }}" {{ $sewa->mobil_id == $m -> id ? 'selected' : '' }}>{{$m -> varian}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="TanggalSewa">Tanggal Sewa</label>
                                <input type="date" name="TanggalSewa" class="form-control" id="TanggalSewa" placeholder="Masukkan Jabatan" value="{{ $sewa->tanggal_sewa }}">
                            </div>
                            <div class="form-group">
                                <label for="TanggalKembali">Tanggal Kembali</label>
                                <input type="date" name="TanggalKembali" class="form-control" id="TanggalKembali" placeholder="Masukkan Jabatan" value="{{ $sewa->tanggal_kembali }}">
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <div class="float-right">
                                <a class="btn btn-info" href="{{ route('sewa.index') }}">Kembali</a>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection