<?php
    namespace Model;

    use CoffeeCode\DataLayer\DataLayer;

    class VisitorCounterDao extends DataLayer
    {
        public function __construct()
        {
            parent::__construct("visitorCounter", ["route", "hitCounter"]);
        }
    }