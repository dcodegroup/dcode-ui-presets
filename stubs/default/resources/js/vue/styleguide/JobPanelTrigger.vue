<template>
    <button class="button -hollow" @click="handleCreateJob()">Create New Job</button>    
</template>

<script>
export default {
    name: "JobPanelTrigger",
    methods: {
        handleCreateJob(){
            this.$root.$emit('openSidePanel', {
                componentName: 'SidePanelJobCreate',
                title: `Create New Job`,
                componentData: {title: "Lorem Ispum", meta: "The quick fox jumps over the lazy dog. "},
            });
        },

    }
}
</script>