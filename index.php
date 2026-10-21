
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai Ujian</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <h2>Form Nilai Ujian</h2>

        <form method="POST">
            <label>Nama:</label>
            <input type="text" name="nama" required>

            <label>Email:</label>
            <input type="email" name="email" required>

            <label>Nilai Ujian:</label>
            <input type="number" name="nilai" min="0" max="100" required>

            <button type="submit" name="submit">Periksa Nilai</button>
        </form>

        <?php
        if (isset($_POST['submit'])) {
            $nama = htmlspecialchars($_POST['nama']);
            $email = htmlspecialchars($_POST['email']);
            $nilai = $_POST['nilai'];

            if ($nilai > 70) {
                $status = "Lulus";
            } elseif ($nilai < 70) {
                $status = "Remedial";
            } else {
                $status = "Nilai tepat 70";
            }

            echo "<div class='hasil'>";
            echo "<h3>Hasil Ujian</h3>";
            echo "Nama: " . $nama . "<br>";
            echo "Email: " . $email . "<br>";
            echo "Nilai Ujian: " . $nilai . "<br>";
            echo "Status: <b>" . $status . "</b>";
            echo "</div>";
        }
        ?>

    </div>

</body>
</html>
