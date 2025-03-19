<?php foreach ($this->getRecentComments() as $comment): ?>
    <div class="comment">
        <p><strong><?php echo CHtml::encode($comment->author); ?></strong> on 
        <a href="<?php echo CHtml::encode($comment->post->url); ?>"><?php echo CHtml::encode($comment->post->title); ?></a></p>
        <p><?php echo CHtml::encode($comment->content); ?></p>
        <p><small><?php echo date('F j, Y', strtotime($comment->create_time)); ?></small></p>
    </div>
<?php endforeach; ?>