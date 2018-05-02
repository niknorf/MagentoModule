<?php
namespace Testing\FirstModule\Block;
 
class Helloworld extends \Magento\Framework\View\Element\Template
{
    public function getHelloWorldTxt()
    {
        return 'Hello world!';
    }
    public function getBodyTxt()
    {
        return 'My first Magento module.';
    }
}
