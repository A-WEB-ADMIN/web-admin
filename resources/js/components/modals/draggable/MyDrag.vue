<template>
    <div>
        <draggable class="draggable-element" group="group-users" :list="list" animation="200" ghostClass="ghost-on-drag">
            <div class="flex justify-between px-3" v-for="item in list" :key="item.id">
                <p> {{ item.name }} </p>
                <p class="cursor-pointer" @click="$emit('emit-remove', item)">X</p>
            </div>
        </draggable>
    </div>
</template>


<script>
    import drggable from 'vuedraggable';

    export default {
        components: {drggable},
        props: ['list']
    }

</script>

<style scoped>
    .draggable-element {
        width: 300px;
        height: 300px;
    }
    .draggable-element > div > p {
        padding: 10px;
        font-size: 17px;
    }
    .ghost-on-drag {
        background:  #347AB8;
        color: white;
    }
</style>