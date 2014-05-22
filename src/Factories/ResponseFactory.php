<?php namespace QL\Response\Factories;
use Symfony\Component\HttpFoundation\Response;
class ResponseFactory extends ResponseFactoryBase
{
  /**
  * {@inheritDoc}
  */
  public function ok($content, $headers = array())
  {
      return $this->send($content, 200, $headers);
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
  public function nonAuthoritativeInformation($content, $headers = array())
  {
      return $this->send($content, 203, $headers);
  }

  /**
  * {@inheritDoc}
  */
  public function noContent($content, $headers = array())
  {
      return $this->send($content, 204, $headers);
  }

  /**
  * {@inheritDoc}
  */
  public function resetContent($content, $headers = array())
  {
      return $this->send($content, 205, $headers);
  }

  /**
  * {@inheritDoc}
  */
  public function partialContent($content, $headers = array())
  {
      return $this->send($content, 206, $headers);
  }

  /**
  * {@inheritDoc}
  */
  public function multipleChoices($content, $headers = array())
  {
      return $this->send($content, 300, $headers);
  }

  /**
  * {@inheritDoc}
  */
  public function movedPermanently($content, $headers = array())
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
  public function notMotified($content, $headers = array())
  {
      return $this->send($content, 304, $headers);
  }

  /**
  * {@inheritDoc}
  */
  public function useProxy($content, $headers = array())
  {
      return $this->send($content, 305, $headers);
  }

  /**
  * {@inheritDoc}
  */
  public function temporaryRedirect($content, $headers = array())
  {
      return $this->send($content, 307, $headers);
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
  public function paymentRequired($content, $headers = array())
  {
      return $this->send($content, 402, $headers);
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
  public function notFound($content, $headers = array())
  {
      return $this->send($content, 404, $headers);
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
          /*,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,:=+??+===++++++++++=?=,:I$7$$$$$7$I????+
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
          ++++++=78OOOOOOOOOOOOOOOOOOOO888O$I?++++++++++++++?7ZO8OOOOOOOOOOOOOOOOO88OOOO*/
  }

  /**
  * {@inheritDoc}
  */
  public function proxyAuthenticationRequired($content, $headers = array())
  {
      return $this->send($content, 407, $headers);
  }

  /**
  * {@inheritDoc}
  */
  public function requestTimeout($content, $headers = array())
  {
      return $this->send($content, 408, $headers);
  }

  /**
  * {@inheritDoc}
  */
  public function conflict($content, $headers = array())
  {
      return $this->send($content, 409, $headers);
  }

  /**
  * {@inheritDoc}
  */
  public function gone($content, $headers = array())
  {
      return $this->send($content, 410, $headers);
  }

  /**
  * {@inheritDoc}
  */
  public function lengthRequired($content, $headers = array())
  {
      return $this->send($content, 411, $headers);
  }

  /**
  * {@inheritDoc}
  */
  public function preconditionFailed($content, $headers = array())
  {
      return $this->send($content, 412, $headers);
  }

  /**
  * {@inheritDoc}
  */
  public function requestEntityTooLarge($content, $headers = array())
  {
      return $this->send($content, 413, $headers);
  }

  /**
  * {@inheritDoc}
  */
  public function requestUriTooLong($content, $headers = array())
  {
      return $this->send($content, 414, $headers);
  }

  /**
  * {@inheritDoc}
  */
  public function unsupportedMediaType($content, $headers = array())
  {
      return $this->send($content, 415, $headers);
  }

  /**
  * {@inheritDoc}
  */
  public function requestRangeNotSatisfiable($content, $headers = array())
  {
      return $this->send($content, 416, $headers);
  }

  /**
  * {@inheritDoc}
  */
  public function expectationFailed($content, $headers = array())
  {
      return $this->send($content, 417, $headers);
  }

  /**
  * {@inheritDoc}
  */
  public function internalServerError($content, $headers = array())
  {
      return $this->send($content, 500, $headers);
  }

  /**
  * {@inheritDoc}
  */
  public function notImplemented($content, $headers = array())
  {
      return $this->send($content, 501, $headers);
  }

  /**
  * {@inheritDoc}
  */
  public function badGateway($content, $headers = array())
  {
      return $this->send($content, 502, $headers);
  }

  /**
  * {@inheritDoc}
  */
  public function serviceUnavailable($content, $headers = array())
  {
      return $this->send($content, 503, $headers);
  }

  /**
  * {@inheritDoc}
  */
  public function gatewayTimeout($content, $headers = array())
  {
      return $this->send($content, 504, $headers);
  }

  /**
  * {@inheritDoc}
  */
  public function httpVersionNotSupported($content, $headers = array())
  {
      return $this->send($content, 505, $headers);
  }
}

