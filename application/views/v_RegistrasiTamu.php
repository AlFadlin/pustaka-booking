<html>
<head>
<title>Tampilan data tamu</title>
</head>
<body>
 <center>
 <table>
 <tr>
 <th colspan="3">
Tampilan Data Tamu
 </th>
 </tr>
 <tr>
 <td colspan="3">
 <hr>
 </td>
 </tr>
 <tr>
 <th>Nama Lengkap</th>
 <th>:</th>
 <td>
 <?= $nama; ?>
 </td>
 </tr>
 <tr>
 <td>Email</td>
 <td>:</td>
 <td>
 <?= $email; ?>
 </td>
 </tr>
 <tr>
 <td>Komentar</td>
 <td>:</td>
 <td>
 <?= $komentar; ?>
 </td>
 </tr>
 <tr>
 <td colspan="3" align="center">
 <a href="<?= base_url('web'); 
?>">Kembali</a>
 </td>
 </tr>
 </table>
 <hr>
 <td>Terimakasih Telah Mengisih Registrasi Buku Tamu</td>
 </center>
</body>
</html>