<style type="text/css">
   .hayyat-apps-video {
    position: absolute;
    right: 1%;
    top: 60%;
    height: 344px;
    width: 600px;
}
</style>
<form method="post" action="" autocomplete="off" id="main-happs-sell-btc-settings">
<div class="shadow font" style="margin-top: 20px;margin-right: 10px;position: relative;" >

<iframe width="560" height="315" class="hayyat-apps-video" src="https://www.youtube.com/embed/fhUbUZpwJhI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

<?php echo file_get_contents("https://wppluginbox.com/wpbox-announcements/index.php"); ?>

<h1 id="update-add-msg">Settings (Pro Features) <a href="?page=ProHAPPS" style="color:red;">Go Pro</a></h1>

<table style="width: 800px;">
   <tr>
      <td>Number Format <i class="fas fa-question-circle" title="English / US format uses comma (,) as a thousand seperator while Europian format uses period (.) as thousand seperator. <br><br> <u>For Example:</u> 1000.32 in US format will display as 1,000.32 while in Europian format, it will display as 1.000,02"></i></td>
      <td><select type="text" class="khyzer" name="var[][haaps_no_format]" id="haaps_no_format" required>
         <option value="1">English / US  </option>
         <option value="-">Europian (EU)</option>
      </select></td>
   </tr>


</table>

<div style="height: 40px;"></div>
<h2>Add Fiat Currencies to Calculator <i class="fas fa-question-circle" title="Select fiat currencies, you want to add to the calculator"></i> <a href="?page=ProHAPPS" style="color:red;">Go Pro</a></h2>
  <table style="width: 900px;border-collapse: collapse;text-align: center;">
   
<!-- <tr style="height:40px;"><td colspan="6"></td></tr> -->
<tr style="display:none;">
      <td>Min Allowed Amount to enter  <i class="fas fa-question-circle" title="This is minimum amount, user can enter "></i></td>
      <td><input type="text" class="khyzer" name="var[][min-amount]" id="min-amount" value=""> </td>
      <td><button type="button" class="btn apply-happs">Apply to all</button></td>
      <td colspan="3"></td>
   </tr>


   <tr style="display:none;">
      <td>Min Exchange Fee  <i class="fas fa-question-circle" title="This is minimum amount, user can enter "></i></td>
      <td><input type="text" class="khyzer" name="var[][min-amount]" id="min-amount" value=""> </td>
      <td><button type="button" class="btn apply-happs">Apply to all</button></td>
      <td colspan="3"></td>
   </tr>

<tr style="height:40px;"><td colspan="6"></td></tr>

<tr style="border-bottom: 1px solid black;">
      <td>Short Name</td>
      <td>Currency Name</td>
      <td>Minimum Allowed <br>Amount to Enter</td>
      <td>Exchange Fee <i class="fas fa-question-circle" title="Enter margin either in % (i.e 3%) or as a fixed fee (i.e USD 2) "></i></td>
      <td>Min Exchange Fee</td>
      <td>Add</td>
   </tr>
 <?php include __DIR__.'/curr/fiat.php'; ?>
   </table>


<p style="color: red;">Want to add more currencies? <a href="#">Contact Us</a> and get modified plugin.</p>


   <div style="height: 40px;"></div>
<h2>Add Crypto Currencies to calculator <i class="fas fa-question-circle" title="Select crypto currencies, you want to add to the calculator"></i> <a href="?page=ProHAPPS">Go Pro</a></h2>
  <table style="width: 500px;border-collapse: collapse;text-align: center;">
   <tr style="border-bottom: 1px solid black;">
      <td>Short Name</td>
      <td>Currency Name</td>
      <td>Add</td>
   </tr>

 <?php include __DIR__.'/curr/crypto.php'; ?>


</table>

<p style="color: red;">Want to add more coins? <a href="#">Contact Us</a> and get modified plugin.</p>
</div>


<div class="shadow font" style="margin-top: 20px;margin-right: 10px;position: relative;" >
<div style="height: 40px;"></div>
<h2>Edit Calculator Labels <i class="fas fa-question-circle" title="Edit Labels : 'From', 'To' , 'Enter Amount' etc."></i> <a href="?page=ProHAPPS" style="color:red;">Go Pro</a></h2>
  <table style="width: 900px;border-collapse: collapse;text-align: center;">

