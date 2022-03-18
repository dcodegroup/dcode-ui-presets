

<template>
    <button type="submit" class="button -hollow" @click.prevent="handleDelete">Delete</button>
</template>

<script>
export default {
    name: "DeleteModalTrigger",
    methods: {
        handleDelete(){
        this.$root.$emit('openModal', {
                componentName: "DeleteModal",
                componentData: {
                    header: "Are you sure you want to delete this item?",
                    content: "This action can not be undone.",
                },
                callback: ()=> {
                    this.doAction()
                },
            });
        },
         doAction(){
            this.$root.$emit("closeModal");
            console.log("The delete action is now completed...")
            return true;
        }
    }
}
</script>