
const mostComplinceChart = document.getElementById('mostComplinceChart');

new Chart(mostComplinceChart, {
    type: 'bar',
    data:{
        labels: [chartData[0].product.name, chartData[1].product.name, chartData[2].product.name],
        datasets: [{
            label: 'عدد الشكاوي للمنتج',
            data: [chartData[0].count, chartData[1].count, chartData[2].count],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 205, 86, 0.2)',
              ],
              borderColor: [
                'rgb(255, 99, 132)',
                'rgb(255, 159, 64)',
                'rgb(201, 203, 207)'
              ],
        }],
    },

   
    options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      },
}
);