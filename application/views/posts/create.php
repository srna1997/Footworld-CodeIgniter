<h2> <?= $title;?> </h2>

<?php echo '<b>' . validation_errors() . '</b>'; ?>
<?php echo form_open('posts/create'); ?>
<?php echo $this->swal; ?>
  <div class="form-group">
    <label>Naslov</label>
    <input type="text" class="form-control" name="title"  placeholder="Dodajte naslov">
  </div>
  <div class="form-group">
    <label>Pišite ovdje</label>
    <textarea class="form-control" id="editor1"  name="body" placeholder="Ovdje pišite"></textarea>
  </div>
  

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
