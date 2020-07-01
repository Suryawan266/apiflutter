<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
class Penjualankucing extends CI_Controller{
    function __construct(){
    parent::__construct();
    }
//untuk get data
function index(){
    $result=$this->db->get('penjualan_kucing')->result();
    echo json_encode($result);
}
//untuk save data
function save(){
    $data=array(
        'nama'=>$_POST['nama'],
        'alamat'=>$_POST['alamat'],
        'jumlah'=>$_POST['jumlah'],
        'tanggal'=>$_POST['tanggal'],
        'jeniskucing'=>$_POST['jeniskucing']
    );
    $this->db->insert('penjualan_kucing',$data);
}
//untuk update data
function save_update(){
    $data=array(
        'nama'=>$_POST['nama'],
        'alamat'=>$_POST['alamat'],
        'jumlah'=>$_POST['jumlah'],
        'tanggal'=>$_POST['tanggal'],
        'jeniskucing'=>$_POST['jeniskucing']
    );
    $this->db->where('id',$_POST['id'])->update('penjualan_kucing',$data);
}
//untuk delete data
function delete($id){
    $this->db->where('id',$id)->delete('penjualan_kucing');
    }
}
