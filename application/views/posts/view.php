<h2 class=" border-dark p-1 bg-light text-dark text-center"><?php echo $post['title']; ?></h2>
<small class="post-date">Objavljeno: <?php echo $post['createdAt']; ?></small><br>

<div class="border-left border-dark p-2 bg-light text-dark ">
    <?php echo $post['body']; ?> 
</div>
    <?php
    foreach($comments as $comment){
        echo '<div class="border border-dark p-3 mb-3 bg-light text-dark">';
                
        $user=$this->User_model->get_by_id($comment['id_user']);
        echo 'Korisničko ime: <b>'.$user->username.'</b><br>';
        echo 'Komentar: '.$comment['content'].'<br>';
        if(($this->session->ovlast == 1) || ($this->session->ovlast == 2)){
        echo form_open('/posts/delete_comment/'.$comment['id_komentar']);
        echo'<input type="submit" value="Obriši" class="btn btn-danger pull-right">';
        echo '</form>';
        }
        echo '</div>';
    }
    ?>
</div>
</div>
<hr>


<?php echo form_open('/posts/comment/' .$post['id']) ?>
<a class="btn btn-info float-right" href="<?php echo base_url(); ?>posts/comment/<?php echo $post['slug']; ?>">Komentiraj</a>
</form>

<?php if(($this->session->ovlast == 1) || ($this->session->ovlast == 2)) : ?>
<?php echo form_open('/posts/delete/' .$post['id']); ?>
<a class="btn btn-secondary pull-left" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug']; ?>">Uredi</a>
<input type="submit" value="Obriši" class="btn btn-danger">
</form>

<?php endif; ?>



