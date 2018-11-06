<?php

use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpKernel\Controller\ArgumentResolver;
use Symfony\Component\HttpKernel\Controller\ControllerResolver;
use Symfony\Component\HttpKernel\EventListener\RouterListener;
use Symfony\Component\HttpKernel\HttpKernel;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\RouteCollection;

/**
 * Facade for http-kernel subsystem
 */
class SymfonyOrchestrate
  {
  /**
   * @var RouteCollection
   */
  private $routes;
  
  /**
   * @var EventDispatcher
   */
  private $dispatcher;
  
  
  /**
   * @param RouteCollection $routes
   */
  function __construct(RouteCollection $routes)
    {
    $this->routes = $routes;
    
    $this->dispatcher = new EventDispatcher();
    }
  
  /**
   * @param EventSubscriberInterface $subscriber
   */
  public function addSubscriber(EventSubscriberInterface $subscriber)
    {
    $this->dispatcher->addSubscriber($subscriber);
    }
    
  function play()
    {
    $request = Request::createFromGlobals();

    $matcher = new UrlMatcher($this->routes, new RequestContext());
    
    $this->dispatcher->addSubscriber(new RouterListener($matcher, new RequestStack()));

    $controllerResolver = new ControllerResolver();
    $argumentResolver = new ArgumentResolver();

    $kernel = new HttpKernel($this->dispatcher, $controllerResolver, new RequestStack(), $argumentResolver);

    $response = $kernel->handle($request);
    $response->send();

    $kernel->terminate($request, $response);
    }
  }
