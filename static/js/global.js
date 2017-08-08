//IE console exception
if (typeof console == "undefined") var console = { log: function () {
} };

var global;

$(document).on("ready", function () {
    global = new Global();
});

function Global() {
    

    this.send = function (data, action, actionResult, async) {
        document.body.style.cursor = "progress"; //cambia icono del mouse

        //agregar codigo validacion csr
        data["csrfmiddlewaretoken"] = $("input[name=csrfmiddlewaretoken]").attr("value");

        $.ajax({
            type: "POST",
            url: action,
            data: data,
            dataType: "json",
            async: async == undefined ? true : false,
            success: function (result) {
                document.body.style.cursor = "default";
                actionResult(result);
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                document.body.style.cursor = "default";
                alert(textStatus);
            }
        });
    };

    this.setCookie = function (c_name, value, exdays) {
        var exdate = new Date();
        exdate.setDate(exdate.getDate() + exdays);
        var c_value = escape(value) + ((exdays == null) ? "" : "; expires=" + exdate.toUTCString());
        document.cookie = c_name + "=" + c_value;
    };

    this.getCookie = function getCookie(c_name) {
        var i, x, y, ARRcookies = document.cookie.split(";");
        for (i = 0; i < ARRcookies.length; i++) {
            x = ARRcookies[i].substr(0, ARRcookies[i].indexOf("="));
            y = ARRcookies[i].substr(ARRcookies[i].indexOf("=") + 1);
            x = x.replace(/^\s+|\s+$/g, "");
            if (x == c_name) {
                return unescape(y);
            }
        }
    };   

}