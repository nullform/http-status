<?php

namespace Nullform;

/**
 * HTTP/1.1 status codes (RFC 9110).
 *
 * @see https://datatracker.ietf.org/doc/html/rfc9110
 */
class HttpStatus
{
    /**
     * 100 Continue.
     *
     * The 100 (Continue) status code indicates that the initial part of a
     * request has been received and has not yet been rejected by the server.
     * The server intends to send a final response after the request has been
     * fully received and acted upon.
     *
     * @see https://datatracker.ietf.org/doc/html/rfc9110#name-100-continue
     */
    const CONTINUE = 100;

    /**
     * 101 Switching Protocols.
     *
     * The 101 (Switching Protocols) status code indicates that the server
     * understands and is willing to comply with the client's request, via the
     * Upgrade header field, for a change in the application protocol being
     * used on this connection. The server MUST generate an Upgrade header
     * field in the response that indicates which protocol(s) will be in effect
     * after this response.
     *
     * @see https://datatracker.ietf.org/doc/html/rfc9110#name-101-switching-protocols
     */
    const SWITCHING_PROTOCOLS = 101;

    /**
     * 200 OK.
     *
     * The 200 (OK) status code indicates that the request has succeeded.
     * The content sent in a 200 response depends on the request method.
     *
     * @see https://datatracker.ietf.org/doc/html/rfc9110#name-200-ok
     */
    const OK = 200;

    /**
     * 201 Created.
     *
     * The 201 (Created) status code indicates that the request has been
     * fulfilled and has resulted in one or more new resources being created.
     *
     * @see https://datatracker.ietf.org/doc/html/rfc9110#name-201-created
     */
    const CREATED = 201;

    /**
     * 202 Accepted.
     *
     * The 202 (Accepted) status code indicates that the request has been
     * accepted for processing, but the processing has not been completed.
     *
     * @see https://datatracker.ietf.org/doc/html/rfc9110#name-202-accepted
     */
    const ACCEPTED = 202;

    /**
     * 203 Non-Authoritative Information.
     *
     * The 203 (Non-Authoritative Information) status code indicates that
     * the request was successful but the enclosed content has been modified
     * from that of the origin server's 200 (OK) response by a transforming
     * proxy.
     *
     * @see https://datatracker.ietf.org/doc/html/rfc9110#name-203-non-authoritative-infor
     */
    const NON_AUTHORITATIVE_INFORMATION = 203;

    /**
     * 204 No Content.
     *
     * The 204 (No Content) status code indicates that the server has
     * successfully fulfilled the request and that there is no additional
     * content to send in the response content.
     *
     * @see https://datatracker.ietf.org/doc/html/rfc9110#name-204-no-content
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
     * @see https://datatracker.ietf.org/doc/html/rfc9110#name-205-reset-content
     */
    const RESET_CONTENT = 205;

    /**
     * 206 Partial Content.
     *
     * The 206 (Partial Content) status code indicates that the server is
     * successfully fulfilling a range request for the target resource by
     * transferring one or more parts of the selected representation.
     *
     * @see https://datatracker.ietf.org/doc/html/rfc9110#name-206-partial-content
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
     * @see https://datatracker.ietf.org/doc/html/rfc9110#name-300-multiple-choices
     */
    const MULTIPLE_CHOICES = 300;

    /**
     * 301 Moved Permanently.
     *
     * The 301 (Moved Permanently) status code indicates that the target
     * resource has been assigned a new permanent URI and any future references
     * to this resource ought to use one of the enclosed URIs.
     *
     * @see https://datatracker.ietf.org/doc/html/rfc9110#name-301-moved-permanently
     */
    const MOVED_PERMANENTLY = 301;

    /**
     * 302 Found.
     *
     * The 302 (Found) status code indicates that the target resource resides
     * temporarily under a different URI. Since the redirection might be
     * altered on occasion, the client ought to continue to use the target URI
     * for future requests.
     *
     * @see https://datatracker.ietf.org/doc/html/rfc9110#name-302-found
     */
    const FOUND = 302;

