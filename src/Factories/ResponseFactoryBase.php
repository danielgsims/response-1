<?php namespace QL\Response\Factories;

use Symfony\Component\HttpFoundation\Response;
use QL\Response\Exceptions\MethodNotImplementedException;

/**
 * Response Factory Base Class
 *
 * The response factory base class defines HTTP methods, but defaults their
 * implementation to a methodNotImplemented exception. This is so that in
 * any derived factory, only certain responses need to be exposed.
 */
abstract class ResponseFactoryBase
{
  /**
  *
  * Return Response with Status Code 200
  * 
  * @param string $content The response content
  * @param array $headers The headers array
  * @return Response
  * @throws MethodNotImplementedException
  */
  public function ok($content, $headers = array())
  {
      $this->methodNotImplemented();
  }

 /**
  *
  * Return Response with Status Code 201
  * 
  * @param string $content The response content
  * @param array $headers The headers array
  * @return Response
  * @throws MethodNotImplementedException
  */
  public function created($content, $headers = array())
  {
      $this->methodNotImplemented();
  }

 /**
  *
  * Return Response with Status Code 202
  * 
  * @param string $content The response content
  * @param array $headers The headers array
  * @return Response
  * @throws MethodNotImplementedException
  */
  public function accepted($content, $headers = array())
  {
      $this->methodNotImplemented();
  }

 /**
  *
  * Return Response with Status Code 301
  * 
  * @param string $content The response content
  * @param array $headers The headers array
  * @return Response
  * @throws MethodNotImplementedException
  */
  public function movedPermanently($content, $headers = array())
  {
      $this->methodNotImplemented();
  }

 /**
  *
  * Return Response with Status Code 302
  * 
  * @param string $content The response content
  * @param array $headers The headers array
  * @return Response
  * @throws MethodNotImplementedException
  */
  public function found($content, $headers = array())
  {
      $this->methodNotImplemented();
  }

 /**
  *
  * Return Response with Status Code 303
  * 
  * @param string $content The response content
  * @param array $headers The headers array
  * @return Response
  * @throws MethodNotImplementedException
  */
  public function seeOther($content, $headers = array())
  {
      $this->methodNotImplemented();
  }

 /**
  *
  * Return Response with Status Code 400
  * 
  * @param string $content The response content
  * @param array $headers The headers array
  * @return Response
  * @throws MethodNotImplementedException
  */
  public function badRequest($content, $headers = array())
  {
      $this->methodNotImplemented();
  }

 /**
  *
  * Return Response with Status Code 401
  * 
  * @param string $content The response content
  * @param array $headers The headers array
  * @return Response
  * @throws MethodNotImplementedException
  */
  public function unauthorized($content, $headers = array())
  {
      $this->methodNotImplemented();
  }

 /**
  *
  * Return Response with Status Code 403
  * 
  * @param string $content The response content
  * @param array $headers The headers array
  * @return Response
  * @throws MethodNotImplementedException
  */
  public function notFound($content, $headers = array())
  {
      $this->methodNotImplemented();
  }

 /**
  *
  * Return Response with Status Code 405
  * 
  * @param string $content The response content
  * @param array $headers The headers array
  * @return Response
  * @throws MethodNotImplementedException
  */
  public function methodNotAllowed($content, $headers = array())
  {
      $this->methodNotImplemented();
  }

