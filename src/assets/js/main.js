//📁 /node_modules/  jquery 
import $ from "jquery";
global.jQuery = global.$ = $;

//📁 /assets/js/blocks  header
import { hamburgerMenu } from "./blocks/header.js";

document.addEventListener("DOMContentLoaded", function () {

    hamburgerMenu();

});