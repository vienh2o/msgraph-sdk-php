<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IncompleteData File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;
/**
* IncompleteData class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class IncompleteData extends Entity
{

    /**
    * Gets the missingDataBeforeDateTime
    *
    * @return \DateTime The missingDataBeforeDateTime
    */
    public function getMissingDataBeforeDateTime()
    {
        if (array_key_exists("missingDataBeforeDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["missingDataBeforeDateTime"], "Microsoft\Graph\Beta\Model\\DateTime")) {
                return $this->_propDict["missingDataBeforeDateTime"];
            } else {
                $this->_propDict["missingDataBeforeDateTime"] = new \DateTime($this->_propDict["missingDataBeforeDateTime"]);
                return $this->_propDict["missingDataBeforeDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the missingDataBeforeDateTime
    *
    * @param \DateTime $val The value to assign to the missingDataBeforeDateTime
    *
    * @return IncompleteData The IncompleteData
    */
    public function setMissingDataBeforeDateTime($val)
    {
        $this->_propDict["missingDataBeforeDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the wasThrottled
    *
    * @return bool The wasThrottled
    */
    public function getWasThrottled()
    {
        if (array_key_exists("wasThrottled", $this->_propDict)) {
            return $this->_propDict["wasThrottled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the wasThrottled
    *
    * @param bool $val The value of the wasThrottled
    *
    * @return IncompleteData
    */
    public function setWasThrottled($val)
    {
        $this->_propDict["wasThrottled"] = $val;
        return $this;
    }
}
