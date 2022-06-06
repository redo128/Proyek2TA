@extends('HomePage.layout')
@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 mt-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">List Mobil</h3>
                    </div>

                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <tr>
                                <th>Gambar Mobil</th>
                                <th>Jenis Mobil</th>
                                <th>Varian</th>
                                <th>Plat Nomor</th>
                                <th>Merk</th>
                                <th width="280px">Action</th>
                            </tr>
                            @foreach ($paginate as $m)
                            <tr>

                                <td><img width="100" height="100" src="{{ asset('storage/'.$m->featured_image) }}"></td>
                                <td>{{ $m -> jenis_mobil }}</td>
                                <td>{{ $m -> varian }}</td>
                                <td>{{ $m -> nomor_plat }}</td>
                                <td>{{ $m -> merk-> nama_merk }}</td>
                                <td>
                                    <a class="btn btn-info" href="{{ route('mobil.show', $m->seri) }}">Show</a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                        <div class="float-right mt-2">
                            <a class="btn btn-success" href="{{ route('mobil.create') }}"> Input Mobil</a>
                        </div>
                     <div class="float-left mt-2">
                            {{ $paginate->links() }}
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection