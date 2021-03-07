<?php

namespace Nullform;

/**
 * HTTP/1.1 status codes.
 *
 * @see https://tools.ietf.org/html/rfc7231
 */
class HttpStatus
{
    /**
     * 100 Continue.
     *
     * The 100 (Continue) status code indicates that the initial part of a
     * request has been received and has not yet been rejected by the
     * server.
     *
     * @see https://tools.ietf.org/html/rfc7231#section-6.2.1
     */
    const CONTINUE = 100;

    /**
     * 101 Switching Protocols.
     *
     * The 101 (Switching Protocols) status code indicates that the server
     * understands and is willing to comply with the client's request, via
     * the Upgrade header field, for a change in the application protocol
     * being used on this connection.
     *
     * @see https://tools.ietf.org/html/rfc7231#section-6.2.2
     */
    const SWITCHING_PROTOCOLS = 101;

    /**
     * 200 OK.
     *
     * The 200 (OK) status code indicates that the request has succeeded.
     *
     * @see https://tools.ietf.org/html/rfc7231#section-6.3.1
     */
    const OK = 200;

    /**
     * 201 Created.
     *
     * The 201 (Created) status code indicates that the request has been
     * fulfilled and has resulted in one or more new resources being created.
     *
     * @see https://tools.ietf.org/html/rfc7231#section-6.3.2
     */
    const CREATED = 201;

    /**
     * 202 Accepted.
     *
     * The 202 (Accepted) status code indicates that the request has been
     * accepted for processing, but the processing has not been completed.
     *
     * @see https://tools.ietf.org/html/rfc7231#section-6.3.3
     */
    const ACCEPTED = 202;

    /**
     * 203 Non-Authoritative Information.
     *
     * The 203 (Non-Authoritative Information) status code indicates that
     * the request was successful but the enclosed payload has been modified
     * from that of the origin server's 200 (OK) response by a transforming
     * proxy.
     *
     * @see https://tools.ietf.org/html/rfc7231#section-6.3.4
     */
    const NON_AUTHORITATIVE_INFORMATION = 203;

    /**
     * 204 No Content.
     *
     * The 204 (No Content) status code indicates that the server has
     * successfully fulfilled the request and that there is no additional
     * content to send in the response payload body.
     *
     * @see https://tools.ietf.org/html/rfc7231#section-6.3.5
     */
    const NO_CONTENT = 204;

    /**
     * 205 Reset Content.
     *
     * The 205 (Reset Content) status code indicates that the server has
     * fulfilled the request and desires that the user agent reset the
     * "document view", which caused the request to be sent, to its original
     * state as received from the origin server.
     *
     * @see https://tools.ietf.org/html/rfc7231#section-6.3.6
     */
    const RESET_CONTENT = 205;

    /**
     * 206 Partial Content.
     *
     * The 206 (Partial Content) status code indicates that the server is
     * successfully fulfilling a range request for the target resource by
     * transferring one or more parts of the selected representation that
     * correspond to the satisfiable ranges found in the request's Range
     * header field.
     *
     * @see https://tools.ietf.org/html/rfc7233#section-4.1
     */
    const PARTIAL_CONTENT = 206;

    /**
     * 300 Multiple Choices.
     *
     * The 300 (Multiple Choices) status code indicates that the target
     * resource has more than one representation, each with its own more
     * specific identifier, and information about the alternatives is being
     * provided so that the user (or user agent) can select a preferred
     * representation by redirecting its request to one or more of those
     * identifiers.
     *
     * @see https://tools.ietf.org/html/rfc7231#section-6.4.1
     */
    const MULTIPLE_CHOICES = 300;

    /**
     * 301 Moved Permanently.
     *
     * The 301 (Moved Permanently) status code indicates that the target
     * resource has been assigned a new permanent URI and any future
     * references to this resource ought to use one of the enclosed URIs.
     *
     * @see https://tools.ietf.org/html/rfc7231#section-6.4.2
     */
    const MOVED_PERMANENTLY = 301;

    /**
     * 302 Found.
     *
     * The 302 (Found) status code indicates that the target resource
     * resides temporarily under a different URI.
     *
     * @see https://tools.ietf.org/html/rfc7231#section-6.4.3
     */
    const FOUND = 302;

