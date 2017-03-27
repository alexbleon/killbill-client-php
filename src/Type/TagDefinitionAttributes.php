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


class TagDefinitionAttributes extends \Killbill\Client\Resource {
  protected $id = null;
  protected $isControlTag = null;
  protected $name = null;
  protected $description = null;
  protected $applicableObjectTypes = null;
  protected $auditLogs = null;

  public function setId ($id) {
    $this->id = $id;
  }

  public function getId () {
    return $this->id;
  }

  public function setIsControlTag ($isControlTag) {
    $this->isControlTag = $isControlTag;
  }

  public function getIsControlTag () {
    return $this->isControlTag;
  }

  public function setName ($name) {
    $this->name = $name;
  }

  public function getName () {
    return $this->name;
  }

  public function setDescription ($description) {
    $this->description = $description;
  }

  public function getDescription () {
    return $this->description;
  }

  public function setApplicableObjectTypes ($applicableObjectTypes) {
    $this->applicableObjectTypes = $applicableObjectTypes;
  }

  public function getApplicableObjectTypes () {
    return $this->applicableObjectTypes;
  }

  public function setAuditLogs ($auditLogs) {
    $this->auditLogs = $auditLogs;
  }

  public function getAuditLogs () {
    return $this->auditLogs;
  }

}
