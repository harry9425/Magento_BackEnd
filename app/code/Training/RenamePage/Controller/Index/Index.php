<?php

declare(strict_types=1);

namespace Training\RenamePage\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\View\Result\PageFactory;

class Index implements ActionInterface{
    
    protected $pageFactory;

    public function execute(){
        $page = $this->pageFactory->create();
        $page->getConfig()->getTitle()->set("Harry");
        $page->getLayout()->getBlock("page.main.title")->setPageTitle("Magento 2 page title set using Block from contoller");
        return $page;
    }
    public function __construct(PageFactory $pageFactory)
    {
        $this->pageFactory=$pageFactory;
    }
}