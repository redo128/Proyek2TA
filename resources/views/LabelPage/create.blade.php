@extends('HomePage.layout')
@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-6">

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Data LABEL</h3>
                    </div>

                    <form method="post" action="{{ route('label.store') }}" id="myForm">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="Label">MASUKKAN LABEL</label>
                                <input type="text" name="Label" class="form-control" id="Label" placeholder="Masukkan Label">
                            </div>
                            <div class="form-group">
                                <label for="Deskripsi">Deskripsi</label>
                                <input type="text" name="Deskripsi" class="form-control" id="Deskripsi" placeholder="Masukkan Deskripsi">
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