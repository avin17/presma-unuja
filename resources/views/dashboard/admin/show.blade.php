{{ dd($presma->users) }}
@extends('dashboard.layouts.main')

@section('container')
    <h3>Detail Prestasi</h3>

    <div class="row clearfix ">
        <div class="col-md-12">
            <div class="card">
                <div class="row justify-content-center mt-3">
                    <div class="col-md-8">
                        <div class="text-center">
                            <h3 class="mb-5">{{ $presma->nama_kegiatan }}</h3>
                            <img class="w-50" src="{{ asset('assets/landing/images/blog/1.jpg') }}" alt="">
                            <p class="mt-5">{{ $presma->deskripsi_kegiatan }}.</p>
                            <strong>Click here to</strong>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="table-responsive">
                            <table class="table table-striped ">
                                <tbody>
                                    <tr>
                                        <th scope="row" class="text-right">Nama Kegiatan</th>
                                        <td class="text-wrap">{{ $presma->nama_kegiatan }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="text-right">Anggota Kelompok </th>
                                        <td>
                                            <ul class="mb-0 pl-0">
                                                @forelse ($presma->users as $user)
                                                    <li style="list-style:none">
                                                        {{ $user->mahasiswa->nama }}
                                                    @empty
                                                    </li>
                                                @endforelse
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="text-right">Predikat</th>
                                        <td>{{ $presma->predikat->predikat }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"class="text-right">Tingkat</th>
                                        <td>{{ $presma->tingkat->tingkat }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="text-right">Bidang</th>
                                        <td>{{ $presma->bidang->bidang }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="text-right">Pembimbing</th>
                                        <td>{{ $presma->pembimbing }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="text-right">Penyelenggara</th>
                                        <td>{{ $presma->penyelenggara }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="text-right">Akademik</th>
                                        <td>{{ $presma->akademik ? 'Akademik' : 'Non Akademik' }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="text-right">tempat</th>
                                        <td class="text-wrap">{{ $presma->tempat }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="text-right">Jumlah Peserta</th>
                                        <td>{{ $presma->jumlah_peserta }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="text-right">Jumlah Perguruan Tinggi</th>
                                        <td>{{ $presma->jumlah_perguruan_tinggi }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="text-right">Jumlah Negara</th>
                                        <td>{{ $presma->jumlah_negara }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="text-right">URL/Link Informasi/Link Sosmed
                                        </th>
                                        <td class="text-wrap">{{ $presma->link }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="text-right">Deskripsi Kegiatan</th>
                                        <td style="width: 4rem" class="text-wrap">{{ $presma->deskripsi_kegiatan }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
