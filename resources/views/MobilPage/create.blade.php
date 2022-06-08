@extends('HomePage.layout')
@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-6">

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Data Mobil</h3>
                    </div>

                    <form method="post" action="{{ route('mobil.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="jenis_mobil">jenis_mobil</label>
                            <input type="text" name="jenis_mobil" class="form-control" id="jenis_mobil" aria-describedby="jenis_mobil">
                        </div>
                        <div class="form-group">
                            <label for="varian">varian</label>
                            <input type="varian" name="varian" class="form-control" id="varian" aria-describedby="varian">
                        </div>
                        <div class="form-group">
                            <label for="nomor_plat">nomor_plat</label>
                            <input type="nomor_plat" name="nomor_plat" class="form-control" id="nomor_plat" aria-describedby="nomor_plat">
                        </div>
    
                        <!-- Praktikum 1 JS 9 (Langkah 22) -->
                        <div class="form-group">
                            <label for="nama_merk">nama_merk</label>
                            <select class="form-control" name="nama_merk">
                                @foreach($merk as $mrk)
                                <option value="{{ $mrk ->id }}">{{$mrk->nama_merk}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="image">Feature Image: </label>
                            <input type="file" class="form-control" required="required" name="image">
                        </div>
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