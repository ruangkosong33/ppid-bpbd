@extends('layouts.admin.master.b-master')

@section('title', 'Data Tim PPID')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Tim PPID</li>
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <x-card>
                <x-slot name="header">
                    <a href="{{route('team.create')}}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</a>
                </x-slot>

                <x-table>
                    <x-slot name="thead">
                        <th>No</th>
                        <th>Nama</th>
                        <th>Gambar</th>
                        <th>Jabatan</th>
                        <th>Action</th>
                    </x-slot>
                    @foreach ($team as $key=>$teams)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$teams->name}}</td>
                            <td><img src="{{asset('storage/image-team/' . $teams->image)}}" width="100px"></td>
                            <td>{{$teams->job}}</td>
                            <td>
                                <a href="{{route('team.edit', $teams->id)}}" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form method="post" action="{{route('team.destroy', $teams->id)}}" class="d-inline">
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
