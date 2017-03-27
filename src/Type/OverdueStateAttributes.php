<?php

/*
 * Copyright 2011-2017 Ning, Inc.
 * Copyright 2014 Groupon, Inc.
 * Copyright 2014 The Billing Project, LLC
 *
 * The Billing Project licenses this file to you under the Apache License, version 2.0
 * (the "License"); you may not use this file except in compliance with the
 * License.  You may obtain a copy of the License at:
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.  See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */
namespace Killbill\Client\Type;


/*
 *                       DO NOT EDIT!!!
 *    File automatically generated by killbill-java-parser (git@github.com:killbill/killbill-java-parser.git)
 */


class OverdueStateAttributes extends \Killbill\Client\Resource {
  protected $name = null;
  protected $externalMessage = null;
  protected $daysBetweenPaymentRetries = null;
  protected $disableEntitlementAndChangesBlocked = null;
  protected $blockChanges = null;
  protected $clearState = null;
  protected $reevaluationIntervalDays = null;

  public function setName ($name) {
    $this->name = $name;
  }

  public function getName () {
    return $this->name;
  }

  public function setExternalMessage ($externalMessage) {
    $this->externalMessage = $externalMessage;
  }

  public function getExternalMessage () {
    return $this->externalMessage;
  }

  public function setDaysBetweenPaymentRetries ($daysBetweenPaymentRetries) {
    $this->daysBetweenPaymentRetries = $daysBetweenPaymentRetries;
  }

  public function getDaysBetweenPaymentRetries () {
    return $this->daysBetweenPaymentRetries;
  }

  public function setDisableEntitlementAndChangesBlocked ($disableEntitlementAndChangesBlocked) {
    $this->disableEntitlementAndChangesBlocked = $disableEntitlementAndChangesBlocked;
  }

  public function getDisableEntitlementAndChangesBlocked () {
    return $this->disableEntitlementAndChangesBlocked;
  }

  public function setBlockChanges ($blockChanges) {
    $this->blockChanges = $blockChanges;
  }

  public function getBlockChanges () {
    return $this->blockChanges;
  }

  public function setClearState ($clearState) {
    $this->clearState = $clearState;
  }

  public function getClearState () {
    return $this->clearState;
  }

  public function setReevaluationIntervalDays ($reevaluationIntervalDays) {
    $this->reevaluationIntervalDays = $reevaluationIntervalDays;
  }

  public function getReevaluationIntervalDays () {
    return $this->reevaluationIntervalDays;
  }

}
