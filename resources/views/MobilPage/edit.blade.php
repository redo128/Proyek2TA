@extends('HomePage.layout')

@section('content')

<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Edit Data Mobil
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
                <form method="post" action="{{ route('mobil.update', $mobil->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="jenis_mobil">Jenis Mobil</label>
                        <input type="text" name="jenis_mobil" class="form-control" id="jenis_mobil" value="{{ $mobil->jenis_mobil }}" aria-describedby="jenis_mobil">
                    </div>
                    <div class="form-group">
                        <label for="varian">Varian</label>
                        <input type="text" name="varian" class="form-control" id="varian" value="{{ $mobil->varian }}" aria-describedby="varian">
                    </div>
                    <div class="form-group">
                        <label for="nomor_plat">Nomor Kendaraan</label>
                        <input type="text" name="nomor_plat" class="form-control" id="nomor_plat" value="{{ $mobil->nomor_plat }}" aria-describedby="nomor_plat">
                    </div>
                    <div class="form-group">
                        <label for="nama_merk">Nama Merk</label>
                        <select class="form-control" name="nama_merk">
                            @foreach($merk as $mrk)
                            <option value="{{$mrk->id}}" {{ $mobil->merk_id == $mrk->id ? 'selected' : '' }}>{{$mrk->nama_merk}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="image">Gambar Mobil</label>
                        <input type="file" class="form-control" required="required" name="image">
                    </div>
                    <div class="form-group">
                        <label for="tarif">Tarif per Hari</label>
                        <input type="text" name="tarif" class="form-control" id="tarif" value="{{ $mobil->tarif }}" aria-describedby="tarif">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection