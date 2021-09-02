require('./bootstrap');
import Vue from "vue";
import WindowPal from "./lib/WindowPal.js";
import Tabs from "./lib/Tabs.js";
import SelectFilter from "./lib/SelectFilter.js";
//window.Vue = Vue;

window.onload = (event) => {

    window.pal = new WindowPal(window);

    let tabs = Array.from(document.querySelectorAll('nav.tabs'));
    if(tabs.length){
        tabs.forEach(tab => {
            new Tabs(tab);
        });
    }

    let selectFilters = Array.from(document.querySelectorAll('.select-filter-input'));
    if(selectFilters.length){
        selectFilters.forEach(selectFilter => {
            new SelectFilter(selectFilter);
        });
    }
};

new Vue({
    el: "#app"
});
