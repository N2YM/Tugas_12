@extends('template.base')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{ url('admin/produk') }}" class="btn btn-dark "><i class="fas fa-arrow-left">
                Kembali</i></a>
            <div class="card mt-2">
                <div class="card-header">
                    Detail Data Produk
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <p>
                                <img src="{{ url("public",$produk->foto) }}" alt="" class="img-fluid" style="margin-top:10%">
                            </p>
                        </div>
                        <div class="col-md-9 float-right">
                            @include('produk.show.detail')
                            <h6>Deskripsi : <br>{!!nl2br ($produk->deskripsi) !!}</h6>
                            
                            {{-- <h6>Tanggal Produk : {{ $produk->created_at->format("d M Y") }}</h6> --}}
                            <h6>Tanggal Produk : {{ $produk->created_at->diffForHumans() }}</h6>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>

@endsection