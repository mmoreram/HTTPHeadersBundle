<?php

/**
 * HttpHeadersBundle 2013
 * 
 * @author Marc Morera
 */

namespace Mmoreram\HttpHeadersBundle\EventListener;

use Symfony\Component\HttpKernel\Event\FilterResponseEvent;


/**
 * class Headers
 * 
 * This class allow Bundle to add custom headers defined on config file
 */
class Headers
{
    
    /**
     * @var array
     * 
     * responseHeaders
     */
    private $responseHeaders;


    /**
     * Constructor method
     * 
     * @param array $headers Headers defined on config
     */
    public function __construct(array $responseHeaders)
    {
        $this->responseHeaders = $responseHeaders;
    }


    /**
     * On kernel responses, inject all custom response headers
     * 
     * @param Symfony\Component\HttpKernel\Event\FilterResponseEvent $event Event object
     * 
     * @return Symfony\Component\HttpFoundation\Response given response
     */
    public function onKernelResponse(FilterResponseEvent $event)
    {
        $response = $event->getResponse();

        foreach ($this->responseHeaders as $headerName => $headerValues) {

            $headerValues = $headerValues['values'];

            if (!empty($headerValues)) {

                $key = array_rand($headerValues);
                $headerValue = $headerValues[$key];
                $response->headers->set($headerName, $headerValue);
            }
        }

        return $response;
    }
}