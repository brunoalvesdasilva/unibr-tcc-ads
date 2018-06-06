@extends('layout/private')
@section('content-private')
<div class="col-md-12">
    <p class="lead text-center">Cadastre um chamado para o nosso suporte técnico&nbsp;</p>

    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form class="form" action="/ordemservico/cadastrar" method="POST">
        <div class="form-group">
            <input type="text" class="form-control" name="nome" placeholder="Digite o seu nome" value="{{Session::get('client_name')}}" readonly>
        </div>
        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Digite o seu e-mail" value="{{Session::get('client_email')}}" readonly>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="localizacao" id="localizacao" placeholder="Localização" readonly value="Aguarde...">
            <div id="mapholder"></div>
        </div>
        <div class="form-group">
            <textarea class="form-control" name="descricao" placeholder="Descreva o seu problema ou solicitação" rows="4"></textarea>
        </div>
        <button type="submit" class="btn btn-primary-site">Cadastrar chamado</button>
        {{ csrf_field() }}
        {{ method_field('POST') }}
    </form>
</div>

<script>
function toDataURL(url, callback) {
  var xhr = new XMLHttpRequest();
  xhr.onload = function() {
    var reader = new FileReader();
    reader.onloadend = function() {
      callback(reader.result);
    }
    reader.readAsDataURL(xhr.response);
  };
  xhr.open('GET', url);
  xhr.responseType = 'blob';
  xhr.send();
}



(function(x) {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function (position) {
            var latlon = position.coords.latitude + "," + position.coords.longitude;
            x.value = "Latitude: "+ position.coords.latitude +" Longitude: "+ position.coords.longitude;
            var img_url = "https://maps.googleapis.com/maps/api/staticmap?center="+latlon+"&markers=color:blue|"+latlon+"&zoom=14&size=600x300&scale=2&sensor=false&key=AIzaSyA8Gmt-KPWtMCkKKxO3Wq9pvOti666WN0U";
            
            toDataURL(img_url, function(dataUrl) {
                console.log('RESULT:', dataUrl);
                var map_div = document.getElementById("mapholder")
                map_div.style.backgroundImage = "url('"+dataUrl+"')";
                map_div.style.height = "400px";
                //map_div.innerHTML = dataUrl;
            })
        });
    } else {
        x.value = "Geolocation is not supported by this browser.";
    }
})(document.getElementById("localizacao"));
</script>

<style>
#mapholder {
    margin: 10px 0;
    height:0;
    transition: height 2s ease-in-out;
    background-size: cover;
    background-position: center;
}
</style>

@stop