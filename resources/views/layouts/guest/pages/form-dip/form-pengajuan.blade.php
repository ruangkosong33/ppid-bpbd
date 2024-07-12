@extends('layouts.guest.master.f-master')

@section('content')

@include('components.breadcrumb', ['title' => 'Formulir Pengajuan Keberatan Informasi'])

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-11">
            <div class="services-widget">
                <h3 class="sw-title">Silahkan Lengkapi Identitas Anda Dengan Benar & Sesuai</h3>
                <div class="services-widget-form">
                    <form action="{{route('form.pengajuan')}}" method="post" enctype="multipart/form-data">
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
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email"
                                    value="{{ old('email') }}"placeholder="Alamat Email*" style="border-radius: 20px;">

                                    @error('email')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror

                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-grp mb-3">
                                    <input type="number" class="form-control @error('ktp') is-invalid @enderror" name="ktp" id="ktp"
                                    placeholder="Nomor Kartu Tanda Penduduk*" value="{{ old('ktp') }}" style="border-radius: 20px;">

                                    @error('ktp')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror

                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-grp mb-3">
                                    <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" id="image" style="border-radius: 20px;">
                                    Upload KTP*

                                    @error('image')
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
                                    <input type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone"
                                    value="{{ old('phone') }}"placeholder="No Handphone*" style="border-radius: 20px;">

                                    @error('phone')
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
                                    <textarea name="keterangan" id="message" cols="30" rows="3" class="form-control style-white @error('keterangan') is-invalid @enderror" placeholder="Tambahkan Keterangan Atas Keberatan*" style="border-radius: 20px;">{{ old('keterangan') }}</textarea>

                                    @error('keterangan')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror

                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <h5>Cara Mendapatkan Salinan Informasi</h5>
                                    <div>
                                        <input type="radio"id="langsung" name="salinan"
                                            value="1">
                                        <label for="langsung">Permintaan Informasi Di Tolak</label>
                                    </div>
                                    <div>
                                        <input type="radio" id="faksimili" name="salinan"
                                            value="2">
                                        <label for="faksimili">Informasi Berkala Tidak Di Sediakan</label>
                                    </div>
                                    <div>
                                        <input type="radio" id="emailRadio" name="salinan"
                                            value="3">
                                        <label for="emailRadio">Permintaan Informasi Tidak Di Tanggapi</label>
                                    </div>
                                    <div>
                                        <input type="radio" id="emailRadio" name="salinan"
                                            value="4">
                                        <label for="emailRadio">Permintaan Informasi Tidak Di Tanggapi Sebagaiamana Yang Di Minta</label>
                                    </div>
                                    <div>
                                        <input type="radio" id="emailRadio" name="salinan"
                                            value="5">
                                        <label for="emailRadio">Permintaan Infomrasi Tidak Di Penuhi</label>
                                    </div>
                                    <div>
                                        <input type="radio" id="emailRadio" name="salinan"
                                            value="6">
                                        <label for="emailRadio">Biaya Yang Di Kenakan Tidak Wajar</label>
                                    </div>
                                    <div>
                                        <input type="radio" id="emailRadio" name="salinan"
                                            value="7">
                                        <label for="emailRadio">Informasi Yang Di Sampaikan Melebihi Jangka Waktu Yang Di Tentukan</label>
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
