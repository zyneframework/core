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
 * Class SettableTrait
 * @package Zyne\Core
 */
trait SettableTrait
{

    private $params = [];

    public function set($key, $value = null)
    {
        $this->params[$key] = $value;
        return $this;
    }

    public function __set($key, $value = null)
    {
        return $this->set($key, $value);
    }
}