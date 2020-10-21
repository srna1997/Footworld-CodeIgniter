<h2 align="center"> Edit user </h2>

<?php echo '<b>' . validation_errors() . '</b>'; ?>
<?php echo form_open('admin/update_user'); ?>

<input type="hidden" name="id" value="<?php echo $user->id_user; ?>">
<div class="form-group">
    <label>Korisničko ime:</label>
    <input type="text" name="username" class="form-control" value="<?php echo $user->username; ?>"><br>
</div>
<div class="form-group">
    <label>Email: </label>
    <input type="text" name="email" class="form-control"  value=" <?php echo $user->mail;?>"><br>
</div>
<div class="form-group">
    <label>Lozinka: </label>
    <input type="text" name="password" class="form-control" value=" <?php echo $user->password;?>"><br>
</div>
<div class="form-group">
    <label>Omiljeni klub: </label>
    <input type="text" name="omiljeniklub" class="form-control" value=" <?php echo $user->OmiljeniKlub;?>"><br>
</div>
<div class="form-group">
    <label>Ovlast: </label>
    <input type="text" name="ovlast" class="form-control" value=" <?php echo $user->id_ovlast;?>"><br>
</div>
<div align="right">
    <input type="submit" name="register" class="form-control" value="Update" style="width:150px;"><br>
</div>

</form>