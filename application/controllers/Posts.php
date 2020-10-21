<?php

class Posts extends CI_Controller
{ public $swal="";

    public function index()
    {
        if(empty($this->session->id))
        {
            redirect('home');
        }

        $data['title'] = 'Najnovije objave';

        $data['posts'] = $this->post_model->get_posts();
       // print_r($data['posts']); //ispisuje post iz baze

        $this->load->view('templates/header');
        $this->load->view('posts/index', $data);
        $this->load->view('templates/footer');
    }

    public function view($slug = NULL)
    {
        $data['post'] = $this->post_model->get_posts($slug);
        $data['comments'] = $this->post_model->get_comment($data['post']['slug']);
        //print_r($data['comments']);
        if(empty($data['post']))
        {
            show_404();
        }

        $data['title'] = $data['post']['title'];

        $this->load->view('templates/header');
        $this->load->view('posts/view', $data);
        $this->load->view('templates/footer');
    }

    public function create()
    { 
        $data['title'] = 'Napravite post';

        $this->form_validation->set_rules('title','Title','required');
        $this->form_validation->set_rules('body','Body','required');

        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('templates/header');
            $this->load->view('posts/create', $data);
            $this->load->view('templates/footer');
        }
        else
        { 
            $this->post_model->create_post();
            $this->swal = '<script type="text/javascript">
            swal({
                title: "Kreirali ste novi post!",
                text: "Automatski će te biti prebačeni blog!",
                type: "success",
                button: "Ok",
                timer:2000
              },
              function()
              {
                window.location.href="../posts";

               });
               </script>';
            $this->load->view('templates/header');
            $this->load->view('posts/create', $data);
            $this->load->view('templates/footer');
        }
        
    }

    public function delete($id)
    {
        $this->post_model->delete_post($id);
        redirect('posts');
    }

    public function edit($slug)
    {
        $data['post'] = $this->post_model->get_posts($slug);

        if(empty($data['post']))
        {
            show_404();
        }

        $data['title'] = 'Uredite post';
        $this->load->view('templates/header');
        $this->load->view('posts/edit', $data);
        $this->load->view('templates/footer');
    }

    public function update()
    {   
        $this->post_model->update_post();
        redirect('posts');
    }

    public function comment($slug)
    {
        $data['title'] = 'Komentirajte';
        $data['slug'] = urldecode($slug);

        $this->form_validation->set_rules('body','komentar','required');

        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('templates/header');
            $this->load->view('posts/comment', $data);
            $this->load->view('templates/footer');
        }
        else
        {
            $this->post_model->add_comment($this->session->id,$slug);
            redirect('/posts/'.$slug);
        }
    }

    public function delete_comment($id)
    {
        $this->post_model->delete_comment($id);
        redirect('/posts/'.$slug);
    }
    
}