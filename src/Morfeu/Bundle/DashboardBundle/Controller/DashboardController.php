<?php

namespace Morfeu\Bundle\DashboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Morfeu\Bundle\BusinessBundle\Enum\StatusPayment;

class DashboardController extends Controller
{

    private $dashboardService;

    private function getDashboardService()
    {
        if(!$this->dashboardService){
            $this->dashboardService = $this->get('dashboard.service');
        }

        return $this->dashboardService;
    }

    public function indexAction()
    {
        $user = $this->getUser();
        $buzz = $this->container->get('buzz');

        $period = new \DateTime("now");
        $period->setTime(0, 0);
        $period->modify('first day of this month');

        $periodTo = new \DateTime("now");
        $periodTo->setTime(0, 0);
        $periodTo->modify('last day of this month');

        $totalBank = $this->getDashboardService()->getTotalBankByUser($user);
        $totalCard = $this->getDashboardService()->getTotalCardByUser($user);
        $dollar = $this->getDashboardService()->getCotationDollar($buzz);

        $totalAccomplishedPayment = $this->getDashboardService()->getTotalAccomplishedByUserAndPeriod($user, $period, $periodTo);
        $totalAccomplishedPendingPayment = $this->getDashboardService()->getTotalAccomplishedPendingByUserAndPeriod($user, $period, $periodTo);

        return $this->render('DashboardBundle:Dashboard:index.html.twig', array(
            'totalBank' => $totalBank,
            'totalCard' => $totalCard,
            'dollar' => $dollar,
            'paymentAccomplishedTotal' => $totalAccomplishedPayment,
            'paymentAccomplishedPendingTotal' => $totalAccomplishedPendingPayment,
        ));
    }
}
