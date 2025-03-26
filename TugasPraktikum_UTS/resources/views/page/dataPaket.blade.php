@extends('layout')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-12">
                <div class="card shadow-lg border-0 rounded">
                    <div class="card-body">
                        <h3 class="card-title text-center text-primary fw-bold">{{ $title }}</h3>
                        <hr>

                        {{-- Tombol Tambah Data --}}
                        <div class="d-flex justify-content-end mb-3">
                            <a href="{{ route('dataPaketProses') }}" class="btn btn-success">
                                <i class="fas fa-plus"></i> Tambah Data
                            </a>
                        </div>

                        {{-- Tabel Data Paket --}}
                        <div class="table-responsive">
                            <table id="datatable" class="table table-striped table-hover align-middle">
                                <thead class="table-dark">
                                    <tr>
                                        <th>No. Resi</th>
                                        <th>Pengirim</th>
                                        <th>Penerima</th>
                                        <th>Asal</th>
                                        <th>Tujuan</th>
                                        <th>Status</th>
                                        <th>Tanggal Update</th>
                                        <th>Estimasi Tiba</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data_Paket as $item)
                                        <tr>
                                            <td>{{ $item->noResi }}</td>
                                            <td>{{ $item->pengirim }}</td>
                                            <td>{{ $item->penerima }}</td>
                                            <td>{{ $item->asal }}</td>
                                            <td>{{ $item->tujuan }}</td>
                                            <td>
                                                <span class="badge 
                                                    {{ $item->status == 'Dalam Pengiriman' ? 'bg-warning' : ($item->status == 'Tiba di Tujuan' ? 'bg-success' : 'bg-danger') }} ">
                                                    {{ $item->status }}
                                                </span>
                                            </td>
                                            <td>{{ $item->tanggalUpdate }}</td>
                                            <td>{{ $item->estimasiTiba }}</td>
                                            <td>
                                                {{-- Tombol Edit --}}
                                                <a href="{{ route('editPaket', $item->id) }}" class="btn btn-warning btn-sm">
                                                    <i class="fas fa-edit"></i> Edit
                                                </a>
                                                
                                                {{-- Tombol Hapus --}}
                                                <a href="{{ route('hapusPaket', $item->id) }}" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                                    <i class="fas fa-trash"></i> Hapus
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div> {{-- End Table Responsive --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

  
    </script>
@endsection
