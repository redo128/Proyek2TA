@extends('HomePage.layout')
@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 mt-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">List Sewa Mobil</h3>
                        <a class="btn btn-danger float-end" href="{{ route('cetak') }}"> Cetak Ke PDF</a>
                    </div>

                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <tr>
                                <th>Nama Pegawai</th>
                                <th>Nama Penyewa</th>
                                <th>Alamat</th>
                                <th>Jenis Mobil</th>
                                <th>Tanggal Sewa</th>
                                <th>Tanggal Kembali</th>
                                <th>Total Harga</th>
                                <th width="280px">Action</th>
                            </tr>
                            @foreach ($paginate as $sewa)
                            <tr>
                                <td>{{ $sewa -> pegawai -> nama_pegawai }}</td>
                                <td>{{ $sewa -> user -> name}}</td>
                                <td>{{ $sewa -> alamat }}</td>
                                <td>{{ $sewa -> mobil -> jenis_mobil }}</td>
                                <td>{{ $sewa -> tanggal_sewa }}</td>
                                <td>{{ $sewa -> tanggal_kembali }}</td>
                                <td>{{ $sewa -> tarif }}</td>
                                <td>
                                    <form action="{{ route('sewa.destroy',['sewa'=>$sewa->id]) }}" method="POST">
                                        <a class="btn btn-primary" href="{{ route('sewa.edit', $sewa->id) }}">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                        @if(auth()->user()->level == 'penyewa')
                        <div class="float-right mt-2">
                            <a class="btn btn-success" href="{{ route('sewa.create') }}"> Input Data</a>
                        </div>
                        @endif
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