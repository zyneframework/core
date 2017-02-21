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
 * Class GettableTrait
 * @package Zyne\Core
 */
trait GettableTrait
{

    private $params = [];

    public function get($key = null)
    {
        return $this->params[$key];
    }

    public function __get($key)
    {
        $this->get($key);
    }
}