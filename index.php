<?php
include("csml.php");
t('div#container');
	t('div#content');
		t('div#header');
			en('This is the header',array('h1.page-title','a.link[href="http://duperrific.com" rel="friend"]'),'',INLINE);
		t('/div');
		t('ul#main.navigation');
			en('Home',array('li','a[href="/home"]'));
			en('About',array('li','a[href="/about"]'));
			en('Login',array('li','a[href="/login"]'));
			en('Signup',array('li','a[href="/signup"]'));
		t('/');
	t('/div#content');
t('/div#container');
?>