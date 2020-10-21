<?php 

    class Admin_model extends CI_Model
    {
        public function __construct()
        {
            $this->load->database();
        }

        public function get_users()
    {
        $query = $this->db->get('korisnik');
        return $query->result_array();
    }

    public function get_by_id($id)
    {
        $query= $this->db->get_where('korisnik', array('id_user'=>$id));
        return $query->row();
    }

        public function update_user()
        {
            $data = array(
        'username' => $this->input->post('username'),
        'password' => $this->input->post('password'),
        'mail' => $this->input->post('email'),
        'OmiljeniKlub' => $this->input->post('omiljeniklub'),
        'id_ovlast' => $this->input->post('ovlast'),

         );
            $this->db->where('id_user',$this->input->post('id'));
            $result = $this->db->update('korisnik',$data);
            return $result;
        }

        public function delete_user($id)
        {
        $this->db->delete('komentar', array('id_user'=>$id));
           $this->db->delete('korisnik',array('id_user'=>$id));
          
        }
    }