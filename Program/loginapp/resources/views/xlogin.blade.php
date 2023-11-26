<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- menambahkan csrf token -->
    <meta name=”csrf_token” content="{{ csrf_token() }}">
    <title>login </title>
    <!-- gunakan CDN tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <!-- area login -->
    <main id = "main_login" class="flex items-center justify-center h-screen bg-rose-300">
        <!-- frame login -->
        <section id="section_frame" class="w-1/4 border-2 border-gray-900 rounded-xl p-5 bg-indigo-200 ">
            <!-- area judul -->
            <section id = "section_judul" class="mb-4 text-center text-xl">
                Login Aplikasi
            </section>
            <!-- area input -->
            <section id = "section_input" class="flex flex-col ">
                <!-- Buat komponen Username dan Password-->
                <input type="text" name="txt_username" id="txt_username"
                    class=" border-solid border-2 border-gray-800 rounded-xl h-10 outline-purple-700 
            focus:outline-none focus:ring focus:border-blue-500 mb-2.5 p-2.5">

                <input type="password" name="txt_password" id="txt_password "
                    class="border-solid border-2 border-gray-800 rounded-xl h-10 outline-purple-700 
            focus:outline-none focus:ring focus:border-blue-500 p-2.5">
            </section>
            <!-- area tombol -->
            <section id = "section_tombol" class="mt-4 text-center">
                <button id="btn_login" class="bg-sky-300 h-9 w-32 rounded-xl "onclick="setLogin()">Login</button>
                <button id="btn_batal" class="border-solid border-2 border-gray-900 rounded-xl h-9 w-32">Batal</button>
            </section>
        </section>
    </main>
    <!-- buat code dengan js -->
    <script>
        // buat variabel komponen
        // tahap deklarasi dan definisi
        let txt_username = document.getElementById("txt_username");
        // tahap deklarasi
        let txt_password;
        // tahap definisi
        txt_password = document.querySelector("#txt_password");

        let btn_login = document.querySelector("#btn_login");
        let btn_batal = document.querySelector("#btn_batal");
        // buat fungsi untuk proses login
        function setLogin() {
            // ambil nilai dari nilai txt_username dan txt_password
            // jika txt_username atau txt_password tidak di isi
            if (txt_username.value == "" || txt_password.value == "") {
                //tampilkan pesan eror
                alert("Username/Password Harus Diisi !");
            }
            // jika txt_username atau txt_password di isi
            else {
                // alert("Username / Password sudah di isi !");

                // collecting data ke dalam form
                let form = new FormData();
                form.append("username", txt_username.value);
                form.append("password", txt_password.value);

                // Proses cek data (dengan proses asyncronous/async JS)
                // 1. promise (fetch)
                // 2. async
                // fetch =  untuk mengirim data ke url yang akan memproses data input (form)
                fetch("{{ url('/login/get') }}", {
                        method: "POST",
                        headers: {
                            "X-CSRF-TOKEN": document.querySelector('meta[name="csrf_token"]').content
                        },
                        body: form
                    })
                    // berfungsi untuk membaca data hasil dari fetch
                    .then((response) => response.json())
                    // berfungsi untuk membaca hasil dari response (then yang pertama)
                    .then((result) => {
                        // jika hasil "result" = 1
                        if (result.output == 1) {
                            // alihkan ke halaman dashboard
                            location.href = "{{ url('/') }}";
                        }
                        // jika hasil " result" !=1
                        else {
                            alert("Username / Password Tidak di Temukan !");
                        }
                    })
                    // jika proses "fetch" gagal
                    .catch((error) => {
                        alert("Data Gagal di Kirim !")
                    });


            }
        }
        // event untuk btn_batal
        // btn_batal.addEventListener('click',function(){
        //     alert("Klik Tombol Batal");
        // })
        btn_batal.addEventListener('click', setRefresh);

        function setRefresh() {
            location.href = "{{ url('/login') }}";
        }
    </script>
</body>

</html>
