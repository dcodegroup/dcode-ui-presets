

<template>
    <button type="submit" class="button tertiary" @click.prevent="handleClick">Create User</button>
</template>

<script>
export default {
    name: "FormModalTrigger",
    data(){
        return {
            //ToDo This needs to be removed and the fields passed in through componentData
            //We also need input field options which correspond
            form: {
                method: 'post',
                fieldValues : {
                    name: null,
                    preferred_name: null,
                    email: null,
                },
                fields: {
                    name: {
                        type: 'text',
                        label: 'demo.labels.name',
                    },
                    preferred_name: {
                        type: 'text',
                        label: 'demo.labels.preferred_name',
                    },
                    email:  {
                        type: 'email',
                        label: 'generic.words.email',
                    },
                },
            },
        }
    },

    methods: {
        handleClick(){
            this.$root.$emit('openModal', {
                componentName: "CreateUserModal",
                componentData:  {
                    form: this.form,
                }
            });
        },
    
    }
}
</script>