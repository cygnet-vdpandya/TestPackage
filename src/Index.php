<?php
namespace Vidhyut\TestPackage;

class Index
{
    /**
     * Construct Method
     *
     */
    public function __construct() {
        // Do some cool stuff here
    }

    /**
     * Add Numbers
     * 
     */
    public function addNumbers(...$args) {
        $sum = 0;

        foreach($args as $number) {
            $sum += $number;
        }

        return $sum;
    }
}