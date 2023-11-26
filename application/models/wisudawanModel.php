<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class wisudawanModel extends CI_Model {
	public function get_all()
	{
		$this->db->select('*');
        $this->db->from('wisudawan');

        return $this->db->get()->result();
	}
	public function create($data)
	{
		$this->db->insert('wisudawan', $data);
	}

	public function get_by_id($id){
		$this->db->select('*');
		$this->db->from('wisudawan');
		$this->db->where('id', $id);
		return $this->db->get()->row_array();
	}

	public function update($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->update('wisudawan', $data);
	}
	public function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('wisudawan');
	}
}
