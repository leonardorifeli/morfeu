<?php

namespace Morfeu\Bundle\DashboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

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
        $actualPeriod = new \DateTime;

        $totalBank = $this->getDashboardService()->getTotalBankByUser($user);
        $totalCard = $this->getDashboardService()->getTotalCardByUser($user);
        $dollar = $this->getDashboardService()->getCotationDollar($buzz);
        $totalAccomplishedPayment = $this->getDashboardService()->getTotalAccomplishedByUserAndPeriod($user, null);
        $totalAccomplishedPendingPayment = $this->getDashboardService()->getTotalAccomplishedPendingByUserAndPeriod($user, null);

        return $this->render('DashboardBundle:Dashboard:index.html.twig', array(
            'totalBank' => $totalBank,
            'totalCard' => $totalCard,
            'dollar' => $dollar,
            'paymentAccomplishedTotal' => $totalAccomplishedPayment,
            'paymentAccomplishedPendingTotal' => $totalAccomplishedPendingPayment,
        ));
    }
}
