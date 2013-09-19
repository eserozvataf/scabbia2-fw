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

namespace Scabbia\Tests;

/**
 * Default methods needed for implementation of test output in various interfaces.
 *
 * @package     Scabbia\Tests
 * @author      Eser Ozvataf <eser@sent.com>
 * @since       2.0.0
 */
interface IOutput
{
    /**
     * Writes given message.
     *
     * @param int    $uHeading size
     * @param string $uMessage message
     *
     * @return void
     */
    public function writeHeader($uHeading, $uMessage);

    /**
     * Outputs the report in specified representation.
     *
     * @param array $uReport Target report will be printed
     *
     * @return void
     */
    public function export(array $uReport);
}
