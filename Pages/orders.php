<div class="shadow font" style="margin-top: 20px;margin-right: 10px;position: relative;">

<h2>All Orders <i class="fas fa-question-circle" title="Here is list of all the orders placed"></i></h2>
<table style="width: 100%;text-align: center;" class="order-list-down-happs">

<thead>
<tr>
<td>First Name</td>
<td>Last Name</td>
<td>Email</td>
<td>Phone</td>

<td>From</td>
<td>To</td>
<td>Exchange Rate</td>
<td>Fee Charged</td>
<td>Client Will Get</td>

<td>View All Details</td> 
</tr>
</thead>
<tbody>
    <?php 
$data_all = AP_BTC_GET_ORDERS();

for($i=0;$i<sizeof($data_all);$i++){
    $data = $data_all[$i];
echo '
<tr>
<td>'.$data["happs-FirstName"].'</td>
<td>'. $data["happs-LastName"].'</td>
<td>'. $data["happs-Email"].'</td>
<td>'. $data["happs-Phone"].'</td>
<td>'.$data["hidden-calc-from"]." ".$data["hidden-calc-amount"].' </td>
<td>'.$data["hidden-calc-to"].'</td>
<td>'.$data["hidden-calc-rate"].'</td>
<td>'. $data["hidden-calc-fee"].'</td>
<td>'. $data["hidden-calc-getamount"].'</td>

<td><span data-happs-view-id="'.$i.'">View<span></td> 
</tr>

 
 


<tr style="text-align:left;background-color: #00bcd412;display:none;" happs-detail-id="'.$i.'">
<td colspan="10">
<p><b>Address Line 1:</b> '.$data["happs-AddressLine1"].'</p>
<p><b>Address Line 2:</b> '.$data["happs-AddressLine2"].'</p>
<p><b>City:</b> '.$data["happs-City"].'</p>
<p><b>State:</b> '.$data["happs-State"].'</p>
<p><b>Country:</b> '.$data["happs-Country"].'</p>
<p><b>Custom Message:</b> '.$data["happs-CustomMessage"].'</p>
<p><b>Untitled Input 1:</b> '.$data["happs-UntitledInput1"].'</p>
<p><b>Untitled Input 2:</b> '.$data["happs-UntitledInput2"].'</p>
</td>
</tr>

';
}

    ?>

</tbody>
</table>

</div>



