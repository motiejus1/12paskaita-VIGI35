<?php

class Message {
    public $message;
    public $tag;

    public function __construct($message, $tag) {
        $this->message = $message;
        $this->tag = $tag;
    }


    public function show($class) {
        echo "<$this->tag>$this->message</$this->tag>";
    }
}

class BootstrapMessage extends Message {

    public $messageStyle = array(
        'primary' => ' alert-primary',
        'secondary' => 'alert-secondary',
        'success' => 'alert-success',
        'danger' => 'alert-danger',
        'warning' => 'alert-warning',
        'info' => 'alert-info',
        'light' => 'alert-light',
        'dark' => 'alert-dark'
    );

    public function show($class) {
        $style = $this->messageStyle[$class];
        echo "<div class='alert $style' role='alert'> $this->message</div>";
    }
}

//Mums prie savo zinuciu reikia integruoti bootsrap zinutes
