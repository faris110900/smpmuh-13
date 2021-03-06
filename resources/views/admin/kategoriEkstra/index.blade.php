@extends('admin.layouts')

@section('content-admin')

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Kategori Ekstrakurikuler</h1>
             <a href="{{ route('frontend.kategoriEkstra-admin.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Data Kategori Ekstrakurikuler</a> 
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Kategori Ekstrakurikuler</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="tableKategoriEkstra">
                        <thead>
                            <tr>
                                <th>kategori Ekstrakurikuler</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>kategori Ekstrakurikuler</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($kategoriEkstra as $kate)
                                <tr>
                                    <td>{{ $kate->nama_kategori }}</td>
                                    <td>
                                        <a href="{{ route('frontend.kategoriEkstra.edit', $kate) }}"
                                            class="btn btn-primary">Edit</a>

                                        <a href="{{ route('frontend.kategoriEkstra.delete', $kate->id) }}"
                                            class="btn btn-danger">Delete</a>

                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endsection

    @push('script')

        <script>
            $(document).ready(function() {
                $('#tableKategoriEkstra').DataTable();
            });

        </script>

    @endpush
