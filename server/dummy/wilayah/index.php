<!DOCTYPE html>
<html>

<head>
    <title>Menampilkan Data Daerah - www.malasngoding.com</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <?php
    include '../../koneksi.php';
    ?>

    <style type="text/css">
        body {
            font-family: "Roboto";
        }
    </style>

    <h2>Data Daerah Indonesia Dengan PHP, MySQLi & Ajax <br> <a href="https://www.malasngoding.com/menampilkan-data-daerah-indonesia-php-mysqli-ajax">www.malasngoding.com</a></h2>

    <select id="form_prov">
        <option value="">Pilih Provinsi</option>
        <?php
        $daerah = mysqli_query($koneksi, "SELECT * FROM provinces ORDER BY name ASC");
        while ($d = mysqli_fetch_array($daerah)) {
        ?>
            <option value="<?php echo $d['id']; ?>"><?php echo $d['name']; ?></option>
        <?php
        }
        ?>
    </select>

    <select id="form_kab"></select>

    <span id="error"></span>

    <script type="text/javascript">
        $(document).ready(function() {

            // sembunyikan form kabupaten, kecamatan dan desa
            $("#form_kab").hide();

            // ambil data kabupaten ketika data memilih provinsi
            $('body').on("change", "#form_prov", function() {
                var id = $(this).val();
                var data = "id=" + id + "&data=kabupaten";
                $.ajax({
                    type: 'POST',
                    url: "get-daerah.php",
                    data: data,
                    success: function(hasil) {
                        $("#form_kab").html(hasil);
                        $("#form_kab").show();
                    }
                });
            });

        });
    </script>
</body>

</html>