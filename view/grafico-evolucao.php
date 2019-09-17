<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=0.8, user-scalable=no ">
  <title>Grafico evolucao</title>
  <link rel="icon" type="image/x-icon" href="img/ICOM LOGO.png">

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css'>
  <link rel="stylesheet" href="css/style.css">
  <script src='js/jquery-3.4.1.min.js'></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
</head>
<body>

<canvas class="grafico" style="height:400px; width:500px;"></canvas>
</body>

<!--bootstrap-->
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js'></script>


<!--validação jquey-->
<script src="js/jquery.validate.min.js"></script>

<script src="js/index.js"></script>

<script>
var canvas = $(".grafico");
new Chart(canvas, {
  type: 'line',
  data: {
  /* semanas eixo x */
    labels: ['0','1 Semana','2 Semana'],
    datasets: [
      {
      label: 'Meta Total',
      yAxisID: 'B',
      data: [1, 22945.04,285342.28],
      fill: false,
      borderColor:[
        'rgb(235, 19, 19)',
      ],
    },
     {
      label: 'Evoluiu',
      yAxisID: 'A',
      data: [0,9279.72,107377.95],
      fill: false,
      borderColor:[
        "#3e95cd",
      ],
    },
    {
      label: 'Nandando no dinheiro',
      yAxisID: 'A',
      /* data : indice y*/
      data: [0,13670.32,91450.38],
      fill: false,
      borderColor:[
         "#8e5ea2",
      ],
    },
     {
      label: 'sativos',
      yAxisID: 'A',
      data: [0,0,86513.95],
      fill: false,
      borderColor:[
         "#3cba9f",
      ],
    },

    ]
  },

  options: {
    tooltips:{
    position :'nearest',
    mode:'index',
    titleFontColor:'#fff',
    bodyFontColor:'#fff',

     
    },
    legend: {
      position: 'bottom',
      labels :{
            fontColor: '#fff',
            fontSize :15,
          }
        },
    scales: {
      yAxes: [{
        id: 'A',
        type: 'linear',
        position: 'left',
        ticks:{
            fontColor: '#fff',
            beginAtZero:true
          }
      }, {
        id: 'B',
        type: 'linear',
        position: 'right',
        ticks: {
          fontColor: '#fff',
          max: 800000,
          min: 0
        },
        
      }],
      xAxes:[{
          ticks:{
            fontColor: '#fff',
            display: true,
            beginAtZero:true
            
          }
        }
        
      ]
      
    }
    
  }
});
</script>


</html>
