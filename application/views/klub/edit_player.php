<h1 align="center">Uredite igrača</h1>


<?php echo '<b>' . validation_errors() . '</b>'; ?>
<?php echo form_open('admin/update_player/'.$idd); ?>

    <div class="form-group">
        <label>Unesite ime</label>
            <input type="text" class="form-control" name="ime" value="<?php echo $igrac->ime; ?>" placeholder="Ime"><br>
        <label>Unesite prezime</label>
            <input type="text" class="form-control" name="prezime" value="<?php echo $igrac->prezime; ?>" placeholder="Prezime"><br>
        <label>Unesite Godine</label>
            <input type="text" class="form-control" name="godina" value="<?php echo $igrac->godina; ?>" placeholder="Godine"><br>
        <label>Unesite Državu</label>
            <input type="text" class="form-control" name="država" value="<?php echo $igrac->država; ?>" placeholder="Država"><br>
        <label>Unesite Pozicija</label>
            <input type="text" class="form-control" name="pozicija" value="<?php echo $igrac->pozicija; ?>" placeholder="Pozicija"><br>
    </div>
    <select name="klub" class="form-control">
        <?php foreach($klub as $k) : ?>        
            <option value="<?php echo $k['id_klub']; ?>"><?php echo $k['naziv']; ?></option>
        <?php endforeach; ?>
    </select><br><br>
    <div class="form-group">
        <label>Unesite sliku</label><br>
            <input type="file" name="slika" accept="image/*"><br>
    </div>
    
    <div class="form-group">
        <label>Unesite opis igrača</label>
            <textarea class="form-control" id="editor1"  name="opis" <?php echo $igrac->opis; ?>></textarea><br>
    </div>
    <button type="submit" class="btn btn-secondary">Prihvati</button>
</form>