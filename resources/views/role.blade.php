@extends('layout.tables')
@section('tables')
<h1 class="h3 mb-2 text-gray-800">Tables Role</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahRole">Tambah</button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID_Role</th>
                                            <th>Role</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($role as $item)
                                        <tr>
                                            <td>{{ $item->ID_ROLE }}</td>
                                            <td>{{ $item->ROLE }}</td>
                                            <td>
                                                <a href="/role/edit/{{ $item->ID_ROLE }}"> <img src="assets/img/edit.svg" alt="edit" style="max-width: 10%;"></a> |
                                                <a href="#"> <img src="assets/img/delete.svg" alt="hapus" style="max-width: 7%;"></a>
                                            </td>                                         
                                        </tr>
                                        @endforeach                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
@endsection