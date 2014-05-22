<?php

use QL\Response\Factories\ResponseFactory;

// All methods should return a response with a status code
class ResponseFactoryTest extends PHPUnit_Framework_TestCase
{
  private $responseFactory;
  private $message = 'test';
  private $args = array();

  public function setUp()
  {

    $this->responseFactory = new ResponseFactory;
  }

  public function checkStatus($method, $code)
  {
     $response = $this->responseFactory->$method($this->message, $this->args);
     $this->assertInstanceOf('Symfony\\Component\\HttpFoundation\\Response', $response);
     $this->assertEquals($response->getStatusCode(), $code);
  }

  public function test_ok()
  {
    $this->checkStatus("ok", 200);
  }

  public function test_created()
  {
    $this->checkStatus("created", 201);
  }

  public function test_accepted()
  {
    $this->checkStatus("accepted", 202);
  }

  public function test_nonAuthoritativeInformation()
  {
    $this->checkStatus("nonAuthoritativeInformation", 203);
  }

  public function test_noContent()
  {
    $this->checkStatus("noContent", 204);
  }

  public function test_resetContent()
  {
    $this->checkStatus("resetContent", 205);
  }

  public function test_partialContent()
  {
    $this->checkStatus("partialContent", 206);
  }

  public function test_multipleChoices()
  {
    $this->checkStatus("multipleChoices", 300);
  }

  public function test_movedPermanently()
  {
    $this->checkStatus("movedPermanently", 301);
  }

  public function test_found()
  {
    $this->checkStatus("found", 302);
  }

  public function test_seeOther()
  {
    $this->checkStatus("seeOther", 303);
  }

  public function test_notMotified()
  {
    $this->checkStatus("notMotified", 304);
  }

  public function test_useProxy()
  {
    $this->checkStatus("useProxy", 305);
  }

  public function test_temporaryRedirect()
  {
    $this->checkStatus("temporaryRedirect", 307);
  }

  public function test_badRequest()
  {
    $this->checkStatus("badRequest", 400);
  }

  public function test_unauthorized()
  {
    $this->checkStatus("unauthorized", 401);
  }

  public function test_paymentRequired()
  {
    $this->checkStatus("paymentRequired", 402);
  }

  public function test_forbidden()
  {
    $this->checkStatus("forbidden", 403);
  }

  public function test_notFound()
  {
    $this->checkStatus("notFound", 404);
  }

  public function test_methodNotAllowed()
  {
    $this->checkStatus("methodNotAllowed", 405);
  }

  public function test_notAcceptable()
  {
    $this->checkStatus("notAcceptable", 406);
  }

  public function test_proxyAuthenticationRequired()
  {
    $this->checkStatus("proxyAuthenticationRequired", 407);
  }

  public function test_requestTimeout()
  {
    $this->checkStatus("requestTimeout", 408);
  }

  public function test_conflict()
  {
    $this->checkStatus("conflict", 409);
  }

  public function test_gone()
  {
    $this->checkStatus("gone", 410);
  }

  public function test_lengthRequired()
  {
    $this->checkStatus("lengthRequired", 411);
  }

  public function test_preconditionFailed()
  {
    $this->checkStatus("preconditionFailed", 412);
  }

  public function test_requestEntityTooLarge()
  {
    $this->checkStatus("requestEntityTooLarge", 413);
  }

  public function test_requestUriTooLong()
  {
    $this->checkStatus("requestUriTooLong", 414);
  }

  public function test_unsupportedMediaType()
  {
    $this->checkStatus("unsupportedMediaType", 415);
  }

  public function test_requestRangeNotSatisfiable()
  {
    $this->checkStatus("requestRangeNotSatisfiable", 416);
  }

  public function test_expectationFailed()
  {
    $this->checkStatus("expectationFailed", 417);
  }

  public function test_internalServerError()
  {
    $this->checkStatus("internalServerError", 500);
  }

  public function test_notImplemented()
  {
    $this->checkStatus("notImplemented", 501);
  }

  public function test_badGateway()
  {
    $this->checkStatus("badGateway", 502);
  }

  public function test_serviceUnavailable()
  {
    $this->checkStatus("serviceUnavailable", 503);
  }

  public function test_gatewayTimeout()
  {
    $this->checkStatus("gatewayTimeout", 504);
  }

  public function test_httpVersionNotSupported()
  {
    $this->checkStatus("httpVersionNotSupported", 505);
  }
}
