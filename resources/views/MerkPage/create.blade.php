@extends('HomePage.layout')
@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-6">

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Data Merk</h3>
                    </div>

                    <form method="post" action="{{ route('merk.store') }}" id="myForm">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="Nama">Nama Merk</label>
                                <input type="text" name="Nama" class="form-control" id="Nama" placeholder="Masukkan Nama Merk">
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