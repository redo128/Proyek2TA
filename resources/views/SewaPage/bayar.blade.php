@extends('HomePage.layout')
@section('content')

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header mt-2">
                Detail Data Mobil
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-center">
                    <img width="100" class="mb-2" src="{{ asset('adminLTE/dist/img/payment.svg') }}">
                </div>
                <p class="text-center mb-0 mt-0">Penyewaan <span class="text-danger">#{{ $sewa->id }}</span></p>
                <p class="text-center mt-0 mb-4">Memasukkan nominal sesuai transaksi</p>
                <form action="{{ route('sewa.pay', $sewa->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        @if ($message = Session::get('error'))
                        <div class="alert alert-error">
                            <p>{{ $message }}</p>
                        </div>
                        @endif
                        <div class="col-12 mb-2">
                            <input type="number" class="form-control" name="nominal" placeholder="Insert the nominal you'd pay!">
                        </div>
                        <div class="col-12">
                            <input type="submit" class="btn btn-block btn-success" value="Pay">
                        </div>
                    </div>
                </form>
                <a class="btn btn-primary mt-3 mb-2" href="{{ route('sewa.index') }}">Kembali</a>
            </div>
        </div>
    </div>
</div>

@endsection