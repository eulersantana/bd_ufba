<?php

Class userController Extends baseController {

public function index() 
{
      
        $this->registry->template->show('user');
}


public function view(){

	/*** should not have to call this here.... FIX ME ***/

	$this->registry->template->blog_heading = 'This is the blog heading';
	$this->registry->template->blog_content = 'This is the blog content';
	$this->registry->template->show('blog_view');
}

public function add()
{
	$user = new User;
	$query = "test";

	if (isset($_POST['login'])) {
		$user->setLogin($_POST['login']);
		$user->setSenha($_POST['senha']);

		$query  = $user->add();
		
		try {
		    //$dbh = new PDO('mysql:host=localhost;dbname=test', 'username', 'password');
		    $dbh = db::getInstance();

		    // $stmt = $dbh->prepare($query);

		    try {
		    	$dbh->exec($query);
		        $this->registry->template->mensagem = "Cadastrado com Sucesso!";
		    } catch(PDOExecption $e) {
		        $dbh->rollback();
		        print "Error!: " . $e->getMessage() . "</br>";
		    }
		} catch( PDOExecption $e ) {
		    print "Error!: " . $e->getMessage() . "</br>";
		} 
		
		$this->registry->template->show('user');

	}
	

}

}
?>