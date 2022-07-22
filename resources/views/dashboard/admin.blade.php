@extends('dashboard.layouts.main')

@section('container')
    <div class="block-header">
        <div class="row clearfix">
            <div class="col-lg-8">
                <h1 class=" mt-3">Hi {{ auth()->user()->nama }}</h1>
                <span>Welcomeback!</span>
            </div>
            <div class="col-lg-8 mt-3">
                <div class="card">
                    <div class="header">
                        <h2 class="pb-3">Halaman Dashboard For admin
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
