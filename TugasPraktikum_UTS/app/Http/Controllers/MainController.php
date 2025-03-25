<?php

namespace App\Http\Controllers;

use App\Models\DataPaket;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{

    //fungsi data paket
    function dataPaket()
    {
        $data = array(
            'title' => 'Data Paket',

        );
        $data_Paket = DataPaket::all();
        return view('page/dataPaket', compact('data_Paket'), $data);
    }

    //fungsi tambah form data apekt
    function dataPaketProses()
    {
        $data = array(
            'title' => 'Kirim Data Paket',

        );
        return view('page/dataPaketProses', $data);
    }

    //fungsi menyimpan data paket
    public function storePaket(Request $request)
    {
        $request->validate([
            'noResi' => 'required|integer',
            'pengirim' => 'required|string',
            'penerima' => 'required|string',
            'asal' => 'required|string',
            'tujuan' => 'required|string',
            'status' => 'required|string',
            'tanggalUpdate' => 'required|string',
            'estimasiTiba' => 'required|string'

        ]);

        DataPaket::create([
            'noResi' => $request->noResi,
            'pengirim' => $request->pengirim,
            'penerima' => $request->penerima,
            'asal' => $request->asal,
            'tujuan' => $request->tujuan,
            'status' => $request->status,
            'tanggalUpdate' => $request->tanggalUpdate,
            'estimasiTiba' => $request->estimasiTiba
        ]);
        return redirect('dataPaket');
    }

    //fungsi menghapus data paket
    function destroyPaket($id)
    {
        $data_Paket = DataPaket::find($id);

        if ($data_Paket) {
            $data_Paket->delete();
            return redirect()->route('dataPaket')->with('succes', 'data berhasil dihapus!');
        }
        return redirect()->route('dataPaket')->with('error', 'data tidak ditemukan');
    }

    //fungsi edit data paket
    public function editPaket($id)
    {
        $data_Paket = DataPaket::find($id);

        if ($data_Paket) {
            $data = [
                'title' => 'Edit Data Paket',
                'formTitle' => 'Edit Data Paket',
                'dataPaket' => $data_Paket
            ];
            return view('page/editDataPaket', $data);
        }

        return redirect()->route('dataPaket')->with('error', 'Data tidak ditemukan!');
    }

    //fungsi update data paket
    public function updatePaket(Request $request, $id)
    {
        $validatedData = $request->validate([
            'noResi' => 'required|integer',
            'pengirim' => 'required|string',
            'penerima' => 'required|string',
            'asal' => 'required|string',
            'tujuan' => 'required|string',
            'status' => 'required|string',
            'tangalgUpdate' => 'required|string',
            'estimasiTiba' => 'required|string'
        ]);

        $data_Paket = DataPaket::find($id);

        if ($data_Paket) {
            $data_Paket->update($validatedData);
            return redirect()->route('dataPaket')->with('success', 'Data berhasil diperbarui!');
        }

        return redirect()->route('dataPaket')->with('error', 'Data tidak ditemukan!');
    }
}
