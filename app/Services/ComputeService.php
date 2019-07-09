<?php

namespace App\Services;

class ComputeService  {

    const T_PLUS = 'Addition';
    const T_MINUS = 'Subtraction';
    const T_MUL = 'Multiplication';
    const T_DIV = 'Division' ;

    static $_operators = [
        self::T_MUL => '*',
        self::T_DIV => '/',
        self::T_PLUS => '+',
        self::T_MINUS => '-'
    ];

    static $_emojis = [
        self::T_PLUS => 'Alien',
        self::T_MINUS => 'Skull',
        self::T_MUL => 'Ghost',
        self::T_DIV => 'Scream',
    ];

    /**
     * @return null
     * @throws Exception
     */
    public function run($inputs)
    {
        return $this->parse($inputs["value"] . self::$_operators[$inputs['emojis']] .$inputs["value2"]);
    }


    /**
     * @param $str
     * @return float
     */
    private function parse($str):float
    {

        if(preg_match('/(\d+)(?:\s*)([\+\-\*\/])(?:\s*)(\d+)/', $str, $matches) !== FALSE){
            $operator = $matches[2];

            switch($operator){
                case '+':
                    $p = $matches[1] + $matches[3];
                    break;
                case '-':
                    $p = $matches[1] - $matches[3];
                    break;
                case '*':
                    $p = $matches[1] * $matches[3];
                    break;
                case '/':
                    $p = $matches[1] / $matches[3];
                    break;
            }

            return $p;
        }

        return null;
    }
}