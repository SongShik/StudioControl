/* menu */
function menu() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

var linkClicked = document.getElementsByClassName('nav-link');
var numClass = linkClicked.length;

for (var i = 0; i < numClass; i++) {
  linkClicked[i].addEventListener('click', function(){
    var onTheMoment = document.getElementsByClassName('active');
    onTheMoment[0].className = onTheMoment[0].className.replace(' active', '');
    this.className += ' active';
  }, false);
}


/* data tables */
$(document).ready(function(){
	$('#turmas').DataTable();
	
    $.ajax({
      url: 'http://localhost/StudioControl/view/graficos.php',
      method:"GET",
      dataType: 'json', 
      success: function(data){ 
        console.log(data);
        // coloca as informacoes em listas
        var descricao = [];
        var peso=[];
        var peitoral=[];     
        var biceps_direito=[];   
        var biceps_esquerdo=[];    
        var cintura_direita=[];    
        var cintura_esquerda=[];     
        var quadril=[];
        var coxa_direita=[]; 
        var coxa_esquerda=[];  
        var gemeos_direito=[];   
        var gemeos_esquerdo=[];    
 
        // coloca as informacoes na lista especifica
        for(var i in data){
          descricao.push(data[i].data_atualizacao);
          peso.push(data[i].peso);
          peitoral.push(data[i].peitoral);
          biceps_direito.push(data[i].biceps_direito);
          biceps_esquerdo.push(data[i].biceps_esquerdo);
          cintura_direita.push(data[i].cintura_direita);
          cintura_esquerda.push(data[i].cintura_esquerda);
          quadril.push(data[i].quadril);
          coxa_direita.push(data[i].coxa_direita);
          coxa_esquerda.push(data[i].coxa_esquerda);
          gemeos_direito.push(data[i].gemeos_direito);
          gemeos_esquerdo.push(data[i].gemeos_esquerdo);
        }

        //atribui os dados do grafico
        var chartdata_peso = {
          labels: descricao,
          datasets:[
            {
              label: "Peso",
              borderColor: "#3e95cd",
              data:peso
            }
          ]
        };

                        //peitoral
                        var chartdata_peitoral = {
                          labels: descricao,
                          datasets:[
                            {
                              label: "peitoral",
                              borderColor: "#3e95cd",
                              data:peitoral
                            }
                          ]
                        };
                        //biceps_direito
                        var chartdata_biceps_direito = {
                          labels: descricao,
                          datasets:[
                            {
                              label: "biceps direito",
                              borderColor: "#3e95cd",
                              data:biceps_direito
                            }
                          ]
                        };
                        //biceps_esquerdo
                        var chartdata_biceps_esquerdo = {
                          labels: descricao,
                          datasets:[
                            {
                              label: "biceps esquerdo",
                              borderColor: "#3e95cd",
                              data:biceps_esquerdo
                            }
                          ]
                        };
                        //cintura_direita
                        var chartdata_cintura_direita = {
                          labels: descricao,
                          datasets:[
                            {
                              label: "cintura direita",
                              borderColor: "#3e95cd",
                              data:cintura_direita
                            }
                          ]
                        };
                        //cintura_esquerda
                        var chartdata_cintura_esquerda = {
                          labels: descricao,
                          datasets:[
                            {
                              label: "cintura esquerda",
                              borderColor: "#3e95cd",
                              data:cintura_esquerda
                            }
                          ]
                        };
                        //quadril
                        var chartdata_quadril = {
                          labels: descricao,
                          datasets:[
                            {
                              label: "quadril",
                              borderColor: "#3e95cd",
                              data:quadril
                            }
                          ]
                        };
                        //coxa_direita
                        var chartdata_coxa_direita = {
                          labels: descricao,
                          datasets:[
                            {
                              label: "coxa direita",
                              borderColor: "#3e95cd",
                              data:coxa_direita
                            }
                          ]
                        };
                        //coxa_esquerda
                        var chartdata_coxa_esquerda = {
                          labels: descricao,
                          datasets:[
                            {
                              label: "coxa esquerda",
                              borderColor: "#3e95cd",
                              data:coxa_esquerda
                            }
                          ]
                        };
                        //gemeos_direito
                        var chartdata_gemeos_direito = {
                          labels: descricao,
                          datasets:[
                            {
                              label: "gemeos direito",
                              borderColor: "#3e95cd",
                              data:gemeos_direito
                            }
                          ]
                        };
                        //gemeos_esquerdo
                        var chartdata_gemeos_esquerdo = {
                          labels: descricao,
                          datasets:[
                            {
                              label: "gemeos esquerdo",
                              borderColor: "#3e95cd",
                              data:gemeos_esquerdo
                            }
                          ]
                        };


        //instancia o grafico
        var ctx= $("#grafico-peso");
        var lineGraph = new Chart(ctx,{
          type: 'line',
          data: chartdata_peso,
        });

        //peitoral
        var ctx= $("#grafico-peitoral");
        var lineGraph = new Chart(ctx,{
          type: 'line',
          data: chartdata_peitoral,
        });
        
        //biceps_direito
        var ctx= $("#grafico-biceps_direito");
        var lineGraph = new Chart(ctx,{
          type: 'line',
          data: chartdata_biceps_direito,
        });
        
        //biceps_esquerdo
        var ctx= $("#grafico-biceps_esquerdo");
        var lineGraph = new Chart(ctx,{
          type: 'line',
          data: chartdata_biceps_esquerdo,
        });
        
        //cintura_direita
        var ctx= $("#grafico-cintura_direita");
        var lineGraph = new Chart(ctx,{
          type: 'line',
          data: chartdata_cintura_direita,
        });
        
        //cintura_esquerda
        var ctx= $("#grafico-cintura_esquerda");
        var lineGraph = new Chart(ctx,{
          type: 'line',
          data: chartdata_cintura_esquerda,
        });
        
        //cintura_esquerda
        var ctx= $("#grafico-cintura_esquerda");
        var lineGraph = new Chart(ctx,{
          type: 'line',
          data: chartdata_cintura_esquerda,
        });
        
        //quadril
        var ctx= $("#grafico-quadril");
        var lineGraph = new Chart(ctx,{
          type: 'line',
          data: chartdata_quadril,
        });
        
        //coxa_direita
        var ctx= $("#grafico-coxa_direita");
        var lineGraph = new Chart(ctx,{
          type: 'line',
          data: chartdata_coxa_direita,
        });
        
        //coxa_esquerda
        var ctx= $("#grafico-coxa_esquerda");
        var lineGraph = new Chart(ctx,{
          type: 'line',
          data: chartdata_coxa_esquerda,
        });
        
        //gemeos_direito
        var ctx= $("#grafico-gemeos_direito");
        var lineGraph = new Chart(ctx,{
          type: 'line',
          data: chartdata_gemeos_direito,
        });
        
        //gemeos_esquerdo
        var ctx= $("#grafico-gemeos_esquerdo");
        var lineGraph = new Chart(ctx,{
          type: 'line',
          data: chartdata_gemeos_esquerdo,
        });
        
        
      },
      error:function(data){
        console.log("errouuuuu"),
        console.log(data)
      }
    });
});






