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
            'tgl_kegiatan' => 'required',
            'prestasi' => 'required',
            'tingkat' => 'required',
            'bidang' => 'required',
            'pembimbing' => 'required',
            'penyelenggara' => 'required',
            'tempat' => 'required',
            'jumlah_peserta' => 'required',
            'jumlah_perguruan_tinggi' => 'required',
            'jumlah_negara' => 'required',
            'deskripsi' => 'required',
            'link' => 'required',
            'bukti_file' => 'required',
            'kelompok' => 'required'
        ];
    }
}
