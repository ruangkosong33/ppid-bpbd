@extends('layouts.admin.master.b-master')

@section('title', 'Galeri Foto')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Galeri Foto</li>
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <x-card>
                <x-slot name="header">
                    <a href="{{route('foto.create')}}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</a>
                </x-slot>

                <x-table>
                    <x-slot name="thead">
                        <th>No</th>
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th>Gambar</th>
                        <th>Tanggal</th>
                        <th>Action</th>
                    </x-slot>
                    @foreach ($foto as $key=>$fotos)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{Str::limit($fotos->title, '15', '...')}}</td>
                            <td>{{Str::limit($fotos->body, '15', '...')}}</td>
                            <td><img src="{{asset('storage/image-foto/' . $fotos->image)}}" width="100px"></td>
                            <td>{{ \Carbon\Carbon::parse($fotos->date)->format('d-m-Y') }}</td>
                            <td>
                                <a href="{{route('foto.edit', $fotos->id)}}" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form method="post" action="{{route('foto.destroy', $fotos->id)}}" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger btn-delete" onclick="return confirm('Yakin Ingin Menghapus Data?')">
                                      <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                                <a href="{{route('foto.show', $fotos->id)}}" class="btn btn-info btn-sm">
                                    <i class="fas fa-eye"></i>
                                </a>
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
