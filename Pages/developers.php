<style type="text/css">
    .red-happs{color: red;font-weight: bold;font-family: monospace;}
    .variable-disc tbody tr td{padding: 8px;}
    .variable-disc tbody tr:nth-child(odd){background-color: #ededed;}

</style>
<div class="shadow font" style="margin-top: 20px;margin-right: 10px;position: relative;" id="main-HAYYAT-manage-sheet-page">
<h2>GET Request Parameters</h2>

<p>If you enable <b>Send Order to Custom Page</b> option in settings page, you can access the values from the calculator on your redirected page by extracting the get parameters. Here is list of parameters passed to the re-directed page:</p>


<div style="background-color: black;padding: 2px;color: white;text-align: center;">
<p>from=<span class="red-happs">FROM_CURRENCY</span>&to=<span class="red-happs">TO_CURRENCY</span>&amount=<span class="red-happs">AMOUNT</span>&rate=<span class="red-happs">EXCHANGE_RATE</span>&fee=<span class="red-happs">FEE</span>&get=<span class="red-happs">AMOUNT_CUSTOMER_WILL_GET</span></p></div>

<div style="height: 40px;"></div>
<table style="width: 100%;border-collapse: collapse;" class="variable-disc">
  <thead>
    <tr style="border-bottom: 1px solid black;">
        <td>Variable Name</td>
        <td>Discription</td>
    </tr>
</thead>
<tbody>
    <tr>
        <td>from</td>
        <td>'From' currency, selected by user (Example: USD) </td>
    </tr>

    <tr>
        <td>to</td>
        <td>'To' currency, selected by user(Example: BTC) </td>
    </tr>

    <tr>
        <td>amount</td>
        <td>Amount entered by user (Example: USD 100)</td>
    </tr>

    <tr>
        <td>rate</td>
        <td>Exchange Rate Applied - Excluding fees (Example: USD 3.00)</td>
    </tr>

    <tr>
        <td>fee</td>
        <td>Fee deducted from entered amount (Example: 0.00002608)</td>
    </tr>

    <tr>
        <td>get</td>
        <td>Amount user will get (Example: BTC 0.002530)</td>
    </tr>

</tbody>
</table>

</div>


