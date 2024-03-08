
const mostComplinceChart = document.getElementById('mostComplinceChart');

new Chart( mostComplinceChart, {
    type: 'bar',
    data: {
        datasets: [{
            label: 'المنتجات الاكثر شكاوي',
            data: chartData,
            borderWidth: 1,
            fill: false,
            tension: 0.1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
}

);