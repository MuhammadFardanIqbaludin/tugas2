<?php
    include 'koneksi.php';
    
    $no = 1;
    $data = mysqli_query($kon,"select * from mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Akademik</title>
    <style>
        body {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        }
        #customers {
          font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
          border-collapse: collapse;
          width: 50%;
          margin-left: 25%;
        }
        #customers td, #customers th {
          border: 1px solid #ddd;
          padding: 8px;
        }
        #customers tr:nth-child(even){background-color: #FF00FF;}
        #customers tr:hover {background-color: #FFD700;}
        #customers th {
          padding-top: 12px;
          padding-bottom: 12px;
          text-align: left;
          background-color: #0000FF;
          color: white;
        }
        .tbedit {
            background-color: #7FFFD4; /* Blue */
            border: none;
            color: black;
            padding: 5px 15px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 13px;
            margin: 4px 2px;
            cursor: pointer;
            
        }
        .tbhapus {
            background-color: #DEB887; /* Blue */
            border: none;
            color: black;
            padding: 5px 15px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 13px;
            margin: 4px 2px;
            cursor: pointer;
            
        }
        .tbadd {
            background-color: #FFE4C4; /* Blue */
            border: none;
            color: black;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 15px;
            margin: 4px 2px;
            cursor: pointer;
            
        }
    </style>
</head>
<body>
	<p>NIM  : 16.01.53.0166</p>
    <p>Nama : Muhammad Fardan Iqbaludin</p>
    
    <hr>
    <center><h2>Data Mahasiswa</h2></center>
    <table id="customers" border="1">
        <tr>
            <th>No</th>
            <th>Nim</th>
            <th>Nama</th>
        </tr>
        <?php while($d = mysqli_fetch_array($data)){?>
        <tr>
            <td><?=$no++?></td>
            <td><?=$d['nim']?></td>
            <td><?=$d['nama']?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>