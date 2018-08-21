<?php

namespace Google\AdsApi\AdManager\v201711;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdSenseCreative extends \Google\AdsApi\AdManager\v201711\HasHtmlSnippetDynamicAllocationCreative
{

    /**
     * @param int $advertiserId
     * @param int $id
     * @param string $name
     * @param \Google\AdsApi\AdManager\v201711\Size $size
     * @param string $previewUrl
     * @param string[] $policyViolations
     * @param \Google\AdsApi\AdManager\v201711\AppliedLabel[] $appliedLabels
     * @param \Google\AdsApi\AdManager\v201711\DateTime $lastModifiedDateTime
     * @param \Google\AdsApi\AdManager\v201711\BaseCustomFieldValue[] $customFieldValues
     * @param string $codeSnippet
     */
    public function __construct($advertiserId = null, $id = null, $name = null, $size = null, $previewUrl = null, array $policyViolations = null, array $appliedLabels = null, $lastModifiedDateTime = null, array $customFieldValues = null, $codeSnippet = null)
    {
      parent::__construct($advertiserId, $id, $name, $size, $previewUrl, $policyViolations, $appliedLabels, $lastModifiedDateTime, $customFieldValues, $codeSnippet);
    }

}
