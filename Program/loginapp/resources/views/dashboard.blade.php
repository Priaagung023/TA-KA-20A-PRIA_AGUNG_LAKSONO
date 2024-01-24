{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>
<body>
    {{-- <p>Selamat Datang, {{$isi_session}}</p> --}}
    {{-- <button id="btn_logout">Logout</button> --}}
    <!-- kode js -->
    
{{-- </body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Siakad</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #15046c;
            color: #fff;
            padding: 1em;
            text-align: center;
        }

        nav {
            background-color: #4481dc;
            padding: 1em;
        }

        nav ul {
            list-style: none;
            margin: 1px;
            padding: 0;
            display: flex;
        }

        nav li {
            margin-right: 1em;
        }

        main {
            padding: 2em;
        }

        h2 {
            color: #4481dc;
        }

        .card {
            background-color: #4481dc;
            border: 1px solid #4481dc;
            border-radius: 5px;
            padding: 1em;
            margin-bottom: 1em;
        }

        footer {
            background-color: #15046c;
            color: #fff;
            padding: 1em;
            text-align: center;
        }
    </style>

<body>

    <header>
        <img src="logo2.png" alt="logo2.png">
        <h1>Dashboard Siakad</h1>
    </header>

    <nav>
        <ul>
            <li><a href="#">Beranda</a></li>
            <li><a href="#">Data Mahasiswa</a></li>
            <li><a href="#">Jadwal Kuliah</a></li>
            <li><a href="#">Nilai Mahasiswa</a></li>
           
            <!-- Tambahkan menu lain sesuai kebutuhan -->
        </ul>
    </nav>

    <main>
        <h2>Selamat Datang, {{$isi_session}}</h2>

        <div class="card">
            <h3>Data Mahasiswa</h3>
            <!-- Tambahkan konten data mahasiswa di sini -->
        </div>

        <div class="card">
            <h3>Jadwal Kuliah</h3>
            <!-- Tambahkan konten jadwal kuliah di sini -->
        </div>

        <div class="card">
            <h3>Nilai Mahasiswa</h3>
            <!-- Tambahkan konten nilai mahasiswa di sini -->
        </div>
        <div>
        <button id="btn_logout">Logout</button>
        </div>
    </main>
    <script>
        // deklarasi variabel komponen
        let btn_logout = document.querySelector("#btn_logout");
        // event untuk "btn_logout"
        btn_logout.addEventListener("click", function(){
            // alihkan ke halaman logout
            location.href = "{{url('logout')}}";
        });
    </script>
   

    <footer>
        <p>&copy; 2024 Dashboard Siakad University Global</p>
    </footer>

</body>
</html>
