<?php 

class User_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function insert_user()
    {
        $data = array(
        'id_user' => NULL,
        'username' => $this->input->post('username'),
        'password' => $this->input->post('password'),
        'mail' => $this->input->post('email'),
        'OmiljeniKlub' => $this->input->post('omiljeniklub'),
        'id_ovlast' => 3,

        );

        $this->db->insert('korisnik',$data); //query

    }

    public function get_by_username($username)
    {
        $query = $this->db->get_where('korisnik', array('username'=>$username));
        return $query->row(); //u ovoj funciji nemas vise provjere, samo dohvati usera ako postojis

    }

    public function get_by_id($id)
    {
        $query= $this->db->get_where('korisnik', array('id_user'=>$id));
        return $query->row();
    }

}

//za admina i moderatora posebna funkcija