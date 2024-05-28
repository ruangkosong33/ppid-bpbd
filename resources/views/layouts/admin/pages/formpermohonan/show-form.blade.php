@extends('layouts.admin.master.b-master')

@section('title', 'Data Formulir Permohonan Informasi Publik')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active"><a href="{{route('formpermohonan.index')}}">Formulir Permohonan</a></li>
    <li class="breadcrumb-item active">Detail Data</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <x-card>
                <x-table>
                    <tr>
                        <td width="30%">Nama Pemohon</td>
                        <td>{{$formpermohonan->name}}</td>
                    </tr>
                    <tr>
                        <td width="30%">Kategori Permohonan</td>
                        <td>{{$formpermohonan->katdips->title}}</td>
                    </tr>
                    <tr>
                        <td width="30%">Alamat</td>
                        <td>{{$formpermohonan->alamat}}</td>
                    </tr>
                    <tr>
                        <td width="30%">Email</td>
                        <td>{{$formpermohonan->email}}</td>
                    </tr>
                    <tr>
                        <td width="30%">No Telepon</td>
                        <td>{{$formpermohonan->phone}}</td>
                    </tr>
                    <tr>
                        <td width="30%">Pekerjaan</td>
                        <td>{{$formpermohonan->pekerjaan}}</td>
                    </tr>
                    <tr>
                        <td width="30%">Rincian Informasi</td>
                        <td>{!!$formpermohonan->rincian!!}</td>
                    </tr>
                    <tr>
                        <td width="30%">Tujuan Penggunaan Informasi</td>
                        <td>{!!$formpermohonan->tujuan!!}</td>
                    </tr>
                    <tr>
                        <td width="30%">Cara Memperoleh Informasi</td>
                        <td>{!!$formpermohonan->memperoleh!!}</td>
                    </tr>
                    <tr>
                        <td width="30%">Mendapatkan Salinan Informasi</td>
                        <td>{!!$formpermohonan->mendapatkan!!}</td>
                    </tr>
                    <tr>
                        <td width="30%">Cara Mendapatkan Salinan Informasi</td>
                        <td>{!!$formpermohonan->salinan!!}</td>
                    </tr>
                </x-table>
            </x-card>
        </div>
    </div>
@endsection
