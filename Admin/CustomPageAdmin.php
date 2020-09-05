<?php
namespace Of\AdminHelperBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Controller\CRUDController;
use Sonata\AdminBundle\Route\RouteCollection;

abstract class CustomPageAdmin extends AbstractAdmin
{

    protected function configureRoutes(RouteCollection $collection)
    {
        $collection->clearExcept(['list']);
    }


    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    abstract public function doAction(CRUDController $controller);

}