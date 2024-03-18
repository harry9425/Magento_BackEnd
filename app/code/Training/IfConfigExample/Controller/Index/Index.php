<?php

declare(strict_types=1);

namespace Training\IfConfigExample\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\View\Result\PageFactory;

class Index implements ActionInterface{
    
    protected $pageFactory;

    public function execute(){
        $page = $this->pageFactory->create();
        $page->getConfig()->getTitle()->set("IFConfig Example");
        return $page;
    }
    public function __construct(PageFactory $pageFactory)
    {
        $this->pageFactory=$pageFactory;
    }
}