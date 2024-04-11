@extends('layouts.admin.master.b-master')

@section('title', 'Dasar Hukum')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Dasar Hukum</li>
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <x-card>
                <x-slot name="header">
                    @if($dasar->isEmpty())
                        <a href="{{route('dasar.create')}}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</a>
                    @else
                    @foreach ($dasar as $dasars)
                        <a href="{{route('dasar.edit', $dasars->id)}}" class="btn btn-warning"><i class="fas fa-plus-circle"></i> Edit</a>
                    @endforeach
                    @endif
                </x-slot>

                <x-table>
                    <x-slot name="thead">
                        <th>Judul</th>
                        <th>Deskripsi</th>
                    </x-slot>
                        @foreach ($dasar as $dasars)
                        <tr>
                            <td width="38%">Sub Judul</td>
                            <td>{{$dasars->title}}</td>
                        </tr>
                        <tr>
                            <td width="38%">Deskripsi</td>
                            <td>{!!$dasars->body!!}</td>
                        </tr>
                        @endforeach
                </x-table>
            </x-card>
        </div>
    </div>

@endsection
