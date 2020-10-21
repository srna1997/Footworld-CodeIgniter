<h1 align="center">Dodajte novi klub</h1>

<?php echo '<b>' . validation_errors() . '</b>'; ?>
<?php echo form_open('admin/create_club'); ?>

    <div class="form-group">
        <label>Unesite naziv kluba</label>
            <input type="text" class="form-control" name="naziv" placeholder="Naziv kluba"><br>
        <label>Unesite grad u kojem se nalazi klub</label>
            <input type="text" class="form-control" name="mjesto" placeholder="Grad kluba"><br>
    <div class="form-group">
    <div class="form-group">
        <label>Unesite sliku</label>
            <input type="file" name="slika" accept="image/*"><br>
    </div>
    <div class="form-group">
        <label>Unesite opis kluba</label>
            <textarea class="form-control" id="editor1"  name="opis"></textarea><br>
    </div>
    <button type="submit" class="btn btn-secondary">Prihvati</button>

</form>
