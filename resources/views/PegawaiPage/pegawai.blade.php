@extends('HomePage.layout')
@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 mt-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Pegawai</h3>
                    </div>

                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <tr>
                                <th>ID</th>
                                <th>Foto Profil</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Jabatan</th>
                                <th>Alamat</th>
                                <th>Telepon</th>
                                <th width="280px">Action</th>
                            </tr>
                            @foreach ($pegawai as $p)
                            <tr>

                                <td>{{ $p -> id_pegawai }}</td>
                                <td><img width="75" height="75" src="{{ asset($p->foto_pegawai) }}"></td>
                                <td>{{ $p -> nama_pegawai }}</td>
                                <td>
                                    @if($p->jenis_kelamin==0)
                                    Perempuan
                                    @else
                                    Laki-laki
                                    @endif
                                </td>
                                <td>{{ $p -> jabatan }}</td>
                                <td>{{ $p -> alamat }}</td>
                                <td>{{ $p -> telepon }}</td>
                                <td>
                                    <form action="{{ route('pegawai.destroy',['pegawai'=>$p->id_pegawai]) }}" method="POST">
                                        <a class="btn btn-info" href="{{ route('pegawai.show', $p->id_pegawai) }}">Show</a>
                                        <a class="btn btn-primary" href="{{ route('pegawai.edit', $p->id_pegawai) }}">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                        <div class="float-right mt-2">
                            <a class="btn btn-success" href="{{ route('pegawai.create') }}"> Input Pegawai</a>
                        </div>
                        <div class="float-left mt-2">
                            {{ $pegawai->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection