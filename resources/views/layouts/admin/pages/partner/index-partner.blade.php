@extends('layouts.admin.master.b-master')

@section('title', 'Data Link Partner')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Link Partner</li>
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <x-card>
                <x-slot name="header">
                    <a href="{{route('partner.create')}}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</a>
                </x-slot>

                <x-table>
                    <x-slot name="thead">
                        <th>No</th>
                        <th>Judul</th>
                        <th>Gambar</th>
                        <th>Link Url</th>
                        <th>Action</th>
                    </x-slot>
                    @foreach ($partner as $key=>$partners)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$partners->title}}</td>
                            <td><img src="{{asset('storage/image-partner/' . $partners->image)}}" width="100px"></td>
                            <td><a href="{{ $partners->link }}">{{ $partners->link }}</a></td>
                            <td>
                                <a href="{{ route('partner.edit', $partners->id) }}" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form method="post" action="{{ route('partner.destroy', $partners->id) }}" class="d-inline">
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
