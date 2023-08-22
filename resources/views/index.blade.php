@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">SPK</h1>
    </div>
    @if (session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alert">
            {{ session('success') }}
        </div>
    @endif


    <div class="table-responsive col-lg-8">
        <a href="/create" class="btn btn-primary mb-3">Create New SPO</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No SPKO</th>
                    <th scope="col">Pegawai</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Proses</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($daftarspk as $spk)
                    <tr>
                        <td>{{ $spk->sw }}</td>
                        <td>{{ $spk->pegawai->nama }}</td>
                        <td>{{ $spk->trans_date }}</td>
                        <td>{{ $spk->process }}</td>
                        <td>
                            <a href="print/{{ $spk->id_spko }}" class="badge bg-success">Print</a>
                            <a href="edit/{{ $spk->id_spko }}" class="badge bg-warning">Edit</a>
                            <form action="delete/{{ $spk->id_spko }}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0"
                                    onclick="return confirm('Are you sure ?')">Delete</button>
                            </form>


                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
