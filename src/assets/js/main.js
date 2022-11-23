//📁 /node_modules/  jquery 
import $ from "jquery";
global.jQuery = global.$ = $;

//📁 /node_modules/  slick 1.8.1
import 'slick-carousel';

//📁 /assets/js/blocks  header
import { hamburgerMenu } from "./blocks/header.js";

//📁 /assets/js/blocks  index
import { programsContentChange } from "./blocks/index.js";

//📁 /assets/js/blocks  slick
import { programsSliider_personal, programsSliider_forTwo, programsSliider_individual, programsSliider_premium } from "./blocks/slick.js";

document.addEventListener("DOMContentLoaded", function () {

    hamburgerMenu();

    programsContentChange();

    programsSliider_personal();
    programsSliider_forTwo();
    programsSliider_individual();
    programsSliider_premium();

});