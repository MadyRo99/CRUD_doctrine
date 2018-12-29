<?php  

function uid($entity)
{

    do {

        $uid = uniqid(rand(1, 100000), false);
        $res = $entity->check_uid($uid);

    } while ($res);

    return $uid;

}

function array_has_dupes($array) {
    return count($array) !== count(array_unique($array));
}