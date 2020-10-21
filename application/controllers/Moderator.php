<?php

Class Moderator extends CI_Controller
{
    public function view()
    {           
        if($this->session->ovlast != 2)
        {
            redirect('home');
        }

        $this->load->view('templates/header');
        $this->load->view('moderator/index');
        $this->load->view('templates/footer');
    }

    public function club()
    {
        $data['klub']=$this->Klub_model->get_all_clubs();

        $this->load->view('templates/header');
        $this->load->view('moderator/klub',$data);
        $this->load->view('templates/footer');
    }

    public function create_club()
    {

        $data['klub']=$this->Klub_model->get_all_clubs();
        
        $this->form_validation->set_rules('naziv','naziv','required');
        $this->form_validation->set_rules('mjesto','mjesto','required');
        $this->form_validation->set_rules('slika','slika','required');
        $this->form_validation->set_rules('opis','opis','required');

        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('templates/header');
            $this->load->view('moderator/create_club');
            $this->load->view('templates/footer');
        }
        else
        {
            $this->Klub_model->create_club();

            $this->load->view('templates/header');
            $this->load->view('moderator/klub', $data);
            $this->load->view('templates/footer');
        }
        
    }

    public function edit_club($id)
    {
        $data['klub'] = $this->Klub_model->get_club_by_id($id);

        $this->load->view('templates/header');
        $this->load->view('klub/edit_club',$data);
        $this->load->view('templates/footer');
    }

    public function update_club()
    {
       
        $this->Klub_model->update_club();
        redirect('moderator/club');
    
    }

    public function delete_club($id)
    {
    $this->Klub_model->delete_club($id);
    redirect('moderator/club');
    }

    public function player()
    {
        $data['igrac']= $this->Klub_model->get_all_player();
        
        $this->load->view('templates/header');
        $this->load->view('moderator/igrac',$data);
        $this->load->view('templates/footer');
    }

    public function create_player()
    {
        $data['klub']=$this->Klub_model->get_all_clubs();
        
        
        $this->form_validation->set_rules('ime','ime','required');
        $this->form_validation->set_rules('prezime','prezime','required');
        $this->form_validation->set_rules('godina','godina','required');
        $this->form_validation->set_rules('država','država','required');
        $this->form_validation->set_rules('pozicija','pozicija','required');
        $this->form_validation->set_rules('klub','klub','required');
        $this->form_validation->set_rules('slika','slika','required');
        $this->form_validation->set_rules('opis','opis','required');

        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('templates/header');
            $this->load->view('moderator/create_player',$data);
            $this->load->view('templates/footer');
        }
        else
        {
            $id_klub= $this->input->post('klub');
            $this->Klub_model->create_player($id_klub);
            $data['igrac']= $this->Klub_model->get_all_player();

            $this->load->view('templates/header');
            $this->load->view('moderator/igrac',$data);
            $this->load->view('templates/footer');
            
        }
        
    }

    public function edit_player($id)
    {
        $data['idd']=$id;
        $data['igrac'] = $this->Klub_model->get_player_by_id($id);
        $data['klub']=$this->Klub_model->get_all_clubs();

        $this->load->view('templates/header');
        $this->load->view('moderator/edit_player',$data);
        $this->load->view('templates/footer');
    }

    public function update_player($id)
    { 
        $this->Klub_model->update_player($id);
        redirect('moderator/player');
    
    }

    public function delete_player($id)
    {
    $this->Klub_model->delete_player($id);
    redirect('moderator/player');
    }




}