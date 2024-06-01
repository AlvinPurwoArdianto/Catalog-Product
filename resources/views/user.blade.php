<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Katalog Produk</title>
</head>

<body>
    {{-- Awal navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="">ACRSZ2</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Produk</a>
                    </li>
                </ul>
            </div>
        </div>
        {{-- <div class="nav-right mx-3">
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/home') }}"
                        class="text-sm text-info-700 dark:text-info-500 underline btn btn-primary">Home</a>
                @else
                    <table>
                        <tr>
                            <td>
                                <a href="{{ route('login') }}"
                                    class="text-sm text-gray-700 dark:text-gray-500 underline btn btn-primary">Login</a>
                            </td>
                            <td>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}"
                                        class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline btn btn-primary">Register</a>
                                @endif
                            </td>
                        </tr>
                    </table>
                @endauth
            @endif
        </div> --}}
    </nav>
    {{-- Akhir navbar --}}

    {{-- Awal content --}}
    <div class="section">
        <div class="container">
            <div class="row mt-5">
                <h1>Produk</h1>
            </div>
            <div class="row mt-5">
                @foreach ($produk as $data)
                    <div class="col-4">
                        <div class="card" style="width: 13rem;">
                            <img src="{{ asset('/images/produk/' . $data->cover) }}" width="100">
                            <div class="card-body">
                                <h5 class="card-title">{{ $data->nama_produk }}</h5>
                                {{-- <p class="card-text">{{ $data->deskripsi }}</p> --}}
                                <a href="{{ url('tampil', $data->id) }}" class="btn btn-primary">Lihat Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    {{-- Akhir content --}}

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    -->
</body>

</html>
