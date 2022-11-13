@extends('HomePage.layout')
@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-12 mt-3">

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Inventaris</h3>
                    </div>

                    <form method="post" action="{{ route('inventaris.store2') }}" enctype="multipart/form-data" class="p-3">
                        @csrf
                        <div class="form-group">
                            <label for="nama_barang">Barang</label>
                            <select class="form-control" name="nama_barang">
                                @foreach($barang as $mrk)
                                <option value="{{ $mrk ->id }}">{{$mrk->nama_barang}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nama_label">Label</label>
                            <select class="form-control" name="nama_label">
                                @foreach($label as $lbl)
                                <option value="{{ $lbl ->id }}">{{$lbl->nama_label}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="stock">Masukkan Stok</label>
                            <input type="text" name="stock" class="form-control" id="stock" placeholder="Masukkan stock">
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