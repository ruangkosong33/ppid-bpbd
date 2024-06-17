@extends('layouts.guest.master.f-master')

@section('content')

    @include('components.breadcrumb', ['title' => 'Surat Keputusan'])

    <section class="project-details-area pt-50 pb-120">
        <div class="container">

            <div class="section-title-two text-center mb-50">
                <span class="sub-title">Surat Keputusan PPID</span>
            </div>

            <div class="col-12 col-md-12 order-md-0">
                <div class="result_content">
                    <div class="row justify-content-center">
                        <div class="col-md-11">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-center">NO</th>
                                            <th class="text-center">Judul</th>
                                            <th class="text-center">TANGGAL DI TETAPKAN</th>
                                            <th class="text-center">ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($keputusans as $key=>$k)
                                            <tr>
                                                <td class="text-center">{{$key+1}}</td>
                                                <td class="text-center">{{ $k->title }}</td>
                                                <td class="text-center">{{ date('d-m-Y', strtotime($k->date)) }}</td>
                                                <td class="text-center"><a href="{{ route('detail.keputusan', $k->slug) }}">Lihat</a></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center mt-4">
                        {{-- {{ $keputusans->links() }} --}}
                    </div>

                </div>
            </div>

@endsection