<tr style="height:20px;"><td colspan="4"></td></tr>
  <tr style="border-bottom: 1px solid black;">
      <td>Original Label</td>
      <td>New Label</td>
      <td>Hidden</td>
   </tr>

<tr>
      <td>From</td>
      <td><input type="text" name="var[][CALC_LABEL_From]" id="CALC_LABEL_From" value="From"></td>
      <td></td>
</tr>

<tr>
      <td>To</td>
      <td><input type="text" name="var[][CALC_LABEL_To]" id="CALC_LABEL_To" value="To"></td>
      <td></td>
</tr>

<tr>
      <td>Enter Amount</td>
      <td><input type="text" name="var[][CALC_LABEL_Amount]" id="CALC_LABEL_Amount" value="Enter Amount"></td>
      <td></td>
</tr>


<tr>
      <td>Input Placeholder</td>
      <td><input type="text" name="var[][CALC_LABEL_placeholder]" id="CALC_LABEL_placeholder" value="Enter"></td>
      <td></td>
</tr>

<tr style="height:40px;"><td colspan="3"></td></tr>

<tr>
      <td>Exchange Rate </td>
      <td><input type="text" name="var[][CALC_LABEL_exchange]" id="CALC_LABEL_exchange" value="Exchange Rate "></td>
      <td><select name="var[][HID-CALC_LABEL_exchange]" id="HID-CALC_LABEL_exchange"><option value="0">No</option><option value="1">Yes</option></select></td>
</tr>

<tr>
      <td>Fee </td>
      <td><input type="text" name="var[][CALC_LABEL_fee]" id="CALC_LABEL_fee" value="Fee "></td>
      <td><select name="var[][HID-CALC_LABEL_fee]" id="HID-CALC_LABEL_fee"><option value="0">No</option><option value="1">Yes</option></select></td>
</tr>

<tr>
      <td>You will get </td>
      <td><input type="text" name="var[][CALC_LABEL_will_get]" id="CALC_LABEL_will_get" value="You will get "></td>
      <td><select name="var[][HID-CALC_LABEL_will_get]" id="HID-CALC_LABEL_will_get"><option value="0">No</option><option value="1">Yes</option></select></td>
</tr>

<tr>
      <td>Buy (Buy Button)</td>
      <td><input type="text" name="var[][CALC_LABEL_buy_btn]" id="CALC_LABEL_buy_btn" value="Buy"></td>
      <td><select name="var[][HID-CALC_LABEL_buy_btn]" id="HID-CALC_LABEL_buy_btn"><option value="0">No</option><option value="1">Yes</option></select></td>
</tr>

<tr>
      <td>Convert (Convert Button)</td>
      <td><input type="text" name="var[][CALC_LABEL_convert_btn]" id="CALC_LABEL_convert_btn" value="Convert"></td>
      <td><select name="var[][HID-CALC_LABEL_convert_btn]" id="HID-CALC_LABEL_convert_btn"><option value="0">No</option><option value="1">Yes</option></select></td>
</tr>

</table>



<div style="height: 40px;"></div>
<h2>Edit Order Form Labels <i class="fas fa-question-circle" title="Currencies, you want to add to the calculator"></i> <a href="?page=ProHAPPS" style="color:red;">Go Pro</a></h2>
  <table style="width: 900px;border-collapse: collapse;text-align: center;" id="order-form-labels-0002">

<tr style="height:20px;"><td colspan="4"></td></tr>
   <tr>
      <td>Show Order Form?</td>
      <td><select name="var[][HID-f_name]" id="HID-f_name"><option value="1">Yes</option><option value="0">No</option></select></td>
      <td colspan="2"></td>
   </tr>

<tr style="height:20px;"><td colspan="4"></td></tr>


<tr style="border-bottom: 1px solid black;">
      <td>Original Label</td>
      <td>New Label</td>
      <td>Hide Input </td>
      <td>Required Field? </td>
   </tr>

   

<tr>
      <td>First Name</td>
      <td><input type="text" name="var[][FirstName]" id="FirstName" value="First Name"></td>
      <td><select name="var[][HID-FirstName]" id="HID-FirstName"><option value="0">No</option><option value="1">Yes</option></select></td>
      <td><select name="var[][REQ-FirstName]" id="REQ-FirstName"><option value="1">Yes</option><option value="0">No</option></select></td>
   </tr>

