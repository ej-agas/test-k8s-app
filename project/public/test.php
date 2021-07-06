<?php

if ($_GET) {
    \header("content-type: application/json");
    echo \json_encode($_GET);
}