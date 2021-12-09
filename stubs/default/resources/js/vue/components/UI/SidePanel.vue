<template>
    <div class="side-panel"
        :class="{'-open': isOpen, [componentName]: true}"
        @click="close"
    >
        <aside class="panel" @click.stop>
            <div>
                <header>
                    <h2 v-html="title"></h2>
                    <button class="reset" @click="close">x</button>
                </header>
                <component
                    :is="componentName"
                    v-bind="componentData"
                ></component>
            </div>
        </aside>
    </div>
</template>
<script>

export default {
    name: "SidePanel",
    data() {
        return {
            componentName: '',
            componentData: {},
            title: '',
            isOpen: false,
        };
    },
    created() {
        this.$root.$on('openSidePanel', ({componentName, componentData, title}) => {
            this.componentName = componentName;
            this.componentData = componentData;
            this.title = title;
            this.open();
        });
        this.$root.$on('closePanel', () => {
            this.close();
        });
    },
    methods: {
        open() {
            this.isOpen = true;
        },
        close() {
            if (this.isOpen) {
                this.isOpen = false;
                this.$root.$emit('closeSidePanel');
                setTimeout(()=>{
                    this.componentName = '';
                }, 200)
            }
        },
    },
};
</script>
