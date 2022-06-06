@extends('HomePage.layout')
@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 mt-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Merk</h3>
                    </div>

                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <tr>
                                <th>Nama Merk</th>
                                <th width="280px">Action</th>
                            </tr>
                            @foreach ($merk as $d)
                            <tr>

                                <td>{{ $d -> nama_merk }}</td>
                                <td>
                                    <a class="btn btn-info" href="{{ route('merk.show', $d->id) }}">Show</a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                        <div class="float-right mt-2">
                            <a class="btn btn-success" href="{{ route('merk.create') }}"> Input Merk</a>
                        </div>
                     <div class="float-left mt-2">
                            {{ $merk->links() }}
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection