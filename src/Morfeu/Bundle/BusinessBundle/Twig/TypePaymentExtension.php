<?php

namespace Morfeu\Bundle\BusinessBundle\Twig;

use Morfeu\Bundle\BusinessBundle\Enum\TypePayment;

class TypePaymentExtension extends \Twig_Extension
{
    const ACCOMPLISHED = TypePayment::ACCOMPLISHED;
    const RECEIVED = TypePayment::RECEIVED;
    const NAME = "TypePayment";

    public function getAccomplishedType()
    {
        return self::ACCOMPLISHED;
    }

    public function getReceivedType()
    {
        return self::RECEIVED;
    }

    public function getName()
    {
        return self::NAME;
    }

    public function getFunctions()
    {
        return array(
            new \Twig_SimpleFunction('getAccomplishedType', array($this, 'getAccomplishedType')),
            new \Twig_SimpleFunction('getReceivedType', array($this, 'getReceivedType')),
        );
    }

}
