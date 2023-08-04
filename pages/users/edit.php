<?php if( ! defined( 'ACCESS' ) ) die( 'DIRECT ACCESS NOT ALLOWED' ); ?>

<?= element( 'header' ); ?>

<?php
    $token = $_GET['token'];
    $data = viewUserEdit($token);
?>

<?php echo $data->fname ?>

<script>
    setTimeout(function() {
        $('#alert').delay(2500).fadeOut(5000);
    },);
</script>

<?= element( 'footer' ); ?>