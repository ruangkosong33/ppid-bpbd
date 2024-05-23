@extends('layouts.admin.master.b-master')

@section('title', 'Data Sarana & Prasarana')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Sarana & Prasarana</li>
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <x-card>
                <x-slot name="header">
                    <a href="{{route('sarana.create')}}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</a>
                </x-slot>

                <x-table>
                    <x-slot name="thead">
                        <th>No</th>
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th>Gambar</th>
                        <th>Action</th>
                    </x-slot>
                    @foreach ($sarana as $key=>$saranas)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{Str::limit($saranas->title, '15', '...')}}</td>
                            <td>{!! Str::limit($saranas->body, 15, '...') !!}</td>
                            <td><img src="{{asset('storage/image-sarana/' . $saranas->image)}}" width="100px"></td>
                            <td>
                                <a href="{{route('sarana.edit', $saranas->id)}}" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form method="post" action="{{route('sarana.destroy', $saranas->id)}}" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger btn-delete" onclick="return confirm('Yakin Ingin Menghapus Data?')">
                                      <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                                <a href="{{route('sarana.show', $saranas->id)}}" class="btn btn-info btn-sm">
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
