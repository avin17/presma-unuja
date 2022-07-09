<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PresmaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nama_kegiatan' => 'required',
            'tgl_kegiatan' => 'required|date',
            'prestasi' => 'required',
            'tingkat' => 'required',
            'bidang' => 'required',
            'pembimbing' => 'required',
            'penyelenggara' => 'required',
            'tempat' => 'required',
            'jumlah_peserta' => 'required|numeric|min:1',
            'jumlah_perguruan_tinggi' => 'required|numeric|min:1',
            'jumlah_negara' => 'required|numeric|min:1',
            'akademik' => 'required',
            'deskripsi' => 'required',
            'link' => 'required|url',
            'foto_bukti.*' => 'required|image|mimes:png,jpg,jpeg,svg,jfif,gif|max:2048',
            'sertifikat_bukti' => 'required',
            'kelompok.*' => 'required'
        ];
    }
}
