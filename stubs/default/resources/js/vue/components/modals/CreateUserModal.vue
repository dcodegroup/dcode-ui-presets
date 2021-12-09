<template>
    <div class="form">
        <fieldset>
            <legend>{{ $t("demo.headings.details") }}</legend>
                <input-wrapper
                    v-for="(field, index) in this.$attrs.form.fields"
                    :form="form"
                    :field="index"
                    :label-text="field.label"
                    :key="index"
                >
                    <!-- ToDo: Needs to work with datepickers and selects as well -->
                    <input v-model="form[index]" :type="field.type" :name="index" />
                </input-wrapper>
        </fieldset>
        <footer>
            <button type="submit" @click.prevent="handleSubmit" class="button success">Create User</button>
            <button @click="$emit('closeModal')" class="button -hollow">Cancel</button> 
        </footer>
    </div>
</template>

<script>
export default {
    data(){
        return {
            form: new Form(
                {
                    ...this.$attrs.form.fieldValues,
                },
                {
                    _method: this.$attrs.form.method,
                    resetOnSuccess: false,
                }
            ),
        }
    },
    methods: {
        handleSubmit(){
             this.form.post('user/save')  
            .then(resp => {
                console.log(resp);
                this.$emit('closeModal')
            })
            .catch(err => {
                console.error(err) 
            });
        },
    }
}
</script>
