<?php
namespace Model;

class Field {
    // name :: string
    private $name;

    // message :: string
    private $message = '';

    // hasError :: bool
    private $hasError = false;

    // new \Model\Field
    public function __construct($name, $message = '') {
        $this->name = $name;
        $this->message = $message;
    }

    // getName :: void -> string
    public function getName() {
        return $this->name;
    }

    // getMessage :: void -> string
    public function getMessage() {
        return $this->message;
    }

    // hasError :: void -> bool
    public function hasError() {
        return $this->hasError;
    }

    // setErrorMessage :: string -> void
    public function setErrorMessage($message) {
        $this->message = $message;
        $this->hasError = true;
    }

    // clearErrorMessage :: void -> void
    public function clearErrorMessage() {
        $this->message = '';
        $this->hasError = false;
    }

    // getHTML :: void -> string
    public function getHTML() {
        $message = htmlspecialchars($this->message);
        if ($this->hasError()) {
            return '<span class="error">' . $message . '</span>';
        } else {
            return '<span>' . $message . '</span>';
        }
    }
}

class Fields {

    // REGISTER_FIELDS :: [fieldSettings]
    // fieldSettings -> [string, string, string?]. The first entry in the array is
    //  the form label, second is element name, third is optionally field type.
    const REGISTER_FIELDS = [
        ['Username', 'username'],
        ['Password', 'password', 'password'],
        ['Phone', 'phone'],
        ['E-Mail', 'email'],
        ['ZIP Code', 'zipcode'],
    ];

    // fields :: [\Model\Fields]
    private $fields = [ ];

    // addField :: (string, string) -> void
    public function addField($name, $message = '') {
        $field = new Field($name, $message);
        $this->fields[$field->getName()] = $field;
    }

    // getField :: string -> \Model\Field
    public function getField($name) {
        return $this->fields[$name];
    }

    // hasErrors :: void -> bool
    public function hasErrors() {
        foreach ($this->fields as $field) {
            if ($field->hasError()) return true;
        }
        return false;
    }
}
