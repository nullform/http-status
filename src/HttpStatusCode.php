<?php

namespace Nullform;

/**
 * Representation of HTTP status code.
 *
 * @see HttpStatus
 * @link https://www.rfc-editor.org/rfc/rfc9110#name-status-codes
 */
class HttpStatusCode
{
    /**
     * @var int
     */
    protected $code;

    /**
     * @param int $code HTTP status code.
     */
    public function __construct(int $code)
    {
        $this->code = $code;
    }

    /**
     * @return int
     */
    public function getCode(): int
    {
        return $this->code;
    }

    /**
     * HTTP status reason phrase.
     *
     * @return string
     * @uses HttpStatus::getReason()
     */
    public function getReason(): string
    {
        return HttpStatus::getReason($this->code);
    }

    /**
     * HTTP status description.
     *
     * @return string
     * @uses HttpStatus::getDescription()
     */
    public function getDescription(): string
    {
        return HttpStatus::getDescription($this->code);
    }

    /**
     * The request was received, continuing process.
     *
     * @return bool
     * @uses HttpStatus::isInformational()
     */
    public function isInformational(): bool
    {
        return HttpStatus::isInformational($this->code);
    }

    /**
     * The request was successfully received, understood, and accepted.
     *
     * @return bool
     * @uses HttpStatus::isSuccessful()
     */
    public function isSuccessful(): bool
    {
        return HttpStatus::isSuccessful($this->code);
    }

    /**
     * Further action needs to be taken in order to complete the request.
     *
     * @return bool
     * @uses HttpStatus::isRedirection()
     */
    public function isRedirection(): bool
    {
        return HttpStatus::isRedirection($this->code);
    }

    /**
     * The request contains bad syntax or cannot be fulfilled.
     *
     * @return bool
     * @uses HttpStatus::isClientError()
     */
    public function isClientError(): bool
    {
        return HttpStatus::isClientError($this->code);
    }

    /**
     * The server failed to fulfill an apparently valid request.
     *
     * @return bool
     * @uses HttpStatus::isServerError()
     */
    public function isServerError(): bool
    {
        return HttpStatus::isServerError($this->code);
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return (string)$this->getCode();
    }
}
