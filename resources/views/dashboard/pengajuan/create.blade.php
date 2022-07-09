@extends('dashboard.layouts.main')

@section('container')
    {{-- <div class="block-header">
    </div> --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
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
                    <form id="wizard_with_validation" method="post" action="{{ route('presma.store') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <h3>Kegiatan</h3>
                        <fieldset>
                            <div class="row clearfix">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label for="nama_kegitan" class="col-sm-4 col-form-label">Nama Kegitan</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="nama_kegitan"
                                                name="nama_kegiatan" placeholder="nama kegiatan" autofocus>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tgl_kegiatan" class="col-sm-4 col-form-label">Tanggal kegiatan</label>
                                        <div class="col-sm-8">
                                            <input type="date" class="form-control" id="tgl_kegiatan"
                                                name="tgl_kegiatan">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label" for="prestasi">Prestasi</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" id="prestasi" name="prestasi">
                                                <option>Juara I</option>
                                                <option>Juara II</option>
                                                <option>Juara III</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label" for="tingkat">Tingkat</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" id="tingkat" name="tingkat">
                                                <option>Nasional</option>
                                                <option>Internasional</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label" for="bidang">Bidang</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" id="bidang" name="bidang">
                                                <option>Teknologi</option>
                                                <option>Seni</option>
                                                <option>Keagamaan</option>
                                                <option>Bahasa</option>
                                                <option>Multimedia</option>
                                                <option>Olahraga</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="pembimbing" class="col-sm-4 col-form-label">Pembimbing</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="pembimbing"
                                                placeholder="Pembimbing" name="pembimbing">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="penyelenggara" class="col-sm-4 col-form-label">Penyelenggara</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="penyelenggara"
                                                placeholder="Penyelenggara" name="penyelenggara">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="tempat" class="col-sm-4 col-form-label">Tempat</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="tempat" placeholder="Tempat"
                                                autofocus name="tempat">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jumlah_peserta" class="col-sm-4 col-form-label">jumlah peserta</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="jumlah_peserta"
                                                placeholder="jumlah_peserta" name="jumlah_peserta">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jumlah perguruan tinggi" class="col-sm-4 col-form-label">jumlah
                                            perguruan
                                            tinggi</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="jumlah perguruan tinggi"
                                                placeholder="jumlah perguruan tinggi" name="jumlah_perguruan_tinggi">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jumlah negara" class="col-sm-4 col-form-label">jumlah negara</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="jumlah negara"
                                                placeholder="jumlah negara" name="jumlah_negara">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Deskripsi" class="col-sm-4 col-form-label">Deskripsi</label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" id="Deskripsi" rows="3" name="deskripsi"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tempat" class="col-sm-4 col-form-label">Bukti (Berupa link)</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="tempat" placeholder="link"
                                                name="link">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label" for="exampleFormControlTextarea1">Bukti
                                            :</label>
                                        <div class="col-sm-6">
                                            <input type="file" class="dropify form-control" name="bukti_file">
                                        </div>
                                    </div>
                                    <div class="pl-8 font-italic">
                                        <small class="text-danger">
                                            Catatan <br>
                                            01. Bukti berupa scan piagam/sertifikat yang telah diperoleh <br>
                                            02. Ukuran max 2Mb
                                        </small>
                                    </div>
                                    <div class="text-center">
                                        <button type="button"
                                            class="btn btn-primary theme-bg gradient btn-round mr-2">Simpan</button>
                                        <button type="button" class="btn btn-danger btn-round ml-2"> Batal </button>
                                    </div>
                                </div>

                            </div>
                        </fieldset>
                        <h3>Kelompok</h3>
                        <fieldset>
                            <p>Masukkan NIM Anggota Kelompok anda</p>
                            <div class="col-md-6">
                                <table class="kelompok">
                                    <tr>
                                        <td><input type="number" class="form-control" id="kelompok" name="kelompok[]">
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
                                    <label><input type="checkbox" name="acceptTerms"><span>I agree with the Terms and
                                            Conditions.</span></label>
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
