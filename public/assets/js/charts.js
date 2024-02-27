
const ctx = document.getElementById('myChart');

new Chart(ctx, {
  type: 'line',
  data: {
    datasets: [{
      label: 'اسعار خلال سنة',
      data: chartData,
      borderWidth: 1,
      fill: false,
      tension: 0.1

    }]
  },
  options: {
    
    scales: {
      x: {
        position: 'bottom', // Position the X-axis at the bottom
        title: {
            display: true,
            text: 'التاريخ' // X-axis label
        },

          grid: {
              color: 'rgba(249, 231, 159 , .1)' // Change X-axis grid line color to red with 10% opacity
          }
      },
      y: {
        position: 'bottom', // Position the X-axis at the bottom
        title: {
            display: true,
            text: 'السعر' // X-axis label
        },
          grid: {
              color: 'rgba(249, 231, 159 , .1)' // Change Y-axis grid line color to blue
          }
      }
  }
  }

});