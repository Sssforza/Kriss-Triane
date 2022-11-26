//📁 /node_modules/  jquery 
import $ from "jquery";
global.jQuery = global.$ = $;

//📁 /node_modules/  slick 1.8.1
import 'slick-carousel';

//📁 /node_modules/  magnific-popup 1.1.0
import 'magnific-popup';

//📁 /assets/js/blocks  header
import { hamburgerMenu, headerFixed } from "./blocks/header.js";

//📁 /assets/js/blocks  index
import { programsContentChange } from "./blocks/index.js";

//📁 /assets/js/blocks  index
import { getDiscount, formRequestCall } from "./blocks/validations.js";

//📁 /assets/js/blocks  slick
import { programsSliider_personal, programsSliider_forTwo, programsSliider_individual, programsSliider_premium, reviewsSliider, specialistSliider } from "./blocks/slick.js";

//📁 /assets/js/popup  magnific-popup
import { requestCall, messageThanks, popupYoutube } from "./blocks/popup.js";

document.addEventListener("DOMContentLoaded", function () {

    hamburgerMenu();
    headerFixed();

    programsContentChange();

    getDiscount();
    formRequestCall();

    programsSliider_personal();
    programsSliider_forTwo();
    programsSliider_individual();
    programsSliider_premium();
    reviewsSliider();
    specialistSliider();

    requestCall();
    messageThanks();
    popupYoutube();

});