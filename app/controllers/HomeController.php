<?php 

class HomeController extends BaseController {
  
  public function index() {
    echo Template::instance()->render('home/home.html');
  }
  
}