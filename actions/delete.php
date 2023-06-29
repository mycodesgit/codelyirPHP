<?php if( ! defined( 'ACCESS' ) ) die( 'DIRECT ACCESS NOT ALLOWED' ); ?>
<?php
	$id = $_GET[ 'id' ];
	$DB->query( "DELETE FROM tbl_users WHERE id = $id" );
	header( "Location: " . SITE_URL . "/?page=users" );

?>
<?php
	include '../init.php';

	$id = $_GET['id'];

	$sql = "DELETE FROM tbl_users WHERE id=?";
	$stmt = $DB->prepare($sql);
	$stmt->bind_param("s", $id);
	if ($stmt->execute()) {
	    //echo "deleted";
	} else {
	    //echo "error";
	}
?>

