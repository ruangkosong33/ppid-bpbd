@extends('layouts.admin.master.b-master')

@section('title', 'Data Surat Keputusan')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Surat Keputusan</li>
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <x-card>
                <x-slot name="header">
                    <a href="{{route('keputusan.create')}}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</a>
                </x-slot>

                <x-table>
                    <x-slot name="thead">
                        <th>No</th>
                        <th>Judul</th>
                        <th>Tanggal Di Tetapkan</th>
                        <th>File</th>
                        <th>Action</th>
                    </x-slot>
                    @foreach ($keputusan as $key=>$keputusans)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$keputusans->title}}</td>
                            <td>{{ \Carbon\Carbon::parse($keputusans->date)->format('d-m-Y') }}</td>
                            <td><a href="{{ asset('storage/file-keputusan/' . $keputusans->file) }}">{{$keputusans->file}}</a></td>
                            <td>
                                <a href="{{route('keputusan.edit', $keputusans->id)}}" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form method="post" action="{{route('keputusan.destroy', $keputusans->id)}}" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger btn-delete" onclick="return confirm('Yakin Ingin Menghapus Data?')">
                                      <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </x-table>
            </x-card>
        </div>
    </div>

@endsection

@include('include.datatable')

    @push('script')

        <script>
            $('.table').DataTable();
        </script>

    @endpush
