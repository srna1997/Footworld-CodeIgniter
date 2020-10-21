<h2> <?= $title;?> </h2>

<?php echo '<b>' . validation_errors() . '</b>'; ?>
<?php echo form_open('posts/comment/' .urlencode($slug)); ?>
<div class="form-group">
    <label>Dodajte komentar</label>
    <textarea class="form-control" id="editor1"  name="body" placeholder="Add body"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Prihvati</button>
</form>