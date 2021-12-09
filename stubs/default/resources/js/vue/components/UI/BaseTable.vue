<template>
  <v-table
    ref="vtable"
    :fields="fields"
    :get-url="getUrl"
    :filters="filters"
  >
    <template #actions="props">
      <actions :data="{...props}" />
    </template>
  </v-table>
</template>
<script>
import actions from "./Actions.vue";

export default {
   components: { actions },
  props: {
      getUrl: {
        type: String,
        required: true,
      },
      fields: {
        required: true,
      }
  },
  data() {
      return {
          filters: {},
      };
  },
  created() {
    this.$root.$on("tableFilterChange", ({ params }) => {
        this.filters = params;
        this.$nextTick(() => this.$refs.vtable.getTableRef().refresh());
        this.$emit('filter-changed', params);
    });
  }
}
</script>
