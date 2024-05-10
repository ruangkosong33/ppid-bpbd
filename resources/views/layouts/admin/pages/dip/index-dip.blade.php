@extends('layouts.admin.master.b-master')

@section('title', 'File Kategori Daftar Informasi Publik')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Data File DIP</li>
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <x-card>
                <x-slot name="header">
                    <a href="{{route('dip.create')}}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</a>
                </x-slot>

                <x-table>
                    <x-slot name="thead">
                        <th>No</th>
                        <th>Kategori DIP</th>
                        <th>Judul</th>
                        <th>File</th>
                        <th>Action</th>
                    </x-slot>
                    @foreach ($dip as $key=>$dips)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$dips->katdips->title}}</td>
                            <td>{{$dips->title}}</td>
                            <td><a href="{{ asset('storage/file-dip/' . $dips->file) }}" download>{{$dips->file}}</a></td>
                            <td>
                                <a href="{{route('dip.edit', $dips->id)}}" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form method="post" action="{{route('dip.destroy', $dips->id)}}" class="d-inline">
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
