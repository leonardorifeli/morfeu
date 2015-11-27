<?php

namespace Morfeu\Bundle\AutomaticManagerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ImportMailController extends Controller
{

    private $mailImportInformationService;

    private function getMailImportInformationService()
    {
        if(!$this->mailImportInformationService){
            $this->mailImportInformationService = $this->get('mailImportInformation.service');
        }

        return $this->mailImportInformationService;
    }

    public function indexAction()
    {
        $mails = $this->getMailImportInformationService()->getMailInAccount();
        echo 'connect';
        exit;
    }
}
