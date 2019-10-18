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
$(document).ready( function () {
  $('#turmas').DataTable();
  $.ajax({
        
    url:"http://localhost/StudioControl/view/graficos.php",
    method:"GET",
    success:function(data){
      console.log(data);
     
      var score={
        peso:[],
        peitoral:[]
      };

      var len = data.length;

      for(var i=0; i< len; i++){

        if(data[i].peso == "5.00"){
          score.peso.push(data[i].score);
        }
        else if(data[i].peso == "6.00"){
          score.peitoral.push(data[i].score);
        }
      }
      console.log(score);
    },
    error: function(data){
      console.log(data);
    }

});

} );



      
var chardata = {
  labels: peso,
  datasets:[
      {
          label:'peso',
          backgroundColor:'rgba(200,200,200,0.75)',
          borderColor:'rgba(200,200,200,0.75)',
          data: score
      }
  ]
};

var ctx = $("#grafico");
var barGraph = new Chart(ctx,{
  type:'bar',
  data: chardata,
})

