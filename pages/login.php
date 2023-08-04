<?php if( ! defined( 'ACCESS' ) ) die( 'DIRECT ACCESS NOT ALLOWED' ); ?>
<?= checkLoggedIn(); ?>
<?= element( 'header' ) ?>
<?= element( 'login_form' ) ?>
<?= element( 'footer' ) ?>
        