var countries = ["Kazakhstan","Russia","England","France"];
var cities_by_country = {"Kazakhstan":["Almaty","Astana","Karagandy"],"Russia":["Moscow","Saint-Petersburg","Kazan"],"England":["London","Manchester","Liverpool"],"France":["Paris","Lyon","Marseille"]};
var elder = document.querySelector("#countries");
var kalalar = document.querySelector("#cities");

for (var i = 0; i < countries.length; i++) {
    var option = document.createElement("option");
    option.text = countries[i];
    elder.add(option);
}

var f;
elder.addEventListener("change", function(e) {
    f = e.currentTarget.value;
    var options = kalalar.querySelectorAll("option");
    for (var i = 0; i < options.length; i++) {
        options[i].remove();
    }
    for (var i = 0; i < cities_by_country[f].length; i++) {
        var option = document.createElement("option");
        option.text = cities_by_country[f][i];
        kalalar.add(option);
    }
}) 