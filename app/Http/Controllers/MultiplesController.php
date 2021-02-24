<?php

namespace App\Http\Controllers;

class MultiplesController extends Controller
{
    /**
     * @var string[]
     */
    private $StringOptions;

    public function __construct()
    {
        $this->StringOptions = ['Five', 'Three', 'ThreeAndFive'];
    }

    public function printNumberString()
    {
        for ($i = 1; $i <= 100; $i++) {
            if($i % 3 == 0 || $i % 5 == 0){
                echo $this->printString($i) . '<br/>';
                continue;
            }
            echo $i . '<br/>';
        }
    }

    public function printString(int $i): string
    {
        return $this->StringOptions[($i % 3 == 0 && $i % 5 >= 1)+(($i % 3 == 0 && $i % 5 == 0) * 2)];
    }
}
