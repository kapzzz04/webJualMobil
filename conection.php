<?php

$conn = mysqli_connect("localhost", "root", "", "db_webmobil");

// ambil data dari table / query data 

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
    $rows [] = $row;
    }

    return $rows;
}

function hapus($hapus) {
    global $conn;
    $result = mysqli_query($conn, $hapus);

    return mysqli_affected_rows($conn);
}

  
// tambah data user
function tambahUsr($data) {
    global $conn;

    $nama = htmlspecialchars($data['nama_user']);
    $tgl = htmlspecialchars($data['tgl_lahir']);
    $username = htmlspecialchars($data['username']);
    $password = htmlspecialchars($data['password']);
    $email = htmlspecialchars($data['email']);
    $role = htmlspecialchars($data['role']);

        $query = "INSERT INTO `users`(`id_user`, `nama_user`, `tgl_lahir`, `username`, `password`, `email`, `role`) 
        VALUES ('','$nama','$tgl','$username','$password', '$email', '$role')";
        
        

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
  }

  
// edit data users
function editUsr($data) {
    global $conn;

    $id = $data['id_user'];
    $nama = htmlspecialchars($data['nama_user']);
    $tgl = htmlspecialchars($data['tgl_lahir']);
    $username = htmlspecialchars($data['username']);
    $password = htmlspecialchars($data['password']);
    $email = htmlspecialchars($data['email']);
    $role = htmlspecialchars($data['role']);

$query = "UPDATE users SET 
          nama_user = '$nama',
          tgl_lahir = '$tgl',
          username = '$username',
          password = '$password',
          email = '$email',
          role = '$role' WHERE id_user = $id";
        
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
  }


//   edit data mobil
  function edit($data) {
    global $conn;

        $id = $data['id_mobil'];
        $nama = htmlspecialchars($data['nama_mobil']);
        $harga = htmlspecialchars($data['harga_mobil']);
        $id_k = $data['id_kategori'];
        $id_m = $data['id_merek'];

        $query = "UPDATE mobil SET
                    nama_mobil = '$nama',
                    id_kategori = $id_k,
                    id_merek = $id_m,
                    harga_mobil = '$harga',
                    updated_at = CURRENT_TIMESTAMP()
                    WHERE id_mobil = $id
                    ";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
  }

  
// tambah data mobil
function tambah($data) {
    global $conn;

    $nama = htmlspecialchars($data['nama_mobil']);
    $harga = htmlspecialchars($data['harga_mobil']);
    $id_k = $data['id_kategori'];
    $id_m = $data['id_merek'];
    
        $query = "INSERT INTO `mobil`(`id_mobil`, `nama_mobil`, `id_kategori`, `id_merek`, `harga_mobil`, `created_at`) 
        VALUES ('', '$nama', $id_k, $id_m, '$harga', CURRENT_TIMESTAMP())";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
  }

?>