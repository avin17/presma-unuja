@extends('dashboard.layouts.main')

@section('container')
    {{-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}
    <div class="row clearfix">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h2>Pengajuan Form Prestasi Mahasiswa</h2>
                    <ul class="header-dropdown dropdown">

                        <li><a href="javascript:void(0);" class="full-screen"><i class="fa fa-expand"></i></a></li>
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false"></a>
                            <ul class="dropdown-menu theme-bg gradient">
                                <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-eye"></i> View
                                        Details</a></li>
                                <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-share-alt"></i>
                                        Share</a></li>
                                <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-copy"></i> Copy to</a>
                                </li>
                                <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-folder"></i> Move to</a>
                                </li>
                                <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-edit"></i> Rename</a>
                                </li>
                                <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-trash"></i> Delete</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="body wizard_validation" id="formwizard">
                    <form id="wizard_with_validation" method="post" action="{{ route('mahasiswa.presma.store') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <h3>Kegiatan</h3>
                        <fieldset>
                            <div class="row clearfix">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label for="nama_kegitan" class="col-sm-4 col-form-label">Nama Kegitan</label>
                                        <div class="col-sm-8">
                                            <input type="text"
                                                class="form-control @error('nama_kegiatan') is-invalid @enderror"
                                                id="nama_kegitan" name="nama_kegiatan" placeholder="Nama Kegiatan" autofocus
                                                value="{{ old('nama_kegiatan') }}">
                                            @error('nama_kegiatan')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group
                                                row">
                                        <label for="tanggal" class="col-sm-4 col-form-label">Tanggal
                                            kegiatan</label>
                                        <div class="col-sm-8">
                                            <input type="date"
                                                class="form-control @error('tanggal') is-invalid @enderror" id="tanggal"
                                                name="tanggal" value="{{ old('tanggal') }}">
                                            @error('tanggal')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label" for="predikat">Predikat</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" id="predikat" name="predikat">
                                                @foreach ($predikat as $pr)
                                                    @if (old('predikat') == $pr->id)
                                                        <option value="{{ $pr->id }}" selected>{{ $pr->predikat }}
                                                        </option>
                                                    @else
                                                        <option value="{{ $pr->id }}">{{ $pr->predikat }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label" for="tingkat">Tingkat</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" id="tingkat" name="tingkat">
                                                @foreach ($tingkat as $t)
                                                    @if (old('tingkat') == $t->id)
                                                        <option value="{{ $t->id }}" selected>{{ $t->tingkat }}
                                                        </option>
                                                    @else
                                                        <option value="{{ $t->id }}">{{ $t->tingkat }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>

                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label" for="bidang">Bidang</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" id="bidang" name="bidang">
                                                @foreach ($bidang as $b)
                                                    @if (old('bidang') == $b->id)
                                                        <option value="{{ $b->id }}" selected>{{ $b->bidang }}
                                                        </option>
                                                    @else
                                                        <option value="{{ $b->id }}">{{ $b->bidang }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="pembimbing" class="col-sm-4 col-form-label">Pembimbing</label>
                                        <div class="col-sm-8">
                                            <input type="text"
                                                class="form-control @error('pembimbing') is-invalid @enderror"
                                                id="pembimbing" placeholder="Pembimbing" name="pembimbing"
                                                value="{{ old('pembimbing') }}">
                                            @error('pembimbing')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group
                                                row">
                                        <label for="penyelenggara" class="col-sm-4 col-form-label">Penyelenggara</label>
                                        <div class="col-sm-8">
                                            <input type="text"
                                                class="form-control @error('penyelenggara') is-invalid @enderror"
                                                id="penyelenggara" placeholder="Penyelenggara" name="penyelenggara"
                                                value="{{ old('penyelenggara') }}">
                                            @error('penyelenggara')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="tempat" class="col-sm-4 col-form-label">Tempat</label>
                                        <div class="col-sm-8">
                                            <input type="text"
                                                class="form-control @error('tempat') is-invalid @enderror" id="tempat"
                                                placeholder="Tempat" autofocus name="tempat"
                                                value="{{ old('tempat') }}">
                                            @error('tempat')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jumlah_peserta" class="col-sm-4 col-form-label">
                                            Jumlah Peserta
                                        </label>
                                        <div class="col-sm-8">
                                            <input type="number"
                                                class="form-control @error('jumlah_peserta') is-invalid @enderror"
                                                id="jumlah_peserta" placeholder="Jumlah Peserta" name="jumlah_peserta"
                                                value="{{ old('jumlah_peserta') }}">
                                            @error('jumlah_peserta')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jumlah perguruan tinggi" class="col-sm-4 col-form-label">
                                            Jumlah Perguruan Tinggi
                                        </label>
                                        <div class="col-sm-8">
                                            <input type="number"
                                                class="form-control @error('jumlah_perguruan_tinggi') is-invalid @enderror"
                                                id="jumlah perguruan tinggi" placeholder="Jumlah Perguruan Tinggi"
                                                name="jumlah_perguruan_tinggi"
                                                value="{{ old('jumlah_perguruan_tinggi') }}">
                                            @error('jumlah_perguruan_tinggi')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jumlah negara" class="col-sm-4 col-form-label">Jumlah
                                            Negara</label>
                                        <div class="col-sm-8">
                                            <input type="number"
                                                class="form-control @error('jumlah_negara') is-invalid @enderror"
                                                id="jumlah negara" placeholder="Jumlah Negara" name="jumlah_negara"
                                                value="{{ old('jumlah_negara') }}">
                                            @error('jumlah_negara')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="akademik" class="col-sm-4 col-form-label">Jenis Kegiatan</label>
                                        <div class="col-sm-8">
                                            <select name="akademik" id="akademik" class="form-control">
                                                <option value="true">Akademik</option>
                                                <option value="false">Non-Akademik</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Deskripsi" class="col-sm-4 col-form-label">Deskripsi</label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" id="Deskripsi" rows="3" name="deskripsi">{{ old('deskripsi') }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tempat" class="col-sm-4 col-form-label">Bukti (Berupa
                                            link)</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control @error('link') is-invalid @enderror"
                                                id="tempat" placeholder="link" name="link"
                                                value="{{ old('link') }}">
                                            @error('link')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label" for="exampleFormControlTextarea1">
                                            Bukti Mengikuti Lomba:
                                        </label>
                                        <div class="col-sm-6">
                                            <input type="file" multiple
                                                class="dropify form-control @error('foto_bukti[]') is-invalid @enderror"
                                                name="foto_bukti[]">
                                        </div>
                                    </div>
                                    <div class="pl-8 font-italic">
                                        <small class="text-danger">
                                            Catatan <br>
                                            01. Bukti berupa foto mengikuti prestasi <br>
                                            02. Ukuran max 2Mb
                                        </small>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label" for="exampleFormControlTextarea1">
                                            Bukti Sertifikat/Piaagam :
                                        </label>
                                        <div class="col-sm-6">
                                            <input type="file" class="dropify form-control" name="sertifikat_bukti">
                                        </div>
                                    </div>
                                    <div class="pl-8 font-italic">
                                        <small class="text-danger">
                                            Catatan <br>
                                            01. Bukti berupa scan piagam/sertifikat yang telah diperoleh <br>
                                        </small>
                                    </div>
                                </div>

                            </div>
                        </fieldset>
                        <h3>Anggota</h3>
                        <fieldset>
                            <p>Masukkan NIM Anggota lomba</p>
                            <div class="col-md-6">
                                <table class="kelompok">
                                    <tr>
                                        <td>
                                            <input type="number" class="form-control is-invalid" id="kelompok"
                                                name="kelompok[]">
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-info ml-3" id="add_btn">
                                                <i class="fa fa-plus-square"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </table>
                            </div>

                        </fieldset>
                        <h3>Terms Conditions - Finish</h3>
                        <fieldset>
                            <div class="form-group">
                                <div class="fancy-checkbox">
                                    <label>
                                        <input type="checkbox" name="acceptTerms">
                                        <span>
                                            I agree with the Terms and Conditions.
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('css')
    <!-- FORM WIZARD -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/jquery-steps/jquery.steps.css') }}">
@endpush
@push('js')
    <!-- Vedor js file and create bundle with grunt  -->
    <script src="{{ asset('assets/vendor/jquery-validation/jquery.validate.js') }}"></script><!-- Jquery Validation Plugin Css -->
    <script src="{{ asset('assets/vendor/jquery-steps/jquery.steps.js') }}"></script><!-- JQuery Steps Plugin Js -->
    <script src="{{ asset('assets/js/pages/forms/form-wizard.js') }}"></script>
    <script>
        $(document).on('click', '#add_btn', function() {
            var html = '';
            html += '<tr>'
            html +=
                '<td><input type="number" class="form-control mt-1" id="kelompok" name="kelompok[]"></td>';
            html +=
                '<td><button type="button" class="btn btn-danger mt-1 ml-3" id="remove_btn"><i class="fa fa-minus-square"></i></button></td>';
            html += '</tr>';
            $('.kelompok').append(html)
        });
        $(document).on('click', '#remove_btn', function() {
            $(this).closest('tr').remove();
        })
    </script>
@endpush
