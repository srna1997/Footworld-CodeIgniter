</div>
<style type="text/css">
   body { background: snow !important; }
</style>
<img src="<?php echo base_url(); ?>/assets/img/fw.jpg" alt="footworld" class="img-responsive" height="100%" width="100%">
    <br><br><br><br><br><br><br>
    <h1 class="text-center text-dark"><em><b> Dobrodošli na nogometnu stranicu </b></em></h1>
<?php if(empty($this->session->id)) : ?>
    <h2  align="center"> <a class="text-primary" href="<?php echo base_url(); ?>user/login" >Prijavite se</a> ili se <a class="text-info" href="<?php echo base_url(); ?>user/register" >Registrirajte</a> te ostvarite mogućnost korištenja bloga i ostalih zanimljivih sadržaja</h2>
<?php endif; ?>
