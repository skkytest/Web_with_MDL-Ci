<?php
class news_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function record_count($name){
    	return $this->db->count_all($name);
    }

    public function fetch($limit, $start){
    	$this->db->limit($limit, $start);
        $query = $this->db->get("subjects");
        return $query->result_array();
    }

    public function get_subjects($slug = FALSE)
	{
	    if ($slug === FALSE)
	    {
	        $query = $this->db->get('subjects');
	        return $query->result_array();
	    }

	    $query = $this->db->get_where('subjects', array('slug' => $slug));
	    return $query->row_array();
	}

	public function set_news()
	{
	    //$this->load->helper('url');

	    //$slug = url_title($this->input->post('title'), 'dash', TRUE);

	    $data = array(
	        'word' => $this->input->post('title'),
	        //'slug' => $slug,
	        'definition' => $this->input->post('text')
	    );

	    return $this->db->insert('subjects', $data);
	}

}
