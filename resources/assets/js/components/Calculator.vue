<template>
<div>
  <div class="row">
    <div class="col-md-4">
      <label> Number Of Hectares </label>
      <input type="text" id="no_of_hectares" placeholder="Number of Hectares" class="form-control">
    </div>
    <div class="col-md-4">
      <label>Preferred Investment Type </label>
      <select class="form-control" id="investment_type">
        <option value="">---</option>
        <option value="roi">ROI Interest</option>
        <option value="roip">ROI Profit Share</option>
      </select>
    </div>
    <div class="col-md-4">
      <label>Estimated Annual Profit </label>
      <input type="text" id="no_of_hectares" placeholder="Estimated Annual Profit" class="form-control">
    </div>
    <div class="row">
      <button id="calculate" href="#" class="btn btn-dark btn-theme-colored btn-flat font-16 mt-0" onclick="calculate()">Calculate</button>
    </div>
  </div>

</div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
