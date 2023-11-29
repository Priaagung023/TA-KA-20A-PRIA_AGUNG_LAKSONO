<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- menambahkan csrf token -->
    <meta name="csrf_token" content="{{ csrf_token() }}">

    <title>Login</title>

    <!-- gunakan CDN tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>
    <!-- tampilan login -->
    <main id="main_login" class="flex items-center justify-center h-screen bg-rose-300">
        <!-- frame login -->
        <section id="section_frame" class="w-1/3 border-2 border-rose-500 rounded-xl p-5 bg-indigo-100">
            <!-- area judul -->
            <section id="section_judul" class="mb-5 text-center">
                Login Aplikasi
            </section>

            <!-- area input -->
            <section id="section_input" class="flex flex-col">
                <!-- buat komponen textfield username dan password -->
                <input type="text" name="txt_username" id="txt_username"
                    class="h-10 border-solid border-2 border-cyan-700 rounded-xl focus:outline-none focus:ring focus:border-blue-500 mb-2.5 p-2.5" placeholder="Isi Username">

                <input type="password" name="txt_password" id="txt_password"
                    class="h-10 border-solid border-2 border-cyan-700 rounded-xl focus:outline-none focus:ring focus:border-blue-500 p-2.5" placeholder="Isi Password">
            </section>
            <!-- area checkbox -->
            <section id="section_checkbox" class="mt -2">
                <input type="checkbox" name="chk_ingat" id="chk_ingat">
                
            </section>

            <!-- area tombol-->
            <section id="section_tombol" class="mt-5 text-center">
                <button id="btn_login" class="bg-teal-400 h-8 w-32 rounded-xl" onclick="setLogin()">Login</button>
                <button id="btn_batal" class="border-solid border-2 border-teal-400 h-8 w-32 rounded-xl">Batal</button>
            </section>
            
        </section>
    </main>

    <!-- buat kode dengan js -->
    <script>
        // buat variabel untuk komponen
        // tahap deklarasi dan definisi
        let txt_username = document.getElementById("txt_username");

        // tahap deklarasi
        let txt_password;
        // tahap definisi
        txt_password = document.querySelector("#txt_password");

        let btn_login = document.querySelector("#btn_login");
        let btn_batal = document.querySelector("#btn_batal");
        let chk_ingat = document.querySelector("#chk_ingat");
        
        // variabel untuk check chk_ingat
        let ingat = 0;

        // buat event untuk chk_ingat
        chk_ingat.addEventListener("click",function(){
            // jika chk_ingat = check
            if(chk_ingat.checked == true)
            {
                ingat = 1;
            }
            // jika chk_ingat = uncheck
            else
            {
                ingat = 0;
            }
            // alert(ingat);    
        });

        // buat fungsi untuk proses login
        function setLogin() 
        {
            // ambil nilai dari txt_username dan txt_password
            // jika txt_username atau txt_password tidak diisi
            if (txt_username.value == "" || txt_password.value == "") {
                // tampilkan pesan error
                alert("Username / Password Harus Diisi !");
            }
            // jika txt_username atau txt_password diisi
            else {
                // alert("Username / Password Sudah Diisi");

                // collecting data ke dalam form
                let form = new FormData();
                form.append("username", txt_username.value);
                form.append("password", txt_password.value);
            }
        }
        
    </script>
</body>

</html>
