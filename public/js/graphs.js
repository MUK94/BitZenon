// Line Chart Setup
const lineChart = document.getElementById("myChart");
lineChart.height = 240;
const theBarChart = document.getElementById("barChart");
theBarChart.height = 230;

var barColors = "rgb(48, 86, 211)";
var hoverColor = "#0a1362";
var yVal = [3, 6, 7, 9, 8, 6, 12, 10, 13, 13, 10, 12];
var xValues = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
var yValues = [2, 5, 4, 9, 7, 8, 6, 16, 10, 9, 12, 14];

new Chart(lineChart, {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
		label: "",
      backgroundColor: "rgba(0, 0, 255, 0.2)",
      borderColor: "#261889",
      fill: true,
      data: yValues,
    }],
  },
  options: {
    maintainAspectRatio: false,
    legend: { display: false },
    title: {
      display: false,
    },
    scales: {
      x: {
        grid: {
          display: false,
        },
      },
      y: {
        grid: {
          display: false,
        },
      },
    },
  },
});

new Chart(theBarChart, {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
		label: "",
      backgroundColor: barColors,
		hoverBackgroundColor: hoverColor,
      data: yVal,
    }],
  },
  options: {
    maintainAspectRatio: false,
    legend: { display: false },
    title: {
      display: false,
    },
    scales: {
      x: {
        grid: {
          display: false,
        },
      },
      y: {
        grid: {
          display: false,
        },
      },
    },
  },
});
