<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 01.03.2023
 * Time: 19:47
 */

namespace app\traits;

use yii\base\Model;

/**
 *  ValidatorTrait
 */
trait ValidatorTrait
{
    /**
     * @param string $type
     * @param string $msg
     */
    protected function setMsg($type, $msg)
    {
        if (!isset($this->$type)) {
            $this->$type = $msg;
        }
    }
}
