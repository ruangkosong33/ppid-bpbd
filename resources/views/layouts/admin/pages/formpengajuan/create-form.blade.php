@extends('layouts.admin.master.b-master')

@section('title', 'Data Formulir Pengajuan Keberatan Informasi')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active"><a href="{{route('formpengajuan.index')}}">Formulir Pengajuan</a></li>
    <li class="breadcrumb-item active">Tambah Data</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <form action="{{route('formpengajuan.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <x-card>

                    <h4><strong>Identitas Pemohon</strong></h4>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="name">Nama Lengkap</label>
                                <input type="text" class="form-control @error('name') ?? is-invalid @enderror" name="name" placeholder="Nama Lengkap Anda">

                                @error('name')
                                    <span class="invalid-feedback">{{$message}}</span>
                                @enderror

                            </div>

                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="email">E-Mail</label>
                                <input type="email" class="form-control @error('email') ?? is-invalid @enderror" name="email" placeholder="E-Mail">

                                @error('email')
                                    <span class="invalid-feedback">{{$message}}</span>
                                @enderror

                            </div>

                        </div>

                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="ktp">Nomor KTP</label>
                                <input type="number" class="form-control @error('ktp') ?? is-invalid @enderror" name="ktp" placeholder="Nomor Kartu Tanda Penduduk">

                                @error('ktp')
                                    <span class="invalid-feedback">{{$message}}</span>
                                @enderror

                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="image">Foto KTP</label>
                                <input type="file" class="form-control @error('image') ?? is-invalid @enderror" id="image" name="image"
                                onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">

                                @error('image')
                                <span class="invalid-feedback">{{$message}}</span>
                                @enderror

                            </div>

                            <div class="mt-3"><img src="" id="output" width="150"></div>

                        </div>

                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control @error('alamat') ?? is-invalid @enderror" name="alamat" placeholder="Alamat Lengkap">

                                @error('alamat')
                                    <span class="invalid-feedback">{{$message}}</span>
                                @enderror

                            </div>

                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="phone">Nomor Telepon/HP</label>
                                <input type="number" class="form-control @error('phone') ?? is-invalid @enderror" name="phone" placeholder="Nomor Telepon">

                                @error('phone')
                                    <span class="invalid-feedback">{{$message}}</span>
                                @enderror

                            </div>

                        </div>

                    </div>

                    <br>

                    <h4><strong>Data Pemohon</strong></h4>

                    <div class="form-group">
                        <label for="rincian">Rincian Informasi</label>

                        <textarea class="form-control @error('rincian') is-invalid @enderror" name="rincian" placeholder="Rincian Informasi Yang Di Minta">{{ old('rincian') }}</textarea>

                        @error('rincian')
                        <span class="invalid-feedback">{{$message}}</span>
                        @enderror

                    </div>

                    <div class="form-group">
                        <label for="keterangan">Tambahkan Keterangan Atas Keberatan</label>

                        <textarea class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" placeholder="Deskripsi Keterangan Keberatan">{{ old('keterangan') }}</textarea>

                        @error('keterangan')
                        <span class="invalid-feedback">{{$message}}</span>
                        @enderror

                    </div>

                    <div class="form-group">
                        <label for="salinan">Cara Mendapatkan Salinan Informasi</label>
                        <br>
                        <input type="radio" name="salinan" value="1" style="display: inline-block;">Permohonan Informasi Di Tolak
                        <br>
                        <input type="radio" name="salinan" value="2" style="display: inline-block;">Informasi Berkala Tidak Di Sediakan
                        <br>
                        <input type="radio" name="salinan" value="3" style="display: inline-block;">Permintaan Informasi Tidak Di Tanggapi
                        <br>
                        <input type="radio" name="salinan" value="4" style="display: inline-block;">Permintaan Informasi Di Tanggapi Tidak Sebagaimana Yang Di Minta
                        <br>
                        <input type="radio" name="salinan" value="5" style="display: inline-block;">Permintaan Informasi Tidak Di Penuhi
                        <br>
                        <input type="radio" name="salinan" value="6" style="display: inline-block;">Biaya Yang Di Kenakan Tidak Wajar
                        <br>
                        <input type="radio" name="salinan" value="7" style="display: inline-block;">Informasi Yang Di Sampaikan Melebihi Jangka Waktu Yang Di Tentukan
                        <br>
                    </div>

                    <x-slot name="footer">
                        <button type="reset" class="btn btn-dark">Reset</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </x-slot>

                </x-card>
            </form>
        </div>
    </div>
@endsection