    /**
     * 303 See Other.
     *
     * The 303 (See Other) status code indicates that the server is redirecting
     * the user agent to a different resource, as indicated by a URI in the
     * Location header field, which is intended to provide an indirect response
     * to the original request.
     *
     * @see https://datatracker.ietf.org/doc/html/rfc9110#name-303-see-other
     */
    const SEE_OTHER = 303;

    /**
     * 304 Not Modified.
     *
     * The 304 (Not Modified) status code indicates that a conditional GET or
     * HEAD request has been received and would have resulted in a 200 (OK)
     * response if it were not for the fact that the condition evaluated to
     * false.
     *
     * @see https://datatracker.ietf.org/doc/html/rfc9110#name-304-not-modified
     */
    const NOT_MODIFIED = 304;

    /**
     * 305 Use Proxy.
     *
     * The requested resource is available only through a proxy, the address
     * for which is provided in the response.
     *
     * @see https://datatracker.ietf.org/doc/html/rfc9110#name-305-use-proxy
     * @deprecated The 305 (Use Proxy) status code was defined in a previous
     *     version of this specification and is now deprecated.
     */
    const USE_PROXY = 305;

    /**
     * 307 Temporary Redirect.
     *
     * The 307 (Temporary Redirect) status code indicates that the target
     * resource resides temporarily under a different URI and the user agent
     * MUST NOT change the request method if it performs an automatic
     * redirection to that URI. Since the redirection can change over time, the
     * client ought to continue using the original target URI for future
     * requests.
     *
     * @see https://datatracker.ietf.org/doc/html/rfc9110#name-307-temporary-redirect
     */
    const TEMPORARY_REDIRECT = 307;

    /**
     * 308 Permanent Redirect.
     *
     * The 308 (Permanent Redirect) status code indicates that the target
     * resource has been assigned a new permanent URI and any future references
     * to this resource ought to use one of the enclosed URIs.
     *
     * The server SHOULD generate a Location header field in the response
     * containing a preferred URI reference for the new permanent URI.
     *
     * @see https://datatracker.ietf.org/doc/html/rfc9110#name-308-permanent-redirect
     */
    const PERMANENT_REDIRECT = 308;

    /**
     * 400 Bad Request.
     *
     * The 400 (Bad Request) status code indicates that the server cannot or
     * will not process the request due to something that is perceived to be a
     * client error (e.g., malformed request syntax, invalid request message
     * framing, or deceptive request routing).
     *
     * @see https://datatracker.ietf.org/doc/html/rfc9110#name-400-bad-request
     */
    const BAD_REQUEST = 400;

    /**
     * 401 Unauthorized.
     *
     * The 401 (Unauthorized) status code indicates that the request has not
     * been applied because it lacks valid authentication credentials for the
     * target resource. The server generating a 401 response MUST send a
     * WWW-Authenticate header field containing at least one challenge
     * applicable to the target resource.
     *
     * @see https://datatracker.ietf.org/doc/html/rfc9110#name-401-unauthorized
     */
    const UNAUTHORIZED = 401;

    /**
     * 402 Payment Required.
     *
     * The 402 (Payment Required) status code is reserved for future use.
     *
     * @see https://datatracker.ietf.org/doc/html/rfc9110#name-402-payment-required
     */
    const PAYMENT_REQUIRED = 402;

    /**
     * 403 Forbidden.
     *
     * The 403 (Forbidden) status code indicates that the server understood the
     * request but refuses to fulfill it. A server that wishes to make public
     * why the request has been forbidden can describe that reason in the
     * response content (if any).
     *
     * @see https://datatracker.ietf.org/doc/html/rfc9110#name-403-forbidden
     */
    const FORBIDDEN = 403;

    /**
     * 404 Not Found.
     *
     * The 404 (Not Found) status code indicates that the origin server did not
     * find a current representation for the target resource or is not willing
     * to disclose that one exists.
     *
     * @see https://datatracker.ietf.org/doc/html/rfc9110#name-404-not-found
     */
    const NOT_FOUND = 404;

