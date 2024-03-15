<?php
declare(strict_types=1);

namespace Training\LayoutExample\Controller\Layout;

use Magento\Framework\App\ActionInterface;  
use Magento\Framework\View\Result\PageFactory;

class Index implements ActionInterface{

    protected $resultFactory;

    public function __construct(PageFactory $resultFactory){
        $this->resultFactory = $resultFactory;
    }
    public function execute(){
        $res=$this->resultFactory->create();
        $res->getConfig()->getTitle()->set("Hitansh Agrawal");
        $res->getLayout()->getBlock("page.main.title")->setPageTitle("Hello World");
        return $res;
    }
}
?>

