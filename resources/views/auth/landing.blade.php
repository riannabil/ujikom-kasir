<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KasirKu - Aplikasi Kasir</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: linear-gradient(to right, #f38b2d, #f7a440);
            color: #333;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 30px;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            max-width: 1000px;
            background: #fff;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
            animation: fadeIn 1s ease;
        }

        .left,
        .right {
            flex: 1 1 300px;
            padding: 40px;
        }

        .left {
            background-color: #fff5ea;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .left img {
            width: 100%;
            max-width: 300px;
            margin: 0 auto 20px;
        }

        .left h1 {
            font-size: 2.5em;
            margin-bottom: 10px;
            color: #f38b2d;
            text-align: center;
        }

        .left p {
            font-size: 1.1em;
            text-align: center;
        }

        .right {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .right h2 {
            font-size: 2em;
            margin-bottom: 20px;
            color: #f38b2d;
        }

        .btn-group {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }

        .btn {
            background-color: #f38b2d;
            color: #fff;
            padding: 12px 30px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        .btn:hover {
            background-color: #e9781f;
            transform: translateY(-2px);
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 768px) {
            .container {
                flex-direction: column;
            }

            .left,
            .right {
                padding: 30px 20px;
            }

            .left img {
                max-width: 200px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="left">
            <img src="{{ asset('images/logo_landing_page.png') }}" alt="Kasir Illustration" style="max-width:220px;">
            <h1>KasirKu</h1>
            <p>Membantu UMKM mengelola penjualan dengan lebih mudah dan cepat. Solusi kasir digital yang praktis dan
                efisien.</p>
        </div>
        <div class="right">
            <h2>Selamat Datang!</h2>
            <div class="btn-group">
                <a href="{{ route('login') }}" class="btn">Login</a>
                <a href="{{ route('register') }}" class="btn">Daftar</a>
            </div>
        </div>
    </div>
</body>

</html>
