//Source of the charts: https://www.material-tailwind.com/docs/html/plugins/charts

//Pie chart
const pieChartConfig = {
  series: [30, 30, 13],
  labels: ["Bottoms", "Hoods", "Tees"],
  chart: {
    type: "pie",
    width: 280,
    height: 280,
    toolbar: {
      show: false,
    },
  },
  title: {
    show: "",
  },
  dataLabels: {
    enabled: true,
    formatter: function (val, opts) {
      return opts.w.globals.labels[opts.seriesIndex];
    },
  },
  colors: ["#6991E5", "#EABAC2", "#FEEBBB"],
  legend: {
    show: false,
  },
};

//Create pie chart and render
const chartPie = new ApexCharts(document.querySelector("#pie-chart"), pieChartConfig);
chartPie.render();

// Line chart
const chartConfig = {
  series: [
    {
      name: "Sales",
      data: [50, 40, 300, 320, 500, 350, 200],
    },
  ],
  chart: {
    type: "line",
    height: 240,
    toolbar: {
      show: false,
    },
  },
  title: {
    show: "",
  },
  dataLabels: {
    enabled: false,
  },
  colors: ["#6991E5"],
  stroke: {
    lineCap: "round",
    curve: "smooth",
  },
  markers: {
    size: 0,
  },
  xaxis: {
    axisTicks: {
      show: false,
    },
    axisBorder: {
      show: false,
    },
    labels: {
      style: {
        colors: "#616161",
        fontSize: "12px",
        fontFamily: "inherit",
        fontWeight: 400,
      },
    },
    categories: [
      "Mon",
      "Tue",
      "Wed",
      "Thu",
      "Fri",
      "Sat",
      "Sun",
    ],
  },
  yaxis: {
    labels: {
      style: {
        colors: "#616161",
        fontSize: "12px",
        fontFamily: "inherit",
        fontWeight: 400,
      },
    },
  },
  grid: {
    show: true,
    borderColor: "#dddddd",
    strokeDashArray: 5,
    xaxis: {
      lines: {
        show: true,
      },
    },
    padding: {
      top: 5,
      right: 20,
    },
  },
  fill: {
    opacity: 0.8,
  },
  tooltip: {
    theme: "dark",
  },
};

//Create line chart and render
const chartLine = new ApexCharts(document.querySelector("#line-chart"), chartConfig);
chartLine.render();
