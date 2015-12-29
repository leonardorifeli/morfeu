<?php

namespace Morfeu\Bundle\PaymentBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

use Morfeu\Bundle\EntityBundle\Entity\PaymentAttachment;
use Morfeu\Bundle\PaymentBundle\Form\PaymentType;
use Morfeu\Bundle\BusinessBundle\Helper\PaymentHelper;
use Morfeu\Bundle\BusinessBundle\Enum\TypePayment;
use Morfeu\Bundle\BusinessBundle\Enum\Attachment;

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
        if ((empty($_FILES)) || ($_FILES["file"]["error"])) {
            die('{"OK": 0}');
        }

        $payment = $this->getPaymentService()->get($payment);

        if(!$payment){
            die('{"jsonrpc" : "2.0", "error" : {"code": 100, "message": "Pagamento não encontrado."}, "id" : "id"}');
        }

        $file = $request->files->get('file');

        $attachment = new PaymentAttachment();
        $attachment->setPayment($payment);
        $attachment->setCreatedAt(new \DateTime);
        $attachment->setUpdatedAt(new \DateTime);
        $attachment->setStatus(Attachment::STATUS_ACTIVE);

        $file = $attachment->upload($file, Attachment::getFileExtension(), Attachment::MAX_FILE_SIZE);
        $attachment->setFile($file);

        $attachment = $this->getPaymentAttachmentService()->insertOrUpdate($attachment);

        if(!$attachment) die('{"OK": 0}');

        die('{"OK": 1}');
    }

    public function deleteAction($id, $payment)
    {
        $attachment = $this->getPaymentAttachmentService()->get($id);

        if(!$attachment) return $this->redirect($this->generateUrl('payment_edit', array('id' => $payment)));

        $remove = $attachment->removeUpload($attachment->getFile());

        if(!$remove){
            $message = $remove->getMessage();

            return $this->redirect($this->generateUrl('payment_edit', array('id' => $payment, 'error-attachment' => $remove->getCode())));
        }

        return $this->redirect($this->generateUrl('payment_edit', array('id' => $payment)));
    }
}
