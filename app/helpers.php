<?php

function setActive($rauteName){
    return request()->routeIs($rauteName) ? 'nav-item active' : 'nav-item';
}

