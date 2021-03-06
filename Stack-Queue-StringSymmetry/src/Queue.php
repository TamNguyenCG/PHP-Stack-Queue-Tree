<?php

namespace Symmetry;

include_once "../vendor/autoload.php";


class Queue
{
    public mixed $front = null;
    public mixed $back = null;

    public function isEmpty(): bool
    {
        return is_null($this->front);
    }

    public function enqueue($value)
    {
        $oldBack = $this->back;
        $this->back = new Element();
        $this->back->value = $value;
        if ($this->isEmpty()) {
            $this->front = $this->back;
        } else {
            $oldBack->next = $this->back;
        }
    }

    public function dequeue()
    {
        if ($this->isEmpty()) {
            return null;
        }
        $removedValue = $this->front->value;
        $this->front = $this->front->next;
        return $removedValue;
    }
}