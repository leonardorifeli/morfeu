<?php

namespace Morfeu\Bundle\BusinessBundle\Model;

class PaymentFilter {

    private $period;
    private $periodTo;
    private $status;

    /**
    * Get the value of Period
    *
    * @return mixed
    */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
    * Set the value of Period
    *
    * @param mixed period
    *
    * @return self
    */
    public function setPeriod($period)
    {
        $this->period = $period;

        return $this;
    }

    /**
    * Get the value of Period To
    *
    * @return mixed
    */
    public function getPeriodTo()
    {
        return $this->periodTo;
    }

    /**
    * Set the value of Period To
    *
    * @param mixed periodTo
    *
    * @return self
    */
    public function setPeriodTo($periodTo)
    {
        $this->periodTo = $periodTo;

        return $this;
    }

    /**
    * Get the value of Status
    *
    * @return mixed
    */
    public function getStatus()
    {
        return $this->status;
    }

    /**
    * Set the value of Status
    *
    * @param mixed status
    *
    * @return self
    */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

}
