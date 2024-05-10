@extends('layouts.admin.master.b-master')

@section('title', 'Surat Keputusan')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Data Surat Keputusan</li>
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <x-card>
                <x-slot name="header">
                    @if($keputusan->isEmpty())
                        <a href="{{route('keputusan.create')}}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</a>
                    @else
                    @foreach ($keputusan as $keputusans)
                        <a href="{{route('keputusan.edit', $keputusans->id)}}" class="btn btn-warning"><i class="fas fa-plus-circle"></i> Edit</a>
                    @endforeach
                    @endif
                </x-slot>

                <x-table>
                    <x-slot name="thead">
                        <th>Judul</th>
                        <th>Deskripsi</th>
                    </x-slot>
                        @foreach ($keputusan as $keputusans)
                        <tr>
                            <td width="38%">Sub Judul</td>
                            <td>{{$keputusans->title}}</td>
                        </tr>
                        <tr>
                            <td width="38%">Deskripsi</td>
                            <td>{!!$keputusans->body!!}</td>
                        </tr>
                        <tr>
                            <td width="38%">File</td>
                            <td>{{asset('storage/file-keputusan/' . $keputusans->file)}}</td>
                        </tr>
                        @endforeach
                </x-table>
            </x-card>
        </div>
    </div>

@endsection
