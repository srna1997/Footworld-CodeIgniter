<h2 align="center"> Registracija </h2>

<?php echo '<b>' . validation_errors() . '</b>'; ?>
<?php echo form_open('user/register'); ?>
<?php echo $this->swal; ?>

<div class="form-group">
    <label>Korisničko ime:</label>
    <input type="text" name="username" class="form-control" placeholder="Unesite korisničko ime"><br>

    <label>Email: </label>
    <input type="text" name="email" class="form-control" placeholder="Unesite vaš mail"><br>

    <label>Lozinka: </label>
    <input type="password" name="password" class="form-control" placeholder="Unesite lozinku" ><br>

    <label>Ponovite lozinku: </label>
    <input type="password" name="rpassword" class="form-control" placeholder="Unesite lozinku ponovno"><br>

    <label>Omiljeni klub: </label>
    <input type="text" name="omiljeniklub" class="form-control" placeholder="Unesite ime omiljenog kluba"><br>
    
    <div align="right">
        <input type="submit" name="register" class="form-control" value="Register" style="width:150px;"><br>
    </div>
</div>
</form>