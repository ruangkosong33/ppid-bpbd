@extends('layouts.admin.master.b-master')

@section('title', 'Kategori Daftar Informasi Publik')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Data Kategori DIP</li>
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <x-card>
                <x-slot name="header">
                    <a href="{{route('katdip.create')}}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</a>
                </x-slot>

                <x-table>
                    <x-slot name="thead">
                        <th>No</th>
                        <th>Judul</th>
                        <th>Action</th>
                    </x-slot>
                    @foreach ($katdip as $key=>$katdips)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$katdips->title}}</td>
                            <td>
                                <a href="{{route('katdip.edit', $katdips->id)}}" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form method="post" action="{{route('katdip.destroy', $katdips->id)}}" class="d-inline">
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
