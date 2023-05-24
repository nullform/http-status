## nullform/http-status

HTTP status codes as constants in one simple class.

[RFC 9110](https://datatracker.ietf.org/doc/html/rfc9110)

## Installation

```
composer require nullform/http-status
```

## Constants

- HttpStatus::CONTINUE
- HttpStatus::SWITCHING_PROTOCOLS
- HttpStatus::OK
- HttpStatus::CREATED
- HttpStatus::ACCEPTED
- HttpStatus::NON_AUTHORITATIVE_INFORMATION
- HttpStatus::NO_CONTENT
- HttpStatus::RESET_CONTENT
- HttpStatus::PARTIAL_CONTENT
- HttpStatus::MULTIPLE_CHOICES
- HttpStatus::MOVED_PERMANENTLY
- HttpStatus::FOUND
- HttpStatus::SEE_OTHER
- HttpStatus::NOT_MODIFIED
- HttpStatus::USE_PROXY
- HttpStatus::TEMPORARY_REDIRECT
- HttpStatus::PERMANENT_REDIRECT
- HttpStatus::BAD_REQUEST
- HttpStatus::UNAUTHORIZED
- HttpStatus::PAYMENT_REQUIRED
- HttpStatus::FORBIDDEN
- HttpStatus::NOT_FOUND
- HttpStatus::METHOD_NOT_ALLOWED
- HttpStatus::NOT_ACCEPTABLE
- HttpStatus::PROXY_AUTHENTICATION_REQUIRED
- HttpStatus::REQUEST_TIMEOUT
- HttpStatus::CONFLICT
- HttpStatus::GONE
- HttpStatus::LENGTH_REQUIRED
- HttpStatus::PRECONDITION_FAILED
- HttpStatus::CONTENT_TOO_LARGE
- HttpStatus::URI_TOO_LONG
- HttpStatus::UNSUPPORTED_MEDIA_TYPE
- HttpStatus::RANGE_NOT_SATISFIABLE
- HttpStatus::EXPECTATION_FAILED
- HttpStatus::MISDIRECTED_REQUEST
- HttpStatus::UNPROCESSABLE_CONTENT
- HttpStatus::UPGRADE_REQUIRED
- HttpStatus::INTERNAL_SERVER_ERROR
- HttpStatus::NOT_IMPLEMENTED
- HttpStatus::BAD_GATEWAY
- HttpStatus::SERVICE_UNAVAILABLE
- HttpStatus::GATEWAY_TIMEOUT
- HttpStatus::HTTP_VERSION_NOT_SUPPORTED

## Methods

**`HttpStatus::isInformational ( int $status ) : bool`**

The request was received, continuing process.

**`HttpStatus::isSuccessful ( int $status ) : bool`**

The request was successfully received, understood, and accepted.

**`HttpStatus::isRedirection ( int $status ) : bool`**

Further action needs to be taken in order to complete the request.

**`HttpStatus::isClientError ( int $status ) : bool`**

The request contains bad syntax or cannot be fulfilled.

**`HttpStatus::isServerError ( int $status ) : bool`**

The server failed to fulfill an apparently valid request.

**`HttpStatus::reason ( int $status ) : string`**
**`HttpStatus::getReason ( int $status ) : string`**

HTTP status reason phrase.
