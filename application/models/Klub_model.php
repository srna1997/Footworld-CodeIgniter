<?php

class Klub_model extends CI_Model
{
    public function __construct ()
    {
        $this->load->database();
    }

    public function get_all_clubs()
    {
        $query = $this->db->get('klub');
        return $query->result_array();
    }

    public function get_club_by_id($id)
    {
        $query = $this->db->get_where('klub',array('id_klub' => $id));
        return $query->row();
    }

    public function get_player_by_club($id_klub)
    {
        $query = $this->db->get_where('igrač',array('id_klub' =>$id_klub));
        return $query->result_array();
    }

    public function get_player_by_id($id)
    {
        $query = $this->db->get_where('igrač',array('id_igrac' =>$id));
        return $query->row();
    }

    public function get_club_by_name($n)
    {
        $query = $this->db->get_where('klub',array('naziv'=>$n));
        return $query->row();
    }

    public function create_club()
    {
        $data = array(
            'id_klub' => NULL,
            'naziv' => $this->input->post('naziv'),
            'mjesto' => $this->input->post('mjesto'),
            'slika' => $this->input->post('slika'),
            'opis' => $this->input->post('opis')
        );

        return $this->db->insert('klub',$data);
    }

    public function update_club()
    {
        $data = array(
            'naziv' => $this->input->post('naziv'),
            'mjesto' => $this->input->post('mjesto'),
            'slika' => $this->input->post('slika'),
            'opis' => $this->input->post('opis')
        );

            $this->db->where('id_klub',$this->input->post('id'));
            $result = $this->db->update('klub',$data);
            return $result;
    }

    public function delete_club($id)
    {
        $this->db->where('id_klub',$id);
        $this->db->delete('klub');

        return true;
    }

    public function get_all_player()
    {
        $query = $this->db->get('igrač');
        return $query->result_array();
    }

    public function create_player($id_klub)
    {
        $data = array(
            'id_igrac' => NULL,
            'ime' => $this->input->post('ime'),
            'prezime' => $this->input->post('prezime'),
            'godina' => $this->input->post('godina'),
            'država' => $this->input->post('država'),
            'pozicija' => $this->input->post('pozicija'),
            'id_klub' => $id_klub,
            'slika' => $this->input->post('slika'),
            'opis' => $this->input->post('opis')
        );

        return $this->db->insert('igrač',$data);
    }

    public function update_player($id)
    {
        $data = array(
            'ime' => $this->input->post('ime'),
            'prezime' => $this->input->post('prezime'),
            'godina' => $this->input->post('godina'),
            'država' => $this->input->post('država'),
            'pozicija' => $this->input->post('pozicija'), 
            'slika' => $this->input->post('slika'),
            'opis' => $this->input->post('opis')

        );
            $this->db->where('id_igrac',$id);
            $result = $this->db->update('igrač',$data);
            return $result;
    }

    public function delete_player($id)
    {
        $this->db->where('id_igrac',$id);
        $this->db->delete('igrač');

        return true;
    }
}