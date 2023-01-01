@extends('layouts.admin.master')

@section('title', 'Detail')

@section('content')
    <div class="col-12 mb-2">
        <a class="btn btn-info text-white" href="{{ route('admin.kehilangans.index') }}"> 
            <i class="fas fa-angle-left"></i>
            Kembali
        </a>
        <a class="btn btn-primary text-white" href="{{ route('admin.kehilangans.edit', $kehilangan->id) }}"> 
            <i class="far fa-edit"></i>
            Edit
        </a>
    </div>
    <div class="col-12">
        <div class="card shadow mb-4">
            <div class="card-body">
                <h1 class="card-title">Kehilangan, {{ $kehilangan->tipe }}</h1>
                <div class="row mt-5">
                    <div class="col-lg-5 col-md-5 col-sm-6">
                        <div class="white-box text-center"><img
                                src="
                        @if ($kehilangan->foto) {{ asset($kehilangan->foto) }}
                        @else
                            {{ asset('storage/default.png') }} @endif
                        "
                                class="img-responsive" style="max-width: 80%">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-6">
                        <div class="mb-3">
                            <h4 class="box-title">Nama Pemilik Barang</h4>
                            <p>
                                {{ $kehilangan->nama }}
                            </p>
                        </div>
                        <h4 class="box-title my-3">Kontak Kehilangan Barang</h4>
                        <div class="mb-3">
                            <h4 class="box-title">> Email</h4>
                            <p>
                                {{ $kehilangan->email }}
                            </p>
                            <h4 class="box-title">> No. Telp</h4>
                            <p>
                                {{ $kehilangan->hp }}
                            </p>
                            <h4 class="box-title">> Facebook</h4>
                            <p>
                                @if ($kehilangan->facebook)
                                    {{ $kehilangan->facebook }}
                                @else
                                    -
                                @endif
                            </p>
                            <h4 class="box-title">> Instagram</h4>
                            <p>
                                @if ($kehilangan->instagram)
                                    {{ $kehilangan->instagram }}
                                @else
                                    -
                                @endif
                            </p>
                        </div>
                        <div class="mb-3">
                            <h4 class="box-title">Keterangan Barang</h4>
                            <p>
                                @if ($kehilangan->keterangan)
                                    {{ $kehilangan->keterangan }}
                                @else
                                    -
                                @endif
                            </p>
                        </div>
                        <div class="mb-3">
                            <h4 class="box-title">Alamat Barang</h4>
                            <p>
                                {{ $kehilangan->alamat }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
