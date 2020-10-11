<?php
declare(strict_types=1);

namespace Genkgo\Mail\Protocol\Imap;

use Genkgo\Mail\Exception\AssertionFailedException;
use Genkgo\Mail\Protocol\Imap\Response\CompletionResult;

interface ResponseInterface
{
    /**
     * @param CompletionResult $expectedResult
     * @return ResponseInterface
     * @throws AssertionFailedException
     */
    public function assertCompletion(CompletionResult $expectedResult): ResponseInterface;

    /**
     * @return ResponseInterface
     * @throws AssertionFailedException
     */
    public function assertContinuation(): ResponseInterface;

    /**
     * @return ResponseInterface
     * @throws AssertionFailedException
     */
    public function assertTagged(): ResponseInterface;

    /**
     * @return string
     */
    public function getBody(): string;

    /**
     * @return string
     */
    public function __toString(): string;
}
