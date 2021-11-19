<?php
defined('BASEPATH') or exit('No script access allowed');

class ModelUser extends CI_Model
{
    public function simpandata($data = null)
    {
        return $this->db->insert('user', $data);
    }
    public function cekData($where = null)
    {
        return $this->db->get_where('user', $where);
    }
    public function getUserWhere($where = null)
    {
        return $this->db->get_where('user', $where);
    }
    public function cekUserAccess($where = null)
    {
        $this->db->select('*');
        $this->db->form('access_menu');
        $this->db->where($where);
        return $this->db->get();
    }
    public function getUserLimit()
    {
        $this->db->select('*');
        $this->db->form('User');
        $this->db->limit(10,0);
        return $this->db->get();
    }
}