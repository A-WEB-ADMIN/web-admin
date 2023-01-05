<template>
    <div v-if="istabselected">
        <slot></slot>
    </div>
</template>


<script>
    export default {
        props: {
            istabselected: {
                type: Boolean
            }
        }

    }
</script>



