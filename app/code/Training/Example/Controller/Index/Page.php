<?php

declare(strict_types = 1);

namespace Training\Example\Controller\Index;

class Page implements ActionInterface{
    protected $pageFactory;
    public function __construct(\Magento\Framework\View\Result\PageFactory $pageFactory){
        $this->pageFactory = $pageFactory;
    }

    public function execute(){
        return $this->pageFactory;
    }
}
