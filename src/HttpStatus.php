<?php

namespace Nullform;

/**
 * HTTP/1.1 status codes (RFC 9110).
 *
 * @link https://www.rfc-editor.org/rfc/rfc9110#name-status-codes
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
     * @link https://www.rfc-editor.org/rfc/rfc9110#name-100-continue
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
     * @link https://www.rfc-editor.org/rfc/rfc9110#name-101-switching-protocols
     */
    const SWITCHING_PROTOCOLS = 101;

    /**
     * 200 OK.
     *
     * The 200 (OK) status code indicates that the request has succeeded.
     * The content sent in a 200 response depends on the request method.
     *
     * @link https://www.rfc-editor.org/rfc/rfc9110#name-200-ok
     */
    const OK = 200;

    /**
     * 201 Created.
     *
     * The 201 (Created) status code indicates that the request has been
     * fulfilled and has resulted in one or more new resources being created.
     *
     * @link https://www.rfc-editor.org/rfc/rfc9110#name-201-created
     */
    const CREATED = 201;

    /**
     * 202 Accepted.
     *
     * The 202 (Accepted) status code indicates that the request has been
     * accepted for processing, but the processing has not been completed.
     *
     * @link https://www.rfc-editor.org/rfc/rfc9110#name-202-accepted
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
     * @link https://www.rfc-editor.org/rfc/rfc9110#name-203-non-authoritative-infor
     */
    const NON_AUTHORITATIVE_INFORMATION = 203;

    /**
     * 204 No Content.
     *
     * The 204 (No Content) status code indicates that the server has
     * successfully fulfilled the request and that there is no additional
     * content to send in the response content.
     *
     * @link https://www.rfc-editor.org/rfc/rfc9110#name-204-no-content
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
     * @link https://www.rfc-editor.org/rfc/rfc9110#name-205-reset-content
     */
    const RESET_CONTENT = 205;

    /**
     * 206 Partial Content.
     *
     * The 206 (Partial Content) status code indicates that the server is
     * successfully fulfilling a range request for the target resource by
     * transferring one or more parts of the selected representation.
     *
     * @link https://www.rfc-editor.org/rfc/rfc9110#name-206-partial-content
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
     * @link https://www.rfc-editor.org/rfc/rfc9110#name-300-multiple-choices
     */
    const MULTIPLE_CHOICES = 300;

    /**
     * 301 Moved Permanently.
     *
     * The 301 (Moved Permanently) status code indicates that the target
     * resource has been assigned a new permanent URI and any future references
     * to this resource ought to use one of the enclosed URIs.
     *
     * @link https://www.rfc-editor.org/rfc/rfc9110#name-301-moved-permanently
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
     * @link https://www.rfc-editor.org/rfc/rfc9110#name-302-found
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
     * @link https://www.rfc-editor.org/rfc/rfc9110#name-303-see-other
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
     * @link https://www.rfc-editor.org/rfc/rfc9110#name-304-not-modified
     */
    const NOT_MODIFIED = 304;

    /**
     * 305 Use Proxy.
     *
     * The requested resource is available only through a proxy, the address
     * for which is provided in the response.
     *
     * @link https://www.rfc-editor.org/rfc/rfc9110#name-305-use-proxy
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
     * @link https://www.rfc-editor.org/rfc/rfc9110#name-307-temporary-redirect
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
     * @link https://www.rfc-editor.org/rfc/rfc9110#name-308-permanent-redirect
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
     * @link https://www.rfc-editor.org/rfc/rfc9110#name-400-bad-request
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
     * @link https://www.rfc-editor.org/rfc/rfc9110#name-401-unauthorized
     */
    const UNAUTHORIZED = 401;

    /**
     * 402 Payment Required.
     *
     * The 402 (Payment Required) status code is reserved for future use.
     *
     * @link https://www.rfc-editor.org/rfc/rfc9110#name-402-payment-required
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
     * @link https://www.rfc-editor.org/rfc/rfc9110#name-403-forbidden
     */
    const FORBIDDEN = 403;

    /**
     * 404 Not Found.
     *
     * The 404 (Not Found) status code indicates that the origin server did not
     * find a current representation for the target resource or is not willing
     * to disclose that one exists.
     *
     * @link https://www.rfc-editor.org/rfc/rfc9110#name-404-not-found
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
     * @link https://www.rfc-editor.org/rfc/rfc9110#name-405-method-not-allowed
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
     * @link https://www.rfc-editor.org/rfc/rfc9110#name-406-not-acceptable
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
     * @link https://www.rfc-editor.org/rfc/rfc9110#name-407-proxy-authentication-re
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
     * @link https://www.rfc-editor.org/rfc/rfc9110#name-408-request-timeout
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
     * @link https://www.rfc-editor.org/rfc/rfc9110#name-409-conflict
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
     * @link https://www.rfc-editor.org/rfc/rfc9110#name-410-gone
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
     * @link https://www.rfc-editor.org/rfc/rfc9110#name-411-length-required
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
     * @link https://www.rfc-editor.org/rfc/rfc9110#name-412-precondition-failed
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
     * @link https://www.rfc-editor.org/rfc/rfc9110#name-413-content-too-large
     */
    const CONTENT_TOO_LARGE = 413;

    /**
     * Synonym for CONTENT_TOO_LARGE from RFC 7231.
     *
     * @deprecated
     * @see HttpStatus::CONTENT_TOO_LARGE
     * @link https://www.rfc-editor.org/rfc/rfc9110#name-413-content-too-large
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
     * @link https://www.rfc-editor.org/rfc/rfc9110#name-414-uri-too-long
     */
    const URI_TOO_LONG = 414;

    /**
     * 415 Unsupported Media Type.
     *
     * The 415 (Unsupported Media Type) status code indicates that the origin
     * server is refusing to service the request because the content is in a
     * format not supported by this method on the target resource.
     *
     * @link https://www.rfc-editor.org/rfc/rfc9110#name-415-unsupported-media-type
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
     * @link https://www.rfc-editor.org/rfc/rfc9110#name-416-range-not-satisfiable
     */
    const RANGE_NOT_SATISFIABLE = 416;

    /**
     * 417 Expectation Failed.
     *
     * The 417 (Expectation Failed) status code indicates that the expectation
     * given in the request's Expect header field could not be met by at least
     * one of the inbound servers.
     *
     * @link https://www.rfc-editor.org/rfc/rfc9110#name-417-expectation-failed
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
     * @link https://www.rfc-editor.org/rfc/rfc9110#name-421-misdirected-request
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
     *
     * @link https://www.rfc-editor.org/rfc/rfc9110#name-422-unprocessable-content
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
     * @link https://www.rfc-editor.org/rfc/rfc9110#name-426-upgrade-required
     */
    const UPGRADE_REQUIRED = 426;

    /**
     * 500 Internal Server Error.
     *
     * The 500 (Internal Server Error) status code indicates that the server
     * encountered an unexpected condition that prevented it from fulfilling
     * the request.
     *
     * @link https://www.rfc-editor.org/rfc/rfc9110#name-500-internal-server-error
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
     * @link https://www.rfc-editor.org/rfc/rfc9110#name-501-not-implemented
     */
    const NOT_IMPLEMENTED = 501;

    /**
     * 502 Bad Gateway.
     *
     * The 502 (Bad Gateway) status code indicates that the server, while
     * acting as a gateway or proxy, received an invalid response from an
     * inbound server it accessed while attempting to fulfill the request.
     *
     * @link https://www.rfc-editor.org/rfc/rfc9110#name-502-bad-gateway
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
     * @link https://www.rfc-editor.org/rfc/rfc9110#name-503-service-unavailable
     */
    const SERVICE_UNAVAILABLE = 503;

    /**
     * 504 Gateway Timeout.
     *
     * The 504 (Gateway Timeout) status code indicates that the server, while
     * acting as a gateway or proxy, did not receive a timely response from an
     * upstream server it needed to access in order to complete the request.
     *
     * @link https://www.rfc-editor.org/rfc/rfc9110#name-504-gateway-timeout
     */
    const GATEWAY_TIMEOUT = 504;

    /**
     * 505 HTTP Version Not Supported.
     *
     * The 505 (HTTP Version Not Supported) status code indicates that the
     * server does not support, or refuses to support, the major version of
     * HTTP that was used in the request message.
     *
     * @link https://www.rfc-editor.org/rfc/rfc9110#name-505-http-version-not-suppor
     */
    const HTTP_VERSION_NOT_SUPPORTED = 505;

    /**
     * HTTP status reason phrases.
     *
     * @var string[]
     */
    protected static $reasons = [
        self::CONTINUE => 'Continue',
        self::SWITCHING_PROTOCOLS => 'Switching Protocols',
        self::OK => 'OK',
        self::CREATED => 'Created',
        self::ACCEPTED => 'Accepted',
        self::NON_AUTHORITATIVE_INFORMATION => 'Non-Authoritative Information',
        self::NO_CONTENT => 'No Content',
        self::RESET_CONTENT => 'Reset Content',
        self::PARTIAL_CONTENT => 'Partial Content',
        self::MULTIPLE_CHOICES => 'Multiple Choices',
        self::MOVED_PERMANENTLY => 'Moved Permanently',
        self::FOUND => 'Found',
        self::SEE_OTHER => 'See Other',
        self::NOT_MODIFIED => 'Not Modified',
        self::USE_PROXY => 'Use Proxy',
        self::TEMPORARY_REDIRECT => 'Temporary Redirect',
        self::PERMANENT_REDIRECT => 'Permanent Redirect',
        self::BAD_REQUEST => 'Bad Request',
        self::UNAUTHORIZED => 'Unauthorized',
        self::PAYMENT_REQUIRED => 'Payment Required',
        self::FORBIDDEN => 'Forbidden',
        self::NOT_FOUND => 'Not Found',
        self::METHOD_NOT_ALLOWED => 'Method Not Allowed',
        self::NOT_ACCEPTABLE => 'Not Acceptable',
        self::PROXY_AUTHENTICATION_REQUIRED => 'Proxy Authentication Required',
        self::REQUEST_TIMEOUT => 'Request Timeout',
        self::CONFLICT => 'Conflict',
        self::GONE => 'Gone',
        self::LENGTH_REQUIRED => 'Length Required',
        self::PRECONDITION_FAILED => 'Precondition Failed',
        self::CONTENT_TOO_LARGE => 'Content Too Large',
        self::URI_TOO_LONG => 'URI Too Long',
        self::UNSUPPORTED_MEDIA_TYPE => 'Unsupported Media Type',
        self::RANGE_NOT_SATISFIABLE => 'Range Not Satisfiable',
        self::EXPECTATION_FAILED => 'Expectation Failed',
        self::MISDIRECTED_REQUEST => 'Misdirected Request',
        self::UNPROCESSABLE_CONTENT => 'Unprocessable Content',
        self::UPGRADE_REQUIRED => 'Upgrade Required',
        self::INTERNAL_SERVER_ERROR => 'Internal Server Error',
        self::NOT_IMPLEMENTED => 'Not Implemented',
        self::BAD_GATEWAY => 'Bad Gateway',
        self::SERVICE_UNAVAILABLE => 'Service Unavailable',
        self::GATEWAY_TIMEOUT => 'Gateway Timeout',
        self::HTTP_VERSION_NOT_SUPPORTED => 'HTTP Version Not Supported',
    ];

    /**
     * HTTP status descriptions.
     *
     * @var string[]
     */
    protected static $descriptions = [
        self::CONTINUE => 'The initial part of a request has been received and has not yet been rejected by the server.',
        self::SWITCHING_PROTOCOLS => 'The server understands and is willing to comply with the client\'s request, via the "Upgrade" header field, for a change in the application protocol being used on this connection.',
        self::OK => 'The request has succeeded.',
        self::CREATED => 'The request has been fulfilled and has resulted in one or more new resources being created.',
        self::ACCEPTED => 'The request has been accepted for processing, but the processing has not been completed.',
        self::NON_AUTHORITATIVE_INFORMATION => 'The request was successful but the enclosed content has been modified from that of the origin server\'s successfull response by a transforming proxy.',
        self::NO_CONTENT => 'The server has successfully fulfilled the request and there is no additional content to send in the response content.',
        self::RESET_CONTENT => 'The server has fulfilled the request and desires that the user agent reset the "document view", which caused the request to be sent, to its original state as received from the origin server.',
        self::PARTIAL_CONTENT => 'The server is successfully fulfilling a range request for the target resource by transferring one or more parts of the selected representation.',
        self::MULTIPLE_CHOICES => 'The target resource has more than one representation, each with its own more specific identifier, and information about the alternatives is being provided.',
        self::MOVED_PERMANENTLY => 'The target resource has been assigned a new permanent URI and any future references to this resource ought to use one of the enclosed URIs.',
        self::FOUND => 'The target resource resides temporarily under a different URI.',
        self::SEE_OTHER => 'The server is redirecting the user agent to a different resource, which is intended to provide an indirect response to the original request.',
        self::NOT_MODIFIED => 'There is no need for the server to transfer a representation of the target resource because the request indicates that the client already has a valid representation.',
        self::USE_PROXY => 'The requested resource is available only through a proxy.',
        self::TEMPORARY_REDIRECT => 'The target resource resides temporarily under a different URI and the user agent MUST NOT change the request method.',
        self::PERMANENT_REDIRECT => 'The target resource has been assigned a new permanent URI and any future references to this resource ought to use one of the enclosed URIs.',
        self::BAD_REQUEST => 'The server cannot or will not process the request due to something that is perceived to be a client error.',
        self::UNAUTHORIZED => 'The request has not been applied because it lacks valid authentication credentials for the target resource.',
        self::PAYMENT_REQUIRED => 'Payment required.',
        self::FORBIDDEN => 'The server understood the request but refuses to fulfill it.',
        self::NOT_FOUND => 'The origin server did not find a current representation for the target resource or is not willing to disclose that one exists.',
        self::METHOD_NOT_ALLOWED => 'The method received in the request-line is known by the origin server but not supported by the target resource.',
        self::NOT_ACCEPTABLE => 'The target resource does not have a current representation that would be acceptable to the user agent.',
        self::PROXY_AUTHENTICATION_REQUIRED => 'The request has not been applied because it lacks valid authentication credentials for the target resource. The client needs to authenticate itself in order to use a proxy for this request.',
        self::REQUEST_TIMEOUT => 'The server did not receive a complete request message within the time that it was prepared to wait.',
        self::CONFLICT => 'The request could not be completed due to a conflict with the current state of the target resource.',
        self::GONE => 'Access to the target resource is no longer available at the origin server and this condition is likely to be permanent.',
        self::LENGTH_REQUIRED => 'The server refuses to accept the request without a defined "Content-Length" header field.',
        self::PRECONDITION_FAILED => 'One or more conditions given in the request header fields evaluated to false when tested on the server.',
        self::CONTENT_TOO_LARGE => 'The server is refusing to process a request because the request content is larger than the server is willing or able to process.',
        self::URI_TOO_LONG => 'The server is refusing to service the request because the target URI is longer than the server is willing to interpret.',
        self::UNSUPPORTED_MEDIA_TYPE => 'The origin server is refusing to service the request because the content is in a format not supported by this method on the target resource.',
        self::RANGE_NOT_SATISFIABLE => 'The set of ranges in the request\'s "Range" header field has been rejected either because none of the requested ranges are satisfiable or because the client has requested an excessive number of small or overlapping ranges.',
        self::EXPECTATION_FAILED => 'The expectation given in the request\'s "Expect" header field could not be met by at least one of the inbound servers.',
        self::MISDIRECTED_REQUEST => 'The request was directed at a server that is unable or unwilling to produce an authoritative response for the target URI.',
        self::UNPROCESSABLE_CONTENT => 'The server understands the content type of the request content, and the syntax of the request content is correct, but it was unable to process the contained instructions.',
        self::UPGRADE_REQUIRED => 'The server refuses to perform the request using the current protocol but might be willing to do so after the client upgrades to a different protocol.',
        self::INTERNAL_SERVER_ERROR => 'The server encountered an unexpected condition that prevented it from fulfilling the request.',
        self::NOT_IMPLEMENTED => 'The server does not support the functionality required to fulfill the request.',
        self::BAD_GATEWAY => 'The server, while acting as a gateway or proxy, received an invalid response from an inbound server it accessed while attempting to fulfill the request.',
        self::SERVICE_UNAVAILABLE => 'The server is currently unable to handle the request due to a temporary overload or scheduled maintenance.',
        self::GATEWAY_TIMEOUT => 'The server, while acting as a gateway or proxy, did not receive a timely response from an upstream server it needed to access in order to complete the request.',
        self::HTTP_VERSION_NOT_SUPPORTED => 'The server does not support, or refuses to support, the major version of HTTP that was used in the request message.',
    ];

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
     * Alias for HttpStatus::getReason().
     *
     * @param int $status
     * @return string
     * @deprecated Use getReason().
     */
    public static function reason(int $status): string
    {
        return static::getReason($status);
    }

    /**
     * HTTP status reason phrase.
     *
     * @param int $status
     * @return string
     */
    public static function getReason(int $status): string
    {
        return static::$reasons[$status] ?? '';
    }

    /**
     * HTTP status description.
     *
     * @param int $status
     * @return string
     */
    public static function getDescription(int $status): string
    {
        return static::$descriptions[$status] ?? '';
    }

    /**
     * All HTTP status codes (array keys) with reason phrases (array values).
     *
     * @return string[]
     */
    public static function getAllReasons(): array
    {
        return static::$reasons;
    }

    /**
     * All HTTP status codes (array keys) with status descriptions (array
     * values).
     *
     * @return string[]
     */
    public static function getAllDescriptions(): array
    {
        return static::$descriptions;
    }
}
