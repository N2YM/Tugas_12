@extends('template.base')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{ url('admin/user') }}" class="btn btn-dark "><i class="fas fa-arrow-left">
                Kembali</i></a>
            <div class="card mt-2">
                <div class="card-header">
                    Detail Data User
                </div>
                <div class="card-body">
                    <h4>Username : {{ $user->username }}</h4>
                    <hr>
                    <h6>Nama: {{$user->nama }}</h6>
                    <h6>Email :{{ $user->email }}</h6>
                    <h6>No Handphone :{{ $user->detail->no_handphone }}</h6>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection