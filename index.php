<?php

use alsheikhaminulislam\Imap;

include_once('Imap.php');
$host = 'mail.demyzo.com';
$user = 'noreply@demyzo.com';
$pass = 'XXXXXXX';
$port = 993;
$ssl = true; 
 
$INBOX = 'INBOX';
$Archive = 'INBOX.Archive';
$Trash = 'INBOX.Trash';
$Sent = 'INBOX.Sent';
$spam = 'INBOX.spam';
$Junk = 'INBOX.Junk';
$Drafts = 'INBOX.Drafts';
$mailbox = new Imap($host, $user, $pass, $port, $ssl, $INBOX);
$id =4;
echo json_encode($mailbox->getMessageIds( )) ;


// $mailbox->getMailboxInfo();
// $mailbox->getCurrentMailboxInfo();
// $mailbox->getMessageIds();
// $id = 2;
// $mailbox->getMessage($id);
// $id = 2;
// $mailbox->deleteMessage($id);
// $mailbox->disconnect();

?>