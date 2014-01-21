<?php
class Files extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
    public function get($userid)  
    {  
        $query = $this->db->get_where('files', array('owner'=>$userid));  
        return $query->result();  
    }  
    public function add($file, $description)  
    {  
        $this->db->insert('files', array('owner'=>$this->session->userdata('userid'),'name'=>$file, 'description' =>$description ));  
    }
    public function delete($fileid)  
    {  
        $query = $this->db->get_where('files',array('id'=>$fileid));  
        $result = $query->result();  
        $query = $this->db->delete('files', array('id'=>$fileid));  
        return $result[0]->name;  
    }    
}