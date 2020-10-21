<h1 align="center"> Korisnici </h1>
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

<table class="table">
  <thead class="thead-dark">
    <tr>
      
      <th scope="col">Id</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">Email</th>
      <th scope="col">Omiljeni klub</th>
      <th scope="col">Ovlast</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>

<?php foreach($korisnik as $u) : ?>

  <tbody>
    <tr>
        <td><?php echo $u['id_user']; ?></td>
        <td><?php echo $u['username']; ?></td>
        <td><?php echo $u['password']; ?></td>
        <td><?php echo $u['mail']; ?></td>
        <td><?php echo $u['OmiljeniKlub']; ?></td>
        <td><?php echo $u['id_ovlast']; ?></td><br>
       <?php if($u['id_ovlast'] != 1) : ?>
        <td><a class="btn btn-dark" href="<?php echo base_url(); ?>admin/edit/<?php echo $u['id_user']; ?>">Edit</a></td>
        <td><a class="btn btn-danger" href="<?php echo base_url(); ?>admin/delete/<?php echo $u['id_user']; ?>">Delete</a></td>
      <?php endif;?>

      </tr>
    
 
<?php endforeach; ?> 
</tbody>
</table>

