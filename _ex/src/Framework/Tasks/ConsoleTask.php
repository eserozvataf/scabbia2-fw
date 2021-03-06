<?php
/**
 * Scabbia2 PHP Framework Code
 * https://github.com/eserozvataf/scabbia2
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @link        https://github.com/eserozvataf/scabbia2-fw for the canonical source repository
 * @copyright   2010-2016 Eser Ozvataf. (http://eser.ozvataf.com/)
 * @license     http://www.apache.org/licenses/LICENSE-2.0 - Apache License, Version 2.0
 */

namespace Scabbia\Framework\Tasks;

use Scabbia\Objects\CommandInterpreter;
use Scabbia\Tasks\TaskBase;
use Boris\Boris;

/**
 * Task class for "php scabbia console"
 *
 * @package     Scabbia\Framework\Tasks
 * @author      Eser Ozvataf <eser@ozvataf.com>
 * @since       2.0.0
 *
 * @scabbia-task console
 * @todo only pass annotations requested by generator
 */
class ConsoleTask extends TaskBase
{
    /**
     * Registers the tasks itself to a command interpreter instance
     *
     * @param CommandInterpreter $uCommandInterpreter interpreter to be registered at
     *
     * @return void
     */
    public static function registerToCommandInterpreter(CommandInterpreter $uCommandInterpreter)
    {
        $uCommandInterpreter->addCommand(
            "console",
            "Launches a REPL command interface",
            []
        );
    }

    /**
     * Initializes the console task
     *
     * @param mixed      $uConfig    configuration
     * @param IInterface $uInterface interface class
     *
     * @return ConsoleTask
     */
    public function __construct($uConfig, $uInterface)
    {
        parent::__construct($uConfig, $uInterface);
    }

    /**
     * Executes the task
     *
     * @param array $uParameters parameters
     *
     * @return int exit code
     */
    public function executeTask(array $uParameters)
    {
        $tBoris = new Boris("scabbia> ");
        $tBoris->start();

        return 0;
    }
}
