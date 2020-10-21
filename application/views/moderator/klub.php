<h1 align="center"> Klubovi </h1>
<br><br>
<div align="center">

<div class="btn-group btn-group-toggle" data-toggle="buttons">
    <label class="btn btn-secondary">
        <a class="btn text-white" href="<?php echo base_url(); ?>moderator/view">Početna</a>
    </label>

    <label class="btn btn-secondary">
        <a class="btn text-white" href="<?php echo base_url(); ?>moderator/club">Klubovi</a>
    </label>

    <label class="btn btn-secondary">
        <a class="btn text-white" href="<?php echo base_url(); ?>moderator/player">Igrači</a>
    </label>
    
</div>
</div>
<br><br>
<div align="center">
    <label class="btn btn-secondary btn-lg">
        <a class="btn text-white" href="<?php echo base_url(); ?>moderator/create_club">Dodajte novi klub</a>
    </label>
</div>
<table class="table">
  <thead class="thead-dark">
    <tr>
      
      <th scope="col">Id</th>
      <th scope="col">Naziv</th>
      <th scope="col">Mjesto</th>
      <th scope="col">Slika</th>
      <th scope="col">Opis</th>
      <th scope="col">Uredi</th>
      <th scope="col">Obriši</th>
    </tr>
  </thead>

<?php foreach($klub as $club) : ?>

  <tbody>
    <tr>
        <td><?php echo $club['id_klub']; ?></td>
        <td><?php echo $club['naziv']; ?></td>
        <td><?php echo $club['mjesto']; ?></td>
        <td><?php echo $club['slika']; ?></td>
        <td><?php echo word_limiter ($club['opis'],7); ?></td>
        <td><a class="btn btn-dark" href="<?php echo base_url(); ?>moderator/edit_club/<?php echo $club['id_klub']; ?>">Edit</a></td>
        <td><a class="btn btn-danger" href="<?php echo base_url(); ?>moderator/delete_club/<?php echo $club['id_klub']; ?>">Delete</a></td>
        <br>
      </tr>
    
 
<?php endforeach; ?> 
</tbody>
</table>