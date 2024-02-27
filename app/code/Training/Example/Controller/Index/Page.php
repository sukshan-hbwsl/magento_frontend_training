<?php

declare(strict_types = 1);

namespace Training\Example\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\App\ResponseInterface;

class Page implements ActionInterface{
    protected $pageFactory;
    public function __construct(\Magento\Framework\View\Result\PageFactory $pageFactory){
        $this->pageFactory = $pageFactory;
    }

    public function execute(){
        return $this->pageFactory->create();
    }
}
