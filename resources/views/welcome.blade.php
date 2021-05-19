<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="bg-success">
        <div class="container rounded bg-light my-5 py-2 px-5">
            <div class="d-flex justify-content-between">
                <h1 class="text-center text-info">Toko Arkademy</h1>
                <a href="/create" class="my-auto">
                    <button type="button" class="btn btn-success">Tambah</button>
                </a>
            </div>
            <table class="table table-responsive-md">
                <thead>
                    <tr>
                        <th width="45">No</th>
                        <th>Nama Produk</th>
                        <th>Keterangan</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                        <th width=""></th>
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach ($produks as $number => $produk)
                    <tr>
                        <td>{{ $produks->firstItem() + $number }}</td>
                        <td>{{ $produk->nama_produk }}</td>
                        <td>{{ $produk->keterangan }}</td>
                        <td>{{ $produk->harga }}</td>
                        <td>{{ $produk->jumlah }}</td>
                        <td>
                            <span class="d-flex justify-content-end gap-2">
                                <a href="/{{ $produk->id }}/edit" class="text-dark">
                                    <button class="btn btn-sm btn-success">Edit
                                    </button>
                                </a>
                                <form action="/{{ $produk->id }}" method="POST">
                                @csrf
                                @method('delete')
                                        <button class="btn btn-sm btn-success">Delete</button>
                                </form>
                            </span>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {{ $produks->links() }}
            </div>
        </div>
    </body>
</html>
