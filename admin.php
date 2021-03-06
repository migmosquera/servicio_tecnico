<?php
include_once './controller/searchUser.php';
include_once './controller/countPhoto.php';
include_once './controller/changeLanguaje.php';
include_once './controller/saveUser.php';
include_once './controller/savePhoto.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Admin</title>
        <meta charset="utf-8">
        <meta name = "format-detection" content = "telefono venezuela arreglo celulares portatiles" />
        <link rel="stylesheet" href="static/css/grid.css">
        <link rel="stylesheet" href="static/css/style.css">
        <link rel="stylesheet" href="static/css/admin.css">
    </head>

    <body>

        <?php include './templateGobal/header_admin.php'; ?>
        <!--- Content-->
        <section class="container_section">    
            <form action="" method="post">
                <div class="container_title_data">
                    <h5 style="color: #2533A2;"><?php echo $title_admin_data ?></h5>
                </div>
                <div class="container_form">
                    <input type="hidden" id="idUser" name="idUser" value="<?php echo $user->getId() ?>" >
                    <div class="sub_container_form">
                        <div class="container_input">
                            <input class="input_form" type="text" name="email" id="email" placeholder="<?php echo $form_email ?>" value="<?php echo $user->getEmail() ?>" />
                        </div>
                        <div class="container_input">
                            <input class="input_form" type="text" name="phone1" id="phone1" placeholder="<?php echo $form_phone1 ?>" value="<?php echo $user->getPhone1() ?>" />
                        </div>
                        <div class="container_input">
                            <input class="input_form" type="text" name="phone2" id="phone2" placeholder="<?php echo $form_phone2 ?>" value="<?php echo $user->getPhone2() ?>" />
                        </div>
                        <div class="container_input">
                            <input class="input_form" type="text" name="phone3" id="phone3" placeholder="<?php echo $form_phone3 ?>" value="<?php echo $user->getPhone3() ?>" />
                        </div>
                        <div>
                            <textarea class="textarea_form" name="address" id="address" placeholder="<?php echo $form_Address ?>"><?php echo $user->getAddress() ?></textarea>
                        </div>
                    </div>
                    <div class="sub_container_form">
                        <div class="container_input">
                            <input class="input_form" type="text" name="url_facebook" id="url_facebook" placeholder="<?php echo $form_url_facebook ?>" value="<?php echo $user->getUrl_facebook() ?>" />
                        </div>
                        <div class="container_input">
                            <input class="input_form" type="text" name="url_twitter" id="url_twitter" placeholder="<?php echo $form_url_twitter ?>" value="<?php echo $user->getUrl_twitter() ?>" />
                        </div>
                        <div class="container_input">
                            <input class="input_form" type="text" name="id_twitter" id="id_twitter" placeholder="<?php echo $form_id_twitter ?>" value="<?php echo $user->getId_twitter() ?>" />
                        </div>
                        <div class="container_input">
                            <input class="input_form" type="text" name="url_instagram" id="url_instagram" placeholder="<?php echo $form_url_instagram ?>" value="<?php echo $user->getUrl_instagram() ?>" />
                        </div>
                        <div class="container_input">
                            <input class="input_form" type="text" name="name_instagram" id="name_instagram" placeholder="<?php echo $form_name_instagram ?>" value="<?php echo $user->getName_instagram() ?>" />
                        </div>
                        <div class="container_input">
                            <input class="input_form" type="text" name="token_instagram" id="token_instagram" placeholder="<?php echo $form_token_instagram ?>" value="<?php echo $user->getToken_instagram() ?>" />
                        </div>
                        <div>
                            <input class="input_form" type="text" name="id_instagram" id="id_instagram" placeholder="<?php echo $form_id_instagram ?>" value="<?php echo $user->getId_instagram() ?>" />
                        </div>
                    </div>
                    <div>
                        <p class="msj_edit"><?php echo $msj_save_user ?></p>
                    </div>
                    <div>
                        <input type="submit" name="saveUser" id="saveUser" value="<?php echo $save_button ?>" >
                    </div>
                </div>    
            </form>
        </section>
        <section class="container_section">    
            <div class="container_title_data">
                <h5 style="color: #2533A2;"><?php echo $title_admin_multimedia ?></h5>
            </div>
            <div class="container_title_data">
                <h7 style="color: #2533A2;font-size: 18px;"><?php echo $title_img ?></h7>
            </div>
            <div class="container_form">
                <div class="sub_container_form">
                    <div class="container_title_data">
                        <h7 style="color: #2533A2;font-size: 18px;"><?php echo $form_upload_photo ?></h7>
                    </div>
                    <form method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="idPhoto" id="idPhoto" value=""/>
                        <div>
                            <div class="container_input">
                                <input class="input_form" type="text" name="titlePhoto" id="titlePhoto" placeholder="<?php echo $title_admin_photo ?>" value="" />
                            </div>
                            <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
                            <p id="imageContainer" class="imagenContainer" ></p>
                            <input type="file" name="loadImage" id="loadImage">
                        </div>
                        <div>
                            <p class="msj_edit"><?php echo $msjSavePhoto ?></p>
                        </div>
                        <div>
                            <button type="submit" name="uploadImagen" id="uploadImagen" ><span><?php echo $save_button ?></span></button>
                            <button type="button" name="cancelImagen" id="cancelImagen"><?php echo $cancel_button ?></button>
                        </div>
                        
                    </form>
                </div>
                <div class="sub_container_form">
                    <div class="container_title_data">
                        <h7 style="color: #2533A2;font-size: 18px;"><?php echo $title_galery_img ?></h7>
                    </div>
                    <input type="hidden" name="countPagination" id="countPagination" value="<?php echo $count_image ?>"/>
                    
                    <div id="containerDataPhoto">
                    </div>
                    <p id="titleDelete" class="labe_hide" >Se a eliminado la imagen</p>
                    <div class="container_pagination_right">
                        <p id="paginationImage"></p>
                    </div>
                </div>
                
                
            </div>    
        </section>
        <!--- Footer-->
        <?php include './templateGobal/footer.php'; ?>


        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twbs-pagination/1.4.1/jquery.twbsPagination.min.js"></script>
        <script src="static/js/global.js"></script>
        <script src="static/js/admin.js"></script>
    </body>
</html>