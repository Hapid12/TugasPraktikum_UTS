@extends('layout')

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-lg border-0 rounded">
                    <div class="card-body">
                        <h3 class="card-title text-center text-primary fw-bold">{{ $formTitle }}</h3>
                        <hr>

                        {{-- Notifikasi Error --}}
                        @if ($message = Session::get('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ $message }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        {{-- Form Edit Paket --}}
                        <form action="{{ route('updatePaket', $dataPaket->id) }}" method="post">
                            @csrf

                            {{-- No Resi --}}
                            <div class="mb-3">
                                <label class="fw-bold">No. Resi</label>
                                <input type="number" id="noResi" name="noResi" class="form-control" required 
                                    placeholder="Masukkan No. Resi" value="{{ old('noResi', $dataPaket->noResi) }}">
                            </div>

                            {{-- Pengirim --}}
                            <div class="mb-3">
                                <label class="fw-bold">Pengirim</label>
                                <input type="text" id="pengirim" name="pengirim" class="form-control" required
                                    placeholder="Nama Pengirim" value="{{ old('pengirim', $dataPaket->pengirim) }}">
                            </div>

                            {{-- Penerima --}}
                            <div class="mb-3">
                                <label class="fw-bold">Penerima</label>
                                <input type="text" id="penerima" name="penerima" class="form-control" required
                                    placeholder="Nama Penerima" value="{{ old('penerima', $dataPaket->penerima) }}">
                            </div>
                            
                            {{-- Asal --}}
                            <div class="mb-3">
                                <label class="fw-bold">Asal</label>
                                <input type="text" required class="form-control" id="asal" name="asal" 
                                    placeholder="Alamat Asal" value="{{ old('asal', $dataPaket->asal) }}">
                            </div>
                                
                            {{-- Tujuan --}}
                            <div class="mb-3">
                                <label class="fw-bold">Tujuan</label>
                                <input type="text" id="tujuan" name="tujuan" class="form-control" required
                                    placeholder="Alamat Tujuan" value="{{ old('tujuan', $dataPaket->tujuan) }}">
                            </div>

                            {{-- Status --}}
                            <div class="mb-3">
                                <label class="fw-bold">Status</label>
                                <select name="status" class="form-select" required>
                                    <option value="Dalam Pengiriman" {{ old('status', $dataPaket->status) == 'Dalam Pengiriman' ? 'selected' : '' }}>Dalam Pengiriman</option>
                                    <option value="Tiba di Tujuan" {{ old('status', $dataPaket->status) == 'Tiba di Tujuan' ? 'selected' : '' }}>Tiba di Tujuan</option>
                                    <option value="Gagal Dikirim" {{ old('status', $dataPaket->status) == 'Gagal Dikirim' ? 'selected' : '' }}>Gagal Dikirim</option>
                                </select>
                            </div>

                            {{-- Tanggal Update --}}
                            <div class="mb-3">
                                <label class="fw-bold">Tanggal Update</label>
                                <input type="date" id="tanggalUpdate" name="tanggalUpdate" class="form-control" required
                                    value="{{ old('tanggalUpdate', $dataPaket->tanggalUpdate) }}">
                            </div>

                            {{-- Estimasi Tiba --}}
                            <div class="mb-3">
                                <label class="fw-bold">Estimasi Tiba</label>
                                <input type="date" id="estimasiTiba" name="estimasiTiba" class="form-control" required
                                    placeholder="Perkiraan Tiba" value="{{ old('estimasiTiba', $dataPaket->estimasiTiba) }}">
                            </div>

                            {{-- Tombol Aksi --}}
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('dataPaket') }}" class="btn btn-secondary">
                                    <i class="fas fa-arrow-left"></i> Kembali
                                </a>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save"></i> Simpan Perubahan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
