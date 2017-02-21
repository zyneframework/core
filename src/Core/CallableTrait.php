<?php
/**
 * Zyne Framework (https://phpframework.zyne.com.br/)
 *
 * @link      https://github.com/zynebr/phpframework para acesso ao repositório
 * @copyright Copyright (c) 2007-2017 Zyne BR. (https://www.zyne.com.br)
 * @license   https://framework.zyne.com.br/licensa/new-bsd New BSD License
 *
 */

namespace Zyne\Core;

/**
 * Class CallableTrait
 * @package Zyne\Core
 */
trait CallableTrait
{

    public function call($method, $args)
    {

    }

    public function __call($method, $args = [])
    {
        return $this->call($method, $args);
    }
}