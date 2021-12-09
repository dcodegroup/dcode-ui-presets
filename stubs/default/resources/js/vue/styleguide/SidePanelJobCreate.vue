<template>
    <div>
        <div>
            <section>
                <h4>{{title}}</h4>
                {{meta}}
            </section>
        </div>
    </div>
</template>
<script>
    export default {
        props: ['title', 'meta'],
    }
</script>  