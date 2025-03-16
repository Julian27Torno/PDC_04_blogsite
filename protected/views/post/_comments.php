<?php if(!empty($comments)): ?>
    <div class="comment-list">
        <?php foreach($comments as $comment): ?>
            <div class="comment">
                <strong><?php echo CHtml::encode($comment->author); ?></strong>
                <p><?php echo CHtml::encode($comment->content); ?></p>
                <small><?php echo date('F j, Y, g:i a', strtotime($comment->create_time)); ?></small>
            </div>
        <?php endforeach; ?>
    </div>
<?php else: ?>
    <p>No comments yet.</p>
<?php endif; ?>
