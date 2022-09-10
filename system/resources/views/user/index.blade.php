@extends('template.base')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Data User
                        <a href="{{ url('admin/user/create') }}" class="btn btn-dark float-right"> <i class="mdi mdi-plus"></i> Tambah Data</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-datatable">
                            <thead>
                                <th>No</th>
                                <th>Aksi</th>
                                <th>Username</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Email</th>
                            </thead>
                            <tbody>
                              @foreach($list_user as $user)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{ url('admin/user', $user->id) }}" class="btn btn-dark"><i class="mdi mdi-information-variant"></i></a>
                                            <a href="{{ url('admin/user', $user->id) }}/edit" class="btn btn-warning"><i class="mdi mdi-tooltip-edit"></i></a>
                                            @include('template.utils.delete', ['url' =>  url('admin/user', $user->id)])
                                         </div>
                                    </td>
                                    <td>{{ $user->username }}</td>
                                    <td>{{ $user->nama }}</td>
                                    <td>{{ $user->jenis_kelamin_string }}</td>
                                    <td>{{ $user->email }}</td>
                                </tr>
                               @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection