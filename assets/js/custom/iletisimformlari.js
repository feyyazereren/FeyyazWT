var getParams = function (url) {
    var params = {};
    var parser = document.createElement('a');
    parser.href = url;
    var query = parser.search.substring(1);
    var vars = query.split('&');
    for (var i = 0; i < vars.length; i++) {
        var pair = vars[i].split('=');
        params[pair[0]] = decodeURIComponent(pair[1]);
    }
    return params;
};
var variables = getParams(window.location.href);
document.getElementById("isim").textContent = variables.name.split("+").join(" ");
document.getElementById("email").textContent = variables.email;
if(variables.subject === "iletisim") {
    document.getElementById("konu").textContent = "İletişim";
}else{
    document.getElementById("konu").textContent = "Fiyat teklifi";
}
if(variables.priority === "yuksek") {
    document.getElementById("oncelik").textContent = "Yüksek";
}
else if(variables.priority === "orta"){
    document.getElementById("oncelik").textContent = "Orta";

}
else if(variables.priority === "dusuk"){
    document.getElementById("oncelik").textContent = "Düşük";
}
document.getElementById("mesaj").textContent = variables.message.split("+").join(" ");
document.getElementById("sartlar").innerHTML = "<i class=\"fas fa-check-circle\"></i>";