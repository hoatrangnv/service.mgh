<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


namespace MigEvents\Logger;

class PathLogger{
    
    public function __construct() {
        
    }
    
    public function getPath(){
        return APPPATH ."logs/";
    }
}
