@extends('HomePage.layout')
@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">DASHBOARD FIND YOUR CAR</h1>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{ $mobil }}</h3>
                    <p>Data Mobil</p>
                </div>
                <div class="icon">
                    <i>
                        <ion-icon name="car-outline"></ion-icon>
                    </i>
                </div>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{ $merk }}</sup></h3>
                    <p>Data Merk</p>
                </div>
                <div class="icon">
                    <i>
                        <ion-icon name="ribbon-outline"></ion-icon>
                    </i>
                </div>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{ $pemesanan }}</h3>
                    <p>Data Pesanan</p>
                </div>
                <div class="icon">
                    <i>
                        <ion-icon name="stats-chart-outline"></ion-icon>
                    </i>
                </div>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{ $akun }}</h3>
                    <p>Data Akun</p>
                </div>
                <div class="icon">
                    <i>
                        <ion-icon name="person-circle-outline"></ion-icon>
                    </i>
                </div>
            </div>
        </div>
        <!-- ./col -->
    </div>
</div>

@endsection