    /**
     * 303 See Other.
     *
     * The 303 (See Other) status code indicates that the server is
     * redirecting the user agent to a different resource, as indicated by a
     * URI in the Location header field, which is intended to provide an
     * indirect response to the original request.
     *
     * @see https://tools.ietf.org/html/rfc7231#section-6.4.4
     */
    const SEE_OTHER = 303;

    /**
     * 304 Not Modified.
     *
     * The 304 (Not Modified) status code indicates that a conditional GET
     * or HEAD request has been received and would have resulted in a 200
     * (OK) response if it were not for the fact that the condition
     * evaluated to false. In other words, there is no need for the server
     * to transfer a representation of the target resource because the
     * request indicates that the client, which made the request
     * conditional, already has a valid representation; the server is
     * therefore redirecting the client to make use of that stored
     * representation as if it were the payload of a 200 (OK) response.
     *
     * @see https://tools.ietf.org/html/rfc7232#section-4.1
     */
    const NOT_MODIFIED = 304;

    /**
     * 305 Use Proxy.
     *
     * The requested resource is available only through a proxy, the address for which is provided in the response.
     *
     * @see https://tools.ietf.org/html/rfc7231#section-6.4.5
     * @deprecated
     */
    const USE_PROXY = 305;

    /**
     * 307 Temporary Redirect.
     *
     * The 307 (Temporary Redirect) status code indicates that the target
     * resource resides temporarily under a different URI and the user agent
     * MUST NOT change the request method if it performs an automatic
     * redirection to that URI.
     *
     * @see https://tools.ietf.org/html/rfc7231#section-6.4.7
     */
    const TEMPORARY_REDIRECT = 307;

    /**
     * 400 Bad Request.
     *
     * The 400 (Bad Request) status code indicates that the server cannot or
     * will not process the request due to something that is perceived to be
     * a client error (e.g., malformed request syntax, invalid request
     * message framing, or deceptive request routing).
     *
     * @see https://tools.ietf.org/html/rfc7231#section-6.5.1
     */
    const BAD_REQUEST = 400;

    /**
     * 401 Unauthorized.
     *
     * The 401 (Unauthorized) status code indicates that the request has not
     * been applied because it lacks valid authentication credentials for
     * the target resource.  The server generating a 401 response MUST send
     * a WWW-Authenticate header field containing at least one
     * challenge applicable to the target resource.
     *
     * @see https://tools.ietf.org/html/rfc7235#section-3.1
     */
    const UNAUTHORIZED = 401;

    /**
     * 402 Payment Required.
     *
     * The 402 (Payment Required) status code is reserved for future use.
     *
     * @see https://tools.ietf.org/html/rfc7231#section-6.5.2
     */
    const PAYMENT_REQUIRED = 402;

    /**
     * 403 Forbidden.
     *
     * The 403 (Forbidden) status code indicates that the server understood
     * the request but refuses to authorize it.  A server that wishes to
     * make public why the request has been forbidden can describe that
     * reason in the response payload (if any).
     *
     * @see https://tools.ietf.org/html/rfc7231#section-6.5.3
     */
    const FORBIDDEN = 403;

    /**
     * 404 Not Found.
     *
     * The 404 (Not Found) status code indicates that the origin server did
     * not find a current representation for the target resource or is not
     * willing to disclose that one exists.
     *
     * @see https://tools.ietf.org/html/rfc7231#section-6.5.4
     */
    const NOT_FOUND = 404;

    /**
     * 405 Method Not Allowed.
     *
     * The 405 (Method Not Allowed) status code indicates that the method
     * received in the request-line is known by the origin server but not
     * supported by the target resource.
     *
     * @see https://tools.ietf.org/html/rfc7231#section-6.5.5
     */
    const METHOD_NOT_ALLOWED = 405;

    /**
     * 406 Not Acceptable.
     *
     * The 406 (Not Acceptable) status code indicates that the target
     * resource does not have a current representation that would be
     * acceptable to the user agent, according to the proactive negotiation
     * header fields received in the request, and the server
     * is unwilling to supply a default representation.
     *
     * @see https://tools.ietf.org/html/rfc7231#section-6.5.6
     */
    const NOT_ACCEPTABLE = 406;

