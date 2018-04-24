<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AirPrintDestination File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;
/**
* AirPrintDestination class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class AirPrintDestination extends Entity
{
    /**
    * Gets the ipAddress
    *
    * @return string The ipAddress
    */
    public function getIpAddress()
    {
        if (array_key_exists("ipAddress", $this->_propDict)) {
            return $this->_propDict["ipAddress"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ipAddress
    *
    * @param string $val The value of the ipAddress
    *
    * @return AirPrintDestination
    */
    public function setIpAddress($val)
    {
        $this->_propDict["ipAddress"] = $val;
        return $this;
    }
    /**
    * Gets the resourcePath
    * The Resource Path associated with the printer. This corresponds to the rp parameter of the _ipps.tcp Bonjour record. For example: printers/Canon_MG5300_series, printers/Xerox_Phaser_7600, ipp/print, Epson_IPP_Printer.
    *
    * @return string The resourcePath
    */
    public function getResourcePath()
    {
        if (array_key_exists("resourcePath", $this->_propDict)) {
            return $this->_propDict["resourcePath"];
        } else {
            return null;
        }
    }

    /**
    * Sets the resourcePath
    * The Resource Path associated with the printer. This corresponds to the rp parameter of the _ipps.tcp Bonjour record. For example: printers/Canon_MG5300_series, printers/Xerox_Phaser_7600, ipp/print, Epson_IPP_Printer.
    *
    * @param string $val The value of the resourcePath
    *
    * @return AirPrintDestination
    */
    public function setResourcePath($val)
    {
        $this->_propDict["resourcePath"] = $val;
        return $this;
    }
    /**
    * Gets the port
    *
    * @return int The port
    */
    public function getPort()
    {
        if (array_key_exists("port", $this->_propDict)) {
            return $this->_propDict["port"];
        } else {
            return null;
        }
    }

    /**
    * Sets the port
    *
    * @param int $val The value of the port
    *
    * @return AirPrintDestination
    */
    public function setPort($val)
    {
        $this->_propDict["port"] = $val;
        return $this;
    }
    /**
    * Gets the forceTls
    *
    * @return bool The forceTls
    */
    public function getForceTls()
    {
        if (array_key_exists("forceTls", $this->_propDict)) {
            return $this->_propDict["forceTls"];
        } else {
            return null;
        }
    }

    /**
    * Sets the forceTls
    *
    * @param bool $val The value of the forceTls
    *
    * @return AirPrintDestination
    */
    public function setForceTls($val)
    {
        $this->_propDict["forceTls"] = $val;
        return $this;
    }
}