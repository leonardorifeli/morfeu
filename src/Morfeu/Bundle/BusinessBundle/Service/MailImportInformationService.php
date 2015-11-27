<?php

namespace Morfeu\Bundle\BusinessBundle\Service;

use Doctrine\ORM\EntityManager;
use Morfeu\Bundle\BusinessBundle\Service\BaseService;
use Morfeu\Bundle\EntityBundle\Entity\Card;
use Morfeu\Bundle\BusinessBundle\Enum\Status;

class MailImportInformationService
{

    private $imapMailService;

    public function __construct($imapMailService)
    {
        $this->imapMailService = $imapMailService;
    }

    public function getMailInAccount()
    {
        $mailInAccount = $this->imapMailService->connectImapAccountAndGetMail();

        var_dump($mailInAccount);
        exit;
    }

}