    /**
     * 407 Proxy Authentication Required.
     *
     * The 407 (Proxy Authentication Required) status code is similar to 401
     * (Unauthorized), but it indicates that the client needs to
     * authenticate itself in order to use a proxy. The proxy MUST send a
     * Proxy-Authenticate header field.
     *
     * @see https://tools.ietf.org/html/rfc7235#section-3.2
     */
    const PROXY_AUTHENTICATION_REQUIRED = 407;

    /**
     * 408 Request Timeout.
     *
     * The 408 (Request Timeout) status code indicates that the server did
     * not receive a complete request message within the time that it was
     * prepared to wait.  A server SHOULD send the "close" connection option
     * (Section 6.1 of [RFC7230]) in the response, since 408 implies that
     * the server has decided to close the connection rather than continue
     * waiting.  If the client has an outstanding request in transit, the
     * client MAY repeat that request on a new connection.
     *
     * @see https://tools.ietf.org/html/rfc7231#section-6.5.7
     */
    const REQUEST_TIMEOUT = 408;

    /**
     * 409 Conflict.
     *
     * The 409 (Conflict) status code indicates that the request could not
     * be completed due to a conflict with the current state of the target
     * resource.  This code is used in situations where the user might be
     * able to resolve the conflict and resubmit the request.  The server
     * SHOULD generate a payload that includes enough information for a user
     * to recognize the source of the conflict.
     *
     * @see https://tools.ietf.org/html/rfc7231#section-6.5.8
     */
    const CONFLICT = 409;

    /**
     * 410 Gone.
     *
     * The 410 (Gone) status code indicates that access to the target
     * resource is no longer available at the origin server and that this
     * condition is likely to be permanent. If the origin server does not
     * know, or has no facility to determine, whether or not the condition
     * is permanent, the status code 404 (Not Found) ought to be used
     * instead.
     *
     * @see https://tools.ietf.org/html/rfc7231#section-6.5.9
     */
    const GONE = 410;

    /**
     * 411 Length Required.
     *
     * The 411 (Length Required) status code indicates that the server
     * refuses to accept the request without a defined Content-Length.
     *
     * @see https://tools.ietf.org/html/rfc7231#section-6.5.10
     */
    const LENGTH_REQUIRED = 411;

    /**
     * 412 Precondition Failed.
     *
     * The 412 (Precondition Failed) status code indicates that one or more
     * conditions given in the request header fields evaluated to false when
     * tested on the server.
     *
     * @see https://tools.ietf.org/html/rfc7232#section-4.2
     */
    const PRECONDITION_FAILED = 412;

    /**
     * 413 Payload Too Large.
     *
     * The 413 (Payload Too Large) status code indicates that the server is
     * refusing to process a request because the request payload is larger
     * than the server is willing or able to process.
     *
     * @see https://tools.ietf.org/html/rfc7231#section-6.5.11
     */
    const PAYLOAD_TOO_LARGE = 413;

    /**
     * 414 URI Too Long.
     *
     * The 414 (URI Too Long) status code indicates that the server is
     * refusing to service the request because the request-target (Section
     * 5.3 of [RFC7230]) is longer than the server is willing to interpret.
     *
     * @see https://tools.ietf.org/html/rfc7231#section-6.5.12
     */
    const URI_TOO_LONG = 414;

    /**
     * 415 Unsupported Media Type.
     *
     * The 415 (Unsupported Media Type) status code indicates that the
     * origin server is refusing to service the request because the payload
     * is in a format not supported by this method on the target resource.
     *
     * @see https://tools.ietf.org/html/rfc7231#section-6.5.13
     */
    const UNSUPPORTED_MEDIA_TYPE = 415;

    /**
     * 416 Range Not Satisfiable.
     *
     * The 416 (Range Not Satisfiable) status code indicates that none of
     * the ranges in the request's Range header field overlap
     * the current extent of the selected resource or that the set of ranges
     * requested has been rejected due to invalid ranges or an excessive
     * request of small or overlapping ranges.
     *
     * @see https://tools.ietf.org/html/rfc7233#section-4.4
     */
    const RANGE_NOT_SATISFIABLE = 416;

