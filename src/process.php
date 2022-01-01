<?php
    require_once('./config.php');
?>

<?php
    if(isset($_POST)){
        $regdate = $_POST['regdate'];
        $m_association = $_POST['m_association'];
        $association = $_POST['association'];
        $dri_name = $_POST['dri_name'];
        $regno = $_POST['regno'];
        $phone = $_POST['phone'];
        $r_address = $_POST['r_address'];
        $police = $_POST['police'];
        $town = $_POST['town'];
        $vehregno = $_POST['vehregno'];
        $starting = $_POST['starting'];
        $cities = $_POST['cities'];
        $schools = $_POST['schools'];
        $officername = $_POST['officername'];
        $user_id = $_POST['user_id'];

        $sql = "INSERT INTO drivers VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $stmtinsert = $db->prepare($sql);
        $result = $stmtinsert->execute([$regdate, $m_association, $association, $dri_name, $regno, $phone, $r_address, $police, $town, $vehregno, $starting, $cities, $schools, $officername,$user_id]);
        if($result){
            echo 'Successfully saved.';
        }else{
            echo 'There were errors while saving the data';
        }
    }else{
        echo 'No data';
    }
?>