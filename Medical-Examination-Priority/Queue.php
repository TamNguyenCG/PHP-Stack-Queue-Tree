<?php

namespace Priority;
include_once "Patients.php";
include_once "Node.php";

class Queue
{
    public mixed $front = null;
    public mixed $back = null;

    public function isEmpty(): bool
    {
        return is_null($this->front);
    }

    public function enqueue($name,$code)
    {
        $oldBack = $this->back;
        $node = new Node($name,$code);
        $this->back = $node;
        if ($this->isEmpty()) {
            $this->front = $this->back;
        } else {
            $oldBack->link = $this->back;
        }
    }

    public function dequeue()
    {
        if ($this->isEmpty()) {
            return null;
        }
        $removedValue = $this->front->value;
        $this->front = $this->front->link;
        return $removedValue;
    }

    public function peek(): void
    {
       echo "Patients name is: ".$this->front->value['name']."<br>";
       echo "Code is: ".$this->front->value['code']."<hr>";
    }

}