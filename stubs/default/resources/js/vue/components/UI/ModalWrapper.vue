<template>
    <transition name="fade">
        <div class="modal-wrapper" v-if="isOpen && componentName" @click="isOpen=false">
            <div class="modal" @click.stop>
                <button class="close" @click="isOpen=false">x</button>
                <component
                    :is="componentName"
                    v-bind="componentData"
                    v-on:confirm="handleConfirm"
                    v-on:closeModal="isOpen = false"
                ></component>    
            </div>
        </div>
    </transition>
</template>
<script>
export default {
    data() {
        return {
            componentName: '',
            componentData: {},
            callback: null,
            isOpen: false,
        }
    },
    created(){
        this.$root.$on("openModal", (payload)=>{
            this.isOpen = true;
            if ('componentName' in payload) this.componentName = payload.componentName;
            if ('componentData' in payload) this.componentData = payload.componentData;
            this.callback = payload.callback;
        });
        this.$root.$on("closeModal",()=>{
            this.isOpen = false;
        });
    },
    methods: {
        handleConfirm(data = null){
            if(data){
                this.componentData = data;
                this.$root.$emit('modalDataUpdated', data);
                return
            }
            this.callback();
        }
    },
}
</script>