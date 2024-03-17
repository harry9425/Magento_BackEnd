<?php

declare(strict_types=1);

use Training\ReplaceArgs\ViewModel;
use Magento\Framework\View\Element\Block\ArgumentInterface;
use Training\ReplaceArgs\Model\DefaultName;

class Example implements  ArgumentInterFace{

    protected $dn;

    public function __construct(DefaultName $dn)
    {
        $this->dn=$dn;
    }

    public function getName() : string{
        return $this->dn->getName();
    }

}