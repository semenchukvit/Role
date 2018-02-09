<?php


namespace App\Roles;


class BaseRole
{
    //You have to override this property in child Class wih name of role like in database
    public $role;

    //rules that this role have
    public $rules = [];

    //add rules to property $rules from config file rules.php
    public function __construct()
    {
        $conf = require_once (__DIR__ . '/rules.php');

        $this->setRules($conf[$this->role]);
    }


    public function getRules()
    {
        return $this->rules;
    }

    public function setRules($data = [])
    {
        $this->rules = $data;
    }
}