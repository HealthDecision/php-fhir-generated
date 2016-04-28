<?php namespace PHPFHIRGenerated\FHIRResource\FHIRProfile;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: April 28th, 2016
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016 Daniel Carbone (daniel.p.carbone@gmail.com)
 * 
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 *        http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * 
 *
 * FHIR Copyright Notice:
 *
 *   Copyright (c) 2011-2013, HL7, Inc.
 *   All rights reserved.
 * 
 *   Redistribution and use in source and binary forms, with or without modification,
 *   are permitted provided that the following conditions are met:
 * 
 *    * Redistributions of source code must retain the above copyright notice, this
 *      list of conditions and the following disclaimer.
 *    * Redistributions in binary form must reproduce the above copyright notice,
 *      this list of conditions and the following disclaimer in the documentation
 *      and/or other materials provided with the distribution.
 *    * Neither the name of HL7 nor the names of its contributors may be used to
 *      endorse or promote products derived from this software without specific
 *      prior written permission.
 * 
 *   THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 *   ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 *   WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.
 *   IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT,
 *   INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT
 *   NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR
 *   PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY,
 *   WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 *   ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 *   POSSIBILITY OF SUCH DAMAGE.
 * 
 * 
 *   Generated on Tue, Sep 30, 2014 18:08+1000 for FHIR v0.0.82
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use PHPFHIRGenerated\JsonSerializable;

/**
 * A Resource Profile - a statement of use of one or more FHIR Resources.  It may include constraints on Resources and Data Types, Terminology Binding Statements and Extension Definitions.
 */
class FHIRProfileExtensionDefn extends FHIRBackboneElement implements JsonSerializable
{
    /**
     * A unique code (within the profile) used to identify the extension.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $code = null;

    /**
     * Defined so that applications can use this name when displaying the value of the extension to the user.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $display = null;

    /**
     * Identifies the type of context to which the extension applies.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRExtensionContext
     */
    public $contextType = null;

    /**
     * Identifies the types of resource or data type elements to which the extension can be applied.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public $context = array();

    /**
     * Definition of the extension and its content.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRProfile\FHIRProfileDefinition
     */
    public $definition = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'Profile.ExtensionDefn';

    /**
     * A unique code (within the profile) used to identify the extension.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * A unique code (within the profile) used to identify the extension.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Defined so that applications can use this name when displaying the value of the extension to the user.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDisplay()
    {
        return $this->display;
    }

    /**
     * Defined so that applications can use this name when displaying the value of the extension to the user.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $display
     * @return $this
     */
    public function setDisplay($display)
    {
        $this->display = $display;
        return $this;
    }

    /**
     * Identifies the type of context to which the extension applies.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRExtensionContext
     */
    public function getContextType()
    {
        return $this->contextType;
    }

    /**
     * Identifies the type of context to which the extension applies.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRExtensionContext $contextType
     * @return $this
     */
    public function setContextType($contextType)
    {
        $this->contextType = $contextType;
        return $this;
    }

    /**
     * Identifies the types of resource or data type elements to which the extension can be applied.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * Identifies the types of resource or data type elements to which the extension can be applied.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString[] $context
     * @return $this
     */
    public function addContext($context)
    {
        $this->context[] = $context;
        return $this;
    }

    /**
     * Definition of the extension and its content.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRProfile\FHIRProfileDefinition
     */
    public function getDefinition()
    {
        return $this->definition;
    }

    /**
     * Definition of the extension and its content.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRProfile\FHIRProfileDefinition $definition
     * @return $this
     */
    public function setDefinition($definition)
    {
        $this->definition = $definition;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName()
    {
        return $this->_fhirElementName;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $json = parent::jsonSerialize();
        if (null !== $this->code) $json['code'] = $this->code->jsonSerialize();
        if (null !== $this->display) $json['display'] = $this->display->jsonSerialize();
        if (null !== $this->contextType) $json['contextType'] = $this->contextType->jsonSerialize();
        if (0 < count($this->context)) {
            $json['context'] = array();
            foreach($this->context as $context) {
                $json['context'][] = $context->jsonSerialize();
            }
        }
        if (null !== $this->definition) $json['definition'] = $this->definition->jsonSerialize();
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ProfileExtensionDefn xmlns="http://hl7.org/fhir"></ProfileExtensionDefn>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->code) $this->code->xmlSerialize(true, $sxe->addChild('code'));
        if (null !== $this->display) $this->display->xmlSerialize(true, $sxe->addChild('display'));
        if (null !== $this->contextType) $this->contextType->xmlSerialize(true, $sxe->addChild('contextType'));
        if (0 < count($this->context)) {
            foreach($this->context as $context) {
                $context->xmlSerialize(true, $sxe->addChild('context'));
            }
        }
        if (null !== $this->definition) $this->definition->xmlSerialize(true, $sxe->addChild('definition'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}