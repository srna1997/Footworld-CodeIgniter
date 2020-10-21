<h1 align="center">Klubovi </h1>
<br><br>

<?php foreach($klub as $klubovi) : ?>
<table align="center">
<td>
<a href="<?php echo base_url();?>klubovi/klub/<?php echo $klubovi['id_klub']?>"><img src="<?php echo base_url(); ?>/assets/img/klub/<?php echo $klubovi['slika']; ?> " alt="grb" height="200" width="250"></a>
<hr style="border-top: 1px solid black">
</td>
</table>
<?php endforeach; ?>
