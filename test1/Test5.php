<?php
class car{
    var $color;
    function _construct($color="green"){
        $this->color = $color;
    }

    function what_color(){
        return $this->color;
    }
}