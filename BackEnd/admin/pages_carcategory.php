<?php
include('inc/pdoconfig.php');
if(!empty($_POST["car_type"])) 
{	
    //get room type
    $id=$_POST['car_type'];
    $stmt = $DB_con->prepare("SELECT * FROM crms_car_categories WHERE car_cat_name = :id");
    $stmt->execute(array(':id' => $id));
?>
<?php
    while($row=$stmt->fetch(PDO::FETCH_ASSOC))
{
?>
<?php echo htmlentities($row['car_cat_id']); ?>
<?php
}
}

?>