    /**
     * 417 Expectation Failed.
     *
     * The 417 (Expectation Failed) status code indicates that the
     * expectation given in the request's Expect header field
     * could not be met by at least one of the inbound servers.
     *
     * @see https://tools.ietf.org/html/rfc7231#section-6.5.14
     */
    const EXPECTATION_FAILED = 417;

    /**
     * 426 Upgrade Required.
     *
     * The 426 (Upgrade Required) status code indicates that the server
     * refuses to perform the request using the current protocol but might
     * be willing to do so after the client upgrades to a different
     * protocol. The server MUST send an Upgrade header field in a 426
     * response to indicate the required protocol(s).
     *
     * @see https://tools.ietf.org/html/rfc7231#section-6.5.15
     */
    const UPGRADE_REQUIRED = 426;

    /**
     * 500 Internal Server Error.
     *
     * The 500 (Internal Server Error) status code indicates that the server
     * encountered an unexpected condition that prevented it from fulfilling
     * the request.
     *
     * @see https://tools.ietf.org/html/rfc7231#section-6.6.1
     */
    const INTERNAL_SERVER_ERROR = 500;

    /**
     * 501 Not Implemented.
     *
     * The 501 (Not Implemented) status code indicates that the server does
     * not support the functionality required to fulfill the request.  This
     * is the appropriate response when the server does not recognize the
     * request method and is not capable of supporting it for any resource.
     *
     * @see https://tools.ietf.org/html/rfc7231#section-6.6.2
     */
    const NOT_IMPLEMENTED = 501;

    /**
     * 502 Bad Gateway.
     *
     * The 502 (Bad Gateway) status code indicates that the server, while
     * acting as a gateway or proxy, received an invalid response from an
     * inbound server it accessed while attempting to fulfill the request.
     *
     * @see https://tools.ietf.org/html/rfc7231#section-6.6.3
     */
    const BAD_GATEWAY = 502;

    /**
     * 503 Service Unavailable.
     *
     * The 503 (Service Unavailable) status code indicates that the server
     * is currently unable to handle the request due to a temporary overload
     * or scheduled maintenance, which will likely be alleviated after some
     * delay.  The server MAY send a Retry-After header field to suggest an
     * appropriate amount of time for the client to wait before retrying the
     * request.
     *
     * @see https://tools.ietf.org/html/rfc7231#section-6.6.4
     */
    const SERVICE_UNAVAILABLE = 503;

    /**
     * 504 Gateway Timeout.
     *
     * The 504 (Gateway Timeout) status code indicates that the server,
     * while acting as a gateway or proxy, did not receive a timely response
     * from an upstream server it needed to access in order to complete the
     * request.
     *
     * @see https://tools.ietf.org/html/rfc7231#section-6.6.5
     */
    const GATEWAY_TIMEOUT = 504;

    /**
     * 505 HTTP Version Not Supported.
     *
     * The 505 (HTTP Version Not Supported) status code indicates that the
     * server does not support, or refuses to support, the major version of
     * HTTP that was used in the request message.
     *
     * @see https://tools.ietf.org/html/rfc7231#section-6.6.6
     */
    const HTTP_VERSION_NOT_SUPPORTED = 505;


    /**
     * The request was received, continuing process.
     *
     * @param int $status
     * @return bool
     */
    public static function isInformational(int $status): bool
    {
        return (bool)preg_match("/^1[\d]{2}$/", (string)$status);
    }

    /**
     * The request was successfully received, understood, and accepted.
     *
     * @param int $status
     * @return bool
     */
    public static function isSuccessful(int $status): bool
    {
        return (bool)preg_match("/^2[\d]{2}$/", (string)$status);
    }

    /**
     * Further action needs to be taken in order to complete the request.
     *
     * @param int $status
     * @return bool
     */
    public static function isRedirection(int $status): bool
    {
        return (bool)preg_match("/^3[\d]{2}$/", (string)$status);
    }

    /**
     * The request contains bad syntax or cannot be fulfilled.
     *
     * @param int $status
     * @return bool
     */
    public static function isClientError(int $status): bool
    {
        return (bool)preg_match("/^4[\d]{2}$/", (string)$status);
    }

