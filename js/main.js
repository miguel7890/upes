function consulta(tipo,url,data,done){

  if(window.XMLHttpRequest){
    connection = new XMLHttpRequest();
  } else if(window.ActiveXObject){
    connection = new ActiveXObject("Microsoft.XMLHTTP");
  }

  connection.onreadystatechange = done;

  connection.open(tipo, url);
  connection.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  connection.send(data);
}

function hour_now(){
    consulta('POST','fn/platform.php','type=date',done);
    function done(){
        if(connection.readyState == 4){
            var resp = JSON.parse(connection.responseText);
            var now = resp.date;

            var hour = moment(now,"YYYY-MM-DD LTS").subtract(240, 'seconds').format("LT");

            if(document.getElementById('hour')){
                document.getElementById('hour').innerHTML = hour;
            }
        }
    }    

    setTimeout(function(){hour_now();},5000);
}

hour_now();


