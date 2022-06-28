@extends('HomePage.layout')
@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 mt-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">List Sewa Mobil</h3>
                        <a class="btn btn-warning float-end" href="{{ route('cetak') }}"> Cetak Ke PDF</a>
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
                                <th width="100px">Action</th>
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
                                    @if($sewa->status == 'Paid Off')
                                    <form action="{{ route('sewa.destroy',['sewa'=>$sewa->id]) }}" method="POST">
                                        <a class="btn btn-block btn-primary mb-1" href="{{ route('sewa.edit', $sewa->id) }}">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-block btn-danger mb-1">Delete</button>
                                        @if(auth()->user()->level == 'penyewa')
                                        <a class="btn btn-block btn-success mt-0" href="{{ route('sewa.payment', $sewa->id) }}">Payment</a>
                                        @endif
                                    </form>
                                    @else
                                    <div class="text-success">Lunas</div>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </table>
                        @if(auth()->user()->level == 'penyewa')
                        <div class="float-right mt-2">
                            <a class="btn btn-info" href="{{ route('sewa.create') }}"> Input Data</a>
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