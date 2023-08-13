<?php

if (session()->get('ss_username')) {

    echo 'Logged in';
} else {
   
    echo 'Not logged in';
}


