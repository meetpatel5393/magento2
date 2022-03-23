<?php
namespace Ccc\Helloworld\Controller\Adminhtml\Index;
class Index extends \Magento\Backend\App\Action
{
    protected $resultPageFactory;
    protected $_publicActions = ['index'];

    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory
    ) {
        $this->resultPageFactory = $pageFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('Magento_Backend::dashboard');
        $resultPage->addBreadcrumb(__('My Template 1'), __('My Template 1'));
        $resultPage->getConfig()->getTitle()->prepend(__('My Template Header'));
        return $resultPage;
    }
}
