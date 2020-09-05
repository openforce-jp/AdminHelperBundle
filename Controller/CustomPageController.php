<?php

namespace Of\AdminHelperBundle\Controller;

use Of\AdminHelperBundle\Admin\CustomPageAdmin;
use Sonata\AdminBundle\Controller\CRUDController;

class CustomPageController extends CRUDController
{
    public function listAction()
    {
        $admin = $this->admin;
        if($admin instanceof CustomPageAdmin)
        {
            return $admin->doAction($this);
        }else{
            $classname = CustomPageAdmin::class;
            throw new \Exception("Admin class must inherit {$classname} class");
        }
        
    }
}
