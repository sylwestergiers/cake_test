<?php
namespace App\Mailer;

use Cake\Mailer\Mailer;
use Cake\ORM\TableRegistry;

class MessageMailer extends Mailer
{
    public function sendMessage($message)
    {
        $receiver = TableRegistry::get('Params')
            ->getParamByKey('messages_receiver');
        if (!empty($receiver)) {
            $this
                ->setTransport('default')
                ->setTo($receiver)
                ->setSubject(sprintf('New message: %s', $message->subject))
                ->setViewVars(['message' => $message])
                ->viewBuilder()
                    ->setTemplate('send_message');
        }

    }
}
