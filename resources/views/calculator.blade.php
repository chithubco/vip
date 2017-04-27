<div>
  <div class="row">
    <div class="col-md-5">
      <label>Preferred Investment Type </label>
      <select class="form-control" id="investment_type" onchange="calculate()">
        <option value="">---</option>
        <option value="roi">ROI Interest</option>
        <option value="roip">ROI Profit Share</option>
      </select>
    </div>
    <div class="col-md-5">
      <label> Number Of Hectares </label>
      <input type="text" id="no_of_hectares" placeholder="Number of Hectares" class="form-control" oninput="calculate()">
    </div>
    <div class="col-md-2 col-xs-4 col-xs-offset-4" style="margin-top:2.5%">
      <button id="calculate" href="#" class="btn btn-dark btn-theme-colored btn-flat font-16 mt-0 btn pull-right" onclick="calculate()">Calculate</button>
  </div>
  </div>

  <h5 style="padding:10px"> Profit Per hectare : <span id="profit_per_ha"> 0</span></h5>
  <h5 style="padding:10px"> Total Annual Profit : <span id="total_annual_profit">0</span></h5>
  <h5 style="padding:10px"> Total Annual Return : <span id="total_annual_return">0</span></h5>

</div>
<script>
  var button = document.getElementById('calculate');
  function calculate() {
    var option = document.getElementById('investment_type');
    var hectares = document.getElementById('no_of_hectares');
    var total_investment_amount = 3000000 * hectares.value;
    if (option.value == 'roi'){
      // var profit_per_ha = 0;
      // var total_annual_profit =0;
      // var total_annual_return = 0;
          if(hectares.value<=10){
            var profit_per_ha = 0.3 * 3000000;
            var total_annual_profit = hectares.value * profit_per_ha;
            var total_annual_return = total_annual_profit + total_investment_amount;
            console.log(total_annual_return);
          }else if((hectares.value<=100) && (hectares.value>10)){
            var profit_per_ha = 0.35* 3000000;
            var total_annual_profit = hectares.value * profit_per_ha;
            var total_annual_return = total_annual_profit + total_investment_amount;
          }else if((hectares.value<=1000) && (hectares.value>100)){
            var profit_per_ha = 0.40 * 3000000;
            var total_annual_profit = hectares.value * profit_per_ha;
            var total_annual_return = total_annual_profit + total_investment_amount;
          }


    }
    else if(option.value =='roip')
    {
      if(hectares.value<=10){
        var profit_per_ha = 0.4 * 3000000;
        var total_annual_profit = hectares.value * profit_per_ha;
        var total_annual_return = total_annual_profit + total_investment_amount;
      }else if((hectares.value<=100) && (hectares.value>10)){
        var profit_per_ha = 0.45* 3000000;
        var total_annual_profit = hectares.value * profit_per_ha;
        var total_annual_return = total_annual_profit + total_investment_amount;
      }else if((hectares.value<=1000) && (hectares.value>100)){
        var profit_per_ha = 0.50 * 3000000;
        var total_annual_profit = hectares.value * profit_per_ha;
        var total_annual_return = total_annual_profit + total_investment_amount;
      }

    }
    document.getElementById("profit_per_ha").innerHTML = profit_per_ha;
    document.getElementById("total_annual_profit").innerHTML = total_annual_profit;
    document.getElementById("total_annual_return").innerHTML = total_annual_return;
  }
</script>
