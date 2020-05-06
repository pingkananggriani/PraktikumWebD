<!DOCTYPE html>
<?php
include_once("koneksi.php");
?>
<html lang="en">
<head>
    <title>SIMAK MAHASISWA</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
   <div class="container">
   <h1>SIMAK MAHASISWA</h1>
   <center>
    <div class="header">
        <table style="border-style:none; margin-left:0px;">
            <tr>
                <td>
                    <select id="nim" class="boxSelect">
                        <option value="asc">Sorting berdasar NIM</option>
                        <option value="asc">Urut Ascending</option>
                        <option value="desc">Urut Descending</option>
                    </select>
                </td>
                <td>
                    <select id="jalur" class="boxSelect">
                        <option value="all">Filter berdasar penjaluran</option>
                        <option value="Text Mining">Text Mining</option>
                        <option value="Big Data">Big Data</option>
                        <option value="Keamanan Digital">Keamanan Digital</option>
                        <option value="Komputasi">Komputasi</option>
                        <option value="UI/UX">UI/UX</option>
                        <option value="MIR">MIR</option>
                        <option value="Multimedia">Multimedia</option>
                        <option value="Knowledge Discovery">Knowledge Discovery</option>
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
            <th>NIM</th>
            <th>Nama Mahasiswa</th>
            <th>Penjurusan</th>
            <th>Alamat</th>
        </tr>
        </thead>
        <tbody id="table">
            <?php 
            include "koneksi.php";
            $query= mysqli_query($mysqli, "SELECT * FROM tb_mhs") or die(mysql_error());
            $no = 1;
            while($data = mysqli_fetch_array($query)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $data['nim']; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['jalur']; ?></td>
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
            var nim = $("#nim").val();
            var jalur = $("#jalur").val();
            if(cari !=""){
                $.ajax({
                type:"get",
                url:"search.php",
                data:"cari="+cari+"&nim="+nim+"&jalur="+jalur,
                success: function(data){
                    $("#table").html(data);
                }
                });
            }
            else{
                $.ajax({
                url:"search.php",
                data:"cari="+cari+"&nim="+nim+"&jalur="+jalur,
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
        $("#jalur").change(function(){
            var cari = $("#cari").val();
            var nim = $("#nim").val();
            var jalur = $("#jalur").val();
            $.ajax({
                type:"get",
                url:"filter.php",
                data:"cari="+cari+"&nim="+nim+"&jalur="+jalur,
                success: function(data){
                    $("#table").html(data);
                }
            })
        })
    })
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#nim").change(function(){
            var cari = $("#cari").val();
            var nim = $("#nim").val();
            var jalur = $("#jalur").val();
            $.ajax({
                type:"get",
                url:"Nim.php",
                data:"cari="+cari+"&nim="+nim+"&jalur="+jalur,
                success: function(data){
                    $("#table").html(data);
                }
            })
        })
    })
</script>
</html>