<?php

include 'mahasiswa.php';

$db = new mahasiswa();

$data_akun = $db->query("SELECT * FROM tb_mahasiswa");

if(isset($_REQUEST['tambah']))
{
    $id = $_REQUEST['id'];
    $nim = $_REQUEST['nim'];
    $nama = $_REQUEST['nama'];
    $jurusan = $_REQUEST ['jurusan'];
    $db->query("INSERT INTO tb_mahasiswa VALUES ('$id', '$nim', '$nama','$jurusan')");
    header('Location: student.php');
}

if(isset($_REQUEST['delete']))
{
    $id = $_REQUEST['delete'];
    $db->query("DELETE FROM tb_mahasiswa WHERE id=$id");
    header('Location: student.php');
}

if(isset($_REQUEST['update']))
{
    $id = $_GET['id_key'];
    $nim = $_REQUEST['nim'];
    $nama = $_REQUEST['nama'];
    $jurusan = $_REQUEST['jurusan'];
    $db->query("UPDATE tb_mahasiswa SET nama='$nama', nim='$nim', jurusan='$jurusan' WHERE id=$id");
    header('Location: student.php');
}

if(isset($_GET['id_key']))
{
    $id = $_GET['id_key'];
    $data = $db->cariId($id);
}