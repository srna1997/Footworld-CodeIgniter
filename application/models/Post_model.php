<?php

class Post_model extends CI_Model
{
    public function __construct ()
    {
        $this->load->database();
    }

    public function get_posts($slug = FALSE)
    {
        if($slug === FALSE)
        {
            $this->db->order_by('id', 'DESC');
            $query = $this->db->get('posts');
            return $query->result_array();
        }

        $query = $this->db->get_where('posts', array('slug'=> $slug));  // treba skontat malo bolje get_where, =>
        return $query->row_array();
    }

    public function create_post()
    {
        $slug =url_title($this->input->post('title'));

        $data = array(
            'title' => $this->input->post('title'),
            'slug' => $slug,
            'body' => $this->input->post('body')
        );

        return $this->db->insert('posts',$data);
    }

    public function delete_post($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('posts');

        return true;
    }

    public function update_post()
    {
        $slug =url_title($this->input->post('title'));

        $data = array(
            'title' => $this->input->post('title'),
            'slug' => $slug,
            'body' => $this->input->post('body')
        );

        $this->db->where('id',$this->input->post('id'));
        return $this->db->update('posts',$data);
    }

    public function add_comment($id_user,$slug)
    {
        $data = array(
            'id_komentar' => NULL,
            'id_user' =>$id_user,
            'slug_post' => $slug,
            'content' =>$this->input->post('body')
        );
        //print_r($data);
       return $this->db->insert('komentar',$data);
       
    }

    public function get_comment($slug)
    {
        $query = $this->db->get_where('komentar', array('slug_post'=> $slug));  
        return $query->result_array();
    }

    public function delete_comment($id)
    {
        $this->db->where('id_komentar',$id);
        $this->db->delete('komentar');

        return true;
    }
}