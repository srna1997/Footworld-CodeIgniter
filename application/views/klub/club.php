
<div align = "center">
    <img src="<?php echo base_url();?>assets/img/klub/<?php echo $club->slika;?>" height="200px" width="250px"><br>
    <h1><?php echo $club->naziv;?></h1><b>
    <p><b><?php echo $club->opis; ?><b></p>
    <h2>Lista Igrača</h2>

    <table class="table table-hover" style="max-width:75%">
  <thead class="thead-light">
    <tr>
      <div class="row justify-content-md-center">
         
        <th scope="col">Ime i prezime</th>
        <th scope="col">Godine</th>   
      </div>
    </tr>
  </thead>

<?php foreach($player as $igrac) : ?>
  <tbody>
  

  <tr style="cursor: pointer;" onclick="window.location='<?php echo base_url();?>klubovi/igrac/<?php echo $igrac['id_igrac']?>';">

        <td><?php echo $igrac['ime'].' '; echo $igrac['prezime']; ?></td>
        <td><?php echo $igrac['godina']; ?></td>
       
 </tr>
    
    
<?php endforeach; ?> 
</tbody>
</table>
</div>

