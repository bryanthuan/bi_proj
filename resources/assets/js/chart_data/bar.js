export let initial = {
  title: {
    text: 'Recall'
  },
  tooltip: {},
  legend: {
    data: ["Actemra"]
  },
  xAxis: {
    data: ["1st Spontaneous","Other Spontaneous","Prompted","No Recall"]
  },
  yAxis: {
    axisLabel: {show: true}
  },
  series: [{
    name: 'Actemra',
    type: 'bar',
    barWidth: '60%',
    data: [0.91, 0.09, 0, 0]
  }]
}

