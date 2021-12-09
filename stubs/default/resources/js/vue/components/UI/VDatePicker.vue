<template>
  <div>
    <date-picker
      v-model="date"
      value-type="format"
      :format="format"
      :type="type"
      @change="$emit('input', date)"
    />
    <input
      :id="name"
      type="hidden"
      :name="name"
      :value="date"
    >
  </div>
</template>

<script>
    import DatePicker from 'vue2-datepicker';
    export default {
        name: 'VDatePicker',
        components: {DatePicker},
        props: {
            value: {
                type: String
            },
            name: {
                required: true,
                type: String
            },
            type: {
                type: String,
                default: 'date'
            },
            format: {
                type: String,
                default: 'YYYY-MM-DD'
            },
        },
        data() {
            return {
                date: this.value,
            }
        }
    }
</script>
