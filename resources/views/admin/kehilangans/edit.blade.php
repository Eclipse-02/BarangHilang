@extends('layouts.admin.master')

@section('title', 'Edit')

@section('content')
<div class="col-12 mb-2">
    <a class="btn btn-info text-white" href="{{ route('admin.kehilangans.index') }}"> 
        <i class="fas fa-angle-left"></i>
        Kembali
    </a>
</div>
<div class="col-12">
    <div class="card shadow mb-4">
        <div class="card-body">
            <h2 class="card-title mb-5">Edit Data Kehilangan</h2>
            <form action="{{ route('admin.kehilangans.update', $kehilangan->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
            
                <div class="mb-4">
                    <label for="nama" class="form-label">Nama <small style="color: red;">*</small></label>
                    <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror"
                        id="nama" value="{{ $kehilangan->nama }}">
                    <div id="nama" class="form-text"><i class="fas fa-info-circle"></i> Nama Asli</div>
                    @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="email" class="form-label">Email <small style="color: red;">*</small></label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ $kehilangan->email }}">
                    <div id="email" class="form-text"><i class="fas fa-info-circle"></i> contoh@gmail.com</div>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="hp" class="form-label">No. Telp <small style="color: red;">*</small></label>
                    <input type="text" pattern="^[0-9]\d*$" minlength="10" maxlength="13" name="hp" class="form-control @error('hp') is-invalid @enderror" id="hp" value="{{ $kehilangan->hp }}">
                    <div id="hp" class="form-text"><i class="fas fa-info-circle"></i> 08********** (Maks 13)</div>
                    @error('hp')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="alamat" class="form-label">Alamat <small style="color: red;">*</small></label>
                    <textarea class="form-control @error('alamat') is-invalid @enderror" rows="3" name="alamat" id="alamat">{{ $kehilangan->alamat }}</textarea>
                    <div id="alamat" class="form-text"><i class="fas fa-info-circle"></i> Alamat barang tersebut ditemukan</div>
                    @error('alamat')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="tipe" class="form-label">Tipe <small style="color: red;">*</small></label>
                    <select class="form-select" name="tipe">
                        <option value="" selected disabled>-- Pilih Tipe --</option>
                        @foreach ($tipes as $tipe)
                            <option value="{{ $tipe->name }}" @if($tipe->name == $kehilangan->tipe) selected @endif>{{ $tipe->name }}</option>
                        @endforeach
                    </select>
                    <div id="tipe" class="form-text"><i class="fas fa-info-circle"></i> Tipe barang tersebut</div>
                    @error('tipe')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="keterangan" class="form-label">Keterangan</label>
                    <textarea class="form-control @error('keterangan') is-invalid @enderror" rows="3" name="keterangan" type="text" id="keterangan">{{ $kehilangan->keterangan }}</textarea>
                    <div id="keterangan" class="form-text"><i class="fas fa-info-circle"></i> Kondisi barang</div>
                    @error('keterangan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="foto" class="form-label">Masukkan Foto</label>
                    <input class="form-control @error('foto') is-invalid @enderror" name="foto" type="file" id="foto" value="{{ $kehilangan->foto }}">
                    <div id="foto" class="form-text"><i class="fas fa-info-circle"></i> Foto barang tersebut ditemukan</div>
                    @error('foto')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="facebook" class="form-label">Facebook</label>
                    <div class="input-group">
                        <div class="input-group-text"><i class="fab fa-facebook-f"></i></div>
                        <input type="text" class="form-control @error('facebook') is-invalid @enderror" name="facebook" id="facebook" value="{{ $kehilangan->facebook }}">
                        @error('facebook')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>
                </div>
                <div class="mb-4">
                    <label for="instagram" class="form-label">Instagram</label>
                    <div class="input-group">
                        <div class="input-group-text"><i class="fab fa-instagram"></i></div>
                        <input type="text" class="form-control @error('instagram') is-invalid @enderror" name="instagram" id="instagram" value="{{ $kehilangan->instagram }}">
                        @error('instagram')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection