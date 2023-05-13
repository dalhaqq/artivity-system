import _ from "lodash";
import axios from "axios";
import Alpine from "alpinejs";
import "flowbite";
import { Chart, LineController, LineElement, Filler, PointElement, LinearScale, TimeScale, Tooltip, BarController, BarElement, Legend, DoughnutController, ArcElement, CategoryScale } from "chart.js";
import flatpickr from "flatpickr";
import resolveConfig from "tailwindcss/resolveConfig.js";
import "chartjs-adapter-moment";
window._ = _;
window.axios = axios;
window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";
const tailwindConfig = () => {
  return resolveConfig("./tailwind.config.js");
};
const hexToRGB = (h) => {
  let r = 0;
  let g = 0;
  let b = 0;
  if (h.length === 4) {
    r = `0x${h[1]}${h[1]}`;
    g = `0x${h[2]}${h[2]}`;
    b = `0x${h[3]}${h[3]}`;
  } else if (h.length === 7) {
    r = `0x${h[1]}${h[2]}`;
    g = `0x${h[3]}${h[4]}`;
    b = `0x${h[5]}${h[6]}`;
  }
  return `${+r},${+g},${+b}`;
};
const formatValue = (value) => Intl.NumberFormat("en-US", {
  style: "currency",
  currency: "USD",
  maximumSignificantDigits: 3,
  notation: "compact"
}).format(value);
Chart.register(LineController, LineElement, Filler, PointElement, LinearScale, TimeScale, Tooltip);
const dashboardCard01 = () => {
  const ctx = document.getElementById("dashboard-card-01");
  if (!ctx)
    return;
  fetch("/json-data-feed?datatype=1").then((a) => {
    return a.json();
  }).then((result) => {
    const dataset1 = result.data.slice(0, 26);
    const dataset2 = result.data.slice(26, 52);
    new Chart(ctx, {
      type: "line",
      data: {
        labels: result.labels,
        datasets: [
          {
            data: dataset1,
            fill: true,
            backgroundColor: `rgba(${hexToRGB(tailwindConfig().theme.colors.blue[500])}, 0.08)`,
            borderColor: tailwindConfig().theme.colors.indigo[500],
            borderWidth: 2,
            tension: 0,
            pointRadius: 0,
            pointHoverRadius: 3,
            pointBackgroundColor: tailwindConfig().theme.colors.indigo[500],
            clip: 20
          },
          {
            data: dataset2,
            borderColor: tailwindConfig().theme.colors.slate[300],
            borderWidth: 2,
            tension: 0,
            pointRadius: 0,
            pointHoverRadius: 3,
            pointBackgroundColor: tailwindConfig().theme.colors.slate[300],
            clip: 20
          }
        ]
      },
      options: {
        chartArea: {
          backgroundColor: tailwindConfig().theme.colors.slate[50]
        },
        layout: {
          padding: 20
        },
        scales: {
          y: {
            display: false,
            beginAtZero: true
          },
          x: {
            type: "time",
            time: {
              parser: "MM-DD-YYYY",
              unit: "month"
            },
            display: false
          }
        },
        plugins: {
          tooltip: {
            callbacks: {
              title: () => false,
              label: (context) => formatValue(context.parsed.y)
            }
          },
          legend: {
            display: false
          }
        },
        interaction: {
          intersect: false,
          mode: "nearest"
        },
        maintainAspectRatio: false
      }
    });
  });
};
Chart.register(LineController, LineElement, Filler, PointElement, LinearScale, TimeScale, Tooltip);
const dashboardCard02 = () => {
  const ctx = document.getElementById("dashboard-card-02");
  if (!ctx)
    return;
  fetch("/json-data-feed?datatype=2").then((a) => {
    return a.json();
  }).then((result) => {
    const dataset1 = result.data.slice(0, 26);
    const dataset2 = result.data.slice(26, 52);
    new Chart(ctx, {
      type: "line",
      data: {
        labels: result.labels,
        datasets: [
          {
            data: dataset1,
            fill: true,
            backgroundColor: `rgba(${hexToRGB(tailwindConfig().theme.colors.blue[500])}, 0.08)`,
            borderColor: tailwindConfig().theme.colors.indigo[500],
            borderWidth: 2,
            tension: 0,
            pointRadius: 0,
            pointHoverRadius: 3,
            pointBackgroundColor: tailwindConfig().theme.colors.indigo[500],
            clip: 20
          },
          {
            data: dataset2,
            borderColor: tailwindConfig().theme.colors.slate[300],
            borderWidth: 2,
            tension: 0,
            pointRadius: 0,
            pointHoverRadius: 3,
            pointBackgroundColor: tailwindConfig().theme.colors.slate[300],
            clip: 20
          }
        ]
      },
      options: {
        chartArea: {
          backgroundColor: tailwindConfig().theme.colors.slate[50]
        },
        layout: {
          padding: 20
        },
        scales: {
          y: {
            display: false,
            beginAtZero: true
          },
          x: {
            type: "time",
            time: {
              parser: "MM-DD-YYYY",
              unit: "month"
            },
            display: false
          }
        },
        plugins: {
          tooltip: {
            callbacks: {
              title: () => false,
              label: (context) => formatValue(context.parsed.y)
            }
          },
          legend: {
            display: false
          }
        },
        interaction: {
          intersect: false,
          mode: "nearest"
        },
        maintainAspectRatio: false
      }
    });
  });
};
Chart.register(LineController, LineElement, Filler, PointElement, LinearScale, TimeScale, Tooltip);
const dashboardCard03 = () => {
  const ctx = document.getElementById("dashboard-card-03");
  if (!ctx)
    return;
  fetch("/json-data-feed?datatype=3").then((a) => {
    return a.json();
  }).then((result) => {
    const dataset1 = result.data.slice(0, 26);
    const dataset2 = result.data.slice(26, 52);
    new Chart(ctx, {
      type: "line",
      data: {
        labels: result.labels,
        datasets: [
          {
            data: dataset1,
            fill: true,
            backgroundColor: `rgba(${hexToRGB(tailwindConfig().theme.colors.blue[500])}, 0.08)`,
            borderColor: tailwindConfig().theme.colors.indigo[500],
            borderWidth: 2,
            tension: 0,
            pointRadius: 0,
            pointHoverRadius: 3,
            pointBackgroundColor: tailwindConfig().theme.colors.indigo[500],
            clip: 20
          },
          {
            data: dataset2,
            borderColor: tailwindConfig().theme.colors.slate[300],
            borderWidth: 2,
            tension: 0,
            pointRadius: 0,
            pointHoverRadius: 3,
            pointBackgroundColor: tailwindConfig().theme.colors.slate[300],
            clip: 20
          }
        ]
      },
      options: {
        chartArea: {
          backgroundColor: tailwindConfig().theme.colors.slate[50]
        },
        layout: {
          padding: 20
        },
        scales: {
          y: {
            display: false,
            beginAtZero: true
          },
          x: {
            type: "time",
            time: {
              parser: "MM-DD-YYYY",
              unit: "month"
            },
            display: false
          }
        },
        plugins: {
          tooltip: {
            callbacks: {
              title: () => false,
              label: (context) => formatValue(context.parsed.y)
            }
          },
          legend: {
            display: false
          }
        },
        interaction: {
          intersect: false,
          mode: "nearest"
        },
        maintainAspectRatio: false
      }
    });
  });
};
Chart.register(BarController, BarElement, LinearScale, TimeScale, Tooltip, Legend);
const dashboardCard04 = () => {
  const ctx = document.getElementById("dashboard-card-04");
  if (!ctx)
    return;
  fetch("/json-data-feed?datatype=4").then((a) => {
    return a.json();
  }).then((result) => {
    const dataset1 = result.data.slice(0, 6);
    const dataset2 = result.data.slice(6);
    new Chart(ctx, {
      type: "bar",
      data: {
        labels: result.labels.slice(0, 6),
        datasets: [
          {
            label: "Direct",
            data: dataset1,
            backgroundColor: tailwindConfig().theme.colors.blue[400],
            hoverBackgroundColor: tailwindConfig().theme.colors.blue[500],
            barPercentage: 0.66,
            categoryPercentage: 0.66
          },
          {
            label: "Indirect",
            data: dataset2,
            backgroundColor: tailwindConfig().theme.colors.indigo[500],
            hoverBackgroundColor: tailwindConfig().theme.colors.indigo[600],
            barPercentage: 0.66,
            categoryPercentage: 0.66
          }
        ]
      },
      options: {
        layout: {
          padding: {
            top: 12,
            bottom: 16,
            left: 20,
            right: 20
          }
        },
        scales: {
          y: {
            border: {
              display: false
            },
            ticks: {
              maxTicksLimit: 5,
              callback: (value) => formatValue(value)
            }
          },
          x: {
            type: "time",
            time: {
              parser: "MM-DD-YYYY",
              unit: "month",
              displayFormats: {
                month: "MMM YY"
              }
            },
            border: {
              display: false
            },
            grid: {
              display: false
            }
          }
        },
        plugins: {
          legend: {
            display: false
          },
          htmlLegend: {
            containerID: "dashboard-card-04-legend"
          },
          tooltip: {
            callbacks: {
              title: () => false,
              label: (context) => formatValue(context.parsed.y)
            }
          }
        },
        interaction: {
          intersect: false,
          mode: "nearest"
        },
        animation: {
          duration: 200
        },
        maintainAspectRatio: false
      },
      plugins: [{
        id: "htmlLegend",
        afterUpdate(c, args, options) {
          const legendContainer = document.getElementById(options.containerID);
          const ul = legendContainer.querySelector("ul");
          if (!ul)
            return;
          while (ul.firstChild) {
            ul.firstChild.remove();
          }
          const items = c.options.plugins.legend.labels.generateLabels(c);
          items.forEach((item) => {
            const li = document.createElement("li");
            li.style.marginRight = tailwindConfig().theme.margin[4];
            const button = document.createElement("button");
            button.style.display = "inline-flex";
            button.style.alignItems = "center";
            button.style.opacity = item.hidden ? ".3" : "";
            button.onclick = () => {
              c.setDatasetVisibility(item.datasetIndex, !c.isDatasetVisible(item.datasetIndex));
              c.update();
            };
            const box = document.createElement("span");
            box.style.display = "block";
            box.style.width = tailwindConfig().theme.width[3];
            box.style.height = tailwindConfig().theme.height[3];
            box.style.borderRadius = tailwindConfig().theme.borderRadius.full;
            box.style.marginRight = tailwindConfig().theme.margin[2];
            box.style.borderWidth = "3px";
            box.style.borderColor = item.fillStyle;
            box.style.pointerEvents = "none";
            const labelContainer = document.createElement("span");
            labelContainer.style.display = "flex";
            labelContainer.style.alignItems = "center";
            const value = document.createElement("span");
            value.style.color = tailwindConfig().theme.colors.slate[800];
            value.style.fontSize = tailwindConfig().theme.fontSize["3xl"][0];
            value.style.lineHeight = tailwindConfig().theme.fontSize["3xl"][1].lineHeight;
            value.style.fontWeight = tailwindConfig().theme.fontWeight.bold;
            value.style.marginRight = tailwindConfig().theme.margin[2];
            value.style.pointerEvents = "none";
            const label = document.createElement("span");
            label.style.color = tailwindConfig().theme.colors.slate[500];
            label.style.fontSize = tailwindConfig().theme.fontSize.sm[0];
            label.style.lineHeight = tailwindConfig().theme.fontSize.sm[1].lineHeight;
            const theValue = c.data.datasets[item.datasetIndex].data.reduce((a, b) => a + b, 0);
            const valueText = document.createTextNode(formatValue(theValue));
            const labelText = document.createTextNode(item.text);
            value.appendChild(valueText);
            label.appendChild(labelText);
            li.appendChild(button);
            button.appendChild(box);
            button.appendChild(labelContainer);
            labelContainer.appendChild(value);
            labelContainer.appendChild(label);
            ul.appendChild(li);
          });
        }
      }]
    });
  });
};
Chart.register(LineController, LineElement, Filler, PointElement, LinearScale, TimeScale, Tooltip);
const dashboardCard05 = () => {
  const ctx = document.getElementById("dashboard-card-05");
  if (!ctx)
    return;
  let range = 35;
  let increment = 0;
  fetch("/json-data-feed?datatype=5&limit=" + range).then((a) => {
    return a.json();
  }).then((result) => {
    const generateDates = () => {
      const now = new Date();
      const dates = [];
      result.data.forEach((v, i) => {
        dates.push(new Date(now - 2e3 - i * 2e3));
      });
      return dates;
    };
    const labels = generateDates();
    const slicedData = result.data.slice(0, range);
    const slicedLabels = labels.slice(0, range).reverse();
    const chart = new Chart(ctx, {
      type: "line",
      data: {
        labels: slicedLabels,
        datasets: [
          {
            data: slicedData,
            fill: true,
            backgroundColor: `rgba(${hexToRGB(tailwindConfig().theme.colors.blue[500])}, 0.08)`,
            borderColor: tailwindConfig().theme.colors.indigo[500],
            borderWidth: 2,
            tension: 0,
            pointRadius: 0,
            pointHoverRadius: 3,
            pointBackgroundColor: tailwindConfig().theme.colors.indigo[500],
            clip: 20
          }
        ]
      },
      options: {
        layout: {
          padding: 20
        },
        scales: {
          y: {
            border: {
              display: false
            },
            suggestedMin: 30,
            suggestedMax: 80,
            ticks: {
              maxTicksLimit: 5,
              callback: (value) => formatValue(value)
            }
          },
          x: {
            type: "time",
            time: {
              parser: "hh:mm:ss",
              unit: "second",
              tooltipFormat: "MMM DD, H:mm:ss a",
              displayFormats: {
                second: "H:mm:ss"
              }
            },
            border: {
              display: false
            },
            grid: {
              display: false
            },
            ticks: {
              autoSkipPadding: 48,
              maxRotation: 0
            }
          }
        },
        plugins: {
          legend: {
            display: false
          },
          tooltip: {
            titleFont: {
              weight: "600"
            },
            callbacks: {
              label: (context) => formatValue(context.parsed.y)
            }
          }
        },
        interaction: {
          intersect: false,
          mode: "nearest"
        },
        animation: false,
        maintainAspectRatio: false
      }
    });
    const chartValue = document.getElementById("dashboard-card-05-value");
    const chartDeviation = document.getElementById("dashboard-card-05-deviation");
    const adddata = (value = NaN, prev) => {
      const { datasets } = chart.data;
      chart.data.labels.shift();
      chart.data.labels.push(new Date());
      datasets[0].data.shift();
      datasets[0].data.push(value);
      chart.update(0);
      if (!chartValue)
        return;
      const diff = (value - prev) / prev * 100;
      chartValue.innerHTML = value;
      if (!chartDeviation)
        return;
      if (diff < 0) {
        chartDeviation.style.backgroundColor = tailwindConfig().theme.colors.amber[500];
      } else {
        chartDeviation.style.backgroundColor = tailwindConfig().theme.colors.emerald[500];
      }
      chartDeviation.innerHTML = `${diff > 0 ? "+" : ""}${diff.toFixed(2)}%`;
    };
    const reload = () => {
      increment += 1;
      if (increment + range - 1 < result.data.length) {
        adddata(result.data[increment + range - 1], result.data[increment + range - 2]);
      } else {
        increment = 0;
        range = 1;
        adddata(result.data[increment + range - 1], result.data[result.data.length - 1]);
      }
      setTimeout(reload, 2e3);
    };
    reload();
  });
};
Chart.register(DoughnutController, ArcElement, TimeScale, Tooltip);
const dashboardCard06 = () => {
  const ctx = document.getElementById("dashboard-card-06");
  if (!ctx)
    return;
  fetch("/json-data-feed?datatype=6").then((a) => {
    return a.json();
  }).then((result) => {
    new Chart(ctx, {
      type: "doughnut",
      data: {
        labels: result.labels,
        datasets: [
          {
            label: "Top Countries",
            data: result.data,
            backgroundColor: [
              tailwindConfig().theme.colors.indigo[500],
              tailwindConfig().theme.colors.blue[400],
              tailwindConfig().theme.colors.indigo[800]
            ],
            hoverBackgroundColor: [
              tailwindConfig().theme.colors.indigo[600],
              tailwindConfig().theme.colors.blue[500],
              tailwindConfig().theme.colors.indigo[900]
            ],
            hoverBorderColor: tailwindConfig().theme.colors.white
          }
        ]
      },
      options: {
        cutout: "80%",
        layout: {
          padding: 24
        },
        plugins: {
          legend: {
            display: false
          },
          htmlLegend: {
            containerID: "dashboard-card-06-legend"
          }
        },
        interaction: {
          intersect: false,
          mode: "nearest"
        },
        animation: {
          duration: 200
        },
        maintainAspectRatio: false
      },
      plugins: [{
        id: "htmlLegend",
        afterUpdate(c, args, options) {
          const legendContainer = document.getElementById(options.containerID);
          const ul = legendContainer.querySelector("ul");
          if (!ul)
            return;
          while (ul.firstChild) {
            ul.firstChild.remove();
          }
          const items = c.options.plugins.legend.labels.generateLabels(c);
          items.forEach((item) => {
            const li = document.createElement("li");
            li.style.margin = tailwindConfig().theme.margin[1];
            const button = document.createElement("button");
            button.classList.add("btn-xs");
            button.style.backgroundColor = tailwindConfig().theme.colors.white;
            button.style.borderWidth = tailwindConfig().theme.borderWidth[1];
            button.style.borderColor = tailwindConfig().theme.colors.slate[200];
            button.style.color = tailwindConfig().theme.colors.slate[500];
            button.style.boxShadow = tailwindConfig().theme.boxShadow.md;
            button.style.opacity = item.hidden ? ".3" : "";
            button.onclick = () => {
              c.toggleDataVisibility(item.index, !item.index);
              c.update();
            };
            const box = document.createElement("span");
            box.style.display = "block";
            box.style.width = tailwindConfig().theme.width[2];
            box.style.height = tailwindConfig().theme.height[2];
            box.style.backgroundColor = item.fillStyle;
            box.style.borderRadius = tailwindConfig().theme.borderRadius.sm;
            box.style.marginRight = tailwindConfig().theme.margin[1];
            box.style.pointerEvents = "none";
            const label = document.createElement("span");
            label.style.display = "flex";
            label.style.alignItems = "center";
            const labelText = document.createTextNode(item.text);
            label.appendChild(labelText);
            li.appendChild(button);
            button.appendChild(box);
            button.appendChild(label);
            ul.appendChild(li);
          });
        }
      }]
    });
  });
};
Chart.register(LineController, LineElement, Filler, PointElement, LinearScale, TimeScale, Tooltip);
const dashboardCard08 = () => {
  const ctx = document.getElementById("dashboard-card-08");
  if (!ctx)
    return;
  fetch("/json-data-feed?datatype=8").then((a) => {
    return a.json();
  }).then((result) => {
    const dataset1 = result.data.splice(0, 26);
    const dataset2 = result.data.splice(0, 26);
    const dataset3 = result.data;
    new Chart(ctx, {
      type: "line",
      data: {
        labels: result.labels,
        datasets: [
          {
            label: "Current",
            data: dataset1,
            borderColor: tailwindConfig().theme.colors.indigo[500],
            fill: false,
            borderWidth: 2,
            tension: 0,
            pointRadius: 0,
            pointHoverRadius: 3,
            pointBackgroundColor: tailwindConfig().theme.colors.indigo[500],
            clip: 20
          },
          {
            label: "Previous",
            data: dataset2,
            borderColor: tailwindConfig().theme.colors.blue[400],
            fill: false,
            borderWidth: 2,
            tension: 0,
            pointRadius: 0,
            pointHoverRadius: 3,
            pointBackgroundColor: tailwindConfig().theme.colors.blue[400],
            clip: 20
          },
          {
            label: "Average",
            data: dataset3,
            borderColor: tailwindConfig().theme.colors.emerald[500],
            fill: false,
            borderWidth: 2,
            tension: 0,
            pointRadius: 0,
            pointHoverRadius: 3,
            pointBackgroundColor: tailwindConfig().theme.colors.emerald[500],
            clip: 20
          }
        ]
      },
      options: {
        layout: {
          padding: 20
        },
        scales: {
          y: {
            beginAtZero: true,
            border: {
              display: false
            },
            ticks: {
              maxTicksLimit: 5,
              callback: (value) => formatValue(value)
            }
          },
          x: {
            type: "time",
            time: {
              parser: "MM-DD-YYYY",
              unit: "month",
              displayFormats: {
                month: "MMM YY"
              }
            },
            border: {
              display: false
            },
            grid: {
              display: false
            },
            ticks: {
              autoSkipPadding: 48,
              maxRotation: 0
            }
          }
        },
        plugins: {
          legend: {
            display: false
          },
          htmlLegend: {
            containerID: "dashboard-card-08-legend"
          },
          tooltip: {
            callbacks: {
              title: () => false,
              label: (context) => formatValue(context.parsed.y)
            }
          }
        },
        interaction: {
          intersect: false,
          mode: "nearest"
        },
        maintainAspectRatio: false
      },
      plugins: [{
        id: "htmlLegend",
        afterUpdate(c, args, options) {
          const legendContainer = document.getElementById(options.containerID);
          const ul = legendContainer.querySelector("ul");
          if (!ul)
            return;
          while (ul.firstChild) {
            ul.firstChild.remove();
          }
          const items = c.options.plugins.legend.labels.generateLabels(c);
          items.slice(0, 2).forEach((item) => {
            const li = document.createElement("li");
            li.style.marginLeft = tailwindConfig().theme.margin[3];
            const button = document.createElement("button");
            button.style.display = "inline-flex";
            button.style.alignItems = "center";
            button.style.opacity = item.hidden ? ".3" : "";
            button.onclick = () => {
              c.setDatasetVisibility(item.datasetIndex, !c.isDatasetVisible(item.datasetIndex));
              c.update();
            };
            const box = document.createElement("span");
            box.style.display = "block";
            box.style.width = tailwindConfig().theme.width[3];
            box.style.height = tailwindConfig().theme.height[3];
            box.style.borderRadius = tailwindConfig().theme.borderRadius.full;
            box.style.marginRight = tailwindConfig().theme.margin[2];
            box.style.borderWidth = "3px";
            box.style.borderColor = c.data.datasets[item.datasetIndex].borderColor;
            box.style.pointerEvents = "none";
            const label = document.createElement("span");
            label.style.color = tailwindConfig().theme.colors.slate[500];
            label.style.fontSize = tailwindConfig().theme.fontSize.sm[0];
            label.style.lineHeight = tailwindConfig().theme.fontSize.sm[1].lineHeight;
            const labelText = document.createTextNode(item.text);
            label.appendChild(labelText);
            li.appendChild(button);
            button.appendChild(box);
            button.appendChild(label);
            ul.appendChild(li);
          });
        }
      }]
    });
  });
};
Chart.register(BarController, BarElement, LinearScale, TimeScale, Tooltip, Legend);
const dashboardCard09 = () => {
  const ctx = document.getElementById("dashboard-card-09");
  if (!ctx)
    return;
  fetch("/json-data-feed?datatype=9").then((a) => {
    return a.json();
  }).then((result) => {
    const dataset1 = result.data.splice(0, 6);
    const dataset2 = result.data;
    new Chart(ctx, {
      type: "bar",
      data: {
        labels: result.labels,
        datasets: [
          {
            label: "Stack 1",
            data: dataset1,
            backgroundColor: tailwindConfig().theme.colors.indigo[500],
            hoverBackgroundColor: tailwindConfig().theme.colors.indigo[600],
            barPercentage: 0.66,
            categoryPercentage: 0.66
          },
          {
            label: "Stack 2",
            data: dataset2,
            backgroundColor: tailwindConfig().theme.colors.indigo[200],
            hoverBackgroundColor: tailwindConfig().theme.colors.indigo[300],
            barPercentage: 0.66,
            categoryPercentage: 0.66
          }
        ]
      },
      options: {
        layout: {
          padding: {
            top: 12,
            bottom: 16,
            left: 20,
            right: 20
          }
        },
        scales: {
          y: {
            stacked: true,
            border: {
              display: false
            },
            beginAtZero: true,
            ticks: {
              maxTicksLimit: 5,
              callback: (value) => formatValue(value)
            }
          },
          x: {
            stacked: true,
            type: "time",
            time: {
              parser: "MM-DD-YYYY",
              unit: "month",
              displayFormats: {
                month: "MMM YY"
              }
            },
            border: {
              display: false
            },
            grid: {
              display: false
            },
            ticks: {
              autoSkipPadding: 48,
              maxRotation: 0
            }
          }
        },
        plugins: {
          legend: {
            display: false
          },
          tooltip: {
            callbacks: {
              title: () => false,
              label: (context) => formatValue(context.parsed.y)
            }
          }
        },
        interaction: {
          intersect: false,
          mode: "nearest"
        },
        animation: {
          duration: 200
        },
        maintainAspectRatio: false
      }
    });
  });
};
Chart.register(BarController, BarElement, LinearScale, CategoryScale, Tooltip, Legend);
const dashboardCard11 = () => {
  const ctx = document.getElementById("dashboard-card-11");
  if (!ctx)
    return;
  fetch("/json-data-feed?datatype=10").then((a) => {
    return a.json();
  }).then((result) => {
    const reducer = (accumulator, currentValue) => accumulator + currentValue;
    const max = result.data.reduce(reducer);
    const dataset1 = result.data.splice(0, 1);
    const dataset2 = result.data.splice(0, 1);
    const dataset3 = result.data.splice(0, 1);
    const dataset4 = result.data.splice(0, 1);
    const dataset5 = result.data;
    new Chart(ctx, {
      type: "bar",
      data: {
        labels: result.labels,
        datasets: [
          {
            label: "Having difficulties using the product",
            data: dataset1,
            backgroundColor: tailwindConfig().theme.colors.indigo[500],
            hoverBackgroundColor: tailwindConfig().theme.colors.indigo[600],
            barPercentage: 1,
            categoryPercentage: 1
          },
          {
            label: "Missing features I need",
            data: dataset2,
            backgroundColor: tailwindConfig().theme.colors.indigo[800],
            hoverBackgroundColor: tailwindConfig().theme.colors.indigo[900],
            barPercentage: 1,
            categoryPercentage: 1
          },
          {
            label: "Not satisfied about the quality of the product",
            data: dataset3,
            backgroundColor: tailwindConfig().theme.colors["sky"][400],
            hoverBackgroundColor: tailwindConfig().theme.colors["sky"][500],
            barPercentage: 1,
            categoryPercentage: 1
          },
          {
            label: "The product doesn\u2019t look as advertised",
            data: dataset4,
            backgroundColor: tailwindConfig().theme.colors.green[400],
            hoverBackgroundColor: tailwindConfig().theme.colors.green[500],
            barPercentage: 1,
            categoryPercentage: 1
          },
          {
            label: "Other",
            data: dataset5,
            backgroundColor: tailwindConfig().theme.colors.gray[200],
            hoverBackgroundColor: tailwindConfig().theme.colors.gray[300],
            barPercentage: 1,
            categoryPercentage: 1
          }
        ]
      },
      options: {
        indexAxis: "y",
        layout: {
          padding: {
            top: 12,
            bottom: 12,
            left: 20,
            right: 20
          }
        },
        scales: {
          x: {
            stacked: true,
            display: false,
            max
          },
          y: {
            stacked: true,
            display: false
          }
        },
        plugins: {
          legend: {
            display: false
          },
          htmlLegend: {
            containerID: "dashboard-card-11-legend"
          },
          tooltip: {
            callbacks: {
              title: () => false,
              label: (context) => context.parsed.x
            }
          }
        },
        interaction: {
          intersect: false,
          mode: "nearest"
        },
        animation: {
          duration: 500
        },
        maintainAspectRatio: false,
        resizeDelay: 200
      },
      plugins: [{
        id: "htmlLegend",
        afterUpdate(c, args, options) {
          const legendContainer = document.getElementById(options.containerID);
          const ul = legendContainer.querySelector("ul");
          if (!ul)
            return;
          while (ul.firstChild) {
            ul.firstChild.remove();
          }
          const items = c.options.plugins.legend.labels.generateLabels(c);
          items.forEach((item) => {
            const li = document.createElement("li");
            li.style.display = "flex";
            li.style.justifyContent = "space-between";
            li.style.alignItems = "center";
            li.style.paddingTop = tailwindConfig().theme.padding[2.5];
            li.style.paddingBottom = tailwindConfig().theme.padding[2.5];
            const wrapper = document.createElement("div");
            wrapper.style.display = "flex";
            wrapper.style.alignItems = "center";
            const box = document.createElement("div");
            box.style.width = tailwindConfig().theme.width[3];
            box.style.height = tailwindConfig().theme.width[3];
            box.style.borderRadius = tailwindConfig().theme.borderRadius.sm;
            box.style.marginRight = tailwindConfig().theme.margin[3];
            box.style.backgroundColor = item.fillStyle;
            const label = document.createElement("div");
            const value = document.createElement("div");
            value.style.fontWeight = tailwindConfig().theme.fontWeight.medium;
            value.style.marginLeft = tailwindConfig().theme.margin[3];
            value.style.color = item.text === "Other" ? tailwindConfig().theme.colors.gray[400] : item.fillStyle;
            const theValue = c.data.datasets[item.datasetIndex].data.reduce((a, b) => a + b, 0);
            const valueText = document.createTextNode(`${parseInt(theValue / max * 100)}%`);
            const labelText = document.createTextNode(item.text);
            value.appendChild(valueText);
            label.appendChild(labelText);
            ul.appendChild(li);
            li.appendChild(wrapper);
            li.appendChild(value);
            wrapper.appendChild(box);
            wrapper.appendChild(label);
          });
        }
      }]
    });
  });
};
window.Alpine = Alpine;
Alpine.start();
Chart.defaults.font.family = '"Inter", sans-serif';
Chart.defaults.font.weight = "500";
Chart.defaults.color = tailwindConfig().theme.colors.slate[400];
Chart.defaults.scale.grid.color = tailwindConfig().theme.colors.slate[100];
Chart.defaults.plugins.tooltip.titleColor = tailwindConfig().theme.colors.slate[800];
Chart.defaults.plugins.tooltip.bodyColor = tailwindConfig().theme.colors.slate[800];
Chart.defaults.plugins.tooltip.backgroundColor = tailwindConfig().theme.colors.white;
Chart.defaults.plugins.tooltip.borderWidth = 1;
Chart.defaults.plugins.tooltip.borderColor = tailwindConfig().theme.colors.slate[200];
Chart.defaults.plugins.tooltip.displayColors = false;
Chart.defaults.plugins.tooltip.mode = "nearest";
Chart.defaults.plugins.tooltip.intersect = false;
Chart.defaults.plugins.tooltip.position = "nearest";
Chart.defaults.plugins.tooltip.caretSize = 0;
Chart.defaults.plugins.tooltip.caretPadding = 20;
Chart.defaults.plugins.tooltip.cornerRadius = 4;
Chart.defaults.plugins.tooltip.padding = 8;
Chart.register({
  id: "chartAreaPlugin",
  beforeDraw: (chart) => {
    if (chart.config.options.chartArea && chart.config.options.chartArea.backgroundColor) {
      const ctx = chart.canvas.getContext("2d");
      const { chartArea } = chart;
      ctx.save();
      ctx.fillStyle = chart.config.options.chartArea.backgroundColor;
      ctx.fillRect(chartArea.left, chartArea.top, chartArea.right - chartArea.left, chartArea.bottom - chartArea.top);
      ctx.restore();
    }
  }
});
document.addEventListener("DOMContentLoaded", () => {
  flatpickr(".datepicker", {
    mode: "range",
    static: true,
    monthSelectorType: "static",
    dateFormat: "M j, Y",
    defaultDate: [new Date().setDate(new Date().getDate() - 6), new Date()],
    prevArrow: '<svg class="fill-current" width="7" height="11" viewBox="0 0 7 11"><path d="M5.4 10.8l1.4-1.4-4-4 4-4L5.4 0 0 5.4z" /></svg>',
    nextArrow: '<svg class="fill-current" width="7" height="11" viewBox="0 0 7 11"><path d="M1.4 10.8L0 9.4l4-4-4-4L1.4 0l5.4 5.4z" /></svg>',
    onReady: (selectedDates, dateStr, instance) => {
      instance.element.value = dateStr.replace("to", "-");
      const customClass = instance.element.getAttribute("data-class");
      instance.calendarContainer.classList.add(customClass);
    },
    onChange: (selectedDates, dateStr, instance) => {
      instance.element.value = dateStr.replace("to", "-");
    }
  });
  dashboardCard01();
  dashboardCard02();
  dashboardCard03();
  dashboardCard04();
  dashboardCard05();
  dashboardCard06();
  dashboardCard08();
  dashboardCard09();
  dashboardCard11();
});
