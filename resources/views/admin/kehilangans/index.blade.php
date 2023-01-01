@extends('layouts.admin.master')

@section('title', 'Kehilangan')

@section('content')

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Menambahkan Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.kehilangans.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                    
                        <div class="mb-4">
                            <label for="nama" class="form-label">Nama <small style="color: red;">*</small></label>
                            <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror"
                                id="nama" value="{{ old('nama') }}">
                            <div id="nama" class="form-text"><i class="fas fa-info-circle"></i> Nama Asli</div>
                            @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="email" class="form-label">Email <small style="color: red;">*</small></label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}">
                            <div id="email" class="form-text"><i class="fas fa-info-circle"></i> contoh@gmail.com</div>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="hp" class="form-label">No. Telp <small style="color: red;">*</small></label>
                            <input type="text" pattern="^[0-9]\d*$" minlength="10" maxlength="13" name="hp" class="form-control @error('hp') is-invalid @enderror" id="hp" value="{{ old('hp') }}">
                            <div id="hp" class="form-text"><i class="fas fa-info-circle"></i> 08********** (Maks 13)</div>
                            @error('hp')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="alamat" class="form-label">Alamat <small style="color: red;">*</small></label>
                            <textarea class="form-control @error('alamat') is-invalid @enderror" rows="3" name="alamat" id="alamat">{{ old('alamat') }}</textarea>
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
                                    <option value="{{ $tipe->name }}" @if($tipe->name == old('tipe')) selected @endif>{{ $tipe->name }}</option>
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
                            <textarea class="form-control @error('keterangan') is-invalid @enderror" rows="3" name="keterangan" type="text" id="keterangan">{{ old('keterangan') }}</textarea>
                            <div id="keterangan" class="form-text"><i class="fas fa-info-circle"></i> Kondisi barang</div>
                            @error('keterangan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="foto" class="form-label">Masukkan Foto</label>
                            <input class="form-control @error('foto') is-invalid @enderror" name="foto" type="file" id="foto" value="{{ old('foto') }}">
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
                                <input type="text" class="form-control @error('facebook') is-invalid @enderror" name="facebook" id="facebook" value="{{ old('facebook') }}">
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
                                <input type="text" class="form-control @error('instagram') is-invalid @enderror" name="instagram" id="instagram" value="{{ old('instagram') }}">
                                @error('instagram')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body" style="height: calc(100vh - 210px);">
            <h2 class="card-title mb-2">Kehilangan</h2>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <i class="fas fa-plus"></i>
                Tambah Data
            </button>
            <table class="table table-striped-column">
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Tipe</th>
                    <th>Foto</th>
                    <th>Keterangan</th>
                    <th width='140px'>Aksi</th>
                </tr>
                @foreach ($kehilangans as $kehilangan)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $kehilangan->nama }}</td>
                        <td>{{ $kehilangan->email }}</td>
                        <td>{{ $kehilangan->tipe }}</td>
                        <td><img src="{{ $kehilangan->foto }}" alt=""></td>
                        <td>{{ $kehilangan->keterangan }}</td>
                        <td>
                            <form action="{{ route('admin.kehilangans.destroy',$kehilangan->id) }}" method="POST">
    
                                <a class="btn btn-info btn-sm text-white mb-2" href="{{ route('admin.kehilangans.show',$kehilangan->id) }}">
                                    <i class="far fa-eye"></i>
                                    Tampilkan
                                </a>
    
                                <a class="btn btn-primary btn-sm text-white mb-2" href="{{ route('admin.kehilangans.edit',$kehilangan->id) }}">
                                    <i class="far fa-edit"></i>
                                    Edit
                                </a>
    
                                @csrf
                                @method('DELETE')
    
                                <button type="submit" onclick="return confirm('Apakah kamu yakin ingin menghapus {{ $kehilangan->nama }}?')" class="btn btn-danger btn-sm text-white mb-2">
                                    <i class="fas fa-times"></i>
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
