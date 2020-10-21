<h1 align="center">Uredite klub</h1>

<?php echo '<b>' . validation_errors() . '</b>'; ?>
<?php echo form_open('moderator/update_club'); ?>

<input type="hidden" name="id" value="<?php echo $klub->id_klub; ?>">
    <div class="form-group">
        <label>Unesite naziv kluba</label>
            <input type="text" class="form-control" name="naziv" placeholder="Naziv kluba" value="<?php echo $klub->naziv; ?>"><br>
        <label>Unesite grad u kojem se nalazi klub</label>
            <input type="text" class="form-control" name="mjesto" placeholder="Grad kluba" value="<?php echo $klub->mjesto; ?>"><br>
    <div class="form-group">
    <div class="form-group">
        <input type="file" name="slika" accept="image/*" <?php echo $klub->slika; ?>><br>
    </div>
    <div class="form-group">
        <label>Unesite opis kluba</label>
        <textarea class="form-control" id="editor1"  name="opis" <?php echo $klub->opis; ?> ></textarea><br>
  </div>
    <button type="submit" class="btn btn-secondary">Prihvati</button>

</form>
