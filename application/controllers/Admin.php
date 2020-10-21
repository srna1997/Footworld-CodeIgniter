<?php

    class Admin extends CI_Controller
    {
        public function view()
        {
            
            if($this->session->ovlast != 1)
            {
                redirect('home');
            }

            $this->load->view('templates/header');
            $this->load->view('admin/view');
            $this->load->view('templates/footer');

        }

        public function index()
        {
            
            $data['korisnik']= $this->Admin_model->get_users();

            $this->load->view('templates/header');
            $this->load->view('admin/index',$data);
            $this->load->view('templates/footer');
        }


        public function edit($id)
        {
            $data['user']= $this->Admin_model->get_by_id($id);
            
            if(empty($data['user']))
            {
                show_404();
            }

        $this->load->view('templates/header');
        $this->load->view('admin/edit',$data);
        $this->load->view('templates/footer');

        }

        public function update_user()
        {
            $this->Admin_model->update_user();
            redirect('admin/index');
        }

        public function delete($id)
        {
        $this->Admin_model->delete_user($id);
        redirect('admin');
        }

        public function club()
        {
            $data['klub']=$this->Klub_model->get_all_clubs();

            $this->load->view('templates/header');
            $this->load->view('admin/klubovi',$data);
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
                $this->load->view('klub/create');
                $this->load->view('templates/footer');
            }
            else
            {
                $this->Klub_model->create_club();

                $this->load->view('templates/header');
                $this->load->view('admin/klubovi', $data);
                $this->load->view('templates/footer');
            }
            
        }

        public function edit_club($id)
        {
            $data['klub'] = $this->Klub_model->get_club_by_id($id);

            $this->load->view('templates/header');
            $this->load->view('klub/edit',$data);
            $this->load->view('templates/footer');
        }

        public function update_club()
        {
           
            $this->Klub_model->update_club();
            redirect('admin/club');
        
        }

        public function delete_club($id)
        {
        $this->Klub_model->delete_club($id);
        redirect('admin/club');
        }

        public function player()
        {
            $data['igrac']= $this->Klub_model->get_all_player();
            
            $this->load->view('templates/header');
            $this->load->view('admin/igraci',$data);
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
                $this->load->view('klub/make',$data);
                $this->load->view('templates/footer');
            }
            else
            {
                $id_klub= $this->input->post('klub');
                $this->Klub_model->create_player($id_klub);
                $data['igrac']= $this->Klub_model->get_all_player();

                $this->load->view('templates/header');
                $this->load->view('admin/igraci',$data);
                $this->load->view('templates/footer');
                
            }
            
        }

        public function edit_player($id)
        {
            $data['idd']=$id;
            $data['igrac'] = $this->Klub_model->get_player_by_id($id);
            $data['klub']=$this->Klub_model->get_all_clubs();

            $this->load->view('templates/header');
            $this->load->view('klub/edit_player',$data);
            $this->load->view('templates/footer');
        }

        public function update_player($id)
        { 
            $this->Klub_model->update_player($id);
            redirect('admin/player');
        
        }

        public function delete_player($id)
        {
        $this->Klub_model->delete_player($id);
        redirect('admin/player');
        }
    }