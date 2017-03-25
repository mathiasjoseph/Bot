<?php
/**
 * Created by PhpStorm.
 * User: miky
 * Date: 15/12/16
 * Time: 17:26
 */

namespace Adevis\Component\Bot\Model;


class Port
{
    /**
     * @var integer
     */
    protected $number;

    /**
     * @var boolean
     */
    protected $open;



    /**
     * Port constructor.
     * @param int $number
     */
    public function __construct()
    {
        $this->open = true;
    }


    /**
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param int $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * @return bool
     */
    public function isOpen()
    {
        return $this->open;
    }

    /**
     * @param bool $open
     */
    public function setOpen($open)
    {
        $this->open = $open;
    }
}