<?php  

    class Node {
        public $value;
        public $next;
        
        public function __construct($value)
        {
            $this->value = $value;
            $this->next = null;
        }
    }

    class LinkedList {
        public $head;

        public function __construct() {
            $this->head = null;
        }
        
        public function append($value)
        {
            $newNode = new Node($value);
            
            if ($this->head === null) {
                $this->head = $newNode;
            } else {
                $current = $this->head;

                while ($current->next !== null) {
                   $current = $current->next;
                }

                $current->next = $newNode;
            }
        }
    }

    function arrayToLinkedList($array) {
        $linkedList = new LinkedList();
        
        foreach($array as $item) {
            $linkedList->append($item);
        }

        return $linkedList->head;
        
    }

    print_r(arrayToLinkedList([1,2,4,6]));