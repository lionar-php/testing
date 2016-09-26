<?php

namespace Testing\Reporters;

use Peridot\Core\TestInterface;
use Peridot\Reporter\SpecReporter;

class BasicReporter extends SpecReporter
{
	/**
     * Output a test failure.
     *
     * @param int $errorNumber
     * @param TestInterface $test
     * @param $exception - an exception like interface with ->getMessage(), ->getTraceAsString()
     */
    protected function outputError($errorNumber, TestInterface $test, $exception)
    {
        $this->output->writeln(sprintf("  %d)%s:", $errorNumber, $test->getTitle()));

        $message = sprintf("     %s", str_replace(PHP_EOL, PHP_EOL . "     ", $exception->getMessage()));
        $this->output->writeln($this->color('error', $message));
    }
}