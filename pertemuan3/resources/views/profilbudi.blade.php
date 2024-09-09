<!DOCTYPE html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profil Budi</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Figtree', sans-serif;
            background-color: #f3f4f6;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .profile-card {
            background-color: #fff;
            border-radius: 1rem;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 350px;
            text-align: center;
        }

        .profile-card img {
            width: 100%;
            height: auto;
        }

        .profile-card h1 {
            font-size: 1.8rem;
            margin: 1rem 0 0.5rem 0;
            color: #1f2937;
        }

        .profile-card p {
            font-size: 1rem;
            margin: 0.5rem 1.5rem 1.5rem 1.5rem;
            color: #6b7280;
            line-height: 1.5;
        }

        .profile-card .btn {
            display: inline-block;
            padding: 0.75rem 1.5rem;
            margin-bottom: 1.5rem;
            font-size: 1rem;
            color: #fff;
            background-color: #ef4444;
            border: none;
            border-radius: 0.5rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .profile-card .btn:hover {
            background-color: #dc2626;
        }

        .profile-card .social-links {
            display: flex;
            justify-content: center;
            margin-bottom: 1.5rem;
        }

        .profile-card .social-links a {
            margin: 0 0.5rem;
            color: #6b7280;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .profile-card .social-links a:hover {
            color: #ef4444;
        }
    </style>
</head>
<body>
    <div class="profile-card">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRg_zdZwR_A5gep9vMuR-15gLOT6INJcTi7EPTIs0psTWi3yco6UXL41TKe28Imd1UoqJk&usqp=CAU" alt="Budi's Profile Picture">
        <h1>Budi Santoso</h1>
        <p>
            Hello, I'm Budi! I am passionate about technology and love to create innovative solutions. 
            I enjoy learning new things every day and sharing my knowledge with others.
        </p>
        <div class="info-container">
            <div class="info-item">
                <span class="info-label">Nama:</span>
                <span class="info-value">Budiono Siregar</span>
            </div>
            <div class="info-item">
                <span class="info-label">Jurusan:</span>
                <span class="info-value">Kapal Laut</span>
            </div>
            <div class="info-item">
                <span class="info-label">Fakultas:</span>
                <span class="info-value">Teknik Perkapalan</span>
            </div>
            <div class="info-item">
                <span class="info-label">Hobi:</span>
                <span class="info-value">Memancing</span>
            </div>
        </div>
        <br/>
        <a href="/Matakuliah" class="btn">List Matakuliah</a>
        <div class="social-links">
            <a href="/Home">Kembali</a>
       </div>

    </div>
</body>
</html>

     