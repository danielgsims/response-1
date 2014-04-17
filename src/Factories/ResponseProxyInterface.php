<?php namespace QL\Response\Factories;

/**
 * @copyright ©2005—2014 Quicken Loans Inc. All rights reserved.
 */

interface ResponseProxyInterface
{
    public function setResponseFactory(ResponseFactoryBase $rf);
    public function __call($method,$args);
}
