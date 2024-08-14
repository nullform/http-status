## nullform/http-status

HTTP status codes as constants in one simple class.

[RFC 9110](https://www.rfc-editor.org/rfc/rfc9110),
[RFC 6585](https://www.rfc-editor.org/rfc/rfc6585)

## Installation

```
composer require nullform/http-status
```

## Usage

```php
use Nullform\HttpStatus;

// some code...

if ($response->getStatusCode() == HttpStatus::OK) {
    // some code...
} else {
    $error = HttpStatus::getDescription($response->getStatusCode());
}
```

## HttpStatus constants

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
- HttpStatus::PRECONDITION_REQUIRED
- HttpStatus::TOO_MANY_REQUESTS
- HttpStatus::REQUEST_HEADER_FIELDS_TOO_LARGE
- HttpStatus::INTERNAL_SERVER_ERROR
- HttpStatus::NOT_IMPLEMENTED
- HttpStatus::BAD_GATEWAY
- HttpStatus::SERVICE_UNAVAILABLE
- HttpStatus::GATEWAY_TIMEOUT
- HttpStatus::HTTP_VERSION_NOT_SUPPORTED
- HttpStatus::NETWORK_AUTHENTICATION_REQUIRED

## HttpStatus methods

```php
HttpStatus::isInformational(int $status): bool
```

The request was received, continuing process.

```php
HttpStatus::isSuccessful(int $status): bool
```

The request was successfully received, understood, and accepted.

```php
HttpStatus::isRedirection(int $status): bool
```

Further action needs to be taken in order to complete the request.

```php
HttpStatus::isClientError(int $status): bool
```

The request contains bad syntax or cannot be fulfilled.

```php
HttpStatus::isServerError(int $status): bool
```

The server failed to fulfill an apparently valid request.

```php
HttpStatus::getReason(int $status): string
```

HTTP status reason phrase.

```php
HttpStatus::getDescription(int $status): string
```

HTTP status description.

```php
HttpStatus::getAllReasons(): string[]
```

All HTTP status codes (array keys) with reason phrases (array values).

```php
HttpStatus::getAllDescriptions(): string[]
```

All HTTP status codes (array keys) with status descriptions (array values).

## HttpStatusCode class

You can use the **HttpStatusCode** class to represent any HTTP status code.

Example:

```php
use Nullform\HttpStatusCode;

// some code...

$status = new HttpStatusCode($response->getStatusCode());

if ($status->isSuccessful()) {
    // some code...
} else {
    throw new \Exception($status->getReason() . '. ' . $status->getDescription());
}
```