<tr>
      <td>Last Name</td>
      <td><input type="text" name="var[][LastName]" id="LastName" value="Last Name"></td>
      <td><select name="var[][HID-LastName]" id="HID-LastName"><option value="0">No</option><option value="1">Yes</option></select></td>
      <td><select name="var[][REQ-LastName]" id="REQ-LastName"><option value="1">Yes</option><option value="0">No</option></select></td>
   </tr>

<tr>
      <td>Email</td>
      <td><input type="text" name="var[][Email]" id="Email" value="Email"></td>
      <td><select name="var[][HID-Email]" id="HID-Email"><option value="0">No</option><option value="1">Yes</option></select></td>
      <td><select name="var[][REQ-Email]" id="REQ-Email"><option value="1">Yes</option><option value="0">No</option></select></td>
   </tr>

<tr>
      <td>Phone</td>
      <td><input type="text" name="var[][Phone]" id="Phone" value="Phone"></td>
      <td><select name="var[][HID-Phone]" id="HID-Phone"><option value="0">No</option><option value="1">Yes</option></select></td>
      <td><select name="var[][REQ-Phone]" id="REQ-Phone"><option value="1">Yes</option><option value="0">No</option></select></td>
   </tr>

<tr>
      <td>Address Line 1</td>
      <td><input type="text" name="var[][AddressLine1]" id="AddressLine1" value="Address Line 1"></td>
      <td><select name="var[][HID-AddressLine1]" id="HID-AddressLine1"><option value="0">No</option><option value="1">Yes</option></select></td>
      <td><select name="var[][REQ-AddressLine1]" id="REQ-AddressLine1"><option value="0">No</option><option value="1">Yes</option></select></td>
   </tr>

<tr>
      <td>Address Line 2</td>
      <td><input type="text" name="var[][AddressLine2]" id="AddressLine2" value="Address Line 2"></td>
      <td><select name="var[][HID-AddressLine2]" id="HID-AddressLine2"><option value="0">No</option><option value="1">Yes</option></select></td>
      <td><select name="var[][REQ-AddressLine2]" id="REQ-AddressLine2"><option value="0">No</option><option value="1">Yes</option></select></td>
   </tr>

<tr>
      <td>City</td>
      <td><input type="text" name="var[][City]" id="City" value="City"></td>
      <td><select name="var[][HID-City]" id="HID-City"><option value="0">No</option><option value="1">Yes</option></select></td>
      <td><select name="var[][REQ-City]" id="REQ-City"><option value="0">No</option><option value="1">Yes</option></select></td>
   </tr>

<tr>
      <td>State</td>
      <td><input type="text" name="var[][State]" id="State" value="State"></td>
      <td><select name="var[][HID-State]" id="HID-State"><option value="0">No</option><option value="1">Yes</option></select></td>
      <td><select name="var[][REQ-State]" id="REQ-State"><option value="0">No</option><option value="1">Yes</option></select></td>
   </tr>

<tr>
      <td>Country</td>
      <td><input type="text" name="var[][Country]" id="Country" value="Country"></td>
      <td><select name="var[][HID-Country]" id="HID-Country"><option value="0">No</option><option value="1">Yes</option></select></td>
      <td><select name="var[][REQ-Country]" id="REQ-Country"><option value="0">No</option><option value="1">Yes</option></select></td>
   </tr>

<tr>
      <td>Custom Message</td>
      <td><input type="text" name="var[][CustomMessage]" id="CustomMessage" value="Custom Message"></td>
      <td><select name="var[][HID-CustomMessage]" id="HID-CustomMessage"><option value="0">No</option><option value="1">Yes</option></select></td>
      <td><select name="var[][REQ-CustomMessage]" id="REQ-CustomMessage"><option value="0">No</option><option value="1">Yes</option></select></td>
   </tr>


   <tr>
      <td>Untitled Input 1</td>
      <td><input type="text" name="var[][untitled-1]" id="untitled-1" value="untitled-1"></td>
      <td><select name="var[][HID-untitled-1]" id="HID-untitled-1"><option value="1">Yes</option><option value="0">No</option></select></td>
      <td><select name="var[][REQ-untitled-1]" id="REQ-untitled-1"><option value="0">No</option><option value="1">Yes</option></select></td>
   </tr>


   <tr>
      <td>Untitled Input 2</td>
      <td><input type="text" name="var[][untitled-2]" id="untitled-2" value="untitled-2"></td>
      <td><select name="var[][HID-untitled-2]" id="HID-untitled-2"><option value="1">Yes</option><option value="0">No</option></select></td>
      <td><select name="var[][REQ-untitled-2]" id="REQ-untitled-2"><option value="0">No</option><option value="1">Yes</option></select></td>
   </tr>


