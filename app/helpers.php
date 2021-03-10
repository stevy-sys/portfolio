<?php

function environement()
{
    if (env("APP_ENV")=="local") {
        return true;
    }
    return false ;
}