$(function(){
  var chart = new Highcharts.Chart({
      chart: {
          renderTo: 'contohGrafikBar',
          type: 'bar',
      },
      title: {
          text: 'Data Benchmark Framework PHP'
      },
      xAxis: {
          categories: [<?= join($arrayFramework, ',') ?>],
          title: {
              text: null
          }
      },
      yAxis: {
          min: 0,
          title: {
              text: 'request / sec',
              align: 'high'
          },
          labels: {
              overflow: 'justify'
          }
      },
      tooltip: {
          valueSuffix: ' req / sec'
      },
      plotOptions: {
          bar: {
              dataLabels: {
                  enabled: true
              }
          }
      },
      legend: {
          layout: 'vertical',
          align: 'right',
          verticalAlign: 'top',
          x: -40,
          y: 80,
          floating: true,
          borderWidth: 1,
          backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
          shadow: true
      },
      credits: {
          enabled: false
      },
      series: [{
          name: 'Benchmark',
          data: [<?= join($arrayNilai, ',') ?>],
          color: '#FFB41A',
      }]
  });
});