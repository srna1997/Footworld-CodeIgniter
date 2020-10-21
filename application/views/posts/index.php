<h2><?= $title ?> </h2>
<hr>
<?php echo '<b>' . validation_errors() . '</b>'; ?>
<?php echo form_open('posts/create'); ?>
<button type="submit" class="btn btn-success" ​​​​​>Napravite post </button>
</form><hr>
<?php foreach($posts as $post) : ?>

    <h3><?php echo $post['title']; ?> </h3>
    <small class="post-date">Objavljeno: <?php echo $post['createdAt']; ?></small><br>
    <?php echo word_limiter($post['body'], 10); ?>
    <br>
    <p><a class="btn btn-primary" href= "<?php echo site_url('/posts/'.$post['slug']); ?>"> Više </a> </p>
    <hr>
<?php endforeach; ?>

