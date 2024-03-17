<?php

declare(strict_types=1);

namespace Training\ReplaceArgs\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\View\Result\PageFactory;

class Index implements ActionInterface{
    protected $page;
    public function __construct(PageFactory $p){
        $this->page=$p;
    }
    public function execute(){
        $res=$this->page->create();
        $res->getConfig()->getTitle()->set("Replace Args");
        return $res;
    }
}