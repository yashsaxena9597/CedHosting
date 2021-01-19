<?php $details=$_POST['details'] ;
echo "<pre>";
print_r($details);
echo "</pre>";
if($details['status']=='COMPLETED')
{
    echo $details['id'];
}
// echo $details['status'];
?>