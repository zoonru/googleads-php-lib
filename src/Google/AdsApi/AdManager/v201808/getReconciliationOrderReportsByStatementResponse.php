<?php

namespace Google\AdsApi\AdManager\v201808;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getReconciliationOrderReportsByStatementResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v201808\ReconciliationOrderReportPage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v201808\ReconciliationOrderReportPage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201808\ReconciliationOrderReportPage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201808\ReconciliationOrderReportPage $rval
     * @return \Google\AdsApi\AdManager\v201808\getReconciliationOrderReportsByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
