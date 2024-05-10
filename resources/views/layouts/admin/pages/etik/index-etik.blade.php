@extends('layouts.admin.master.b-master')

@section('title', 'Kode Etik')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Data Kode Etik</li>
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <x-card>
                <x-slot name="header">
                    @if($etik->isEmpty())
                        <a href="{{route('etik.create')}}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</a>
                    @else
                    @foreach ($etik as $etiks)
                        <a href="{{route('etik.edit', $etiks->id)}}" class="btn btn-warning"><i class="fas fa-plus-circle"></i> Edit</a>
                    @endforeach
                    @endif
                </x-slot>

                <x-table>
                    <x-slot name="thead">
                        <th>Judul</th>
                        <th>Deskripsi</th>
                    </x-slot>
                        @foreach ($etik as $etiks)
                        <tr>
                            <td width="38%">Sub Judul</td>
                            <td>{{$etiks->title}}</td>
                        </tr>
                        <tr>
                            <td width="38%">Deskripsi</td>
                            <td>{!!$etiks->body!!}</td>
                        </tr>
                        @endforeach
                </x-table>
            </x-card>
        </div>
    </div>

@endsection
