<?php namespace QL\Response\Factories;

/**
 * @copyright ©2005—2014 Quicken Loans Inc. All rights reserved.
 */

/**
 * Response Proxy Interface
 *
 * Implement this interface to create a proxy to a Response Factory
 */
interface ResponseProxyInterface
{
    /**
     *  Set a response factory
     *
     *  @param ResponseFactoryBase $rf A Response Factory
     */
    public function setResponseFactory(ResponseFactoryBase $rf);

    /**
     * Proxy a response factory method
     *  
     * @param string $method The method called in the proxy
     * @param array $args The arguments from the proxied method call
     */
    public function __call($method,$args);
}
