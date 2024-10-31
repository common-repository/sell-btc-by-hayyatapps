<table class="input-table-happs">
   <tr>
      <td>From</td>
      <td><?php echo $happs_from; ?></td>
   </tr>

   <tr>
      <td>To</td>
      <td><?php echo $happs_to; ?></td>
   </tr>

   <tr>
      <td>Enter Amount</td>
      <td><input type="text" class="khyzer hayyatapps-currency" name="hayyatapps-amount" id="hayyatapps-amount" placeholder="Enter (USD)" value="USD 100"></td>
   </tr>

   <tr>
      <td></td>
      <td><span id="msg-min-amount"></span></td>
   </tr>

   <tr style="height: 40px;"><td colspan="2"></td></tr>

   <tr>
      <td colspan="2">
         <p id="happs-load-calc" style="text-align: center;"></p>
        <center> <button class="btn happs-buy-btn happs-convert-btn ini-calc-happs" type="button" onclick="happs_calc()">Convert <i class="fas fa-sync"></i></button> </center>
      </td>
   </tr>

   <tr style="height: 40px;"><td colspan="2"></td></tr>

   <tbody class="happs-buy-details">
   <tr>
      <td>Exchange Rate (<span id="exchange_symb_happs">USD/BTC</span>)</td>
      <td id="ex-rate-happs" class="bold-happs">-</td>
   </tr>

   <tr>
      <td>Fee</td>
      <td id="fee-happs" class="bold-happs">-</td>
   </tr>

   <tr style="margin-top: 1px solid grey;">
      <td>You will get</td>
      <td id="get-happs" class="bold-happs">-</td>
   </tr>
</tbody>


   <tr style="height: 30px;"><td colspan="2"></td></tr>
   <tr style="margin-top: 1px solid grey;">
      <td colspan="2">
        <center> 
         <button class="btn happs-buy-btn take-order-btn-happs" type="button">Buy <span id="buy-happs"></span> 
            <i class="fas fa-angle-double-right"></i></button> 
      </center>
      </td>
   </tr>

   
</table>

<style type="text/css">
   table.input-table-happs tr:nth-child(even),table.input-table-happs tr:nth-child(odd) {
    background: white;
}


table.order-form-happs tr:nth-child(even),table.order-form-happs tr:nth-child(odd) {
    background: white;
}
</style>