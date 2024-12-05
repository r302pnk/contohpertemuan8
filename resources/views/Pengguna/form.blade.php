@extends('layout')

@section('content')
<x-HeaderComponent title="Form Pengguna" />

<div class="app-content">
    <div class="col-md-12">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <div class="card-title">Form Pengguna</div>
            </div>
            <div class="card-body">
                <div class="container mt-4">
                    <form action="{{ url('pengguna') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Nama -->
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') }}" />
                            @if ($errors->has('nama'))
                                <div class="text-danger">{{ $errors->first('nama') }}</div>
                            @endif
                        </div>

                        <!-- Jenis Kelamin -->
                        <div class="mb-3">
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                            <select class="form-select" id="jenis_kelamin" name="jenis_kelamin">
                                <option value="">Pilih</option>
                                <option value="L" {{ old('jenis_kelamin') == 'L' ? 'selected' : '' }}>Laki-laki</option>
                                <option value="P" {{ old('jenis_kelamin') == 'P' ? 'selected' : '' }}>Perempuan</option>
                            </select>
                            @if ($errors->has('jenis_kelamin'))
                                <div class="text-danger">{{ $errors->first('jenis_kelamin') }}</div>
                            @endif
                        </div>

                        <!-- Tanggal Lahir -->
                        <div class="mb-3">
                            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" />
                            @if ($errors->has('tanggal_lahir'))
                                <div class="text-danger">{{ $errors->first('tanggal_lahir') }}</div>
                            @endif
                        </div>

                        <!-- Alamat -->
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea class="form-control" id="alamat" name="alamat">{{ old('alamat') }}</textarea>
                        </div>

                        <!-- File -->
                        <div class="mb-3">
                            <label for="file" class="form-label">File</label>
                            <input type="file" class="form-control" id="file" name="foto" />
                            @if ($errors->has('file'))
                                <div class="text-danger">{{ $errors->first('file') }}</div>
                            @endif
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