    /**
     * 405 Method Not Allowed.
     *
     * The 405 (Method Not Allowed) status code indicates that the method
     * received in the request-line is known by the origin server but not
     * supported by the target resource. The origin server MUST generate an
     * Allow header field in a 405 response containing a list of the target
     * resource's currently supported methods.
     *
     * @see https://datatracker.ietf.org/doc/html/rfc9110#name-405-method-not-allowed
     */
    const METHOD_NOT_ALLOWED = 405;

    /**
     * 406 Not Acceptable.
     *
     * The 406 (Not Acceptable) status code indicates that the target resource
     * does not have a current representation that would be acceptable to the
     * user agent, according to the proactive negotiation header fields
     * received in the request, and the server is unwilling to supply a default
     * representation.
     *
     * @see https://datatracker.ietf.org/doc/html/rfc9110#name-406-not-acceptable
     */
    const NOT_ACCEPTABLE = 406;

    /**
     * 407 Proxy Authentication Required.
     *
     * The 407 (Proxy Authentication Required) status code is similar to 401
     * (Unauthorized), but it indicates that the client needs to authenticate
     * itself in order to use a proxy for this request. The proxy MUST send a
     * Proxy-Authenticate header field containing a challenge applicable to
     * that proxy for the request.
     *
     * @see https://datatracker.ietf.org/doc/html/rfc9110#name-407-proxy-authentication-re
     */
    const PROXY_AUTHENTICATION_REQUIRED = 407;

    /**
     * 408 Request Timeout.
     *
     * The 408 (Request Timeout) status code indicates that the server did not
     * receive a complete request message within the time that it was prepared
     * to wait. If the client has an outstanding request in transit, it MAY
     * repeat that request. If the current connection is not usable (e.g., as
     * it would be in HTTP/1.1 because request delimitation is lost), a new
     * connection will be used.
     *
     * @see https://datatracker.ietf.org/doc/html/rfc9110#name-408-request-timeout
     */
    const REQUEST_TIMEOUT = 408;

    /**
     * 409 Conflict.
     *
     * The 409 (Conflict) status code indicates that the request could not be
     * completed due to a conflict with the current state of the target
     * resource. This code is used in situations where the user might be able
     * to resolve the conflict and resubmit the request. The server SHOULD
     * generate content that includes enough information for a user to
     * recognize the source of the conflict.
     *
     * @see https://datatracker.ietf.org/doc/html/rfc9110#name-409-conflict
     */
    const CONFLICT = 409;

    /**
     * 410 Gone.
     *
     * The 410 (Gone) status code indicates that access to the target resource
     * is no longer available at the origin server and that this condition is
     * likely to be permanent. If the origin server does not know, or has no
     * facility to determine, whether or not the condition is permanent, the
     * status code 404 (Not Found) ought to be used instead.
     *
     * @see https://datatracker.ietf.org/doc/html/rfc9110#name-410-gone
     */
    const GONE = 410;

    /**
     * 411 Length Required.
     *
     * The 411 (Length Required) status code indicates that the server refuses
     * to accept the request without a defined Content-Length.
     * The client MAY repeat the request if it adds a valid Content-Length
     * header field containing the length of the request content.
     *
     * @see https://datatracker.ietf.org/doc/html/rfc9110#name-411-length-required
     */
    const LENGTH_REQUIRED = 411;

    /**
     * 412 Precondition Failed.
     *
     * The 412 (Precondition Failed) status code indicates that one or more
     * conditions given in the request header fields evaluated to false when
     * tested on the server. This response status code allows the client to
     * place preconditions on the current resource state (its current
     * representations and metadata) and, thus, prevent the request method from
     * being applied if the target resource is in an unexpected state.
     *
     * @see https://datatracker.ietf.org/doc/html/rfc9110#name-412-precondition-failed
     */
    const PRECONDITION_FAILED = 412;

    /**
     * 413 Content Too Large.
     *
     * The 413 (Content Too Large) status code indicates that the server is
     * refusing to process a request because the request content is larger than
     * the server is willing or able to process. The server MAY terminate the
     * request, if the protocol version in use allows it; otherwise, the server
     * MAY close the connection.
     *
     * If the condition is temporary, the server SHOULD generate a Retry-After
     * header field to indicate that it is temporary and after what time the
     * client MAY try again.
     *
     * @see https://datatracker.ietf.org/doc/html/rfc9110#name-413-content-too-large
     */
    const CONTENT_TOO_LARGE = 413;

