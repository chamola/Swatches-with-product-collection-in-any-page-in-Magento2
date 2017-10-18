<?php

namespace Manoj\Swatches\Controller\Index;
use Magento\Framework\App\Action\Context;
/* Built by Manoj Chamola*/
 
class Index extends \Magento\Framework\App\Action\Action
{
    public function __construct(Context $context)
    {
        parent::__construct($context);
    }
 
    public function execute()
    {
        echo 'Good';
    }
}