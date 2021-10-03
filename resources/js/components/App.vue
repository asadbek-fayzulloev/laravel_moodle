<template>
  <div id="app">
    <pie-chart :data="chartData" :options="{ hoverBorderWidth: 20 }"></pie-chart>
  </div>
</template>

<script>
import PieChart from "./PieChart.js";
export default {
  name: "App",
  components: {
    PieChart
  },
  data: function() {
    return {
      data: []
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
