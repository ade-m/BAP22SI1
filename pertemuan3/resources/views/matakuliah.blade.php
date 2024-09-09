<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Matakuliah</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Styles -->
    <style>
        /* Tailwind CSS base styles */
        * { box-sizing: border-box; }
        body { font-family: 'Figtree', sans-serif; background-color: #f3f4f6; margin: 0; }
        .container { max-width: 1200px; margin: auto; padding: 2rem; }
        .header { text-align: center; margin-bottom: 2rem; }
        .table { width: 100%; border-collapse: collapse; }
        .table th, .table td { padding: 1rem; text-align: left; }
        .table th { background-color: #374151; color: #fff; }
        .table td { background-color: #fff; }
        .table tbody tr:nth-child(even) { background-color: #f9fafb; }
        .table tbody tr:hover { background-color: #e5e7eb; }
        .button { display: inline-block; padding: 0.75rem 1.5rem; background-color: #1d4ed8; color: #fff; text-decoration: none; border-radius: 0.375rem; }
        .button:hover { background-color: #1e40af; }
    </style>
</head>
<body>
    <div class="container">
        <a href="/Profilbudi" class="button">Kembali</a>
        <div class="header">
            <h1 class="text-2xl font-bold mb-2">Matakuliah Tiga Semester Terakhir</h1>
            <h3 class="text-xl font-semibold">Nama: Budiono Siregar</h3>
            <h3 class="text-xl font-semibold">StudentID: 12345678ABC</h3>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <table class="table table-bordered table-striped mt-5">
                        <thead class="thead-dark">
                            <tr>
                                <th>Mata Kuliah</th>
                                <th>SKS</th>
                                <th>Nilai</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Dasar Perkapalan</td>
                                <td>3</td>
                                <td>A</td>
                            </tr>
                            <tr>
                                <td>Matematika Teknik</td>
                                <td>4</td>
                                <td>B+</td>
                            </tr>
                            <tr>
                                <td>Fisika Dasar</td>
                                <td>3</td>
                                <td>A-</td>
                            </tr>
                            <tr>
                                <td>Pengantar Teknik Elektro</td>
                                <td>3</td>
                                <td>B</td>
                            </tr>
                            <tr>
                                <td>Statistik dan Probabilitas</td>
                                <td>3</td>
                                <td>A</td>
                            </tr>
                            <tr>
                                <td>Algoritma dan Pemrograman</td>
                                <td>3</td>
                                <td>A</td>
                            </tr>
                            <tr>
                                <td>Struktur Data</td>
                                <td>3</td>
                                <td>B+</td>
                            </tr>
                            <tr>
                                <td>Sistem Operasi</td>
                                <td>3</td>
                                <td>B</td>
                            </tr>
                            <tr>
                                <td>Pemrograman Web</td>
                                <td>3</td>
                                <td>A</td>
                            </tr>
                            <tr>
                                <td>Rekayasa Perangkat Lunak</td>
                                <td>3</td>
                                <td>A-</td>
                            </tr>
                            <tr>
                                <td>Basis Data</td>
                                <td>3</td>
                                <td>B+</td>
                            </tr>
                            <tr>
                                <td>Jaringan Komputer</td>
                                <td>3</td>
                                <td>B</td>
                            </tr>
                            <tr>
                                <td>Keamanan Informasi</td>
                                <td>3</td>
                                <td>A</td>
                            </tr>
                            <tr>
                                <td>Kecerdasan Buatan</td>
                                <td>3</td>
                                <td>A</td>
                            </tr>
                            <tr>
                                <td>Manajemen Proyek TI</td>
                                <td>3</td>
                                <td>B+</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
