<?php
class Uploads extends CI_Model {

  var $tabel1 = 'pegawai';
  var $tabel2 = 'admin';

    function __construct() {
        parent::__construct();
    }

    function insert_pegawai($data){
       $this->db->insert($this->tabel1, $data);
       return TRUE;
     }

    function getPegawai() {
         return $this->db->get('pegawai');
    }

    function getSinglepegawai($id){
      return $query = $this->db->get_where('pegawai', array('id' => $id));
    }

    function updatepegawai($data, $id){
      $this->db->where('id', $id);
      $this->db->update($this->tabel1, $data);
      return TRUE;
    }

    function hapuspegawai($id){
      $this->db->delete('pegawai', array('id' => $id ));

    }

  }
