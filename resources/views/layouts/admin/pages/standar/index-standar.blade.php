@extends('layouts.admin.master.b-master')

@section('title', 'Standar Biaya')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Standar Biaya</li>
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <x-card>
                <x-slot name="header">
                    @if($standar->isEmpty())
                        <a href="{{route('standar.create')}}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</a>
                    @else
                    @foreach ($standar as $standars)
                        <a href="{{route('standar.edit', $standars->id)}}" class="btn btn-warning"><i class="fas fa-plus-circle"></i> Edit</a>
                    @endforeach
                    @endif
                </x-slot>

                <x-table>
                    <x-slot name="thead">
                        <th>Judul</th>
                        <th>Deskripsi</th>
                    </x-slot>
                        @foreach ($standar as $standars)
                        <tr>
                            <td width="38%">Sub Judul</td>
                            <td>{{$standars->title}}</td>
                        </tr>
                        <tr>
                            <td width="38%">Deskripsi</td>
                            <td>{!!$standars->body!!}</td>
                        </tr>
                        @endforeach
                </x-table>
            </x-card>
        </div>
    </div>

@endsection
