<?php
include('../koneksi.php');

// if (isset($_POST['submit'])) {
//     // $nama = explode(" ", $_SESSION['nama']);
//     $oleh = $_POST['nama'];
//     $judul = $_POST['judul'];
//     $isi = $_POST['isi'];

//     $foto = $_FILES['foto']['name'];
//     $fotoBaru = rand(1000, 100000) . "-" . $foto;

//     if(move_uploaded_file($_FILES['foto']['tmp_name'],'berita/img/'.$fotoBaru)){
//         $sql = "INSERT INTO berita (oleh, tanggal, judul, isi, foto) VALUES ('$oleh', '$tanggal', '$judul', '$isi', '$fotoBaru'";
//         $query = mysqli_query($koneksi, $sql);
//         if ($query) {
//             echo "Berhasil";
//         } else {
//             var_dump($sql);
//         }
//     }else{
//         echo $_FILES['foto']['error'];
//     }
// }

var_dump($_POST['isi']);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        <textarea name="isi" id="editor">
            
        </textarea>
        <button type="submit" name="submit">submit</button>
    </form>

    <script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>

    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>

</body>

</html>