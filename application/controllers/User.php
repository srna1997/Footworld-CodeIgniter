<?php 
class User extends CI_Controller
{ public $swal="";

    public function login()
    {
        
        $this->form_validation->set_rules('username','username','required');
        $this->form_validation->set_rules('password','password','required');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('templates/header');
            $this->load->view('login/index');
            $this->load->view('templates/footer');
                 
        }
        else
        {
        $un = $this->input->post('username');
        $pw = $this->input->post('password');
        $usr = $this->User_model->get_by_username($un);

        if(!empty($usr))
        {
            if($pw == $usr->password)
            {
                $this->session->id = $usr->id_user;
                $this->session->username = $usr ->username;
                $this->session->email = $usr->mail;
                $this->session->ovlast = $usr->id_ovlast;
                $this->swal = '<script type="text/javascript">
                swal({
                    title: "Prijava uspješna!",
                    text: "Automatski će te biti prebačeni na početnu stranicu!",
                    type: "success",
                    button: "Ok",
                    timer:2000
                  },
                  function()
                  {
                    window.location.href="../home";

                   });
                   </script>'; 

                   $this->load->view('templates/header');
                   $this->load->view('login/index');
                   $this->load->view('templates/footer');
              
            }
            else
            {
                $this->swal = '<script type="text/javascript">
                swal("Pogreška","Korisničko ime ili lozinka nisu ispravni,molimo ponovite prijavu!");
             </script>'; 
                
                $this->load->view('templates/header');
                $this->load->view('login/index');
                $this->load->view('templates/footer');
            }

        }
         else
            {
                $this->swal = '<script type="text/javascript">
                swal("Pogreška","Korisničko ime ili lozinka nisu ispravni,molimo ponovite prijavu!");
             </script>'; 
                $this->load->view('templates/header');
                $this->load->view('login/index');
                $this->load->view('templates/footer');
            }
        }

      
    }

    public function register()
    {
        $this->form_validation->set_rules('username','korisničko ime','required|is_unique[korisnik.username]');
        $this->form_validation->set_rules('password','lozinka','required');
        $this->form_validation->set_rules('rpassword', 'Password Confirmation', 'required|matches[password]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[korisnik.mail]');
        $this->form_validation->set_rules('omiljeniklub','Omiljeni klub','required');

        if($this->form_validation->run() == FALSE)
        {
            
            $this->load->view('templates/header');
            $this->load->view('register/index');
            $this->load->view('templates/footer');

        }
        else
        {

        $this->User_model->insert_user();
        $this->swal = '<script type="text/javascript">
        swal({
            title: "Registracija uspješna!",
            text: "Automatski će te biti prebačeni na početnu stranicu!",
            type: "success",
            button: "Ok",
            timer:2000
          },
          function()
          {
            window.location.href="../home";

           });
           </script>'; 
        $this->load->view('templates/header');
        $this->load->view('register/index');
        $this->load->view('templates/footer');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('home');
        
    }

}