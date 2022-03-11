<template>
    <section>
        <header>
            <h2 v-html="header"></h2>
        </header>
        <p  v-text="content"></p>
        <footer>
            <button @click="$emit('confirm')" class="button success">Yes delete</button>
            <button @click="$emit('closeModal')" class="button -hollow">Cancel</button> 
        </footer>
    </section>
</template>

<script>
export default {
    props: ['header', 'content'],

    data(){
        return {
            header: this.$attrs.header,
            content: this.$attrs.content,
        }
    },
}
 
</script>
