<?php

namespace Morfeu\Bundle\PaymentBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

use Morfeu\Bundle\EntityBundle\Entity\PaymentAttachment;
use Morfeu\Bundle\PaymentBundle\Form\PaymentType;
use Morfeu\Bundle\BusinessBundle\Helper\PaymentHelper;
use Morfeu\Bundle\BusinessBundle\Enum\TypePayment;

class PaymentAttachmentController extends Controller
{

    private $paymentService;
    private $paymentAttachmentService;

    private function getPaymentService()
    {
        if(!$this->paymentService){
            $this->paymentService = $this->get('payment.service');
        }

        return $this->paymentService;
    }

    private function getPaymentAttachmentService()
    {
        if(!$this->paymentAttachmentService){
            $this->paymentAttachmentService = $this->get('paymentAttachment.service');
        }

        return $this->paymentAttachmentService;
    }

    public function createAttachmentAction(Request $request, $payment)
    {
        $payment = $this->getPaymentService()->get($payment);

        if(!$payment){
            die('{"jsonrpc" : "2.0", "error" : {"code": 100, "message": "Pagamento não encontrado."}, "id" : "id"}');
        }

        $attachment = new PaymentAttachment();
        $attachment->setPayment($payment);
        $attachment->setCreatedAt(new \DateTime);
        $attachment->setUpdatedAt(new \DateTime);

        dump($_REQUEST);
        die();
        exit;

        $file = $image = $attachment->upload($_REQUEST['file']);
        $attachment->setFile($file);

        var_dump($payment);
        exit;
    }

}
