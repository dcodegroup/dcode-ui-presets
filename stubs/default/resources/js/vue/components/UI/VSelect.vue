<template>
<div>
    <v-selectize
        v-model="selection"
        :options="options"
        :key-by="optionValue"
        :label="optionLabel"
        :keys="searchBy"
        :multiple="multi"
        :placeholder="placeholder"
    />
    <template v-if="multi">
        <input
            v-for="value in inputValue"
            :key="value"
            type="hidden"
            :name="inputName + '[]'"
            :value="value"
        /> 
    </template>
    <input
        v-else
        type="hidden"
        :name="inputName"
        :value="inputValue"
    /> 
 </div>
</template>

<script>
import VSelectize from "@isneezy/vue-selectize";
export default {
    name: "VSelect",
    components: { VSelectize },
    props: {
        inputName: {
            type: String,
            required: true,
        },
        options: {
            type: Array,
            required: true,
        },
        optionValue: {
            type: String,
            default: 'id'
        },
        value: {
            default: null,
        },
        multi: {
            type: Boolean,
            default: false
        },
        optionLabel: {
            type: String,
            default: "name",
        },
        searchBy: {
            type: Array,
            default: ()=> ['name'],
        },
        placeholder: {
            type: String,
            default: "-- Select an option --",
        }
    },
    data(){
        return {
            selection: null,
        }
    },
    mounted() {
        this.getSelection();
    },
    computed: {
        inputValue() {
            let input = this.selection; 
            if (!input) {
                return;
            } else if (this.multi && Array.isArray(input)) {
                return input.map(value => {
                    return value[this.optionValue];
                });
            } else {
                return input[this.optionValue];
            }
        },
    },
    methods: {
        getSelection() {
            if (this.value) {
                if (this.multi && Array.isArray(this.value)) {
                    this.selection = this.options.filter((option) => {
                        return this.value.find((element) => {
                            return element === option[this.optionValue];
                        });
                    });
                    return;
                }
                console.log("This value", this.value);
                this.selection = this.options.filter(option => option[this.optionValue] === this.value);
            }
        },

    },
}
</script>
