window.onload = function(){
    document.querySelector('#showIp').onclick = function(){
        ajaxGet();
    }
    ip = document.querySelector('#myIp').innerText;
    document.querySelector('#showCity').onclick = function(){
        getCity(ip);
    }
}

function ajaxGet(){
    let request = new XMLHttpRequest();

    request.onreadystatechange = function(){
        if(request.readyState == 4){
            document.querySelector('#myIp').innerHTML = request.responseText;
        }
    }

    request.open('GET', 'ip.php');
    request.send();
}

function getCity(ip){
    let request = new XMLHttpRequest();

    request.open('GET', 'https://api.sypexgeo.net/json/'+ip);
    request.onreadystatechange = function(){
        if(request.readyState == 4){
            let city = JSON.parse(request.responseText);
            document.querySelector('#myCity').innerHTML = city["city"]["name_ru"] + ', ' + city["region"]["name_ru"];
        }
    }
    request.send();
}