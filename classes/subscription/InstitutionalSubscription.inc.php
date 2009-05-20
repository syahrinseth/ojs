<?php

/**
 * @defgroup subscription
 */
 
/**
 * @file classes/subscription/InstitutionalSubscription.inc.php
 *
 * Copyright (c) 2003-2009 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class InstitutionalSubscription
 * @ingroup subscription 
 * @see InstitutionalSubscriptionDAO
 *
 * @brief Basic class describing an institutional subscription.
 */

// $Id$

import('subscription.Subscription');

define('SUBSCRIPTION_IP_RANGE_RANGE', '-');
define('SUBSCRIPTION_IP_RANGE_WILDCARD', '*');


class InstitutionalSubscription extends Subscription {

	function InstitutionalSubscription() {
		parent::Subscription();
	}

	//
	// Get/set methods
	//

	/**
	 * Get the institution name of the institutionalSubscription.
	 * @return string 
	 */
	function getInstitutionName() {
		return $this->getData('institutionName');
	}

	/**
	 * Set the institution name of the institutionalSubscription.
	 * @param $institutionName string
	 */
	function setInstitutionName($institutionName) {
		return $this->setData('institutionName', $institutionName);
	}

	/**
	 * Get the mailing address of the institutionalSubscription.
	 * @return string 
	 */
	function getInstitutionMailingAddress() {
		return $this->getData('mailingAddress');
	}

	/**
	 * Set the mailing address of the institutionalSubscription.
	 * @param $mailingAddress string
	 */
	function setInstitutionMailingAddress($mailingAddress) {
		return $this->setData('mailingAddress', $mailingAddress);
	}

	/**
	 * Get institutionalSubscription domain string.
	 * @return string
	 */
	function getDomain() {
		return $this->getData('domain');
	}

	/**
	 * Set institutionalSubscription domain string.
	 * @param $domain string
	 */
	function setDomain($domain) {
		return $this->setData('domain', $domain);
	}

	/**
	 * Get institutionalSubscription ip ranges.
	 * @return array 
	 */
	function getIPRanges() {
		return $this->getData('ipRanges');
	}

	/**
	 * Set institutionalSubscription ip ranges.
	 * @param ipRanges array 
	 */
	function setIPRanges($ipRanges) {
		return $this->setData('ipRanges', $ipRanges);
	}

}

?>
