@extends('layout')
@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-lg border-0 rounded">
                    <div class="card-body">
                        <h3 class="card-title text-center text-primary fw-bold">Form Input Paket</h3>
                        <hr>

                        {{-- Form Input Paket --}}
                        <form class="custom-validation" action="{{ route('simpanPaket') }}" method="POST">
                            @csrf

                            {{-- No Resi --}}
                            <div class="mb-3">
                                <label class="fw-bold">No. Resi</label>
                                <input type="number" id="noResi" name="noResi" class="form-control" required placeholder="Masukkan No. Resi">
                            </div>

                            {{-- Pengirim --}}
                            <div class="mb-3">
                                <label class="fw-bold">Pengirim</label>
                                <input type="text" id="pengirim" name="pengirim" class="form-control" required placeholder="Masukkan Nama Pengirim">
                            </div>

                            {{-- Penerima --}}
                            <div class="mb-3">
                                <label class="fw-bold">Penerima</label>
                                <input type="text" id="penerima" name="penerima" class="form-control" required placeholder="Masukkan Nama Penerima">
                            </div>
                            
                            {{-- Asal --}}
                            <div class="mb-3">
                                <label class="fw-bold">Asal</label>
                                <input type="text" id="asal" name="asal" class="form-control" required placeholder="Masukkan Lokasi Asal">
                            </div>

                            {{-- Tujuan --}}
                            <div class="mb-3">
                                <label class="fw-bold">Tujuan</label>
                                <input type="text" id="tujuan" name="tujuan" class="form-control" required placeholder="Masukkan Tujuan">
                            </div>

                            {{-- status --}}
                            <div class="mb-3 dropdown ">                               
                                 <label for="status" class="fw-bold">Status</label>
                                <select id="status" name="status" class="form-select w-100" required>
                                    <option value="" disabled selected>Pilih Status</option>
                                    <option value="Dalam Pengiriman">Dalam Pengiriman</option>
                                    <option value="Tiba di Tujuan">Tiba di Tujuan</option>
                                    <option value="Gagal Dikirim">Gagal Dikirim</option>
                                </select>
                            </div>                                       

                            {{-- Tanggal Update --}}
                            <div class="mb-3">
                                <label class="fw-bold">Tanggal Update</label>
                                <input type="date" id="tanggalUpdate" name="tanggalUpdate" class="form-control" required>
                            </div>

                            {{-- Estimasi Tiba --}}
                            <div class="mb-3">
                                <label class="fw-bold">Estimasi Tiba</label>
                                <input type="date" id="estimasiTiba" name="estimasiTiba" class="form-control" required>
                            </div>

                            {{-- Tombol Aksi --}}
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('dataPaket') }}" class="btn btn-secondary">
                                    <i class="fas fa-arrow-left"></i> Kembali
                                </a>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save"></i> Simpan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                </div>
            </div>
    </div>
@endsection