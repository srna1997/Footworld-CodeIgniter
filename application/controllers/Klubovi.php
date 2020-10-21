<?php

class Klubovi extends CI_Controller
{

    public function index()
    {
        if(empty($this->session->id))
        {
            redirect('home');
        }

        $data['klub'] = $this->Klub_model->get_all_clubs();
        
        $this->load->view('templates/header');
        $this->load->view('klub/index',$data);
        $this->load->view('templates/footer');
    }

    public function klub($id_klub)
    {
        $data['club']=$this->Klub_model->get_club_by_id($id_klub);
        $data['player']=$this->Klub_model->get_player_by_club($id_klub);

     
        $this->load->view('templates/header');
        $this->load->view('klub/club',$data);
        $this->load->view('templates/footer');
    }

    public function igrac($id)
    {
        $data['igrac'] =$this->Klub_model->get_player_by_id($id);
        
        $this->load->view('templates/header');
        $this->load->view('klub/igrac',$data);
        $this->load->view('templates/footer');

    }
}