<template>
    <span
        ref="icon"
        :class="display"
        v-html="require(`svg/${name}.svg`)"
    ></span>
</template>

<script>
export default {
    name: "Icon",
    props: {
        name: {
            type: String,
            required: true,
        },
        display: {
            type: String,
        },
        strokeColor: {
            type: String,
            default: "",
        },
        width: {
            type: Number,
            default: 5,
        }
    },
    mounted() {
        let svg = this.$refs.icon.querySelector('svg');
        svg.style.width = `${this.width}px`;
        if (this.strokeColor) {
            let paths = this.$refs.icon.getElementsByTagName("path");

            Object.keys(paths).forEach(
                function (key) {
                    paths[key].style.stroke = this.strokeColor;
                }.bind(this)
            );
        }
    },
};
</script>