<!DOCTYPE html>
<?php
    include_once("koneksi.php");
?>
<html lang="en">
<head>
    <title>SIMAK DOSEN</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
   <div class="container">
   <h1>SIMAK DOSEN</h1>
   <center>
    <div class="header">
        <table style="border-style:none; margin-left:0px;">
            <tr>
                <td>
                    <select id="nip" class="boxSelect">
                        <option value="asc">Sorting berdasar NIP</option>
                        <option value="asc">Urut Ascending</option>
                        <option value="desc">Urut Descending</option>
                    </select>
                </td>
                <td>
                    <select id="matkul" class="boxSelect">
                        <option value="all">Filter berdasar penjaluran</option>
                        <option value="Analisis Numerik">Analisis Numerik</option>
                        <option value="Basis Data">Basis Data</option>
                        <option value="Bahasa Inggris Dasar">Bahasa Inggris Dasar</option>
                        <option value="Etika">Etika</option>
                        <option value="Matematika Diskrit">Matematika Diskrit</option>
                        <option value="Matematika Diskrit 2">Matematika Diskrit 2</option>
                        <option value="Pengantar AI">Pengantar AI</option>
                    </select>
                </td>
                <td>
                    <input type="text" id="cari" name="cari" placeholder="Pencarian...">
                </td>
            </tr>
        </table>
    </div>
    </center>
    <center>
        <table border="1" cellpadding="8px">
        <thead>
        <tr>
            <th>No.</th>
            <th>NIP</th>
            <th>Nama Dosen</th>
            <th>Mata Kuliah yang Diampu</th>
            <th>Alamat</th>
        </tr>
        </thead>
        <tbody id="table">
            <?php 
            include "koneksi.php";
            $query= mysqli_query($mysqli, "SELECT * FROM tb_dosen") or die(mysql_error());
            $no = 1;
            while($data = mysqli_fetch_array($query)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $data['nip']; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['matkul']; ?></td>
                <td><?php echo $data['alamat']; ?></td>
            </tr>
            <?php } ?>
    </tbody>
    </table>
    <a href="home.html"><button class="button">Home</button></a>
</center>
    </div> 
</body>
<script src="jquery.js"></script>
<script>
    $(document).ready(function(){
        $("#cari").keyup(function(){
            var cari = $("#cari").val();
            var nip = $("#nip").val();
            var matkul = $("#matkul").val();
            if(cari !=""){
                $.ajax({
                type:"get",
                url:"searchdosen.php",
                data:"cari="+cari+"&nip="+nip+"&matkul="+matkul,
                success: function(data){
                    $("#table").html(data);
                }
                });
            }
            else{
                $.ajax({
                url:"searchdosen.php",
                data:"cari="+cari+"&nip="+nip+"&matkul="+matkul,
                cache:false,
                success: function(msg){
                    $("#table").html(msg);
                }
                }); 
            }
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#matkul").change(function(){
            var cari = $("#cari").val();
            var nip = $("#nip").val();
            var matkul = $("#matkul").val();
            $.ajax({
                type:"get",
                url:"filterdosen.php",
                data:"cari="+cari+"&nip="+nip+"&matkul="+matkul,
                success: function(data){
                    $("#table").html(data);
                }
            })
        })
    })
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#nip").change(function(){
            var cari = $("#cari").val();
            var nip = $("#nip").val();
            var matkul = $("#matkul").val();
            $.ajax({
                type:"get",
                url:"dosen.php",
                data:"cari="+cari+"&nip="+nip+"&matkul="+matkul,
                success: function(data){
                    $("#table").html(data);
                }
            })
        })
    })
</script>
</html>