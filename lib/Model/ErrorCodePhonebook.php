<?php
/**
 * ErrorCodePhonebook
 *
 * PHP version 5
 *
 * @category Class
 * @package  Messente\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Messente API
 *
 * [Messente](https://messente.com) is a global provider of messaging and user verification services. Use Messente API library to send and receive SMS, Viber and WhatsApp messages, blacklist phone numbers to make sure you're not sending any unwanted messages, manage contacts and groups.  Messente builds [tools](https://messente.com/documentation) to help organizations connect their services to people anywhere in the world.
 *
 * OpenAPI spec version: 1.0.0
 * Contact: messente@messente.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.0-beta2
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Messente\Api\Model;
use \Messente\Api\ObjectSerializer;

/**
 * ErrorCodePhonebook Class Doc Comment
 *
 * @category Class
 * @description Matches the following ErrorTitlePhonebook.   This field is a constant.    * 201 - Invalid data   * 202 - Unauthorized   * 203 - Missing resource   * 204 - Conflict   * 244 - Client error   * 205 - General error
 * @package  Messente\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ErrorCodePhonebook
{
    /**
     * Possible values of this enum
     */
    const _201 = '201';
    const _202 = '202';
    const _203 = '203';
    const _204 = '204';
    const _244 = '244';
    const _205 = '205';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::_201,
            self::_202,
            self::_203,
            self::_204,
            self::_244,
            self::_205,
        ];
    }
}


