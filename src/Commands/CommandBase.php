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

namespace Scabbia\Commands;

/**
 * Default methods needed for implementation of a command
 *
 * @package     Scabbia\Commands
 * @author      Eser Ozvataf <eser@sent.com>
 * @since       2.0.0
 *
 * @todo "scabbia help <command>" command
 */
abstract class CommandBase
{
    /** @type mixed           $config   command configuration */
    public $config;
    /** @type IOutput         $output   output class */
    public $output;


    /**
     * Initializes a command
     *
     * @param mixed   $uConfig configuration
     * @param IOutput $uOutput output class
     *
     * @return CommandBase
     */
    public function __construct($uConfig, $uOutput)
    {
        $this->config = $uConfig;
        $this->output = $uOutput;
    }

    /**
     * Executes the command
     *
     * @param array $uParameters parameters
     *
     * @return int exit code
     */
    abstract public function executeCommand(array $uParameters);
}