<?php

namespace Google\AdsApi\AdManager\v202002;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class TargetingValue extends \Google\AdsApi\AdManager\v202002\ObjectValue
{

    /**
     * @var \Google\AdsApi\AdManager\v202002\Targeting $value
     */
    protected $value = null;

    /**
     * @param \Google\AdsApi\AdManager\v202002\Targeting $value
     */
    public function __construct($value = null)
    {
      $this->value = $value;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202002\Targeting
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202002\Targeting $value
     * @return \Google\AdsApi\AdManager\v202002\TargetingValue
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
