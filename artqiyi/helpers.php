<?php

use Artqiyi\Events\ViewEvent;

function tag($tag)
{
    event(new ViewEvent($tag));
}