<?php
declare(strict_types=1);

namespace Training\LayoutExample\Controller\Layout;


use Magento\Framework\App\ActionInterface;
use Magento\Framework\App\ResponseInterface;

class Index implements ActionInterface{
    protected $resultsFactory;
    public function __construct(\Magento\Framework\View\Result\PageFactory $resultFactory){
        $this->resultFactory = $resultFactory;
    }
    public function execute(){
        $result= $this->resultFactory->create();
        $result->getConfig()->getTitle()->set('sj layout page');
        $result->getLayout()->getBlock('page.main.title')->setPageTitle("magento developer");
        return $result;
    }
}