    /**
     * The server failed to fulfill an apparently valid request.
     *
     * @param int $status
     * @return bool
     */
    public static function isServerError(int $status): bool
    {
        return (bool)preg_match("/^5[\d]{2}$/", (string)$status);
    }

    /**
     * HTTP status reason phrase.
     *
     * @param int $status
     * @return string
     */
    public static function reason(int $status): string
    {
        $reason = "";

        switch ($status) {
            case static::CONTINUE:
                $reason = "Continue";
                break;
            case static::SWITCHING_PROTOCOLS:
                $reason = "Switching Protocols";
                break;
            case static::OK:
                $reason = "OK";
                break;
            case static::CREATED:
                $reason = "Created";
                break;
            case static::ACCEPTED:
                $reason = "Accepted";
                break;
            case static::NON_AUTHORITATIVE_INFORMATION:
                $reason = "Non-Authoritative Information";
                break;
            case static::NO_CONTENT:
                $reason = "No Content";
                break;
            case static::RESET_CONTENT:
                $reason = "Reset Content";
                break;
            case static::PARTIAL_CONTENT:
                $reason = "Partial Content";
                break;
            case static::MULTIPLE_CHOICES:
                $reason = "Multiple Choices";
                break;
            case static::MOVED_PERMANENTLY:
                $reason = "Moved Permanently";
                break;
            case static::FOUND:
                $reason = "Found";
                break;
            case static::SEE_OTHER:
                $reason = "See Other";
                break;
            case static::NOT_MODIFIED:
                $reason = "Not Modified";
                break;
            case static::USE_PROXY:
                $reason = "Use Proxy";
                break;
            case static::TEMPORARY_REDIRECT:
                $reason = "Temporary Redirect";
                break;
            case static::BAD_REQUEST:
                $reason = "Bad Request";
                break;
            case static::UNAUTHORIZED:
                $reason = "Unauthorized";
                break;
            case static::PAYMENT_REQUIRED:
                $reason = "Payment Required";
                break;
            case static::FORBIDDEN:
                $reason = "Forbidden";
                break;
            case static::NOT_FOUND:
                $reason = "Not Found";
                break;
            case static::METHOD_NOT_ALLOWED:
                $reason = "Method Not Allowed";
                break;
            case static::NOT_ACCEPTABLE:
                $reason = "Not Acceptable";
                break;
            case static::PROXY_AUTHENTICATION_REQUIRED:
                $reason = "Proxy Authentication Required";
                break;
            case static::REQUEST_TIMEOUT:
                $reason = "Request Timeout";
                break;
            case static::CONFLICT:
                $reason = "Conflict";
                break;
            case static::GONE:
                $reason = "Gone";
                break;
            case static::LENGTH_REQUIRED:
                $reason = "Length Required";
                break;
            case static::PRECONDITION_FAILED:
                $reason = "Precondition Failed";
                break;
            case static::PAYLOAD_TOO_LARGE:
                $reason = "Payload Too Large";
                break;
            case static::URI_TOO_LONG:
                $reason = "URI Too Long";
                break;
            case static::UNSUPPORTED_MEDIA_TYPE:
                $reason = "Unsupported Media Type";
                break;
            case static::RANGE_NOT_SATISFIABLE:
                $reason = "Range Not Satisfiable";
                break;
            case static::EXPECTATION_FAILED:
                $reason = "Expectation Failed";
                break;
            case static::UPGRADE_REQUIRED:
                $reason = "Upgrade Required";
                break;
            case static::INTERNAL_SERVER_ERROR:
                $reason = "Internal Server Error";
                break;
            case static::NOT_IMPLEMENTED:
                $reason = "Not Implemented";
                break;
            case static::BAD_GATEWAY:
                $reason = "Bad Gateway";
                break;
            case static::SERVICE_UNAVAILABLE:
                $reason = "Service Unavailable";
                break;
            case static::GATEWAY_TIMEOUT:
                $reason = "Gateway Timeout";
                break;
            case static::HTTP_VERSION_NOT_SUPPORTED:
                $reason = "HTTP Version Not Supported";
                break;
        }

        return $reason;
    }
}