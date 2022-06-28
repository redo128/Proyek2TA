@extends('HomePage.layout')
@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 mt-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">List Sewa Mobil</h3>
                        <a class="btn btn-warning float-end" href="{{ url('/cetakpengembalian') }}"> Cetak Ke PDF</a>
                    </div>

                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <tr>
                                <th>Sewa ID</th>
                                <th>Mobil ID</th>
                                <th>User ID</th>
                                <th>Pegawai ID</th>
                                <th>Batas Kembali</th>
                                <th>Tanggal Kembali</th>
                                <th>Status</th>
                            </tr>
                            @foreach ($pengembalian as $sewa)
                            <tr>
                                <td>{{ $sewa -> sewa_id   }}</td>
                                <td>{{ $sewa -> mobil -> jenis_mobil }}</td>
                                <td>{{ $sewa -> user-> name }}</td>
                                <td>{{ $sewa -> pegawai->nama_pegawai }}</td>
                                <td>{{ $sewa -> batas_kembali }}</td>
                                <td>{{ $sewa -> updated_at }}</td>
                                <td>
                                    @if($sewa->pengembalian == 'pending')
                                    <a class="btn btn-block btn-success mt-0" href="{{url('editdb/'.$sewa->id.'/'.$sewa->sewa_id)}}">ACCEPT</a>
                                    @else()
                                    <div class="text-success">Sudah Diterima</div>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </table>
                        <div class="float-left mt-2">
                            {{ $pengembalian->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection