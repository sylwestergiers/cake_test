<p>You have received a new message:</p></br>
<p><strong>Name: </strong><?= $message['name'] ?></p>
<p><strong>Subject: </strong><?= $message['subject'] ?></p>
<p><strong>Email: </strong><?= $message['email'] ?></p>
<p><strong>Body: </strong><?= $message['body'] ?></p>
<p><strong>Agreement 1: </strong><?= $message['agr_1'] ?></p>
<?php if (!empty($message['agr_2'])) : ?>
  <p><strong>Agreement 2: </strong><?= $message['agr_2'] ?></p>
<?php endif; ?>