    /**
     * Synonym for CONTENT_TOO_LARGE from RFC 7231.
     *
     * @deprecated
     * @see HttpStatus::CONTENT_TOO_LARGE
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-6.5.11
     */
    const PAYLOAD_TOO_LARGE = 413;

    /**
     * 414 URI Too Long.
     *
     * The 414 (URI Too Long) status code indicates that the server is refusing
     * to service the request because the target URI is longer than the server
     * is willing to interpret. This rare condition is only likely to occur
     * when a client has improperly converted a POST request to a GET request
     * with long query information, when the client has descended into an
     * infinite loop of redirection (e.g., a redirected URI prefix that points
     * to a suffix of itself) or when the server is under attack by a client
     * attempting to exploit potential security holes.
     *
     * @see https://datatracker.ietf.org/doc/html/rfc9110#name-414-uri-too-long
     */
    const URI_TOO_LONG = 414;

    /**
     * 415 Unsupported Media Type.
     *
     * The 415 (Unsupported Media Type) status code indicates that the origin
     * server is refusing to service the request because the content is in a
     * format not supported by this method on the target resource.
     *
     * @see https://datatracker.ietf.org/doc/html/rfc9110#name-415-unsupported-media-type
     */
    const UNSUPPORTED_MEDIA_TYPE = 415;

    /**
     * 416 Range Not Satisfiable.
     *
     * The 416 (Range Not Satisfiable) status code indicates that the set of
     * ranges in the request's Range header field has been rejected either
     * because none of the requested ranges are satisfiable or because the
     * client has requested an excessive number of small or overlapping ranges
     * (a potential denial of service attack). Each range unit defines what is
     * required for its own range sets to be satisfiable.
     *
     * A server that generates a 416 response to a byte-range request SHOULD
     * generate a Content-Range header field specifying the current length of
     * the selected representation.
     *
     * @see https://datatracker.ietf.org/doc/html/rfc9110#name-416-range-not-satisfiable
     */
    const RANGE_NOT_SATISFIABLE = 416;

    /**
     * 417 Expectation Failed.
     *
     * The 417 (Expectation Failed) status code indicates that the expectation
     * given in the request's Expect header field could not be met by at least
     * one of the inbound servers.
     *
     * @see https://datatracker.ietf.org/doc/html/rfc9110#name-417-expectation-failed
     */
    const EXPECTATION_FAILED = 417;

    /**
     * 421 Misdirected Request.
     *
     * The 421 (Misdirected Request) status code indicates that the request was
     * directed at a server that is unable or unwilling to produce an
     * authoritative response for the target URI. An origin server (or gateway
     * acting on behalf of the origin server) sends 421 to reject a target URI
     * that does not match an origin for which the server has been configured
     * or does not match the connection context over which the request was
     * received.
     *
     * @see https://datatracker.ietf.org/doc/html/rfc9110#name-421-misdirected-request
     */
    const MISDIRECTED_REQUEST = 421;

    /**
     * 422 Unprocessable Content.
     *
     * The 422 (Unprocessable Content) status code indicates that the server
     * understands the content type of the request content (hence a 415
     * (Unsupported Media Type) status code is inappropriate), and the syntax
     * of the request content is correct, but it was unable to process the
     * contained instructions. For example, this status code can be sent if an
     * XML request content contains well-formed (i.e., syntactically correct),
     * but semantically erroneous XML instructions.
     */
    const UNPROCESSABLE_CONTENT = 422;

    /**
     * 426 Upgrade Required.
     *
     * The 426 (Upgrade Required) status code indicates that the server refuses
     * to perform the request using the current protocol but might be willing
     * to do so after the client upgrades to a different protocol. The server
     * MUST send an Upgrade header field in a 426 response to indicate the
     * required protocol(s).
     *
     * @see https://datatracker.ietf.org/doc/html/rfc9110#name-426-upgrade-required
     */
    const UPGRADE_REQUIRED = 426;

