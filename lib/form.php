<form id="happs-order-form-111" onsubmit="submit_order_happs();return false;">
<table class="order-form-happs" style="border:0px solid red">

<tr>
      <td><span class="form-label-happs">First Name</span><br><input type="text" class="khyzer happs-orderform" name="happs-FirstName" id="happs-FirstName" placeholder="Enter" value="" required></td>
      <td><span class="form-label-happs">Last Name</span><br><input type="text" class="khyzer happs-orderform" name="happs-LastName" id="happs-FirstName" placeholder="Enter" value="" required></td>
</tr>

<tr>
      <td><span class="form-label-happs">Email</span><br><input type="text" class="khyzer happs-orderform" name="happs-Email" id="happs-Email" placeholder="Enter" value="" required></td>
      <td><span class="form-label-happs">Phone</span><br><input type="text" class="khyzer happs-orderform" name="happs-Phone" id="happs-Email" placeholder="Enter" value="" required></td>
</tr>

<tr>
      <td><span class="form-label-happs">Address Line 1</span><br><input type="text" class="khyzer happs-orderform" name="happs-AddressLine1" id="happs-AddressLine1" placeholder="Enter" value=""></td>
      <td><span class="form-label-happs">Address Line 2</span><br><input type="text" class="khyzer happs-orderform" name="happs-AddressLine2" id="happs-AddressLine1" placeholder="Enter" value=""></td>
</tr>

<tr>
      <td><span class="form-label-happs">City</span><br><input type="text" class="khyzer happs-orderform" name="happs-City" id="happs-City" placeholder="Enter" value=""></td>
      <td><span class="form-label-happs">State</span><br><input type="text" class="khyzer happs-orderform" name="happs-State" id="happs-City" placeholder="Enter" value=""></td>
</tr>

<tr>
      <td><span class="form-label-happs">Country</span><br><input type="text" class="khyzer happs-orderform" name="happs-Country" id="happs-Country" placeholder="Enter" value=""></td>
      <td><span class="form-label-happs">Custom Message</span><br><input type="text" class="khyzer happs-orderform" name="happs-CustomMessage" id="happs-Country" placeholder="Enter" value=""></td>
</tr>

<tr class="happs-hidden-divs">
      <td><span class="form-label-happs">Untitled Input 1</span><br><input type="text" class="khyzer happs-orderform" name="happs-UntitledInput1" id="happs-UntitledInput1" placeholder="Enter" value=""></td>
      <td><span class="form-label-happs">Untitled Input 2</span><br><input type="text" class="khyzer happs-orderform" name="happs-UntitledInput2" id="happs-UntitledInput1" placeholder="Enter" value=""></td>
</tr>
   

</table>

<center> 
   <input type="hidden" name="hidden-calc-from" value="-">
   <input type="hidden" name="hidden-calc-to" value="-">
   <input type="hidden" name="hidden-calc-amount" value="-">

   <input type="hidden" name="hidden-calc-rate" value="-">
   <input type="hidden" name="hidden-calc-fee" value="-">
   <input type="hidden" name="hidden-calc-getamount" value="-">

   <button class="btn happs-buy-btn happs-convert-btn" id="submit-order-btn-happs" type="submit">Submit Order <i class="fas fa-sync"></i></button> 
   <p id="submit-msg-happs"></p>

   <div id="happs-submitting-msg" class="happs-hidden-divs">Submitting...</div>
   <div id="happs-thank-you-msg" class="happs-hidden-divs">We have received your order. Thank you!</div>
   <div id="happs-thank-url" class="happs-hidden-divs"></div>

</center>
</form>



<style type="text/css">
.happs-hidden-divs{display: none;}

   .form-label-happs {
    color: #8d8989;
}

input.happs-orderform[type="text"] {
    padding: 5px 16px;
    width: 200px;
}
</style>