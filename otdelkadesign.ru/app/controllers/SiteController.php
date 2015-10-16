<?php

namespace app\controllers;

use yii\web\Controller;
use yii\easyii\modules\page\api\Page;

class SiteController extends Controller
{
	public $page; 
	
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex($slug = 1)
    {
		if(empty($slug)) $slug = 1;
		$page = Page::get($slug);
		$this->page = $page;
		
		if($page->empty)
		{
			return $this->render('error', array('message'=>"404 Cтраница не найдена",'name'=>'404'));
		}
		
		if($slug == 1)
			return $this->render('index', array('page'=>$page));
		else
			return $this->render('page', array('page'=>$page));
    }
	
	public function actionSubmitform()
	{
		//$this->layout = "mail";
		
		$name = \Yii::$app->request->post('name');
		$phone = \Yii::$app->request->post('phone');
	
		
		if(!empty($name) and !empty($phone))
		{
			\Yii::$app->mailer->compose('mail',['name'=>$name,'phone'=>$phone,'req'=>\Yii::$app->request->pathInfo])
			->setFrom('POST@OTDELKADESIGN.RU')
			->setTo('post@otdelkadesign.ru')
			->setSubject('Заявка с сайта otdelkadesign.ru')
			->send();
			$page =(object) ['title' => 'Ваша заявка успешно отправлена', 'text'=>'В ближайшее время мы с вами свяжемся', 'slug'=>'none'];
			
			$this->page = $page;
			
			return $this->render('page', array('page'=>$page));
		}
		
			$this->page = (object) [ 'slug'=>'none'];
			return $this->render('error', array('message'=>"Вы не ввели все поля",'name'=>'Ошибка'));	
		
	}
}