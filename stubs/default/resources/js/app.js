require('./bootstrap');
import Vue from "vue";
import vClickOutside from "v-click-outside";
import BaseTable from "./vue/components/UI/BaseTable";
import Modal from "./vue/components/UI/ModalWrapper.vue";
import SidePanel from "./vue/components/UI/SidePanel.vue";
import VTable from "./vue/components/UI/VTable.vue";
import VSearch from "./vue/components/UI/VSearch.vue";
import VDatePicker from "./vue/components/UI/VDatePicker.vue";
import MultiselectWrapper from '@dcodegroup-au/vue-multiselect/MultiselectWrapper.vue';
import DatepickerWrapper from '@dcodegroup-au/vue-datepicker/DatepickerWrapper.vue';
// kitchen sink components
import DeleteModal from './vue/components/modals/DeleteModal.vue';
import DeleteModalTrigger from './vue/styleguide/DeleteModalTrigger.vue';
import JobPanelTrigger from './vue/styleguide/JobPanelTrigger.vue';
import SidePanelJobCreate from "./vue/styleguide/SidePanelJobCreate.vue";
// import Icon from "./vue/components/UI/Icon.vue";
// import InputWrapper from "./vue/components/UI/InputWrapper.vue";
// Vue.component("Icon", Icon);
// Vue.component("InputWrapper", InputWrapper);
Vue.component("MultiselectWrapper", MultiselectWrapper);
Vue.component("DatepickerWrapper", DatepickerWrapper);
Vue.component("Modal", Modal);
Vue.component("DeleteModal", DeleteModal);
Vue.component("DeleteModalTrigger", DeleteModalTrigger);
Vue.component("VDatePicker", VDatePicker);
Vue.component("VTable", VTable);
Vue.component("VSearch", VSearch);
Vue.component("BaseTable", BaseTable);
Vue.component("SidePanel", SidePanel);
Vue.component("SidePanelJobCreate", SidePanelJobCreate);
Vue.component("JobPanelTrigger", JobPanelTrigger);

Vue.use(vClickOutside);
new Vue({
    el: "#app",
    data() {
        return {
          csrf_token: document.head.querySelector('meta[name="csrf-token"]').content,
        }
    },
});
