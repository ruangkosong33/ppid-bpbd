@extends('layouts.guest.master.f-master')

@section('title', 'Formulir Permohonan Informasi')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item"><a href="{{route('beranda')}}">Beranda</a></li>
    <li class="breadcrumb-item">Profil</li>
    <li class="breadcrumb-item active" aria-current="page">Formulir Permohonan Informasi</li>
@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-11">
            <div class="services-widget">
                <h3 class="sw-title">Silahkan Lengkapi Identitas Anda Dengan Benar & Sesuai</h3>
                <div class="services-widget-form">
                    <form action="{{route('form.permohonan')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-grp mb-3">
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                                    value="{{ old('name') }}"placeholder="Nama Lengkap Anda*" style="border-radius: 20px;">

                                    @error('name')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror

                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-grp mb-3">
                                    <select name="katdip_id" id="katdip_id" class="single-select nice-select form-select style-white @error('katdip_id') is-invalid @enderror"  style="border-radius: 20px;">

                                        <option disabled selected>Pilih Kategori Permohonan</option>
                                        @foreach ($categories as $katdips)
                                        <option value="{{$katdips->id}}">{{ $katdips->title }}</option>
                                        @endforeach

                                    </select>

                                    @error('katdip_id')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror

                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-grp mb-3">
                                    <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" id="alamat"
                                    placeholder="Alamat Lengkap*" value="{{ old('alamat') }}" style="border-radius: 20px;">

                                    @error('alamat')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror

                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-grp mb-3">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email"
                                    value="{{ old('email') }}"placeholder="Alamat Email*" style="border-radius: 20px;">

                                    @error('email')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror

                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-grp mb-3">
                                    <input type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone"
                                    value="{{ old('phone') }}"placeholder="No Handphone*" style="border-radius: 20px;">

                                    @error('phone')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror

                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-grp mb-3">
                                    <input type="text" class="form-control @error('pekerjaan') is-invalid @enderror" name="pekerjaan" id="pekerjaan"
                                    value="{{ old('pekerjaan') }}" placeholder="Pekerjaan*" style="border-radius: 20px;">

                                    @error('pekerjaan')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror

                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-grp mb-3">
                                    <textarea name="rincian" id="message" cols="30" rows="3" class="form-control style-white @error('rincian') is-invalid @enderror" placeholder="Deskripsi Rincian Informasi*" style="border-radius: 20px;">{{ old('rincian') }}</textarea>

                                    @error('rincian')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror

                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-grp mb-3 ">
                                    <textarea name="tujuan" id="message" cols="30" rows="3" class="form-control style-white @error('tujuan') is-invalid @enderror" placeholder="Tujuan Penggunaan Informasi*" style="border-radius: 20px;">{{ old('tujuan') }}</textarea>

                                    @error('tujuan')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror

                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Cara Memperoleh Informasi</h5>
                                    <div>
                                        <input type="radio"id="langsung" name="memperoleh"
                                            value="1">
                                        <label for="langsung">Melihat</label>
                                    </div>
                                    <div>
                                        <input type="radio" id="faksimili" name="memperoleh"
                                            value="2">
                                        <label for="faksimili">Membaca</label>
                                    </div>
                                    <div>
                                        <input type="radio" id="emailRadio" name="memperoleh"
                                            value="3">
                                        <label for="emailRadio">Mendengarkan</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Mendapatkan Salinan Informasi</h5>
                                    <div>
                                        <input type="radio"id="langsung" name="mendapatkan"
                                            value="1">
                                        <label for="langsung">Sofcopy</label>
                                    </div>
                                    <div>
                                        <input type="radio" id="faksimili" name="mendapatkan"
                                            value="2">
                                        <label for="faksimili">Hardcopy</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Cara Mendapatkan Salinan Informasi</h5>
                                    <div>
                                        <input type="radio"id="langsung" name="salinan"
                                            value="1">
                                        <label for="langsung">Mengambil Langsung</label>
                                    </div>
                                    <div>
                                        <input type="radio" id="faksimili" name="salinan"
                                            value="2">
                                        <label for="faksimili">faksimili</label>
                                    </div>
                                    <div>
                                        <input type="radio" id="email" name="salinan"
                                            value="3">
                                        <label for="email">Email</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                        
                        <br>
                        {!! NoCaptcha::display() !!}
                        {!! NoCaptcha::renderJs() !!}
                        <br>

                        <div class="d-flex justify-content-center align-items-center flex-column">
                            <button type="submit" class="btn btn-primary btn-sm mt-3">Kirim Formulir</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
