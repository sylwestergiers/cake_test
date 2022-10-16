You have received a new message:
Name: <?= sprintf("%s\n", $message['name']) ?>
Subject: <?= sprintf("%s\n", $message['subject']) ?>
Email: <?= sprintf("%s\n", $message['email']) ?>
Body: <?= sprintf("%s\n", $message['body']) ?>
Agreement 1: <?= sprintf("%s\n", $message['agr_1']) ?>
<?php if (!empty($message['agr_2'])) : ?>
  Agreement 2: <?= sprintf("%s\n", $message['agr_2']) ?>
<?php endif; ?>
