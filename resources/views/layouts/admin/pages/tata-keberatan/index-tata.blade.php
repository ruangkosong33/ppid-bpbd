@extends('layouts.admin.master.b-master')

@section('title', 'Data Tata Cata Keberatan Informasi')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Tata Keberatan Informasi</li>
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <x-card>
                <x-slot name="header">
                    @if($tatakeberatan->isEmpty())
                        <a href="{{route('tatakeberatan.create')}}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</a>
                    @else
                    @foreach ($tatakeberatan as $tatakeberatans)
                        <a href="{{route('tatakeberatan.edit', $tatakeberatans->id)}}" class="btn btn-warning"><i class="fas fa-plus-circle"></i> Edit</a>
                    @endforeach
                    @endif
                </x-slot>

                <x-table>
                    <x-slot name="thead">
                        <th>Judul</th>
                        <th>Deskripsi</th>
                    </x-slot>
                        @foreach ($tatakeberatan as $tatakeberatans)
                        <tr>
                            <td width="38%">Sub Judul</td>
                            <td>{{$tatakeberatans->title}}</td>
                        </tr>
                        <tr>
                            <td width="38%">Deskripsi</td>
                            <td>{!!$tatakeberatans->body!!}</td>
                        </tr>
                        <tr>
                            <td width="38%">Gambar</td>
                            <td>{{asset('storage/image-tata-keberatan/' . $tatakeberatans->image)}}</td>
                        </tr>
                        @endforeach
                </x-table>
            </x-card>
        </div>
    </div>

@endsection
