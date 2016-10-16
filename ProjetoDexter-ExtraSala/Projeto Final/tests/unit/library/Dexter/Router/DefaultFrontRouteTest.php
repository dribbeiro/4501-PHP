<?php

namespace DexterTests\Router;

class DefaultFrontRouteTest extends \PHPUnit_Framework_TestCase
{
    public function testShouldGetSetView()
    {
        $defaultRoute = new \Dexter\Router\DefaultFrontRoute();
        $viewMock = $this->getMockBuilder('\\Dexter\\View\\View')
            ->disableOriginalConstructor()
            ->getMock();

        $this->assertSame($defaultRoute, $defaultRoute->setView($viewMock));
        $this->assertSame($viewMock, $defaultRoute->getView());
    }

    public function testShouldGetDefaultView()
    {
        $defaultRoute = new \Dexter\Router\DefaultFrontRoute();
        $this->assertInstanceOf(
            '\\Dexter\\View\\View',
            $defaultRoute->getView()
        );
    }

    public function testShouldExecuteRoute()
    {
        $defaultRoute = $this->getMockBuilder('\\Dexter\\Router\\DefaultFrontRoute')
            ->setMethods(array('create'))
            ->getMock();

        $reqMock = $this->getMockBuilder('\\Dexter\\Router\\Request')
            ->disableOriginalConstructor()
            ->getMock();
        $responseMock = $this->getMockBuilder('\\Dexter\\Router\\Response')
            ->disableOriginalConstructor()
            ->getMock();
        $viewMock = $this->getMockBuilder('\\Dexter\\View\\View')
            ->disableOriginalConstructor()
            ->getMock();
        $controllerMock = $this->getMockBuilder('\\DexterApp\\Front\\Controllers\\IndexController')
            ->disableOriginalConstructor()
            ->getMock();

        $reqMock->expects($this->once())
            ->method('getUri')
            ->will($this->returnValue('/index.html'));

        $defaultRoute->expects($this->once())
            ->method('create')
            ->with($this->equalTo('\\DexterApp\\Front\\Controllers\\IndexController'))
            ->will($this->returnValue($controllerMock));

        $controllerMock->expects($this->once())
            ->method('actionIndex')
            ->with($this->equalTo($reqMock), $this->equalTo($viewMock));

        $viewMock->expects($this->once())
            ->method('render');

        $defaultRoute->setView($viewMock);

        $defaultRoute->match($reqMock);
        $defaultRoute->run(array($reqMock, $responseMock));
    }
}