    /**
     * 500 Internal Server Error.
     *
     * The 500 (Internal Server Error) status code indicates that the server
     * encountered an unexpected condition that prevented it from fulfilling
     * the request.
     *
     * @see https://datatracker.ietf.org/doc/html/rfc9110#name-500-internal-server-error
     */
    const INTERNAL_SERVER_ERROR = 500;

    /**
     * 501 Not Implemented.
     *
     * The 501 (Not Implemented) status code indicates that the server does not
     * support the functionality required to fulfill the request. This is the
     * appropriate response when the server does not recognize the request
     * method and is not capable of supporting it for any resource.
     *
     * @see https://datatracker.ietf.org/doc/html/rfc9110#name-501-not-implemented
     */
    const NOT_IMPLEMENTED = 501;

    /**
     * 502 Bad Gateway.
     *
     * The 502 (Bad Gateway) status code indicates that the server, while
     * acting as a gateway or proxy, received an invalid response from an
     * inbound server it accessed while attempting to fulfill the request.
     *
     * @see https://datatracker.ietf.org/doc/html/rfc9110#name-502-bad-gateway
     */
    const BAD_GATEWAY = 502;

    /**
     * 503 Service Unavailable.
     *
     * The 503 (Service Unavailable) status code indicates that the server is
     * currently unable to handle the request due to a temporary overload or
     * scheduled maintenance, which will likely be alleviated after some delay.
     * The server MAY send a Retry-After header field to suggest an appropriate
     * amount of time for the client to wait before retrying the request.
     *
     * @see https://datatracker.ietf.org/doc/html/rfc9110#name-503-service-unavailable
     */
    const SERVICE_UNAVAILABLE = 503;

    /**
     * 504 Gateway Timeout.
     *
     * The 504 (Gateway Timeout) status code indicates that the server, while
     * acting as a gateway or proxy, did not receive a timely response from an
     * upstream server it needed to access in order to complete the request.
     *
     * @see https://datatracker.ietf.org/doc/html/rfc9110#name-504-gateway-timeout
     */
    const GATEWAY_TIMEOUT = 504;

    /**
     * 505 HTTP Version Not Supported.
     *
     * The 505 (HTTP Version Not Supported) status code indicates that the
     * server does not support, or refuses to support, the major version of
     * HTTP that was used in the request message.
     *
     * @see https://datatracker.ietf.org/doc/html/rfc9110#name-505-http-version-not-suppor
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
        return $status >= 100 && $status < 200;
    }

    /**
     * The request was successfully received, understood, and accepted.
     *
     * @param int $status
     * @return bool
     */
    public static function isSuccessful(int $status): bool
    {
        return $status >= 200 && $status < 300;
    }

    /**
     * Further action needs to be taken in order to complete the request.
     *
     * @param int $status
     * @return bool
     */
    public static function isRedirection(int $status): bool
    {
        return $status >= 300 && $status < 400;
    }

    /**
     * The request contains bad syntax or cannot be fulfilled.
     *
     * @param int $status
     * @return bool
     */
    public static function isClientError(int $status): bool
    {
        return $status >= 400 && $status < 500;
    }

    /**
     * The server failed to fulfill an apparently valid request.
     *
     * @param int $status
     * @return bool
     */
    public static function isServerError(int $status): bool
    {
        return $status >= 500 && $status < 600;
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
            case static::PERMANENT_REDIRECT:
                $reason = "Permanent Redirect";
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
            case static::CONTENT_TOO_LARGE:
            case static::PAYLOAD_TOO_LARGE:
                $reason = "Content Too Large";
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
            case static::MISDIRECTED_REQUEST:
                $reason = "Misdirected Request";
                break;
            case static::UNPROCESSABLE_CONTENT:
                $reason = "Unprocessable Content";
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

    /**
     * Alias for HttpStatus::reason().
     *
     * @param int $status
     * @return string
     * @uses HttpStatus::reason()
     */
    public static function getReason(int $status): string
    {
        return static::reason($status);
    }
}
