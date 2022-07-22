{{-- {{ dd($presma) }} --}}
@extends('dashboard.layouts.main')

@section('container')
    {{-- @dd($presma[0]->users[0]->mahasiswa) --}}
    <div class="row clearfix">
        <div class="col-lg-12 mb-5">
            <div class="card">
                <div class="header">
                    <h2 class="text-center text-bold">Daftar Keseluruhan Prestasi Mahasiswa</h2>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th>No</th>
                                    <th class="text-center">Nim</th>
                                    <th class="text-center">Nama Kegiatan</th>
                                    <th>akademik</th>
                                    <th class="text-center">Tingkat</th>
                                    <th class="text-center">Bukti</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($presma as $p)
                                    <tr>
                                        <td scope="row">{{ $loop->iteration }}</td>
                                        <td class="text-wrap">
                                            <ul class="p-0 m-0">
                                                @foreach ($p->users as $user)
                                                    <li style="list-style:none">{{ $user->username }}</li>
                                                @endforeach
                                            </ul>
                                        </td>
                                        <td>{{ $p->nama_kegiatan }}</td>
                                        <td>{{ $p->akademik ? 'Akademik' : 'Non Akademik' }}</td>
                                        <td>{{ $p->tingkat->tingkat }}</td>
                                        <td>
                                            <ul class="p-0 m-0">
                                                @forelse ($p->file_presma as $bukti)
                                                    <li style="list-style: none">
                                                        <a href="{{ url($bukti->path_file) }}" target="__blank">Link Bukti
                                                            Kegiatan</a>
                                                    </li>
                                                @empty
                                                @endforelse
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="/presma/admin/{{ $p->id }}" class="btn btn-success btn-sm">
                                                <span class="sr-only">Show</span>
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="/presma/admin/{{ $p->id }}" class="btn btn-success btn-sm">
                                                <span class="sr-only">Show</span>
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="/dashboard/mahasiswa/{{ $p->id }}/edit"
                                                class="btn btn-warning btn-sm">
                                                <span class="sr-only">Edit</span>
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="{{ $p->id }}" class="btn btn-danger btn-sm">
                                                <span class="sr-only">Delete</span>
                                                <i class="fa fa-trash-o"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
