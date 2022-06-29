@extends('HomePage.layout')
@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 mt-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">List Sewa Mobil</h3>
                    </div>

                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <tr>
                                <th>Nama Pegawai</th>
                                <th>Nama Penyewa</th>
                                <th>Alamat</th>
                                <th>Varian Mobil</th>
                                <th>Tanggal Sewa</th>
                                <th>Tanggal Kembali</th>
                                <th>Status</th>
                            </tr>
                            @foreach ($paginate as $sewa)
                            <tr>
                                <td>{{ $sewa -> pegawai -> nama_pegawai }}</td>
                                <td>{{ $sewa -> user -> name}}</td>
                                <td>{{ $sewa -> alamat }}</td>
                                <td>{{ $sewa -> mobil -> varian }}</td>
                                <td>{{ $sewa -> tanggal_sewa }}</td>
                                <td>{{ $sewa -> tanggal_kembali }}</td>
                                <td>
                                    @if($sewa->pengembalian == 'belum')
                                    <a class="btn btn-block btn-success mt-0" href="{{ route('pengembalian.edit', $sewa->id) }}">Pengembalian</a>
                                    @elseif($sewa->pengembalian=='pending')
                                    <div class="text-success">Pending</div>
                                    @else()
                                    <div class="text-success">Sudah Diterima</div>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </table>
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