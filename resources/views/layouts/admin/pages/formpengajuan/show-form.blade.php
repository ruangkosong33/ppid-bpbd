@extends('layouts.admin.master.b-master')

@section('title', 'Data Formulir Pengajuan Keberatan Informasi Publik ')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active"><a href="{{route('formpengajuan.index')}}">Formulir Pengajuan</a></li>
    <li class="breadcrumb-item active">Detail Data</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <x-card>
                <x-table>
                    <tr>
                        <td width="30%">Nama Pemohon</td>
                        <td>{{$formpengajuan->name}}</td>
                    </tr>
                    <tr>
                        <td width="30%">Email</td>
                        <td>{{$formpengajuan->email}}</td>
                    </tr>
                    <tr>
                        <td width="30%">No KTP</td>
                        <td>{{$formpengajuan->ktp}}</td>
                    </tr>
                    <tr>
                        <td width="30%">Foto KTP</td>
                        <td><img src="{{asset('storage/image-ktp/' . $formpengajuan->image)}}" width="650px"></td>
                    </tr>
                    <tr>
                        <td width="30%">Alamat</td>
                        <td>{{$formpengajuan->alamat}}</td>
                    </tr>
                    <tr>
                        <td width="30%">HP/Telepon</td>
                        <td>{{$formpengajuan->phone}}</td>
                    </tr>
                    <tr>
                        <td width="30%">Rincian Informasi</td>
                        <td>{!!$formpengajuan->rincian!!}</td>
                    </tr>
                    <tr>
                        <td width="30%">Keterangan Keberatan</td>
                        <td>{!!$formpengajuan->keterangan!!}</td>
                    </tr>
                    <tr>
                        <td width="30%">Salinan Informasi</td>
                        <td>{!!$formpengajuan->salinan!!}</td>
                    </tr>
                </x-table>
            </x-card>
        </div>
    </div>
@endsection
