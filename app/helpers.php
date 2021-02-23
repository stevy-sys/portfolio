<?php

function getUserName($id)
{
    $name = App\User::where('id',$id)->first()->name ;
    return $name ;
}