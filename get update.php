<?php
    // koneksi database ke mysql
    include "coon.php";

    // membuat query/sql untk ambil data slruh pegawai
    $sql = "SELECT * FROM karyawan";
    $query = mysqli_query($conn, $sql);
    while($data = mysqli_fetch_array($query)){
    //    echo $data["nama_karyawan"]. " ";

        $item[] = array(
            'nama'=>$data["nama_karyawan"],
            'NIK' =>$data["NIK"]
            
           
        );
    } 
    
    $response = array(
        'status'=>'OK',
        'data'=>$item
    );

    echo json_encode($response);
?>