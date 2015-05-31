<?php
/**
 * Created by PhpStorm.
 * User: ryan
 * Date: 2015/5/31
 * Time: 9:00
 */
function get_extension($file)
{
    return substr(strrchr($file, '.'), 1);
}

echo get_extension("jbjjeiaaea.ba.aeae.sji");