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

namespace Scabbia\Views;

use Scabbia\Framework\Core;
use Exception;

/**
 * Views
 *
 * @package     Scabbia\Views
 * @author      Eser Ozvataf <eser@sent.com>
 * @since       1.0.0
 */
class Views
{
    /** @type array $engines set of engines */
    public static $engines = [
        "php" => "self::renderPhpFile"
    ];


    /**
     * Renders a view
     *
     * @param string $uView  view file
     * @param mixed  $uModel view model
     *
     * @throws Exception if any render engine is not associated with the extension
     */
    public static function viewFile($uView, $uModel = null)
    {
        $tViewFilePath = Core::findResource($uView);
        $tViewFileInfo = pathinfo($tViewFilePath);

        if (!isset(self::$engines[$tViewFileInfo["extension"]])) {
            // TODO exception
            throw new Exception("");
        }

        call_user_func(
            self::$engines[$tViewFileInfo["extension"]],
            "{$tViewFileInfo["dirname"]}/",
            $tViewFileInfo["basename"],
            $uModel
        );
    }

    /**
     * Renders plain PHP file for using them as a template format
     *
     * @param string $tTemplatePath path of the template file
     * @param string $tTemplateFile filename of the template file
     * @param mixed  $uModel        model object
     *
     * @return void
     */
    public static function renderPhpFile($tTemplatePath, $tTemplateFile, $uModel = null)
    {
        if ($uModel !== null && is_array($uModel)) {
            extract($uModel, EXTR_SKIP | EXTR_REFS);
        }

        include "{$tTemplatePath}{$tTemplateFile}";
    }
}