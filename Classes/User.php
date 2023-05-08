<?php

private $ID;
private $PHONE_NUMBER;
private $FULL_NAME;
private $USERNAME;
private $PASSWORD;

function getID(){
    return $this->ID;
}

function setID(){
    $this->ID=$ID;
}

function getPHONE_NUMBER(){
    return $this->PHONE_NUMBER;
}

function setPHONE_NUMBER(){
    $this->PHONE_NUMBER=$PHONE_NUMBER;
}

function getFULL_NAME(){
    return $this->FULL_NAME;
}

function setFULL_NAME(){
    $this->FULL_NAME=$FULL_NAME;
}

function getUSERNAME(){
    return $this->USERNAME;
}

function setUSERNAME(){
    $this->USERNAME=$USERNAME;
}

function getPASSWORD(){
    return $this->PASSWORD;
}

function setPASSWORD(){
    $this->PASSWORD=$PASSWORD;
}

?>