@extends('layouts.admin.master.b-master')

@section('title', 'Data Maklumat Pelayanan')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Data Maklumat Pelayanan</li>
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <x-card>
                <x-slot name="header">
                    @if($maklumat->isEmpty())
                        <a href="{{route('maklumat.create')}}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</a>
                    @else
                    @foreach ($maklumat as $maklumats)
                        <a href="{{route('maklumat.edit', $maklumats->id)}}" class="btn btn-warning"><i class="fas fa-plus-circle"></i> Edit</a>
                    @endforeach
                    @endif
                </x-slot>

                <x-table>
                    <x-slot name="thead">
                        <th>Judul</th>
                        <th>Deskripsi</th>
                    </x-slot>
                        @foreach ($maklumat as $maklumats)
                        <tr>
                            <td width="38%">Sub Judul</td>
                            <td>{{$maklumats->title}}</td>
                        </tr>
                        <tr>
                            <td width="38%">Deskripsi</td>
                            <td>{!!$maklumats->body!!}</td>
                        </tr>
                        @endforeach
                </x-table>
            </x-card>
        </div>
    </div>

@endsection
