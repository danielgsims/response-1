QL\Response
-----

The Response library is a simple factory to help generate Symfony HTTP Component Response objects
with pre-built status codes. This helps make your responses more readable.

```php

 $factory = new QL\Response\ResponseFactory;
 
 $response = $factory->ok("200 Response Code");

 $error = $factory->internalServerError("Something went wrong");

```

Additional header fields may be set as a second argument

```php

 $response = $factory->ok("{id: 1}", ['Content-Type' => 'application/json']);

```
