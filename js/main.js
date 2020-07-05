var from = new Date();
from.setHours(8);
from.setMinutes(0);
from.setSeconds(0);
from.setMilliseconds(0);

var to = new Date();
to.setHours(16);
to.setMinutes(0);
to.setSeconds(0);
to.setMilliseconds(0);
setInterval(function () {
    var now = new Date();
    if (from < now && now < to) {
        var left = new Date(to - now);
        document.getElementById("demo").innerHTML = "Pracujemy jeszcze przez: " + left.getHours() + ":" + left.getMinutes() + ":" + left.getSeconds();
    }
    else document.getElementById("demo").innerHTML = "Nie pracujemy";
}, 1000);