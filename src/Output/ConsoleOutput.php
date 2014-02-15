<?php
/**
 * Scabbia2 PHP Framework
 * http://www.scabbiafw.com/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @link        http://github.com/scabbiafw/scabbia2 for the canonical source repository
 * @copyright   2010-2013 Scabbia Framework Organization. (http://www.scabbiafw.com/)
 * @license     http://www.apache.org/licenses/LICENSE-2.0 - Apache License, Version 2.0
 */

namespace Scabbia\Output;

use Scabbia\Output\IOutput;

/**
 * Implementation of output to console
 *
 * @package     Scabbia\Output
 * @author      Eser Ozvataf <eser@sent.com>
 * @since       2.0.0
 */
class ConsoleOutput implements IOutput
{
    /**
     * Writes given message in header format
     *
     * @param int    $uHeading size
     * @param string $uMessage message
     *
     * @return void
     */
    public function writeHeader($uHeading, $uMessage)
    {
        if ($uHeading === 1) {
            $tChar = "=";
        } else {
            $tChar = "-";
        }

        echo "{$uMessage}\r\n", str_repeat($tChar, strlen($uMessage)), "\r\n";

        if ($uHeading === 1) {
            echo "\r\n";
        }
    }

    /**
     * Writes given message in specified color
     *
     * @param string $uColor   color
     * @param string $uMessage message
     *
     * @return void
     */
    public function writeColor($uColor, $uMessage)
    {
        if (strncasecmp(PHP_OS, "WIN", 3) === 0) {
            echo "{$uMessage}\r\n";
            return;
        }

        if ($uColor === "black") {
            $tColor = "[0;30m";
        } else if ($uColor === "darkgray") {
            $tColor = "[1;30m";
        } else if ($uColor === "blue") {
            $tColor = "[0;34m";
        } else if ($uColor === "lightblue") {
            $tColor = "[1;34m";
        } else if ($uColor === "green") {
            $tColor = "[0;32m";
        } else if ($uColor === "lightgreen") {
            $tColor = "[1;32m";
        } else if ($uColor === "cyan") {
            $tColor = "[0;36m";
        } else if ($uColor === "lightcyan") {
            $tColor = "[1;36m";
        } else if ($uColor === "red") {
            $tColor = "[0;31m";
        } else if ($uColor === "lightred") {
            $tColor = "[1;31m";
        } else if ($uColor === "purple") {
            $tColor = "[0;35m";
        } else if ($uColor === "lightpurple") {
            $tColor = "[1;35m";
        } else if ($uColor === "brown") {
            $tColor = "[0;33m";
        } else if ($uColor === "yellow") {
            $tColor = "[1;33m";
        } else if ($uColor === "white") {
            $tColor = "[1;37m";
        } else /* if ($uColor === "lightgray") */ {
            $tColor = "[0;37m";
        }

        echo "\033{$tColor}{$uMessage}\033[0m\r\n";
    }

    /**
     * Writes given message
     *
     * @param string $uMessage message
     *
     * @return void
     */
    public function write($uMessage)
    {
        echo "{$uMessage}\r\n";
    }

    /**
     * Outputs the array to console
     *
     * @param array $uArray Target array will be printed
     *
     * @return void
     */
    public function writeArray(array $uArray)
    {
        print_r($uArray);
    }
}