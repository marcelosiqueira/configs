<?php
if($session->check('Message.flash')) $session->flash();
$session->flash('auth');
echo $form->create('User', array('action' => 'login'));    
echo $form->input( 'username', array(
			'div' => 'input',
			'size'=> 45,
			'label' => array( 'text' => 'Usuário ' ), 
			'class' => 'inputText' 
		)
); 
echo $form->input( 'password', array(
			'div' => 'input',
			'size'=> 32,
			'label' => array( 'text' => 'Senha ' ), 
			'class' => 'inputText' 
		)
);
echo $form->input('remember_me', array('type' => 'checkbox', 'label' => 'Continuar conectado?'));
//echo $form->end('Login', array( 'class'=>'black_button', 'title'=>'Login' ));
?>
<a href="#" class="black_button" onclick="javascript:document.forms['UserLoginForm'].submit();"><span>  Login  </span></a>
</form>