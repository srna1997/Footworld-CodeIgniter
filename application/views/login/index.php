<h2 align="center"> Prijava </h2>

<?php echo '<b>' . validation_errors() . '</b>'; ?>
<?php echo form_open('user/login'); ?>
<?php echo $this->swal; ?>
<div class="form-group">
    <label>Korisničko ime: </label>
    <input type="text" name ='username' class = "form-control" placeholder="Unesite korisničko ime"><br>

    <label>Lozinka:</label>
    <input type="password" name="password" class="form-control" placeholder="Unesite lozinku" ><br>

    <div align="center">
    <input type="submit" name="submit" class="form-control" value="Login" style="width: 150px;">
</form>
    </div>
    </div>