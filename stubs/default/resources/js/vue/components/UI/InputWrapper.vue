<template>
    <div :class="{ 'form-error': form.errors.has(field) }">
        <label :for="field" :class="labelClass"
            ><slot name="label"></slot>{{ $t(labelText) }}</label
        >
        <slot></slot>
        <small v-if="form.errors.has(field)">
            <span><icon name="alert" :width="16"></icon></span>
        {{ form.errors.first(field) }}</small>
    </div>
</template>

<script>
export default {
    name: "InputWrapper",
    props: {
        form: {
            type: Object,
            required: true,
        },
        field: {
            type: String,
            required: true,
        },
        labelText: {
            type: String,
        },
        labelClass: {
            type: String,
        },
    },
};
</script>

 