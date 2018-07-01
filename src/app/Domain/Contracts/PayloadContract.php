<?php

namespace App\Domain\Contracts;

interface PayloadContract
{
    /**
     * Instantiate the class.
     *
     * @param mixed $data
     */
    public function __construct($data = null);

    /**
     * Return the data property.
     *
     * @return mixed
     */
    public function getData();

    /**
     * Return the status property.
     *
     * @return integer
     */
    public function getStatus();
}
