<div align ="center">
<table class="table">
<thead>
    <tr>
        <h1><?php echo $igrac->ime .' '; echo $igrac->prezime?></h1><br><hr>
    </tr>
<tbody>
    <tr>
        <img src="<?php echo base_url();?>assets/img/igrac/<?php echo $igrac->slika;?>" height="300" width="350"><br><hr>
    </tr>
    <tr>
        <br><h2>Država: <?php echo $igrac->država; ?></h2><hr>
    </tr>
    <tr>
        <br><h2>Godine: <?php echo $igrac->godina; ?></h2><hr>
    </tr>
    <tr>
        <br><h2>Pozicija: <?php echo $igrac->pozicija ?></h2><hr>
    </tr>
    <tr>
        <br><p><b> <?php echo $igrac->opis ?> </b></p><hr>
</tbody>
</table>
</div>