<tr style="height:20px;"><td colspan="4"></td></tr>


   <tr>
      <td>Confirm Order (Submit Button)</td>
      <td><input type="text" name="var[][order-btn]" id="order-btn" value="Confirm Order"></td>
      <td></td>
      <td></td>
   </tr>

<tr style="height:20px;"><td colspan="4"></td></tr>

   <tr>
      <td>Processing Order Message </td>
      <td><input type="text" name="var[][processing-msg]" id="processing-msg" value="Submitting..."></td>
      <td></td>
      <td></td>
   </tr>

   <tr>
      <td>Thank you Message </td>
      <td><input type="text" name="var[][thankyou-msg]" id="thankyou-msg" value="We have received your order. Thank you!"></td>
      <td></td>
      <td></td>
   </tr>

   <tr>
      <td>Thank you Page URL (optional) </td>
      <td><input type="text" name="var[][thankyou-url]" id="thankyou-url" value="" placeholder="https://ex.com/thank-you"></td>
      <td></td>
      <td></td>
   </tr>

   

</table>
</div>


<div class="shadow font" style="margin-top: 20px;margin-right: 10px;position: relative;" >

<h2>Order Notifications (Optional) <a href="?page=ProHAPPS" style="color:red;">Go Pro</a></h2>
  <table style="width: 500px;border-collapse: collapse;text-align: center;">

<tr>
<td>Send Order Notifications to </td>
<td><input type="text" name="var[][email-owner]" id="email-owner" value="" placeholder="you@example.com"></td>
</tr>

</table>
<p>* You will get order notification, once a new order is placed on your website.</p>

</div>

<div class="shadow font" style="margin-top: 20px;margin-right: 10px;position: relative;" id="main-HAYYAT-manage-sheet-page">

<h2>Send Order to Custom Page (Optional) <i class="fas fa-question-circle" title="You can pass order parameters to your custom url. The parameters will be sent by a GET request to the set url"></i> <a href="?page=ProHAPPS" style="color:red;">Go Pro</a></h2>
  <table style="width: 500px;border-collapse: collapse;text-align: center;">

<tr>
<td>SET CUSTOM URL</td>
<td><input type="text" name="var[][url]" id="url" value="" placeholder="https://yourweb.com/checkout"></td>
</tr>

</table>
<p>* If you set URL, user will be redirected to the set url once he clicks the buy button!</p>
<p>* Leave this field blank, if you don't want user to redirect and want to get order via order form </p>

<h2>Guide to parse <b>GET</b> Parameters <a href="?page=HAYYAT_developers">here</a> </h2>
</div>


<button type="button" name="update-settings" value="1" id="update-settings" class="kzr-btn kzr-green " style="margin-top: 20px;" onclick="alert('Unlock Full Power - Go Pro')"> Update Settings <i class="fas fa-sync"></i></button>

<!-- </div> -->
</form>





<style type="text/css">

   input.khyzer[type=text] {
    width: 60px;
    max-width: 84px;
    min-width: 114px;
}

.apply-happs, .apply-happs:hover {
    background-color: green;
    color: white;
    padding: 8px;
    border: 1px solid green;
    cursor: pointer;
    width: 193px;
    outline: none;
    font-size: 10px;
    margin-top: 12px;
}

 .tooltip{
    background-color:black;
    color: white;
    font-size: 11px;
    border: 1px solid black;
    font-family: Century Gothic;
    border-radius: 4px;
    text-align: left;
  }

  .ui-widget.ui-widget-content {
    border: 1px solid #000000;
    text-align: left;
}

.ui-widget-shadow {
     -webkit-box-shadow: 0px 0px 0px #666666; 
     box-shadow: 0px 0px 0px #666666; 
}
</style>

