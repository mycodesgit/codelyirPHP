<?php if( ! defined( 'ACCESS' ) ) die( 'DIRECT ACCESS NOT ALLOWED' ); 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    validate_csrf_token();

    // Add operation
    if (isset($_POST['btn-submit'])) {
        $fname = $_POST['fname'];
        $mname = $_POST['mname'];
        $lname = $_POST['lname'];
        $username = $_POST['username'];
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $emp_gender = $_POST['emp_gender'];
        $usertype = $_POST['usertype'];

        $sql_check = "SELECT COUNT(*) AS count FROM users WHERE username = ? OR password = ?";
        $stmt_check = $DB->prepare($sql_check);
        $stmt_check->bind_param("ss", $username, $password);
        $stmt_check->execute();
        $result_check = $stmt_check->get_result();
        $row_count = $result_check->fetch_assoc()['count'];

        if ($row_count > 0) {
            set_message("<i class='fa fa-times'></i> Username or Password Already Exists", 'danger');
        } else {
            
            $token = bin2hex(random_bytes(16));

            if (!empty($username) && !empty($password)) {

                $sql_insert = "INSERT INTO users SET fname=?, mname=?, lname=?, username=?, password=?, emp_gender=?, usertype=?, token=?";

                $stmt_insert = $DB->prepare($sql_insert);
                $stmt_insert->bind_param("ssssssss", $fname, $mname, $lname, $username, $password, $emp_gender, $usertype, $token);

                if($stmt_insert->execute()){
                    set_message("<i class='fa fa-check'></i> User Added Successfully",  'success');
                    header("Location: ../users/list");
                    exit();
                } else {
                    set_message("<i class='fa fa-times'></i> User Failed to Add" .$DB->error, 'danger');
                    header("Location: ../users/list");
                    exit();
                }
            }
            unset($_POST['btn-submit']);
        }
    }

    if (isset($_POST['btn-update'])) {
        $fname = $_POST['fname'];
        $mname = $_POST['mname'];
        $lname = $_POST['lname'];
        $username = $_POST['username'];
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $emp_gender = $_POST['emp_gender'];
        $usertype = $_POST['usertype'];
        $token = $_GET['token'];

        $sql_check = "SELECT COUNT(*) AS count FROM users WHERE (username = ?) AND token <> ?";
        $stmt_check = $DB->prepare($sql_check);
        $stmt_check->bind_param("ss", $username, $token);
        $stmt_check->execute();
        $result_check = $stmt_check->get_result();
        $row_count = $result_check->fetch_assoc()['count'];

        if ($row_count > 0) {
            set_message("<i class='fa fa-times'></i> Username Already Exists", 'danger');
        } else {

            if (!empty($username)) {

                $sql_update = "UPDATE users SET fname=?, mname=?, lname=?, username=?, password=?, emp_gender=?, usertype=? WHERE token=?";

                $stmt_update = $DB->prepare($sql_update);
                $stmt_update->bind_param("ssssssss", $fname, $mname, $lname, $username, $password, $emp_gender, $usertype, $token);

                if($stmt_update->execute()){
                    set_message("<i class='fa fa-check'></i> User Added Successfully",  'success');
                    header("Location: " . $_SERVER['REQUEST_URI']);
                    exit();
                } else {
                    set_message("<i class='fa fa-times'></i> User Failed to Add" .$DB->error, 'danger');
                    header("Location: " . $_SERVER['REQUEST_URI']);
                    exit();
                }
            }
            unset($_POST['btn-update']);
        }
    }
}
?>
