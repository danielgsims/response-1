<?php

use QL\Response\Factories\ResponseFactoryBase;
use QL\Response\Exceptions\MethodNotImplementedException;

class ResponseDummyImplementation extends ResponseFactoryBase {}

// All methods should throw MethodNotImplementedException
class ResponseBaseTest extends PHPUnit_Framework_TestCase
{
  private $responseFactory;
  private $message = 'test';
  private $args = array();

  public function setUp()
  {
    $this->responseFactory = new ResponseDummyImplementation;
  }

  public function isExceptionThrown($method)
  {
     $this->setExpectedException('QL\Response\Exceptions\MethodNotImplementedException');
     $this->responseFactory->$method($this->message, $this->args);
  }

  public function testSend()
  {
    $statusCode = 200;
    $content = 'test';
    $key = 'X-Your-Mom';
    $val = 'What did you just say?!';
    $headers = array(
      $key => $val
    );

    $response = $this->responseFactory->send($content, $statusCode, $headers);
    $this->assertInstanceOf('Symfony\\Component\\HttpFoundation\\Response', $response);
    $this->assertEquals($response->headers->get($key), $val);
    $this->assertEquals($response->getContent(), $content);
    $this->assertEquals($response->getStatusCode(), $statusCode);
  }

  public function test_ok()
  {
    $this->isExceptionThrown("ok");
  }

  public function test_created()
  {
    $this->isExceptionThrown("created");
  }

  public function test_accepted()
  {
    $this->isExceptionThrown("accepted");
  }

  public function test_nonAuthoritativeInformation()
  {
    $this->isExceptionThrown("nonAuthoritativeInformation");
  }

  public function test_noContent()
  {
    $this->isExceptionThrown("noContent");
  }

  public function test_resetContent()
  {
    $this->isExceptionThrown("resetContent");
  }

  public function test_partialContent()
  {
    $this->isExceptionThrown("partialContent");
  }

  public function test_multipleChoices()
  {
    $this->isExceptionThrown("multipleChoices");
  }

  public function test_movedPermanently()
  {
    $this->isExceptionThrown("movedPermanently");
  }

  public function test_found()
  {
    $this->isExceptionThrown("found");
  }

  public function test_seeOther()
  {
    $this->isExceptionThrown("seeOther");
  }

  public function test_notMotified()
  {
    $this->isExceptionThrown("notMotified");
  }

  public function test_useProxy()
  {
    $this->isExceptionThrown("useProxy");
  }

  public function test_temporaryRedirect()
  {
    $this->isExceptionThrown("temporaryRedirect");
  }

  public function test_badRequest()
  {
    $this->isExceptionThrown("badRequest");
  }

  public function test_unauthorized()
  {
    $this->isExceptionThrown("unauthorized");
  }

  public function test_paymentRequired()
  {
    $this->isExceptionThrown("paymentRequired");
  }

  public function test_forbidden()
  {
    $this->isExceptionThrown("forbidden");
  }

  public function test_notFound()
  {
    $this->isExceptionThrown("notFound");
  }

  public function test_methodNotAllowed()
  {
    $this->isExceptionThrown("methodNotAllowed");
  }

  public function test_notAcceptable()
  {
    $this->isExceptionThrown("notAcceptable");
  }

  public function test_proxyAuthenticationRequired()
  {
    $this->isExceptionThrown("proxyAuthenticationRequired");
  }

  public function test_requestTimeout()
  {
    $this->isExceptionThrown("requestTimeout");
  }

  public function test_conflict()
  {
    $this->isExceptionThrown("conflict");
  }

  public function test_gone()
  {
    $this->isExceptionThrown("gone");
  }

  public function test_lengthRequired()
  {
    $this->isExceptionThrown("lengthRequired");
  }

  public function test_preconditionFailed()
  {
    $this->isExceptionThrown("preconditionFailed");
  }

  public function test_requestEntityTooLarge()
  {
    $this->isExceptionThrown("requestEntityTooLarge");
  }

  public function test_requestUriTooLong()
  {
    $this->isExceptionThrown("requestUriTooLong");
  }

  public function test_unsupportedMediaType()
  {
    $this->isExceptionThrown("unsupportedMediaType");
  }

  public function test_requestRangeNotSatisfiable()
  {
    $this->isExceptionThrown("requestRangeNotSatisfiable");
  }

  public function test_expectationFailed()
  {
    $this->isExceptionThrown("expectationFailed");
  }

  public function test_internalServerError()
  {
    $this->isExceptionThrown("internalServerError");
  }

  public function test_notImplemented()
  {
    $this->isExceptionThrown("notImplemented");
  }

  public function test_badGateway()
  {
    $this->isExceptionThrown("badGateway");
  }

  public function test_serviceUnavailable()
  {
    $this->isExceptionThrown("serviceUnavailable");
  }

  public function test_gatewayTimeout()
  {
    $this->isExceptionThrown("gatewayTimeout");
  }

  public function test_httpVersionNotSupported()
  {
    $this->isExceptionThrown("httpVersionNotSupported");
  }
}
