<?php
/**
 * This file is part of the SevenShores/NetSuite library
 * AND originally from the NetSuite PHP Toolkit.
 *
 * New content:
 * @package    ryanwinchester/netsuite-php
 * @copyright  Copyright (c) Ryan Winchester
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache-2.0
 * @link       https://github.com/ryanwinchester/netsuite-php
 *
 * Original content:
 * @copyright  Copyright (c) NetSuite Inc.
 * @license    https://raw.githubusercontent.com/ryanwinchester/netsuite-php/master/original/NetSuite%20Application%20Developer%20License%20Agreement.txt
 * @link       http://www.netsuite.com/portal/developers/resources/suitetalk-sample-applications.shtml
 *
 * generated:  2016-03-04 07:23:27 PM UTC
 */

namespace NetSuite\Classes;

class GiftCertificate extends Record {
    public $giftCertCode;
    public $sender;
    public $name;
    public $email;
    public $message;
    public $expirationDate;
    public $createdDate;
    public $lastModifiedDate;
    public $originalAmount;
    public $amountRemaining;
    public $internalId;
    static $paramtypesmap = array(
        "giftCertCode" => "string",
        "sender" => "string",
        "name" => "string",
        "email" => "string",
        "message" => "string",
        "expirationDate" => "dateTime",
        "createdDate" => "dateTime",
        "lastModifiedDate" => "dateTime",
        "originalAmount" => "float",
        "amountRemaining" => "float",
        "internalId" => "string",
    );
}

