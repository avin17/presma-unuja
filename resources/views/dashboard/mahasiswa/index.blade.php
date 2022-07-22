{{-- {{ dd($presma) }} --}}
@extends('dashboard.layouts.main')

@section('container')
    {{-- @dd($presma[0]->users[0]->mahasiswa) --}}
    <div class="row clearfix">
        <div class="col-lg-12 mb-5">
            <div class="card">
                <div class="header">
                    <h2 class="text-center text-bold">Presatasi Yang Telah Dicapai</h2>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Kegiatan</th>
                                    <th class="text-center">Predikat</th>
                                    <th class="text-center">Tingkat</th>
                                    <th class="text-center">Tanggal</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Anggota</th>
                                    <th class="text-center">Bukti</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($presma as $p)
                                    <tr>
                                        <td scope="row">{{ $loop->iteration }}</td>
                                        <td class="text-wrap">{{ $p->nama_kegiatan }}</td>
                                        <td>{{ $p->predikat->predikat }}</td>
                                        <td>{{ $p->tingkat->tingkat }}</td>
                                        <td>{{ $p->tanggal }}</td>
                                        <td>
                                            <span
                                                class="badge-{{ $p->status == 'pengajuan' ? 'warning' : 'success' }} badge mr-2 text-capitalize">{{ $p->status }}</span>
                                        </td>
                                        <td class="text-center"> {{ $p->users->count() }} </td>
                                        <td>
                                            <ul class="p-0 m-0">
                                                @forelse ($p->file_presma as $bukti)
                                                    <li style="list-style:none">
                                                        <a href="{{ url($bukti->path_file) }}" target="__blank">Link Bukti
                                                            Kegiatan</a>
                                                    </li>
                                                @empty
                                                @endforelse
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="/mahasiswa/presma/{{ $p->id }}" class="btn btn-success btn-sm">
                                                <span class="sr-only">Show</span>
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            {{-- route berdasarkan name --}}
                                            <a href="{{ route('mahasiswa.presma.edit', $p->id) }}"
                                                class="btn btn-warning btn-sm">
                                                <span class="sr-only">Edit</span>
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="{{ $p->id }}" class="btn btn-danger btn-sm disabled">
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
