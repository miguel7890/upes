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

            var hour = moment(now,"YYYY-MM-DD LTS").format("LT");

            if(document.getElementById('hour')){
                document.getElementById('hour').innerHTML = hour;
            }
        }
    }    

    setTimeout(function(){hour_now();},5000);
}

hour_now();

var more_btns = document.querySelectorAll('[id=btn_more]');
var leave_div = document.querySelectorAll('[id=leave_mouse]');

for (let index = 0; index < more_btns.length; index++) {
    more_btns[index].addEventListener("click", see, false);
    leave_div[index].addEventListener("mouseleave", see, false);
}

function see(){
  var id = this.getAttribute('data-id');
  var type = this.getAttribute('data-type');
  var box = document.getElementById('more_options_'+id);

  if(type == 'c'){
    box.className = "more_btn_hidden";
  } else {
  if(box.className!="more_btn_hidden"){
          box.className="more_btn_hidden";
  } else {
          box.className="more_btn";            
  }
  }
}

