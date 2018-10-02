<?php 
if (isset($_POST['error'])){
  $error=$_POST['error'];
  $pesan="";

  if ($error=="variabel_belum_diset"){
    $pesan="<h3>Anda harus mengakses halaman ini dari Pendaftaran</h3>";
  }
  if ($error=="nama_kosong"){
    $pesan="<h3>Anda harus mengisi nama</h3>";
  }
  if ($error=="nama_harus_huruf"){
    $pesan="<h3>Nama harus berupa huruf</h3>";
  }
} else{
  $error="";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>form pendaftaran</title>
</head>
<body>
    <form action="prosespendaf.php" method="POST">
    <h1>Pendaftaran Mahasiswa</h1>
    <hr width="20%" align="left">
    <p>Isilah form pendaftaran berikut </p>
    <table>
    	<tr>
    	    <td valign="top">Nim</td>
    	    <td><input type="number" maxlength="10" name="nim"></td>
    	</tr>
    	<tr>
               <td valign="top">Nama</td>
               <td><input type="text" maxlength="25" name="nama"></td>
    	</tr>
        <tr>
               <td valign="top">Program Studi</td>
               <td><select name="prodi">
               <option value="Manajemen Informatika">Manajemen Informatika</option>
               <option value="Mulmed">Mulmed</option>
               <option value="IF">IF</option>
               <option value="TI">TI</option>
               <option value="DKV">DKV</option>
               </select><br><br>
        </tr>
        <tr>
               <td valign="top">Fakultas</td>
               <td><select name="fakultas">
               <option value="FIT">FIT</option>
               <option value="FKB">FKB</option>
               <option value="FIK">FIK</option>
               <option value="FTE">FTE</option>
               <option value="FRI">FRI</option>
               <option value="FEB">FEB</option>
               <option value="FIF">FIF</option>
               </select><br><br>
        </tr>
        <tr> 
            <td valign="top">Hobi</td>
            <td><input type="checkbox" name="hobi[]" value="Traveling">Traveling
                <input type="checkbox" name="hobi[]" value="Membaca">Membaca
                <input type="checkbox" name="hobi[]" value="Nonton">Nonton 
            </td>
            
            </tr>
        <tr>
               <td valign="top">Jenis Kelamin</td>
               <td><input type="radio"  name="JenisKelamin" value="laki-laki" required>laki-laki
                    <input type="radio"  name="JenisKelamin" value="perempuan" required>perempuan
               </td>
        </tr>
    	<tr>
    	    <td valign="top">Email</td>
    	    <td><input type="email" name="email" placeholder="@gmail.com"></td>
    	</tr>

        <tr>
            <td valign="top"> Pilih foto : </td>
            <td><input name="pict" type="file" accept="image/*"></td>
        </tr>
        <tr>
    	    <td colspan="2"><input type="submit" value="Kirim" name="submit"></td>
    	</tr>
    </table>
</body>
</html>