@extends('layout')

@section('content')
<x-HeaderComponent title="Form Pengguna" />

<div class="app-content">
    <div class="card card-primary card-outline">
        <div class="card-header">
            <div class="card-title">Data Pengguna</div>
        </div>
        <div class="card-body">
            <table id='table-pengguna' class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Tanggal Lahir</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

@push('script')
<script>
    $('#table-pengguna').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ url('pengguna/datasource') }}",
        columns: [
            { data: 'id'  },
            { data: 'nama' },
            { data: 'jenis_kelamin'  },
            { data: 'tanggal_lahir'  },
            { data: 'alamat' },
            { data: 'id'   }
        ]
    });
</script>
@endpush
