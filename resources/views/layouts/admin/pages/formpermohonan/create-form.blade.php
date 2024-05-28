@extends('layouts.admin.master.b-master')

@section('title', 'Data Formulir Permohonan Informasi Publik')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active"><a href="{{route('formpermohonan.index')}}">Formulir Permohonan</a></li>
    <li class="breadcrumb-item active">Tambah Data</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <form action="{{route('formpermohonan.store')}}" method="POST" enctype="multipart/form-data">
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
                                <label for="katdip_id">Kategori Permohonan</label>

                                <select name="katdip_id" class="form-control @error('katdip_id') is-invalid @enderror">

                                    <option disabled selected>--Pilih--</option>
                                        @foreach ($katdip as $katdips)
                                    <option value={{$katdips->id}}>{{$katdips->title}}</option>
                                        @endforeach

                                </select>

                                @error('katdip_id')
                                <span class="invalid-feedback">{{$message}}</span>
                                @enderror

                            </div>
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
                                <label for="phone">Nomor Telepon</label>
                                <input type="number" class="form-control @error('phone') ?? is-invalid @enderror" name="phone" placeholder="Nomor Telepon">

                                @error('phone')
                                    <span class="invalid-feedback">{{$message}}</span>
                                @enderror

                            </div>

                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="pekerjaan">Pekerjaan</label>
                                <input type="text" class="form-control @error('pekerjaan') ?? is-invalid @enderror" name="pekerjaan" placeholder="Pekerjaan">

                                @error('pekerjaan')
                                    <span class="invalid-feedback">{{$message}}</span>
                                @enderror

                            </div>
                        </div>

                    </div>

                    <br>

                    <h4><strong>Data Pemohon</strong></h4>

                    <div class="form-group">
                        <label for="rincian">Rincian Informasi</label>

                        <textarea class="form-control @error('rincian') is-invalid @enderror" name="rincian" placeholder="Deskripsi Rincian Informasi">{{ old('rincian') }}</textarea>

                        @error('rincian')
                        <span class="invalid-feedback">{{$message}}</span>
                        @enderror

                    </div>

                    <div class="form-group">
                        <label for="tujuan">Tujuan Penggunaan Informasi</label>

                        <textarea class="form-control @error('tujuan') is-invalid @enderror" name="tujuan" placeholder="Deskripsi Tujuan Penggunaan Informasi">{{ old('tujuan') }}</textarea>

                        @error('tujuan')
                        <span class="invalid-feedback">{{$message}}</span>
                        @enderror

                    </div>

                    <div class="form-group">
                        <label for="memperoleh">Cara Memperoleh Informasi</label>
                        <br>
                        <input type="radio" name="memperoleh" value="1">Melihat
                        <input type="radio" name="memperoleh" value="2">Membaca
                        <input type="radio" name="memperoleh" value="3">Mendengarkan
                        <input type="radio" name="memperoleh" value="4">Mencatat

                    </div>

                    <div class="form-group">
                        <label for="mendapatkan">Mendapatkan Salinan Informasi</label>
                        <br>
                        <input type="radio" name="mendapatkan" value="1">Softcopy
                        <input type="radio" name="mendapatkan" value="2">Hardcopy
                    </div>

                    <div class="form-group">
                        <label for="salinan">Cara Mendapatkan Salinan Informasi</label>
                        <br>
                        <input type="radio" name="salinan" value="1">Mengambil Langsung
                        <input type="radio" name="salinan" value="2">Faksimili
                        <input type="radio" name="salinan" value="3">Email

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
