@extends('layouts.admin.master.b-master')

@section('title', 'Data Tata Cata Sengketa Informasi')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Tata Sengketa Informasi</li>
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <x-card>
                <x-slot name="header">
                    @if($tatasengketa->isEmpty())
                        <a href="{{route('tatasengketa.create')}}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</a>
                    @else
                    @foreach ($tatasengketa as $tatasengketas)
                        <a href="{{route('tatasengketa.edit', $tatasengketas->id)}}" class="btn btn-warning"><i class="fas fa-plus-circle"></i> Edit</a>
                    @endforeach
                    @endif
                </x-slot>

                <x-table>
                    <x-slot name="thead">
                        <th>Judul</th>
                        <th>Deskripsi</th>
                    </x-slot>
                        @foreach ($tatasengketa as $tatasengketas)
                        <tr>
                            <td width="38%">Sub Judul</td>
                            <td>{{$tatasengketas->title}}</td>
                        </tr>
                        <tr>
                            <td width="38%">Deskripsi</td>
                            <td>{!!$tatasengketas->body!!}</td>
                        </tr>
                        <tr>
                            <td width="38%">Gambar</td>
                            <td>{{asset('storage/image-tata-sengketa/' . $tatasengketas->image)}}</td>
                        </tr>
                        @endforeach
                </x-table>
            </x-card>
        </div>
    </div>

@endsection
