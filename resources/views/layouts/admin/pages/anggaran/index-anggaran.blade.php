@extends('layouts.admin.master.b-master')

@section('title', 'Data Anggaran Kegiatan')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Anggaran Kegiatan</li>
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <x-card>
                <x-slot name="header">
                    <a href="{{route('anggaran.create')}}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</a>
                </x-slot>

                <x-table>
                    <x-slot name="thead">
                        <th>No</th>
                        <th>Judul</th>
                        <th>File</th>
                        <th>Action</th>
                    </x-slot>
                    @foreach ($anggaran as $key=>$anggarans)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{Str::limit($anggarans->title, '15', '...')}}</td>
                            <td><a href="{{ asset('storage/file-anggaran/' . $anggarans->file) }}" download>{{$anggarans->file}}</a></td>
                            <td>
                                <a href="{{route('anggaran.edit', $anggarans->id)}}" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form method="post" action="{{route('anggaran.destroy', $anggarans->id)}}" class="d-inline">
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
