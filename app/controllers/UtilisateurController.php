<?php 

class UtilisateurController extends BaseController {
  
  public function index() : void{
    $utilisateur = new utilisateur($this->db);
    $user = $utilisateur->find();
    $this->f3->set('user', $user);
    echo Template::instance()->render('user/utilisateur.html');
  }
}