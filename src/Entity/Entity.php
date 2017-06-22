<?php
/**
 * Created by PhpStorm.
 * User: ederl
 * Date: 21/06/2017
 * Time: 18:10
 */

namespace rederlo\TotalVoice\Entity;


class Entity
{
    public function toArray()
    {
        return call_user_func('get_object_vars', $this);
    }
}