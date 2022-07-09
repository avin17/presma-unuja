{{-- {{ dd($presma[0]->users->mahasiswa) }} --}}
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
                                    <th>No</th>
                                    <th>Nama Kegiatan</th>
                                    <th>Predikat</th>
                                    <th>Tingkat</th>
                                    <th>Tanggal</th>
                                    <th>Kondisi</th>
                                    <th>Jumlah Anggota</th>
                                    <th>Menu</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($presma as $p)
                                    <tr>
                                        <td scope="row">{{ $loop->iteration }}</td>
                                        <td>{{ $p->nama_kegiatan }}</td>
                                        <td>{{ $p->predikat }}</td>
                                        <td>{{ $p->tingkat->tingkat }}</td>
                                        <td>{{ $p->tanggal }}</td>
                                        <td> <span class="badge-warning badge mr-2">Tahap Pengajuan</span></td>
                                        <td>
                                            @foreach ($p->users as $user)
                                                <p>{{ $user->mahasiswa->nama }}</p>
                                            @endforeach
                                        </td>
                                        <td>
                                            <a href="{{ $p->id }}" class="btn btn-info btn-sm">
                                                <span class="sr-only">Show</span>
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="{{ $p->id }}" class="btn btn-warning btn-sm">
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
