<?php
class araclar_model extends CI_Model {
    public $tableName = '';
    public function __construct()
    {
        parent::__construct();
        $this->tableName = 'tbl_araclar';
    }

    //tüm araçları listele
    public function GetAll()
    {
        //select * from tbl_araclar
        return $this->db->get($this->tableName)->result();
    }

    //seçilen araç bilgilerini getir
    public function Get($id)
    {
        //select * from tbl_araclar where arac_id=5
        return $this->db->where('arac_id',$id)->get($this->tableName)->row();
    }

    //bu metot sadece yöneticiler tarafından kullanılır
    public function Add($arac=array())
    {
        return $this->db->insert($this->tableName,$arac);
    }

    //bu metot sadece yöneticiler tarafından çalıştırılır
    public function Delete($id)
    {
        //delete from tbl_araclar where arac_id=5
        return $this->db->where('arac_id',$id)->delete($this->tableName);
    }

    //sadece yöneticiler çalıştıracak
    public function Update($data=array())
    {
        //update tbl_araclar set marka=m1, model=m2... where arac_id=3
        return $this->db->where('arac_id',$data['arac_id'])->update($this->tableName,$data);
    }

    public function UpdateImage($id)
    {
        //update tbl_araclar set resim_var_mi='E' where arac_id=$id
        $data=array('resim_var_mi'=>'E');
        $this->db->set($data);
        $this->db->where('arac_id',$id);
        return $this->db->update($this->tableName);
    }
}
?>