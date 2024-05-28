@extends('layouts.admin.master.b-master')

@section('title', 'Data Formulir Permohonan Informasi Publik')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active"><a href="{{route('formpermohonan.index')}}">Formulir Permohonan</a></li>
    <li class="breadcrumb-item active">Edit Data</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <form action="{{route('formpermohonan.update', $formpermohonan->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <x-card>

                    <h4><strong>Identitas Pemohon</strong></h4>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="name">Nama Lengkap</label>
                                <input type="text" class="form-control @error('name') ?? is-invalid @enderror" name="name" placeholder="Nama Lengkap Anda"
                                value="{{ old('name') ?? $formpermohonan->name }}">

                                @error('name')
                                    <span class="invalid-feedback">{{$message}}</span>
                                @enderror

                            </div>

                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="katdip_id">Kategori</label>

                                <select name="katdip_id" class="form-control @error('katdip_id') is-invalid @enderror">
                                    <option disabled selected>--Pilih--</option>
                                    @foreach ($katdip as $katdips)
                                      @if($katdips->id == $formpermohonan->katdip_id)
                                      <option value={{$katdips->id}} selected='selected'>{{$katdips->title}}</option>
                                      @endif
                                    @endforeach
                                </select>

                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control @error('alamat') ?? is-invalid @enderror" name="alamat" placeholder="Alamat Lengkap"
                                value="{{ old('alamat') ?? $formpermohonan->alamat }}">

                                @error('alamat')
                                    <span class="invalid-feedback">{{$message}}</span>
                                @enderror

                            </div>

                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="email">E-Mail</label>
                                <input type="email" class="form-control @error('email') ?? is-invalid @enderror" name="email" placeholder="E-Mail"
                                value="{{ old('email') ?? $formpermohonan->email }}">

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
                                <input type="number" class="form-control @error('phone') ?? is-invalid @enderror" name="phone" placeholder="Nomor Telepon"
                                value="{{ old('phone') ?? $formpermohonan->phone }}">

                                @error('phone')
                                    <span class="invalid-feedback">{{$message}}</span>
                                @enderror

                            </div>

                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="pekerjaan">Pekerjaan</label>
                                <input type="text" class="form-control @error('pekerjaan') ?? is-invalid @enderror" name="pekerjaan" placeholder="Pekerjaan"
                                value="{{ old('pekerjaan') ?? $formpermohonan->pekerjaan }}">

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

                        <textarea class="form-control @error('rincian') is-invalid @enderror" name="rincian" placeholder="Deskripsi Rincian Informasi">{{ old('rincian', $formpermohonan->rincian ?? '') }}</textarea>

                        @error('rincian')
                        <span class="invalid-feedback">{{$message}}</span>
                        @enderror

                    </div>

                    <div class="form-group">
                        <label for="tujuan">Tujuan Penggunaan Informasi</label>

                        <textarea class="form-control @error('tujuan') is-invalid @enderror" name="tujuan" placeholder="Deskripsi Tujuan Penggunaan Informasi">{{ old('tujuan', $formpermohonan->tujuan ?? '') }}</textarea>

                        @error('tujuan')
                        <span class="invalid-feedback">{{$message}}</span>
                        @enderror

                    </div>

                    <div class="form-group">
                        <label for="obtaion">Cara Memperoleh Informasi</label>
                        <br>
                        <input type="radio" name="memperoleh" value="1" {{ $formpermohonan->memperoleh == '1' ? 'checked' : '' }}> Melihat
                        <input type="radio" name="memperoleh" value="2" {{ $formpermohonan->memperoleh == '2' ? 'checked' : '' }}> Membaca
                        <input type="radio" name="memperoleh" value="3" {{ $formpermohonan->memperoleh == '3' ? 'checked' : '' }}> Mendengarkan
                        <input type="radio" name="memperoleh" value="4" {{ $formpermohonan->memperoleh == '4' ? 'checked' : '' }}> Mencatat

                    </div>


                    <div class="form-group">
                        <label for="copy">Mendapatkan Salinan Informasi</label>
                        <br>
                        <input type="radio" name="mendapatkan" value="1"  {{ $formpermohonan->mendapatkan == '1' ? 'checked' : '' }}>Softcopy
                        <input type="radio" name="mendapatkan" value="2"  {{ $formpermohonan->mendapatkan == '2' ? 'checked' : '' }}>Hardcopy

                    </div>

                    <div class="form-group">
                        <label for="obation">Cara Mendapatkan Salinan Informasi</label>
                        <br>
                        <input type="radio" name="salinan" value="1"  {{ $formpermohonan->salinan == '1' ? 'checked' : '' }}>Mengambil Langsung
                        <input type="radio" name="salinan" value="2"  {{ $formpermohonan->salinan == '2' ? 'checked' : '' }}>Faksimili
                        <input type="radio" name="salinan" value="3"  {{ $formpermohonan->salinan == '3' ? 'checked' : '' }}>Email

                    </div>

                    <x-slot name="footer">
                        <button type="button" onclick="history.back()" class="btn btn-dark" >Kembali</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </x-slot>

                </x-card>
            </form>
        </div>
    </div>
@endsection
