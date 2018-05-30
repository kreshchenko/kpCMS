<?php

namespace App\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints as Assert;

use App\Model\NewsMapper;
use App\Model\NewsEntity;

class Front
{
    public function getIndex(Request $request, Application $app)
    {
       

        $logged = $request->getSession()->get('logged');

        $app['view.name'] = 'index';
        return $app['view']->data(['items' => $items, 'logged' => $logged])->render();
        // return include '../templates/index.tpl.php';
    }

    public function getInfo(Request $request, Application $app)
    {
        
        $mapper = new NewsMapper($app['db']);
        $items = $mapper->getNews();

        $app['view.name'] = 'info';
        return $app['view']->data(['items' => $items])->render();
    }

    public function getNews(Request $request, Application $app, $id)
    {
        $mapper = new NewsMapper($app['db']);
        $items = $mapper->getOneNews($id);


        $app['view.name'] = 'news';
        return $app['view']->data(['items' => $items])->render();
    }

    public function getHistory(Request $request, Application $app){
        $app['view.name'] = 'history';
        return $app['view']->render();
        
    }

    public function getLeadership(Request $request, Application $app){
        $app['view.name'] = 'leadership';
        return $app['view']->render();
    }

    public function getPoslugi(Request $request, Application $app){
        $app['view.name'] = 'poslugi';
        return $app['view']->render();
    }

    public function getIntegral(Request $request, Application $app){
        $app['view.name'] = 'integral';
        return $app['view']->render();
    }

    public function getContacts(Request $request, Application $app){
        $app['view.name'] = 'contacts';
        return $app['view']->render();
    }

    public function getSkVinnytsia(Request $request, Application $app){
        $app['view.name'] = 'skvinnytsia';
        return $app['view']->render();
    }    

    public function getTemp(Request $request, Application $app){
        $app['view.name'] = 'temp';
        return $app['view']->render();
    }

    public function getCms(Request $request, Application $app){
        $app['view.name'] = 'cms';
        return $app['view']->render();
    }
    
    public function getLogin(Request $request, Application $app)
    {
        $app['view.name'] = 'login';
        return $app['view']->render();
    }

    public function postLogin(Request $request, Application $app)
    {
        $login = $request->request->get('name');
        $pass = $request->request->get('pass');

        //Валидация
        $data = [
            'login' => $login,
            'password' => $pass,
            ];

        $constraint = new Assert\Collection(array(
            'login' => new Assert\Length(array('min' => 4)),
            'password' => array (new Assert\NotBlank(), new Assert\Length(array('max' => 10))),
        ));

        $errors = $app['validator']->validate($data,$constraint);

        if (count($errors) > 0) {
            $str = null;
            foreach ($errors as $error){
            $str .= $error->getPropertyPath().' '.$error->getMessage()."\n";
            }
            $app->abort(403, $str);
        } else {
            $session = $request->getSession();
            if ($login == 'niva' && $pass == 'niva1958'){
                $session->set('logged', true);
                return $app->redirect('/cabinet');
            }
            return $app->redirect('/login');
        }
      }



    public function getLogout(Request $request, Application $app)
    {
        $session = $request->getSession();
        $session->clear();
        $session->invalidate();

        return $app->redirect('/');
    }
}
