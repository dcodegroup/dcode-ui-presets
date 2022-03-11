require('./bootstrap');
import Vue from "vue";
import BaseTable from "./vue/components/UI/BaseTable"; //toDo: need to replace this one
import vClickOutside from "v-click-outside";
//ToDo import Icon from "./vue/components/UI/Icon.vue";
//ToDo import InputWrapper from "./vue/components/UI/InputWrapper.vue";
import Modal from "./vue/components/UI/ModalWrapper.vue";
import SidePanel from "./vue/components/UI/SidePanel.vue";
import SidePanelJobCreate from "./vue/styleguide/SidePanelJobCreate.vue";
import VTable from "./vue/components/UI/VTable.vue";
import VDatePicker from "./vue/components/UI/VDatePicker.vue";
import MultiselectWrapper from '@dcodegroup-au/vue-multiselect/MultiselectWrapper.vue';
import DatepickerWrapper from '@dcodegroup-au/vue-datepicker/DatepickerWrapper.vue';
import DeleteModal from './vue/components/modals/DeleteModal.vue';
import DeleteModalTrigger from './vue/styleguide/DeleteModalTrigger.vue';
import JobPanelTrigger from './vue/styleguide/JobPanelTrigger.vue';

// Vue.component("Icon", Icon);
// Vue.component("InputWrapper", InputWrapper);
Vue.component("MultiselectWrapper", MultiselectWrapper);
Vue.component("DatepickerWrapper", DatepickerWrapper);
Vue.component("Modal", Modal);
Vue.component("DeleteModal", DeleteModal);
Vue.component("DeleteModalTrigger", DeleteModalTrigger);
Vue.component("VDatePicker", VDatePicker);
Vue.component("VTable", VTable);
Vue.component("BaseTable", BaseTable);
Vue.component("SidePanel", SidePanel);
Vue.component("SidePanelJobCreate", SidePanelJobCreate);
Vue.component("JobPanelTrigger", JobPanelTrigger);

Vue.use(vClickOutside);
new Vue({
    el: "#app",
    data: {
        csrf: document.head.querySelector('meta[name="csrf-token"]').content,
    },
    methods: {
        dateToIso(date) {
            return (date instanceof Date)
            ? date.getFullYear() +
                        "-" + this.padZero(date.getMonth() + 1) +
                        "-" + this.padZero(date.getDate())
            : undefined;
        },
        padZero(n) {
            return n < 10 ? "0" + n : n;
        },
    },
});
