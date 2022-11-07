@extends('HomePage.layout')
@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 mt-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">List Penyewa</h3>
                    </div>
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <tr>
                                <th>Foto Profil</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>No HP</th>
                            </tr>
                            
                            @foreach ($penyewa as $m)
                            <tr>
                                @if($m->foto=='')
                                <td><img width="75" height="75" src={{asset('adminLTE\blank-profile-picture-973460_1280.png')}}></td>
                                @else
                                <td><img width="75" height="75" src={{asset('storage/'.$m->foto) }}></td>
                                @endif
                                <td>{{ $m -> name }}</td>
                                <td>{{ $m -> email }}</td>
                                @if($m->nohp=='')
                                <td>{{ 'NULL'}}</td>
                                @else
                                <td>{{ $m -> nohp}}</td>
                                @endif
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection