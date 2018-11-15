@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Table Mahasiswa</h1>
            @if(Session::has('alert-success'))
                <div class="alert alert-success">
                    <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
                </div>
            @endif
            <hr>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>no.</th>
                    <th>Nama_barang</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Expired_data </th>
                    <th>tanggal_produksi</th>
                </tr>
                </thead>
                <tbody>
                @php $no = 1; @endphp
                @foreach($data as $d)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $d->namabarang }}</td>
                        <td>{{ $d->harga }}</td>
                        <td>{{ $d->stok }}</td>
                        <td>{{ $d->expireddata }}</td>
                        <td>{{ $d->tanggalproduksi }}</td>
                        <td>
                            <form action="{{ route('barang.destroy', $d->id) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <a href="{{ route('barang.edit',$d->id) }}" class=" btn btn-sm btn-primary">Edit</a>
                                <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection