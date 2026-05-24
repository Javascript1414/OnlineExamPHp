<?php
include('Examination.php');

$exam= new Examination;

if(isset($_POST['page'])){
    if($_POST['page'] == 'register'){
        if($_POST['action'] == 'check-email'){
            $exam->query = "SELECT * FROM admin_table WHERE admin_email_address = ?";
            $exam->data = array(trim($_POST["email"]));
            $total_row = $exam->total_row();

            if($total_row == 0){
                // Email does NOT exist - available for registration
                $output = array('success' => true);
            } else {
                // Email already exists
                $output = array('success' => false);
            }
            echo json_encode($output);
        }
    }
}



?>