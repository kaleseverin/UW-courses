"use strict";

var last;
var first;
window.onload = function(){

    var classes = $$("pre");
    for(var i = 0; i < classes.length; i++){
        var nameSplit = classes[i].innerHTML.split(",");
        if (nameSplit.length > 1){
            var div = $(document.createElement("div"));
            last = nameSplit[0].split(" ");
            last = last[last.length-1];
            first = nameSplit[1].split(" ")[0];
            var div = $(document.createElement("div"));
            div.innerHTML = first + " " + last;
            $$("#prof li")[0].innerHTML = "Name: " + first + " " + last;
            return;
        }
    }
};

