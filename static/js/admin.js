$(document).on("ready", init);

var view;
var controller;
var model;

function init() {
    console.log("((Init))");

    model = new Model();
    controller = new Controller();
    view = new View();
}

function View() {
    console.log("((View))");
    $("#loadImage").on('change', function () {
        console.log("paso por aqui");
        var countFiles = $(this)[0].files.length;
        var imgPath = $(this)[0].value;
        var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
        var image_holder = $("#imageContainer");
        image_holder.empty();
        if (extn == "png" || extn == "jpg" || extn == "jpeg") {
            if (typeof (FileReader) != "undefined") {
                for (var i = 0; i < countFiles; i++) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $("<img />", {
                            "src": e.target.result,
                            "class": "thumb-image",
                            "id": "img_container_title"
                        }).appendTo(image_holder);
                    };
                    image_holder.show();
                    reader.readAsDataURL($(this)[0].files[i]);
                }
            } else {
            }
        }

    });
    controller.pagination(0);
    $('#paginationImage').twbsPagination({
        totalPages: $("#countPagination")[0].value,
        visiblePages: 6,
        next: 'Next',
        prev: 'Prev',
        onPageClick: function (event, page) {
            console.log("llego hasta aqui");
            var pagination = (page * 5)-5;
            controller.pagination(pagination);
        },
    });
    $("#cancelImagen").on("click", function (){
        $("#titlePhoto").val("");
        $("#idPhoto").val("");
        $("#img_container_title").remove();
    });
}

function Controller() {
    console.log("((Controller))");
    this.pagination = function (pagination){
        var xmlhttp = new XMLHttpRequest();
        var url = "/servicio_tecnico/controller/searchPhoto.php";
        var vars = "idPhotoData=" + pagination;
        xmlhttp.open("POST", url, true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                var myObj = JSON.parse(xmlhttp.responseText);
                $(".container_list_data").remove();
                controller.tablePhoto(myObj,pagination);
            }
            ;
        };
        xmlhttp.send(vars); // Actually execute the request
    };
    this.tablePhoto = function (data,pagination){
        var containerPhoto = document.getElementById('containerDataPhoto');
        for(var i = 0; i < data.length; i++){
            var div = document.createElement("div");
            div.setAttribute('class','container_list_data');
            containerPhoto.appendChild(div);
            $(div).append('<div class="sub_container_list_data container_list_img"><img id="imgSrc_'+data[i][0].id+'" style="width: 50px;height: 50px;" src="'+data[i][1].url+'"></div>');
            $(div).append('<p id="titlePhotoList_'+data[i][0].id+'" class="sub_container_list_data container_list_text">'+data[i][2].title+'</p>');
            $(div).append('<div class="sub_container_list_data container_list_button button_update" id="updatePhoto_'+data[i][0].id+'"><img src="static/img/update.png"></div>');
            $(div).append('<div class="sub_container_list_data container_list_button button_delete" id="deletePhoto_'+data[i][0].id+'"><img src="static/img/delete.png"></div>');
        }
        $(".button_delete").on("click", function (){
            var idPhoto = $(this)[0].id.replace("deletePhoto_" , "")
            var urlImg = $("#imgSrc_"+idPhoto).attr('src');
            controller.deletePhoto(idPhoto,pagination,urlImg)
        });
        $(".button_update").on("click", function (){
           var idPhoto = $(this)[0].id.replace("updatePhoto_" , "");
           $("#idPhoto").val(idPhoto);
           $("#titlePhoto").val($("#titlePhotoList_"+idPhoto).text());
           var image_holder = $("#imageContainer");
           $("#img_container_title").remove();
           $("<img />", {
                "src": $("#imgSrc_"+idPhoto).attr('src'),
                "class": "thumb-image",
                "id": 'img_container_title',
                "name": 'img_container_title'
            }).appendTo(image_holder);
            
        });
    };
    this.deletePhoto = function (id,pagination,imagen){
        var xmlhttp = new XMLHttpRequest();
        var url = "/servicio_tecnico/controller/deletePhoto.php";
        var vars = "idPhotoData=" + id +"&imagen=" + imagen;
        xmlhttp.open("POST", url, true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                var myObj = xmlhttp.responseText;
                $("#titleDelete").removeClass('label_hide');
                controller.pagination(pagination);
            }
            ;
        };
        xmlhttp.send(vars);
    };
}

function Model() {
    console.log("((Model))");
    //..
}