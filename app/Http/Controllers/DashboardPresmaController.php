<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Bidang;
use App\Models\presma;
use App\Models\Tingkat;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\PresmaRequest;
use App\Models\FilePresma;
use App\Models\Mahasiswa;
use App\Models\predikat;
use App\Models\Predikat as ModelsPredikat;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class DashboardPresmaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $presma = Auth::user()->presma;
        // collection
        // dd($presma[0]->users->toArray());
        // dd(Auth::user()->mahasiswa);
        return view('dashboard.mahasiswa.index', [
            'title' => 'prestasiku',
            'presma' => $presma
        ]);
    }
    public function create()
    {
        return view('dashboard.mahasiswa.create', [
            'title' => "Pengajuan",
            'predikat' => Predikat::get(),
            'tingkat' => Tingkat::get(),
            'bidang' => Bidang::get()
        ]);
    }
    public function store(PresmaRequest $request)
    {
        // dd($request->sertifikat_bukti->extension());
        $mahasiswa = Mahasiswa::join('users', 'mahasiswa.user_id', '=', 'users.id')->select('users.id')->whereIn('nim', $request->kelompok)->get()->toArray();
        // dd($mahasiswa);
        if (count($mahasiswa) < count($request->kelompok)) {
            return back()->with('danger', 'Terdapat kelompok yang memiliki NIM salah! Silakan periksa kembali NIM kelompok anda');
        }
        $presma = presma::create([
            'tingkat_id' => $request->tingkat,
            'bidang_id' => $request->bidang,
            'predikat_id' => $request->predikat,
            'nama_kegiatan' => $request->nama_kegiatan,
            'tanggal' => $request->tanggal,
            'pembimbing' => $request->pembimbing,
            'penyelenggara' => $request->penyelenggara,
            'akademik' => $request->akademik == "true" ? true : false,
            'tempat' => $request->tempat,
            'jumlah_peserta' => $request->jumlah_peserta,
            'jumlah_perguruan_tinggi' => $request->jumlah_perguruan_tinggi,
            'jumlah_negara' => $request->jumlah_negara,
            'deskripsi_kegiatan' => $request->deskripsi,
            'link' => $request->link,
            'status' => 'pengajuan'
        ]);
        if ($request->has('foto_bukti')) {
            foreach ($request->foto_bukti as $bukti) {
                $foto = "fotobukti-" . Str::random(5) . time() . '.' . $bukti->extension();
                $send = $bukti->storeAs('public/bukti/foto/', $foto);
                $path = Storage::url($send);
                FilePresma::create([
                    'presma_id' => $presma->id,
                    'path_file' => $path
                ]);
            }
        }
        if ($request->has('sertifikat_bukti')) {
            $foto = "sertifikat-" . Str::random(5) . time() . '.' . $request->sertifikat_bukti->extension();
            $send = $request->sertifikat_bukti->storeAs('public/bukti/sertifikat/', $foto);
            $path = Storage::url($send);
            FilePresma::create([
                'presma_id' => $presma->id,
                'path_file' => $path
            ]);
        }
        foreach ($mahasiswa as $m) {
            DB::insert('INSERT INTO presma_users (presma_id, users_id) values (?, ?)', [$presma->id, $m['id']]);
        }
        return redirect('/mahasiswa/presma')->with('success', 'New Presma has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(presma $presma)
    {
        return view('dashboard.mahasiswa.show', [
            'title' => 'detail',
            'presma' => $presma
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(presma $presma)
    {
        return view('dashboard.mahasiswa.edit', [
            'title' => 'Edit',
            'presma' => $presma,
            'predikat' => Predikat::get(),
            'tingkat' => Tingkat::get(),
            'bidang' => Bidang::get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
