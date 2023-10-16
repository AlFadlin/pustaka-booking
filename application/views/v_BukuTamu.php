<html>
<head>
    <title>Input Buku Tamu</title>
</head>
<body>
 <center>
 <form action="<?= base_url('web/cetak'); ?>"
method="post">
 <table>
    <tr>
        <th colspan="3">
        Input Buku Tamu
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
        <input type="text" name="nama" id="nama">
        </td>
    </tr>
    <tr>
        <th>Email</th>
        <td>:</td>
        <td>
        <input type="text" name="email" id="email">
        </td>
    </tr>
    <tr>
        <th>Komentar</th>
        <td>:</td>
        <td>
        <textarea type="text" name="komentar" rows="6" placeholder= "komentar" cols="25"></textarea>
        </td>
    </select>
    </td>
    </tr>
    <tr>
        <td colspan="3" align="center">
        <input type="submit" value="Submit">
        <input type="reset" value="Batal">
    </td>
    </tr>
 </table>
 </form>
 </center>
</body>
</html>