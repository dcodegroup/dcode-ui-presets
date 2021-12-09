<template>
    <div v-click-outside="onClickOutside">
      <button :class="{'active' : active}" @click.prevent="active = !active">...
        <!-- <i class="fal fa-ellipsis-h"/> -->
      </button>
      <ul>
        <h4>Actions</h4>
        <!-- <h4>{{ $t("generic.actions") }}</h4> -->
        <template v-for="(action, id) in actions">
          <li
            v-if="id === 'delete'"
            :key="id"
          >
              <form 
                :action="action.link"
                method="POST"
                ref="form"
              >
                <input
                  type="hidden"
                  name="_token"
                  :value="$root._data.csrf"
                >
                <input
                  type="hidden"
                  name="_method"
                  value="DELETE"
                >
                <button type="submit" @click.prevent="handleDelete">
                 Delete
                  <!-- {{ $t("generic.buttons.delete") }} -->
                </button>
              </form>
            </li>
            <li
              v-else
              :key="action.label"
            >
              <a :href="action.link">{{ action.label }}</a>
            </li>
          </template>
          <template v-if="connections">
            <hr>
            <h4>Connections</h4>
            <!-- <h4>{{ $t("generic.words.connections") }}</h4> -->
            <li
              v-for="connection in connections"
              :key="connection.label"
            >
                <component 
                  v-if="connection.hasOwnProperty('component')" 
                  v-bind:is="connection.component" 
                  v-bind:quote="$attrs.data.data.rowData"
                >
                </component>
                <a v-else :href="connection.link">{{ connection.label }} <i class="fal fa-long-arrow-right"></i></a>
            </li>
          </template>
        </ul>
 
    </div>
</template>
<script>
export default {
  name: "Actions",
  data() {
    return {
      vcoConfig: {
        events: ['dblclick', 'click'],
        isActive: true,
        detectIFrame: true
      },
      active: false,
      actions: this.$attrs.data.data.rowData.actions ?? null,
      connections: this.$attrs.data.data.rowData.links ?? null,
    }
  },
  methods: {
      handleDelete(){
        this.$root.$emit('openModal', {
            componentName: "DeleteModal",
            componentData: {
                header: "Are you sure you want to delete this item?",
                content: "This action can not be undone.",
            },
            callback: ()=> {
                this.delete()
            },
        });
    },
      doAction(){
        this.$root.$emit("closeModal");
        console.log("The delete action is now completed...")
        return true;
    },
    delete(){
      this.$root.$emit("closeModal");
      console.log("The delete action is now completed...")
      this.$refs.form[0].submit();
    },
    onClickOutside (event) {
      this.active = false;
    },
  },
   
}
</script>

