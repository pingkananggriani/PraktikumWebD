<html>
<head>
  <link type="text/css" rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h2>Sorting dan Filter SIMAK</h2>    
    <button>Mahasiswa</button>  
    <table width="100%" style="color:#fff;">
      <tr>
        <td>
          <b>NIM</b>
          <select id="nim" class="input-form">
            <option value="asc">--- sorting by nim</option>
            <option value="asc">Urutkan ascending</option>
            <option value="desc">Urutkan descending</option>
          </select>
        </td>
        <td>
          <b>Nama</b>
          <select id="nama" class="input-form">
            <option value="asc">--- sorting by nama</option>
            <option value="asc">Urutkan dari a-z</option>
            <option value="desc">Urutkan dari z-a</option>
          </select>
        </td>
        <td>
          <b>Jenis Kelamin</b>
          <select id="jk" class="input-form">
            <option value="all">--- filter by jk</option>
            <option value="p">Perempuan</option>
            <option value="l">Laki-laki</option>
          </select>
        </td>
        <td>
          <b>Agama</b>
          <select id="agama" class="input-form">
            <option value="all">--- filter by agama</option>
            <option value="Islam">Islam</option>
            <option value="Protestan">Protestan</option>
            <option value="Katolik">Katolik</option>
            <option value="Hindu">Hindu</option>
            <option value="Buddha">Buddha</option>
            <option value="Kong Hu Cu">Kong Hu Cu</option>   
          </select>
        </td>
        <td>
          <b>Pencarian</b>
          <input type="text" class="input-form" id="cari" style="width:225px;" placeholder="Cari nama/nim">
        </td>
      </tr>
    </table>
    <table border="1" width="100%" class="tabel" style="margin-top:5px">
      <thead>
        <tr>
          <th>No</th>
          <th>NIM</th>
          <th>Nama</th>
          <th>Jenis Kelamin</th>
          <th>TTL</th>
          <th>Alamat</th>
          <th>Agama</th>
          <th>No Telp</th>
          <th>Fakultas</th>
          <th>Prodi</th>
        </tr>
      </thead>
      <tbody id="tabel">
      <?php 
        include "koneksi.php";
        $query_mysqli = mysqli_query($koneksi, "SELECT * FROM mahasiswa")or die(mysql_error());
        $nomor = 1;
        while($data = mysqli_fetch_array($query_mysqli)){
      ?>
      <tr>
        <td align="center"><?php echo $nomor++; ?></td>
        <td><?php echo $data['nim']; ?></td>
        <td><?php echo $data['nama']; ?></td>
        <td align="center"><?php echo $data['jk']; ?></td>
        <td><?php echo $data['tmp_lahir'].", ".$data['tgl_lahir'];; ?></td>
        <td><?php echo $data['alamat']; ?></td>
        <td><?php echo $data['agama']; ?></td>
        <td><?php echo $data['no_telp']; ?></td>
        <td><?php echo $data['fakultas']; ?></td>
        <td><?php echo $data['prodi']; ?></td>
      </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</body>
    <script src="js/jquery.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $("#cari").keyup(function() {
          var cari  = $("#cari").val(); 
          var nim   = $("#nim").val(); 
          var jk    = $("#jk").val();
          var agama = $("#agama").val();
          var nama  = $("#nama").val();
          if (cari != ""){
            $("#tabel").html
            $.ajax({
              type:"get",
              url:"carikey.php",
              data:"cari="+cari+"&nim="+nim+"&jk="+jk+"&agama="+agama+"&nama="+nama,
              success: function(data){
                $("#tabel").html(data);
              }
            });
          }
          else
          {
            $.ajax({
              url:" carikey.php",
              data:"cari="+cari+"&nim="+nim+"&jk="+jk+"&agama="+agama+"&nama="+nama,
              cache: false,
              success: function(msg){
                $("#tabel").html(msg);
              }
            });
          }
        });
      });
    </script>
    <!-- Filter -->
    <script type="text/javascript">
      $(document).ready(function() {
        $("#agama, #jk").change(function() {
          var cari  = $("#cari").val(); 
          var nim   = $("#nim").val(); 
          var jk    = $("#jk").val();
          var agama = $("#agama").val();
          var nama  = $("#nama").val();
          $("#tabel").html("<tr><td colspan=10><img src='img/loading.gif'/></td></tr>")  
          $.ajax({
              type:"get",
              url:"changefilter.php",
              data:"cari="+cari+"&nim="+nim+"&jk="+jk+"&agama="+agama+"&nama="+nama,
              success: function(data){
                $("#tabel").html(data);
              }
            });
          });
      });
    </script>
    <!-- Sorting Nama -->
    <script type="text/javascript">
      $(document).ready(function() {
        $("#nama").change(function() {
          var cari  = $("#cari").val(); 
          var nim   = $("#nim").val(); 
          var jk    = $("#jk").val();
          var agama = $("#agama").val();
          var nama  = $("#nama").val();
          $("#tabel").html("<tr><td colspan=10><img src='img/loading.gif'/></td></tr>")  
          $.ajax({
              type:"get",
              url:"namamhs.php",
              data:"cari="+cari+"&nim="+nim+"&jk="+jk+"&agama="+agama+"&nama="+nama,
              success: function(data){
                $("#tabel").html(data);
              }
            });
          });
      });
    </script>
    <!-- Sorting Nim -->
    <script type="text/javascript">
      $(document).ready(function() {
        $("#nim").change(function() {
          var cari  = $("#cari").val(); 
          var nim   = $("#nim").val(); 
          var jk    = $("#jk").val();
          var agama = $("#agama").val();
          var nama  = $("#nama").val();
          $("#tabel").html("<tr><td colspan=10><img src='img/loading.gif'/></td></tr>")  
          $.ajax({
              type:"get",
              url:"nimmhs.php",
              data:"cari="+cari+"&nim="+nim+"&jk="+jk+"&agama="+agama+"&nama="+nama,
              success: function(data){
                $("#tabel").html(data);
              }
            });
          });
      });
    </script>
</html>