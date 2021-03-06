<?php namespace PHPFHIRGenerated\FHIRResource\FHIRConformance;

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
 *   Copyright (c) 2011+, HL7, Inc.
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
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use PHPFHIRGenerated\JsonSerializable;

/**
 * A conformance statement is a set of capabilities of a FHIR Server that may be used as a statement of actual server functionality or a statement of required or desired server implementation.
 */
class FHIRConformanceSearchParam extends FHIRBackboneElement implements JsonSerializable
{
    /**
     * The name of the search parameter used in the interface.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * An absolute URI that is a formal reference to where this parameter was first defined, so that a client can be confident of the meaning of the search parameter (a reference to [[[SearchParameter.url]]]).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $definition = null;

    /**
     * The type of value a search parameter refers to, and how the content is interpreted.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $type = null;

    /**
     * This allows documentation of any distinct behaviors about how the search parameter is used.  For example, text matching algorithms.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $documentation = null;

    /**
     * Types of resource (if a resource is referenced).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode[]
     */
    public $target = array();

    /**
     * A modifier supported for the search parameter.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSearchModifierCode[]
     */
    public $modifier = array();

    /**
     * Contains the names of any search parameters which may be chained to the containing search parameter. Chained parameters may be added to search parameters of type reference, and specify that resources will only be returned if they contain a reference to a resource which matches the chained parameter value. Values for this field should be drawn from Conformance.rest.resource.searchParam.name on the target resource type.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public $chain = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'Conformance.SearchParam';

    /**
     * The name of the search parameter used in the interface.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of the search parameter used in the interface.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * An absolute URI that is a formal reference to where this parameter was first defined, so that a client can be confident of the meaning of the search parameter (a reference to [[[SearchParameter.url]]]).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getDefinition()
    {
        return $this->definition;
    }

    /**
     * An absolute URI that is a formal reference to where this parameter was first defined, so that a client can be confident of the meaning of the search parameter (a reference to [[[SearchParameter.url]]]).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $definition
     * @return $this
     */
    public function setDefinition($definition)
    {
        $this->definition = $definition;
        return $this;
    }

    /**
     * The type of value a search parameter refers to, and how the content is interpreted.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type of value a search parameter refers to, and how the content is interpreted.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * This allows documentation of any distinct behaviors about how the search parameter is used.  For example, text matching algorithms.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }

    /**
     * This allows documentation of any distinct behaviors about how the search parameter is used.  For example, text matching algorithms.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $documentation
     * @return $this
     */
    public function setDocumentation($documentation)
    {
        $this->documentation = $documentation;
        return $this;
    }

    /**
     * Types of resource (if a resource is referenced).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode[]
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Types of resource (if a resource is referenced).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode[] $target
     * @return $this
     */
    public function addTarget($target)
    {
        $this->target[] = $target;
        return $this;
    }

    /**
     * A modifier supported for the search parameter.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRSearchModifierCode[]
     */
    public function getModifier()
    {
        return $this->modifier;
    }

    /**
     * A modifier supported for the search parameter.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRSearchModifierCode[] $modifier
     * @return $this
     */
    public function addModifier($modifier)
    {
        $this->modifier[] = $modifier;
        return $this;
    }

    /**
     * Contains the names of any search parameters which may be chained to the containing search parameter. Chained parameters may be added to search parameters of type reference, and specify that resources will only be returned if they contain a reference to a resource which matches the chained parameter value. Values for this field should be drawn from Conformance.rest.resource.searchParam.name on the target resource type.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public function getChain()
    {
        return $this->chain;
    }

    /**
     * Contains the names of any search parameters which may be chained to the containing search parameter. Chained parameters may be added to search parameters of type reference, and specify that resources will only be returned if they contain a reference to a resource which matches the chained parameter value. Values for this field should be drawn from Conformance.rest.resource.searchParam.name on the target resource type.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString[] $chain
     * @return $this
     */
    public function addChain($chain)
    {
        $this->chain[] = $chain;
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
        if (null !== $this->name) $json['name'] = $this->name->jsonSerialize();
        if (null !== $this->definition) $json['definition'] = $this->definition->jsonSerialize();
        if (null !== $this->type) $json['type'] = $this->type->jsonSerialize();
        if (null !== $this->documentation) $json['documentation'] = $this->documentation->jsonSerialize();
        if (0 < count($this->target)) {
            $json['target'] = array();
            foreach($this->target as $target) {
                $json['target'][] = $target->jsonSerialize();
            }
        }
        if (0 < count($this->modifier)) {
            $json['modifier'] = array();
            foreach($this->modifier as $modifier) {
                $json['modifier'][] = $modifier->jsonSerialize();
            }
        }
        if (0 < count($this->chain)) {
            $json['chain'] = array();
            foreach($this->chain as $chain) {
                $json['chain'][] = $chain->jsonSerialize();
            }
        }
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ConformanceSearchParam xmlns="http://hl7.org/fhir"></ConformanceSearchParam>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->name) $this->name->xmlSerialize(true, $sxe->addChild('name'));
        if (null !== $this->definition) $this->definition->xmlSerialize(true, $sxe->addChild('definition'));
        if (null !== $this->type) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (null !== $this->documentation) $this->documentation->xmlSerialize(true, $sxe->addChild('documentation'));
        if (0 < count($this->target)) {
            foreach($this->target as $target) {
                $target->xmlSerialize(true, $sxe->addChild('target'));
            }
        }
        if (0 < count($this->modifier)) {
            foreach($this->modifier as $modifier) {
                $modifier->xmlSerialize(true, $sxe->addChild('modifier'));
            }
        }
        if (0 < count($this->chain)) {
            foreach($this->chain as $chain) {
                $chain->xmlSerialize(true, $sxe->addChild('chain'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}