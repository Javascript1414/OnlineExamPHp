<?php
include('Examination.php');

$exam= new Examination;

if(isset($_POST['page'])){
    if($_POST['page'] == 'register'){
        if($_POST['action'] == 'check_email'){
            $exam->query = "
            SELECT * FROM admin_table
            WHERE admin_email_address = '".trim($_POST["email"])."'
            ";

            $total_row = $exam->total_row();

            if($total_row == 0){
                $output = array('success' => true);
                echo json_encode($output);
            }
        }
    }
}



?>