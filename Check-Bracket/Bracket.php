<?php


class Bracket
{
    public array $stack;

    public function __construct()
    {
        $this->stack = [];
    }

    public function isEmpty(): bool
    {
        return empty($this->stack);
    }

    public function Bracket($string): bool
    {
        $len = strlen($string);
        for ($i = 0; $i < $len; $i++) {
            switch ($string[$i]) {
                case '(':
                    array_push($this->stack, 0);
                    break;
                case ')':
                    if ($this->isEmpty()) {
                        return false;
                    } else {
                        if (array_pop($this->stack) != 0)
                            return false;
                        break;
                    }
                case '[':
                    array_push($this->stack, 1);
                    break;
                case ']':
                    if ($this->isEmpty()) {
                        return false;
                    } else {
                        if (array_pop($this->stack) != 1)
                            return false;
                        break;
                    }
                default:
                    break;
            }
        }
        return $this->isEmpty();
    }

    public function isTrue($string)
    {
        if ($this->Bracket($string)) {
            echo "OK";
        } else {
            echo "Wrong";
        }
    }
}