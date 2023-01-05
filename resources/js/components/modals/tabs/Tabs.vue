<template>
    <div class="c-tabs">
        <ul>
            <li v-for="tab in tabs" :key="tab">
                <span :class="{ active: tab == tabselected}" @click="setTab(tab)">
                    {{ tab }}
                </span>
            </li>
        </ul>

        <slot></slot>
    </div>
</template>


<script>
    export default {
        props: {
            tabs: {
                type: Array
            },
            tabselected: {
                type: String
            }
        },
        methods: {
            setTab(tab){
                this.$emit('emit_tabselected', tab);
            }
        },
        mounted() {
            this.$emit('emit_tabselected', '관리체계');
        }
    }
</script>



<style scoped>
.c-tabs {

}

.c-tabs > ul > li {
    display: inline-block;

}

.c-tabs > ul > li > span {
    position: relative;
    display: block;
    border: 1px solid #cccccc;
    border-radius:7px 5px 0 0;
    padding: 10px 30px;
    cursor: pointer;
    margin-right: 10px;
}

.c-tabs > ul > li > span.active{
    background: #183F74;
    color: white;
}

.c-tabs > ul > li > span:hover {

}
</style>