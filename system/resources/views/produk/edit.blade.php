@extends('template.base')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-12">
            <a href="{{ url('admin/produk') }}" class="btn btn-dark "><i class="fas fa-arrow-left">
                Kembali</i></a>
            <div class="card mt-2">
                <div class="card-header">
                    Edit Data Produk
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="{{ url('public', $produk->foto) }}" alt="" class="img-fluid" style="margin-top: 20%">
                        </div>
                        <div class="col-md-9">
                            <form action="{{ url('admin/produk', $produk->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method("put")
                            <div class="form-grup">
                                <label for="">Nama</label>
                                <input type="text" class="form-control" name="nama"value=" {{ $produk->nama }} ">
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-grup">
                                        <label for="">Foto</label>
                                        <input type="file" class="form-control" name="foto" accept=".png">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-grup">
                                        <label for="">Harga</label>
                                        <input type="text" class="form-control" name="harga" value="{{ number_format ($produk->harga) }}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-grup">
                                        <label for="">Berat</label>
                                        <input type="text" class="form-control" name="berat"value="{{ $produk->berat }}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-grup">
                                        <label for="">Stok</label>
                                        <input type="text" class="form-control" name="stok"value="{{ $produk->stok }}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-grup">
                                <label for="">Deskripsi</label>
                               <textarea  name="deskripsi" id="deskripsi" class="form-control"  >{{ $produk->deskripsi }}"</textarea>
                            </div>
                            <button class="btn btn-dark float-right mt-4"> <i class="mdi mdi-content-save"></i> Simpan</button>
                        </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


@push('style')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endpush

@push('script')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
     $(document).ready(function() {
    $('#deskripsi').summernote();
    });
</script>
@endpush