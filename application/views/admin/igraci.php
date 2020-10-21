<h1 align="center"> Igrači </h1>
<br><br>
<div align="center">

<div class="btn-group btn-group-toggle" data-toggle="buttons">
    <label class="btn btn-secondary">
        <a class="btn text-white" href="<?php echo base_url(); ?>admin/view">Početna</a>
    </label>

    <label class="btn btn-secondary">
        <a class="btn text-white" href="<?php echo base_url(); ?>admin/index">Korisnici</a>
    </label>

    <label class="btn btn-secondary">
        <a class="btn text-white" href="<?php echo base_url(); ?>admin/club">Klubovi</a>
    </label>

    <label class="btn btn-secondary">
    <a class="btn text-white" href="<?php echo base_url(); ?>admin/player">Igrači</a>
    </label>
</div>
</div>
<br><br>
<div align="center">
    <label class="btn btn-secondary btn-lg">
        <a class="btn text-white" href="<?php echo base_url(); ?>admin/create_player">Dodajte novog igrača</a>
    </label>
</div>

<table class="table">
    <thead class="thead-dark">
        <tr>
      
            <th scope="col">Id</th>
            <th scope="col">Ime</th>
            <th scope="col">Prezime</th>
            <th scope="col">Godine</th>
            <th scope="col">Država</th>
            <th scope="col">Pozicija</th>
            <th scope="col">Klub</th>
            <th scope="col">Slika</th>
            <th scope="col">Opis</th>
            <th scope="col">Uredi</th>
            <th scope="col">Obriši</th>
        </tr>
    </thead>
    <tbody>
<?php foreach($igrac as $player) : ?>
        <tr>
            <td><?php echo $player['id_igrac']; ?></td>
            <td><?php echo $player['ime']; ?></td>
            <td><?php echo $player['prezime']; ?></td>
            <td><?php echo $player['godina']; ?></td>
            <td><?php echo $player['država']; ?></td>
            <td><?php echo $player['pozicija']; ?></td><br>
            <?php $klub=$this->Klub_model->get_club_by_id($player['id_klub']); ?>
            <td><?php echo $klub->naziv; ?></td>
            <td><?php echo $player['slika']; ?></td>
            <td><?php //echo word_limiter ($player['opis'],7);
            echo word_limiter ($player['opis'],4); ?></td> 
            <td><a class="btn btn-dark" href="<?php echo base_url(); ?>admin/edit_player/<?php echo $player['id_igrac']; ?>">Uredi</a></td>
            <td><a class="btn btn-danger" href="<?php echo base_url(); ?>admin/delete_player/<?php echo $player['id_igrac']; ?>">Delete</a></td>
      

        </tr>
<?php endforeach; ?>  
    </tbody>

</table>