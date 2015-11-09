<?php

namespace Morfeu\Bundle\BusinessBundle\Service;

use Doctrine\ORM\EntityManager;
use Morfeu\Bundle\BusinessBundle\Service\BaseService;
use Morfeu\Bundle\EntityBundle\Entity\Card;
use Morfeu\Bundle\BusinessBundle\Enum\Status;
use Morfeu\Bundle\BusinessBundle\Enum\StatusPayment;

class DashboardService
{

    private $userService;
    private $paymentService;
    private $cardService;
    private $bankUserService;

    public function __construct($userService, $paymentService, $cardService, $bankUserService)
    {
        $this->userService = $userService;
        $this->paymentService = $paymentService;
        $this->cardService = $cardService;
        $this->bankUserService = $bankUserService;
    }

    public function getTotalBankByUser($user)
    {
        $bank = $this->bankUserService->getTotalBankByUser($user);

        return $bank;
    }

    public function getTotalCardByUser($user)
    {
        $bank = $this->cardService->getTotalCardByUser($user);

        return $bank;
    }

    public function getCotationDollar($buzz)
    {
        $cotation = $this->getCotation($buzz);

        return $cotation->dolar;
    }

    public function getCotation($buzz)
    {
        $response = $buzz->get('http://developers.agenciaideias.com.br/cotacoes/json');
        $response = $response->getContent();
        $response = json_decode($response);

        return $response;
    }

    public function getTotalAccomplishedByUserAndPeriod($user, $period)
    {
        $total = $this->paymentService->getTotalAccomplishedByUserAndPeriod($user, StatusPayment::FINISHED, $period);

        return $total;
    }

    public function getTotalAccomplishedPendingByUserAndPeriod($user, $period)
    {
        $total = $this->paymentService->getTotalAccomplishedByUserAndPeriod($user, StatusPayment::PENDING, $period);

        return $total;
    }

}