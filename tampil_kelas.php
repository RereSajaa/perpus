<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Kelas</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<body>
    <?php include "koneksi.php";
    $query_kelas = mysqli_query($conn, "SELECT * FROM kelas");
    ?>

</body>
<table class="table table-hover table-striped">
    <tr>
        <th>No.</th>
        <th>Kelas</th>
        <th>Expertise</th>
    </tr>
    <?php while ($data_kelas = mysqli_fetch_array($query_kelas)) { ?>
        <tr>
            <td><?= $data_kelas['id_kelas'] ?></td>
            <td><?= $data_kelas['nama_kelas'] ?></td>
            <td><?= $data_kelas['kelompok'] ?></td>
        </tr>

    <?php } ?>

</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

</html>