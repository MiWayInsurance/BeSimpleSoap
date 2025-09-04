<?php

namespace BeSimple\SoapBundle\EventListener;

use Symfony\Component\HttpKernel\Event\RequestEvent;

class RequestFormatListener
{
    public function onKernelRequest(RequestEvent $event)
    {
        $event->getRequest()->setFormat('wsdl', 'application/wsdl+xml');
        $event->getRequest()->setFormat('soap', 'application/soap+xml');
    }
}
