<?php
include 'koneksi.php';

$data = $_POST['data'];
$id = $_POST['id'];

?>
<?php
if ($data == "kabupaten") {
?>
<select id="form_kab">
    <option value=""> Kota/Kabupaten</option>
    <?php
        $daerah = mysqli_query($koneksi, "SELECT  * FROM regencies WHERE province_id ='$id' ORDER BY name ASC") or die ('Query Gagal');

        while ($d = mysqli_fetch_assoc($daerah)) {
        ?>
    <option value="<?php echo $d['id']; ?>"><?php echo $d['name']; ?></option>
    <?php
        }
        ?>
</select>
<?php
}
?>