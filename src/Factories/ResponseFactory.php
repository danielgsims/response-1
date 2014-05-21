<?php namespace QL\Response\Factories;

/**
 * @copyright ©2005—2014 Quicken Loans Inc. All rights reserved.
 */

use Symfony\Component\HttpFoundation\Response;

class ResponseFactory extends ResponseFactoryBase
{
  /**
  * {@inheritDoc}
  */
  public function ok($message, $headers = array())
  {
    return $this->send($message, 200, $headers);
  }

  /**
  * {@inheritDoc}
  */
  public function notFound($message, $headers = array())
  {
    return $this->send($message, 404, $headers);
  }

  /**
  * {@inheritDoc}
  */
  public function internalServerError($message, $headers = array())
  {
    return $this->send("An unexpected error occurred: ". $message, 500, $headers);
  }

  /**
  * {@inheritDoc}
  */
  public function created($content, $headers = array())
  {
    return $this->send($content, 201, $headers);
  }

  /**
  * {@inheritDoc}
  */
  public function accepted($content, $headers = array())
  {
    return $this->send($content, 202, $headers);
  }

  /**
  * {@inheritDoc}
  */
  public function noContent($content, $headers = array())
  {
    return $this->send("", 202, $headers);
  }

  /**
  * {@inheritDoc}
  */
  public function movedPermantently($content, $headers = array())
  {
    return $this->send($content, 301, $headers);
  }

  /**
  * {@inheritDoc}
  */
  public function found($content, $headers = array())
  {
    return $this->send($content, 302, $headers);
  }

  /**
  * {@inheritDoc}
  */
  public function seeOther($content, $headers = array())
  {
    return $this->send($content, 303, $headers);
  }

  /**
  * {@inheritDoc}
  */
  public function badRequest($content, $headers = array())
  {
    return $this->send($content, 400, $headers);
  }

  /**
  * {@inheritDoc}
  */
  public function unauthorized($content, $headers = array())
  {
    return $this->send($content, 401, $headers);
  }

  /**
  * {@inheritDoc}
  */
  public function forbidden($content, $headers = array())
  {
    return $this->send($content, 403, $headers);
  }

  /**
  * {@inheritDoc}
  */
  public function methodNotAllowed($content, $headers = array())
  {
    return $this->send($content, 405, $headers);
  }

  /**
  * {@inheritDoc}
  */
  public function notAcceptable($content, $headers = array())
  {
    return $this->send($content, 406, $headers);
  }

  /**
  * {@inheritDoc}
  */
  public function send($message, $status, array $headers = array())
  {
    return new Response($message, $status, $headers);
  }
}
