<?php
namespace Vidhyut\TestPackage;

class Index
{
    /**
     * Construct Method
     *
     */
    public function __construct() {
        echo 'Instance of ' . __CLASS__ . ' is created.';
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