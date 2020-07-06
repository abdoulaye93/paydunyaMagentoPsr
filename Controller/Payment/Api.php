<?php
/**
 * Copyright © 2019 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace PaydunyaPsrMagento\PaydunyaPsr\Controller\Payment;

/**
 * Index Payment Controller
 *
 * @author     Magento Core Team <core@magentocommerce.com>
 */
class Api extends \Magento\Framework\App\Action\Action
{
    protected $resultJsonFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory
    ) {

        $this->resultJsonFactory = $resultJsonFactory;
        parent::__construct($context);
    }

    public function execute()
    {

        $result = $this->resultJsonFactory->create();
        $data = ['message' => 'Hello world!'];

        return $result->setData($data);
    }
}
