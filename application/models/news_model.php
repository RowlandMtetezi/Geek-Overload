<?php
class News_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
		
	}
	public function get_news_author($userid)  
    {  
        $query = $this->db->get_where('news', array('author'=>$userid));  
        return $query->result();  
    }  
   
    public function delete_news_author($newsid)  
    {  
        $query = $this->db->get_where('news',array('id'=>$newsid));  
        $result = $query->result();  
        $query = $this->db->delete('news', array('id'=>$newsid));  
        return $result[0]->name;  
    } 


	public function get_news($slug = FALSE)
    {
	    if ($slug === FALSE)
	{
		$query = $this->db->get('news');
		return $query->result_array();
	}

	    $query = $this->db->get_where('news', array('slug' => $slug));
	    return $query->row_array();
    }
    public function set_news()
    {
	    $this->load->helper('url');

	    $slug = url_title($this->input->post('title'), 'dash', TRUE);

	    $data = array(
	    	'author'=> $this->session->userdata('userid'),
		    'title' => $this->input->post('title'),
		    'slug' =>  $slug,
		    'text' =>  $this->input->post('text')
	);

	    return $this->db->insert('news', $data);
   }
}