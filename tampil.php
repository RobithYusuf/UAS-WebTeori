<html>
<head>
    <title>Script PHP untuk Menampilkan Data dari Database Derdasarkan Id</title>
</head>
<body>
    <h2>Data Karyawan</h2>
    <table border="1" cellpadding="4">
        <tr bgcolor="silver">
            <th>No</th>
            <th>Username</th>
            <th>Realname</th>
            <th>Gaji</td>
            <th>Status</th>
           
        </tr>
        <?php
        include "koneksi.php";
        $no=0;
        $query    =mysqli_query($conn, "SELECT tb_karyawan.username, tb_karyawan.realname, tb_gaji.gaji, tb_karyawan.statuss
         FROM tb_karyawan INNER JOIN tb_gaji ON tb_karyawan.id_jabatan=tb_gaji.id ");
        while($result =mysqli_fetch_array($query)){
        $no++    
        ?>
        <tr>
            <td><?php echo $no?></td>
            <td><?php echo $result['username']?></td>
            <td><?php echo $result['realname']?></td>
            <td><?php echo $result['gaji']?></td>
            <td><?php echo $result['statuss']?></td>
            
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>