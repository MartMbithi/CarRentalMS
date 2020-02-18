<?php
include('inc/pdoconfig.php');
if(!empty($_POST["client_name"])) 
{	
    //get client Phone Number
    $id=$_POST['client_name'];
    $stmt = $DB_con->prepare("SELECT * FROM crms_clients WHERE c_name = :id");
    $stmt->execute(array(':id' => $id));
?>
<?php
    while($row=$stmt->fetch(PDO::FETCH_ASSOC))
{
?>
<?php echo htmlentities($row['c_phone']); ?>
<?php
}
}

//get client national id number
if(!empty($_POST["c_natidno"])) 
{	
    $id=$_POST['c_natidno'];
    $stmt = $DB_con->prepare("SELECT * FROM crms_clients WHERE c_name = :id");
    $stmt->execute(array(':id' => $id));
?>
<?php
    while($row=$stmt->fetch(PDO::FETCH_ASSOC))
{
?>
<?php echo htmlentities($row['c_natidno']); ?>
<?php
}
}

//get client id 
if(!empty($_POST["c_phoneno"])) 
{	
    $id=$_POST['c_phoneno'];
    $stmt = $DB_con->prepare("SELECT * FROM crms_clients WHERE c_name = :id");
    $stmt->execute(array(':id' => $id));
?>
<?php
    while($row=$stmt->fetch(PDO::FETCH_ASSOC))
{
?>
<?php echo htmlentities($row['c_id']); ?>
<?php
}
}

?>


