<h2> <?= $title;?> </h2>
<br>
<?php echo '<b>' . validation_errors() . '</b>'; ?>
<?php echo form_open('posts/update'); ?>
<input type="hidden" name="id" value="<?php echo $post['id']; ?>">

  <div class="form-group">
    <label>Naslov</label>
    <input type="text" class="form-control" name="title"  placeholder="Dodajte naslov" value="<?php echo $post['title']; ?>">
  </div>
  <div class="form-group">
    <label>Pišite ovdje</label>
    <textarea class="form-control" id="editor1" placeholder="Add body" name="body" <?php echo $post['body']; ?> ></textarea>
    <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
