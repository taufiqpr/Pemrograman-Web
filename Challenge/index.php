<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validasi</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>

    <h2>Form Validasi</h2>
    
    <form action= "tampil.php" method="post">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" required>
        <br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <br><br>

        <label>Jenis Kelamin:</label>
        <input type="radio" name="jenisKelamin" value="Laki-laki" required>
        <label for="laki">Laki-laki</label>
        <input type="radio" name="jenisKelamin" value="Perempuan" required>
        <label for="perempuan">Perempuan</label>
        <br><br>

        <label for="operasi">Operasi Aritmatika:</label>
        <select id="operasi" name="operasi" required>
            <option value="">Pilih Operasi</option>
            <option value="+">Penambahan (+)</option>
            <option value="-">Pengurangan (-)</option>
            <option value="*">Perkalian (*)</option>
            <option value="/">Pembagian (/)</option>
        </select>
        <br><br>

        <label for="angka1">Angka 1:</label>
        <input type="number" id="angka1" name="angka1" required>
        <br><br>

        <label for="angka2">Angka 2:</label>
        <input type="number" id="angka2" name="angka2" required>
        <br><br>

        <input type="submit" value="Submit">
    </form>

    <script>
        function validateForm(event) {
            event.preventDefault();

            var nama = document.getElementById("nama").value;
            var email = document.getElementById("email").value;
            var jenisKelamin = document.querySelector('input[name="jenisKelamin"]:checked');
            var operasi = document.getElementById("operasi").value;
            var angka1 = parseFloat(document.getElementById("angka1").value);
            var angka2 = parseFloat(document.getElementById("angka2").value);

            // Validasi Nama
            if (nama.trim() === "") {
                alert("Nama wajib diisi.");
                return;
            }

            // Validasi Email
            if (email.trim() === "") {
                alert("Email wajib diisi.");
                return;
            }

            // Validasi Jenis Kelamin
            if (!jenisKelamin) {
                alert("Jenis Kelamin wajib dipilih.");
                return;
            }

            // Validasi Operasi Aritmatika
            if (operasi === "") {
                alert("Operasi Aritmatika wajib dipilih.");
                return;
            }

            // Validasi Angka
            if (isNaN(angka1) || isNaN(angka2)) {
                alert("Angka harus diisi dengan nilai numerik.");
                return;
            }

            
        }

        function calculateResult(operasi, angka1, angka2) {
            // Implementasikan operasi aritmatika berdasarkan pilihan pengguna
            switch (operasi) {
                case "+":
                    return angka1 + angka2;
                case "-":
                    return angka1 - angka2;
                case "*":
                    return angka1 * angka2;
                case "/":
                    return angka1 / angka2;
                default:
                    return "Operasi tidak valid";
            }
        }
    </script>

</body>
</html>
