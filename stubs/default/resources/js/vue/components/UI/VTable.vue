<template>
  <div>
    <vuetable
      ref="vuetable"
      :api-url="getUrl"
      :fields="fields"
      pagination-path=""
      :multi-sort="true"
      :append-params="filters"
      :sort-params="getSortParam"
      :show-sort-icons="true"
      @vuetable:pagination-data="onPaginationData"
    >
      <template
        v-for="(index, name) in $scopedSlots"
        #[name]="data"
      >
        <slot
          :name="name"
          :data="data"
        />
      </template>
    </vuetable>
    <vuetable-pagination
      ref="pagination"
      @vuetable-pagination:change-page="onChangePage"
    />
  </div>
</template>

<script>
import Vuetable from '@dcodegroup-au/vuetable-3/src/components/Vuetable';
import VuetablePagination from '@dcodegroup-au/vuetable-3/src/components/VuetablePagination';

export default {
    name: "VTable",
    components: {
        Vuetable,
        VuetablePagination,
         // VuetablePaginationInfo,
     },
    props: {
        getUrl: {
            type: String,
            required: true,
        },
        fields: {
            type: Array,
            required: true,
        },
        filters: {
            type: Object,
            default: () => ({})
        }
    },
    mounted(){
        setTimeout(()=>{ // add data header to td elements
            let tableBodyTds = Array.from(document.querySelectorAll('.vuetable-body td'));
            tableBodyTds.forEach(td => {
                let tdClasses = td.classList;
                if(tdClasses[1] && tdClasses[1].includes('-data-')){
                    let dataHeaderContent = tdClasses[1].split('-data-').pop();
                    td.dataset.header = dataHeaderContent;
                }
            });
        }, 2000);
    },
    methods: {
        onChangePage (page) {
            this.$refs.vuetable.changePage(page);
        },
        onPaginationData (paginationData) {
            this.$refs.pagination.setPaginationData(paginationData);
        },
        getSortParam: function(sortOrder) {
            return sortOrder.map(function(sort) {
                return (sort.direction === 'desc' ? '-' : '') + sort.sortField
            }).join(',');

        },
        openShowLink({data}){
            window.location.href = data.links.show;
        },
        getTableRef() {
            return this.$refs.vuetable;
        },
    },
}
</script>
