<?php
namespace Ccc\Helloworld\Controller\Index;
class Index extends \Magento\Framework\App\Action\Action
{
    protected $_pageFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context, //this must need to pass
        \Magento\Framework\View\Result\PageFactory $pageFactory
    ){
        $this->_pageFactory = $pageFactory;
        return parent::__construct($context);
    }

    public function execute(){
        $resultPage = $this->_pageFactory->create();
        $resultPage->addHandle('helloworld_index_index'); //complusary to add handle
        return $resultPage;
    }
}