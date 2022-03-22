<?php
include('../server/koneksi.php');

// if (!$_POST) {
//     header('Location: regis.php');
//     exit;
// }

$ttl = $_POST['ttl'];
$newttl = date("d-m-Y", strtotime($ttl));
$TTL = $_POST['tempat'] . ", " . $newttl;
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <!-- icon bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
    <!-- remixicon -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />

    <!-- CSS -->
    <link rel="stylesheet" href="../admin/assets/css/style-signup3.css?<?php echo time() ?>">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <title>Register </title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="../admin/assets/img/sign/sign-logo.png" class="sign-logo" alt="">
                <h2 class="fw-bold registext pt-5 mt-2">Register FKP </h2>
                <h6>Buat akunmu dan jadilah member FKP</h6>
            </div>
            <div class="col-md-6">
                <img src="assets/img/imgRegister.svg" alt="">
            </div>
        </div>
    </div>

    <script>
    const file = document.querySelector('#file');
    file.addEventListener('change', (e) => {
        // Get the selected file
        const [file] = e.target.files;
        // Get the file name and size
        const {
            name: fileName,
            size
        } = file;

        const allowedExt = ["png", "jpg", "svg", "jpeg"];

        const myArray = fileName.split(".");
        let ext = myArray[myArray.length - 1];

        if (allowedExt.includes(ext)) {
            // Convert size in bytes to kilo bytes
            const fileSize = (size / 1000).toFixed(2);
            // Set the text content
            const fileNameAndSize = `${fileName} - ${fileSize}KB`;
            document.querySelector('#max').innerHTML = fileNameAndSize;
            document.getElementById("submit").disabled = false;
        } else {
            document.querySelector('#max').innerHTML = "File harus berupa foto";
            document.getElementById("submit").disabled = true;
        }
    });
    </script>

    <!-- preview -->
    <script>
    var loadFoto = function(event) {
        var output = document.getElementById('foto');
        var icon = document.getElementById('tambah');
        icon.style.display = "none";
        output.style.display = "block";

        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
        }
    };
    var loadKTP = function(event) {
        var output = document.getElementById('ktp');
        var icon = document.getElementById('tambah2');
        icon.style.display = "none";
        output.style.display = "block";

        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
        }
    };
    </script>

    <!-- Get Daerah -->
    <script type="text/javascript">
    $(document).ready(function() {
        $('body').on("change", "#provinsi", function() {
            var id = $(this).val();
            var data = "id=" + id + "&data=kabupaten";
            $.ajax({
                type: 'POST',
                url: "/server/get-daerah.php",
                data: data,
                success: function(hasil) {
                    $("#form_kab").html(hasil);

                }
            });
        });
    });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>