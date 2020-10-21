<h1 align="center">Dodajte novog igrača</h1>


<?php echo '<b>' . validation_errors() . '</b>'; ?>
<?php echo form_open('admin/create_player'); ?>

    <div class="form-group">
        <label>Unesite ime</label>
            <input type="text" class="form-control" name="ime" placeholder="Ime"><br>
        <label>Unesite prezime</label>
            <input type="text" class="form-control" name="prezime" placeholder="Prezime"><br>
        <label>Unesite Godine</label>
            <input type="text" class="form-control" name="godina" placeholder="Godine"><br>
        <label>Unesite Državu</label>
            <input type="text" class="form-control" name="država" placeholder="Država"><br>
        <label>Unesite Pozicija</label>
            <input type="text" class="form-control" name="pozicija" placeholder="Pozicija"><br>
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
            <textarea class="form-control" id="editor15"  name="opis"></textarea><br>
    </div>
    <button type="submit" class="btn btn-secondary">Prihvati</button>
</form>