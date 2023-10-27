@extends('layouts.app')
@section('content')
    <div class="container-fluid table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Merek</th>
                    <th scope="col">Kemasan</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Harga Grosir</th>
                    <th scope="col">Opsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $products)
                    <tr>
                        <th scope="row">{{ $no++ }}</th>
                        <td>{{ $products->merek }}</td>
                        <td>{{ $products->kilo . ' KG' }}</td>
                        <td>{{ $products->stok }}</td>
                        <td>{{ number_format($products->harga, 0, ',', '.') }}</td>
                        <td>{{ number_format($products->harga_grosir, 0, ',', '.') }}</td>
                        <td>
                            <a href="{{ route('product-update', ['id' => $products->id]) }}"
                                class="btn btn-secondary w-100 m-1">Update</a>
                            <form method="post" action="{{ route('product-delete', ['id' => $products->id]) }}">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger m-1 w-100" type="submit">delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="floating-button fixed-bottom w-100 p-3 d-flex justify-content-start" style="margin-bottom: 2.5rem">
        <a href="{{ route('add-screen') }}"
            class="card rounded-circle bg-warning d-flex justify-content-center align-items-center"
            style="width: 50px; height: 50px;cursor: pointer;">
            <i class="bi bi-database-add text-light fs-4"></i>
        </a>
    </div>

    {{ $data->links() }}
@endsection
