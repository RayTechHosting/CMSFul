<?php

/**
 * RayTech Content Management System
 * @author Kevin Roy <royk@myraytech.net>
 * @link <https://myraytech.net>
 * @copyright (c) 2017, RayTech Hosting
 * @license MIT
 */
namespace CMS\EventListener;

use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
/**
 * LocaleListener
 */
class LocaleListener implements EventSubscriberInterface
{
	private $defaultLocale;

    public function __construct($defaultLocale = 'en')
    {
        $this->defaultLocale = $defaultLocale;
    }

    public function onKernelRequest(GetResponseEvent $event)
    {
        $request = $event->getRequest();
        if (!$request->hasPreviousSession()) {
            return;
        }
        
        // try to see if the locale has been set as a _locale routing parameter
        if ($locale = $request->attributes->get('_locale')) {
												$request->getSession()->set('_locale', $locale);
												
            //$request->setLocale($locale);
        } else {
            //$user = $request->getUser();
            
            // if no explicit locale has been set on this request, use one from the session
            $request->setLocale($request->getSession()->get('_locale', $this->defaultLocale));
        }
    }
	public static function getSubscribedEvents()
	{
		 return [
            // must be registered after the default Locale listener
            KernelEvents::REQUEST => [['onKernelRequest', 15]],
        ];
	}
}