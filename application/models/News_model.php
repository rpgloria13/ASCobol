<?php
class News_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function get_news($id = FALSE)
    {
        if ($id === FALSE)
        {
            $query = $this->db->get('news');
            return $query->result_array();
        }

        $query = $this->db->get_where('news', array('id' => $id));
        return $query->row_array();
    }

    public function get_news_by_id($id = 0)
    {
        if ($id === 0)
        {
            $query = $this->db->get('news');
            return $query->result_array();
        }

        $query = $this->db->get_where('news', array('id' => $id));
        return $query->row_array();
    }

    public function set_news($id = 0)
    {
        $this->load->helper('url');

        $slug = url_title($this->input->post('title'), 'dash', TRUE);

        $data = array(
            'cname' => $this->input->post('cname'),
            'nname' => $this->input->post('nname'),
            'email' => $this->input->post('email'),
            'home_address' => $this->input->post('home_address'),
            'gender' => $this->input->post('gender'),
            'cpnumber' => $this->input->post('cpnumber'),
            'comments' => $this->input->post('comments')
        );

        if ($id == 0) {
            return $this->db->insert('news', $data);
        } else {
            $this->db->where('id', $id);
            return $this->db->update('news', $data);
        }
    }

    public function delete_news($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('news');
    }
}