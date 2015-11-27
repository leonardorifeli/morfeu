<?php
namespace Morfeu\Bundle\BusinessBundle\Service;

use PhpImap\Mailbox as ImapMailbox;
use PhpImap\IncomingMail;
use PhpImap\IncomingMailAttachment;

class ConnectImapMailService
{

    public function connectImapAccountAndGetMail()
    {
        /*
        $mailbox = new ImapMailbox('{imap.gmail.com:993/imap/ssl}INBOX', 'leonardorifeli@gmail.com', 'L30n4rd0c0m', __DIR__);
        $mails = array();
        var_dump($mailbox->searchMailBox('ALL'));
        exit;
        $mailsIds = $mailbox->searchMailBox('ALL');
        if(!$mailsIds) {
        die('Mailbox is empty');
    }

    $mailId = reset($mailsIds);
    $mail = $mailbox->getMail($mailId);

    var_dump($mail);
    var_dump($mail->getAttachments());
    exit;
    */

    $mbox = imap_open("{imap.gmail.com:993/imap/ssl}", "leonardorifeli@gmail.com", "L30n4rd0c0m");

    echo "<h1>Mailboxes</h1>\n";
    $folders = imap_listmailbox($mbox, "{imap.gmail.com:993/imap/ssl}", "*");

    if ($folders == false) {
        echo "Call failed<br />\n";
    } else {
        foreach ($folders as $val) {
            echo $val . "<br />\n";
        }
    }

    echo "<h1>Headers in INBOX</h1>\n";
    $headers = imap_headers($mbox);

    if ($headers == false) {
        echo "Call failed<br />\n";
    } else {
        foreach ($headers as $val) {
            echo $val . "<br />\n";
        }
    }

    imap_close($mbox);
    exit;

}
}
