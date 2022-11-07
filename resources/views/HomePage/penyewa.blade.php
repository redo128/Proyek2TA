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
                    <h3>{{ $barang }}</h3>
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
                    <h3>{{ $label }}</sup></h3>
                    <p>Data Label</p>
                </div>
                <div class="icon">
                    <i>
                        <ion-icon name="ribbon-outline"></ion-icon>
                    </i>
                </div>
            </div>
        </div>
        <!-- ./col -->
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