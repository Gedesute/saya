<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {
  
  public function checkAdmin($username, $pass){
    $query = "SELECT * FROM admin WHERE username = '". $username ."' AND password = '". $pass ."'";
    return $this->db->query($query);
  }

  public function getAdmin($username){
    $q = "SELECT * FROM admin WHERE username = '". $username ."'";
    $query = $this->db->query($q);

    return $query->row();
  }
  // disini untuk menambah obat, apa aja yang di tambah bisa di liat dari bawah sini
  public function insertObat(){
    $kode = $this->input->post('kode_obat');
    $nama = $this->input->post('nama');
    $bentuk = $this->input->post('bentuk');
    $harga  = $this->input->post('harga');
    $konsum = $this->input->post('konsumen');
    $manfaat= $this->input->post('manfaat');

    $q = "INSERT INTO obat VALUES
          ('$kode', '$nama', '$bentuk', '$konsum', '$manfaat', '$harga')";

    if($this->db->query($q))
      return true;
    else
      return false;
  }
   //disini apa aja yang bisa di update dalam daftar update
  public function updateObat($kode){
    $kode = $this->input->post('kode_obat');
    $nama = $this->input->post('nama');
    $bentuk = $this->input->post('bentuk');
    $harga  = $this->input->post('harga');
    $konsum = $this->input->post('konsumen');
    $manfaat= $this->input->post('manfaat');

    $q = "UPDATE obat SET kode_obat = '$kode', nama = '$nama', bentuk = '$bentuk',
          harga = $harga, konsumen = '$konsum', manfaat = '$manfaat'
          WHERE kode_obat = '$kode'";

    if($this->db->query($q))
      return true;
    else
      return false;
  }
  //  disini untuk hapus obat yang di ambil dari obat dan kode obat
  public function deleteObat($kode){
    $q = "DELETE FROM obat WHERE kode_obat = '$kode'";
    if($this->db->query($q))
      return true;
    else
      return false;
  }

}
