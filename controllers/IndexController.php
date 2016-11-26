<?php
/**
 * Phanbook : Delightfully simple forum and Q&A software
 *
 * Licensed under The GNU License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @link    http://phanbook.com Phanbook Project
 * @since   1.0.0
 * @author  Phanbook <hello@phanbook.com>
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.txt
 */
namespace Phanbook\Demo\Controllers;

use Phanbook\Models\Users;
use Phalcon\Mvc\DispatcherInterface;
use Phanbook\Models\Services\Exceptions\EntityException;
use Phanbook\Models\Services\Exceptions\EntityNotFoundException;

/**
 * Class RegisterController
 *
 * @package Phanbook\Demo\Controllers
 */
class IndexController extends ControllerBase
{
    public function indexAction()
    {
        die('Hello Module Demo');
    }
}