  /**
  *
  * Return Response with Status Code 406
  * 
  * @param string $content The response content
  * @param array $headers The headers array
  * @return Response
  * @throws MethodNotImplementedException
  */
  public function notAcceptable($content, $headers = array())
  {
      $this->methodNotImplemented();

          /*,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,::=+I+++++++++=?:=77$$$$$$$$????????+
          ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,:=+??+===++++++++++=?=,:I$7$$$$$7$I??????+
          ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,:+??+===+++++++++++++=?I:,~77$$$$$$$$??????+
          ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,:+I?===++++++++++++++++++++=+I~:I$7$$$$$7$I????+
          ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,~??==++++++++++++++++++++++++=+?~~77$$$$$$$$????+
          ,,,,,,,,,,,,,,,,,,,,,,,,,,,,:??==+++++++++++++++++++++++++++++=+?:I$7$$$$$$$I??+
          ,,,,,,,,,,,,,,,,,,,,,,,,,,,~?+=++++++++++++++++++++++++++++++++=?+~77$$$$$$$$??+
          ,,,,,,,,,,,,,,,,,,,,,,,,,~I+=+++++++++++++++++++++++++++++++++++++?~777$$$$$$$?+
          ,,,,,,,,,,,,,,,,,,,,,,,:I+=+++++++++++++++++++++++++++++++++++++++=I~?$7$$$$$$$?
          ,,,,,,,,,,,,,,,,,,,,,,,?+=++++++++++++++++++++++++++++++++++++++++=++~777$$$$$$I
          ,,,,,,,,,,,,,,,,,,,,,~I==++++++++++++++++++++++++++++++++++++++++++=++~77$$$$$$7
          ,,,,,,,,,,,,,,,,,,,,:?+=++++++++++++++++++++++++++++++++++++++++++++=I:+$7$$$$$7
          ,,,,,,,,,,,,,,,,,,,:?==+++++++++++++++?++++++++++++++++++++++++++++++++:+77$$$$7
          ,,,,,,,,,,,,,,,,,,,++=++++++++++++++++??+++++++++++++++++++++++++++++=?~:I7$$$$7
          ,,,,,,,,,,,,,,,,,,?+=+++++++++++++++++++I++++++++++++++++++++++++++++=++::I77$$7
          ,,,,,,,,,,,,,,,,,?+=++++++++++++++++++++++++++++++++++++++++++++++++++=?~,:I7$$7
          ,,,,,,,,,,,,,,,:~?=++++++++++++====++++++++++++++++++++++++++?I++++++++?=,,=$$$7
          ,,,,,,,,,,,,,,,:?=++++++++=+?+~::::=?+=++++++++++++++++++++?+++++++++++=+::,+$77
          ,,,,,,,,,,,,,,,=?=+++++++=??:,......:+?=+++++++++++++++++++++++++++++++=?~:,:777
          ,,,,,,,,,,,,,,~I=++++++=?=,............=+=+++++++++++++++++++++++++++++=?~,,,~77
          ,,,,,,,,,,,,,,+?=+++++++=,.........+I..,?=+++++++++++++++++++++++++++++=+~,,,,?7
          ,.,,,,,,,,,,,~I=++++++++~..........DM,..:?=+++++++++++++++=++?I?+=+++++=?=,,,,:?
          ?,,,,,,,,,,,,?+++++++++=++,.......ZMN:..:?=++++++++++++=+?~,....,:?+=++=?=,,,,,,
          +~=:,,,,,,,,:?=+++++++++=+=,.....:MMD,.,~+=+++++++++++=?+,........,++=+=?=,,,,,,
          ==??,,,,,,,,++=+++++++++++=+?+~,=MMMI~+?+=++++++++++=++,.......+:...=+==+~,,,,,,
          =+7I=,,,,,,:?==++++++++++++==++?$OOOI?+=+++??=+++++??+:.......,N$...:?==?~,,,,,,
          ?=?+,,,,,,,~?=++++++++++++++++++++=++++++++++I+++++++I,.......=MO...:?==+:,,,,,,
          ==?::,,,,,,=?=++++++++++++++++++++++++++++++=+I+++++=++.......7MZ...:+=++,,,,,,.
          I:,,,,,,,,,+++++++++++++++++++++++++++++++++++=?I=++++=?~....+MM+..:?+=?=,,,,,+$
          ,.,,,,,,,,:++++++++++++++++++++++++++++++++++++==I?=+++=+I?=IMM8=?+===+?:,~$88OO
          ,,,,,,,,,,:?+++++++++++++++++++++++++++++++++????=??=+++=??=????+==++=+=,?O8OOOO
          ,,,,,,,,,,:?+++++++++++++++++++++++++++++++=++?+==?I7?=++++I+=+++++++=IO8OOOOOOO
          ,,,,,,,,,,:?=++++++++++++++++++++++++++++==?++?~?I==II?=++=+I+++++++==O8OOOOOOOO
          ,,,,,,,,,,:?=++++++++++++++++++++++++++==8N?IO=7=.+I=I+?I+++=?I++++==Z8OOOOOOOOO
          ,,,,,,,,,,:?++++++++++++++++++++++++++==ONNNNNNDZ$+~++I=?I+=+=?I+++=+O8OOOOOOOOO
          ,.,,,,,,,,,?+++++++++++++++++++++++++==NMDDDDND8D8DNZ=??==+I?=+=?I==Z8OOOOOOOOOO
          OO88O$?,,,,+++++++++++++++++++++++++=+NMMDDDDND8D88DO=+I++++=?I+==?Z8OOOOOOOOOOO
          OZZOOO8$~,,+++++++++++++++++++++++++=7MMMDDDDND8D88DZ=+I+++++=+I?==I88OOOOOOOOOO
          OOOOOOOOOO~=?=+++++++++++++++++++++==NMMNDDDDDD8DD8D7=??++++++++=?$=~?88OOOOOOOO
          8OOOOOOOO8$~?=+++++++++++++++++++++=?MMMNDNDDD8DDD8D?=??++++++++=7DO?~+O8OOOOOOO
          =?8OOOOOOOOOI=+++++++++++++++++++++=IONNDNNDND8DDDDO=+I++++++++=$8OO8887?ZOOOOOO
          +=$8OOOOOOO8O==++++++++++++++++++++=IZZNNNDND888DDD7=?I=++++++=?88OOOO88OZD8OOOO
          ++=78OOOOOOODZ==+++++++++++++++++++=IO$ZNNND888D8DZ==I+++++++=I88OOOOOOOOOOOOOOO
          +++=IDOOOOOOODDI=++++++++++++++++++++ZZZOOZO8DDDDO==I+++++++=$8O888888OOOOOOOOOO
          +++==O8OOOOOO888?=++++++++++++++++++=7Z$$$$$$8DD8+=?I=+++++=+8D88888888OOOOOOOOO
          ++++=?8OOOOOOOOO887==++++++++++++++??=IOZZZ$$8DI==I?+++++==$DOOOOOOOOOO88OOOOOOO
          ++++++OOOOOOOOOOOODZ+==+++++++++++++I+=IZZZZO8?==I?=+++++=?8OOOOOOOOOOOO8OOOOOOO
          +++++=I8OOOOOOOOOOOOO8OI===+++++++++++II+====+II?=+++++==Z8OOOOOOOOOOOOOO8OOOOOO
          +++++=+8OOOOOOOOOOOOOO88ZI===+++++++++=?II??II?++++++++=78OOOOOOOOOOOOOOO8OOOOOO
          ++++++=Z8OOOOOOOOOOOOOOOOO888Z7+====++++++++++++++===+I8OOOOOOOOOOOOOOOOO8OOOOOO
          ++++++=78OOOOOOOOOOOOOOOOOOOO888O$I?++++++++++++++?7ZO8OOOOOOOOOOOOOOOOO88OOOO */ 

  }

  /**
  *
  * Return Response with Status Code 500
  * 
  * @param string $content The response content
  * @param array $headers The headers array
  * @return Response
  * @throws MethodNotImplementedException
  */
  public function internalServerError($content, $headers = array())
  {
      $this->methodNotImplemented();
  }

  /**
  *
  * Create a Response object
  * 
  * @param string $message The response content
  * @param int $status HTTP Status Code
  * @param array $headers The headers array
  * @return Response
  * @throws MethodNotImplementedException
  */
  public function send($message, $status, array $headers = array())
  {
    return new Response($message, $status, $headers);
  }

  /**
  *
  * Default behavior if a code is not implemented
  * 
  * @throws MethodNotImplementedException
  */
  private function methodNotImplemented()
  {
      throw new MethodNotImplementedException();
  }
}
