require('./bootstrap');
import Vue from "vue";
import WindowPal from "./lib/WindowPal.js";
import Tabs from "./lib/Tabs.js";
import SelectFilter from "./lib/SelectFilter.js";
//window.Vue = Vue;
import BaseTable from "./vue/components/UI/BaseTable";

import vClickOutside from "v-click-outside";
// import Icon from "./vue/components/UI/Icon.vue";
// import InputWrapper from "./vue/components/UI/InputWrapper.vue";
import Modal from "./vue/components/UI/ModalWrapper.vue";
import SidePanel from "./vue/components/UI/SidePanel.vue";
import SidePanelJobCreate from "./vue/styleguide/SidePanelJobCreate.vue";
import VTable from "./vue/components/UI/VTable.vue";
import VDatePicker from "./vue/components/UI/VDatePicker.vue";
import VSelect from "./vue/components/UI/VSelect.vue";
import DeleteModal from './vue/components/modals/DeleteModal.vue';
import DeleteModalTrigger from './vue/styleguide/DeleteModalTrigger.vue';
import JobPanelTrigger from './vue/styleguide/JobPanelTrigger.vue';

// Vue.component("Icon", Icon);
// Vue.component("InputWrapper", InputWrapper);
Vue.component("Modal", Modal);
Vue.component("DeleteModal", DeleteModal);
Vue.component("DeleteModalTrigger", DeleteModalTrigger);
Vue.component("VDatePicker", VDatePicker);
Vue.component("VSelect", VSelect);
Vue.component("VTable", VTable);
Vue.component("BaseTable", BaseTable);
Vue.component("SidePanel", SidePanel);
Vue.component("SidePanelJobCreate", SidePanelJobCreate);
Vue.component("JobPanelTrigger", JobPanelTrigger);

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

Vue.use(vClickOutside);
new Vue({
    el: "#app"
});
