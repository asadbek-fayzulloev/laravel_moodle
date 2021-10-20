<template>
  <div id="chart" class="pt-1">
    <pie-chart :chart-data="data" :options="{responsive: true, maintainAspectRatio: true}"></pie-chart>
  </div>
</template>

<script>
import PieChart from "./PieChart.js";
export default {
  components: {
    PieChart
  },
  data: function() {
    return {
      data: [],
    };
  },
  mounted() {
      this.update()
  },
  methods: {
    update: function () {
        axios.get('/data/chart').then((response) => {
            this.data = response.data
        });
    }
  }

};
</script>

<style>
#app {
  font-family: "Avenir", Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
