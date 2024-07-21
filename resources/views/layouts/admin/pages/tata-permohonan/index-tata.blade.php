@extends('layouts.admin.master.b-master')

@section('title', 'Data Tata Cata Permohonan Informasi')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Tata Permohonan Informasi</li>
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <x-card>
                <x-slot name="header">
                    @if($tatapermohonan->isEmpty())
                        <a href="{{route('tatakeberatan.create')}}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</a>
                    @else
                    @foreach ($tatapermohonan as $tatapermohonans)
                        <a href="{{route('tatapermohonan.edit', $tatapermohonans->id)}}" class="btn btn-warning"><i class="fas fa-plus-circle"></i> Edit</a>
                    @endforeach
                    @endif
                </x-slot>

                <x-table>
                    <x-slot name="thead">
                        <th>Judul</th>
                        <th>Deskripsi</th>
                    </x-slot>
                        @foreach ($tatapermohonan as $tatapermohonans)
                        <tr>
                            <td width="38%">Sub Judul</td>
                            <td>{{$tatapermohonans->title}}</td>
                        </tr>
                        <tr>
                            <td width="38%">Deskripsi</td>
                            <td>{!!$tatapermohonans->body!!}</td>
                        </tr>
                        <tr>
                            <td width="38%">Gambar</td>
                            <td>{{asset('storage/image-tata-permohonan/' . $tatapermohonans->image)}}</td>
                        </tr>
                        @endforeach
                </x-table>
            </x-card>
        </div>
    </div>

@endsection
