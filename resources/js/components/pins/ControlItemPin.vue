<template>
    <div>
        <button class="i-open_modal" @click="open_modal">추가하기</button>

        <ControlItemModal @close="close_by_emit()" @emit_controlitems_1="control_items_1"></ControlItemModal>
    </div>
</template>

<script>
import ControlItemModal from '../modals/ControlItemModal'

export default {
    components: {
        ControlItemModal
    },
    props: ['tabs'],
    methods: {
        open_modal() {
            this.$modal.show(
                'control-item-modal',
                {tabs: this.tabs}
            );
        }
        ,close_by_emit()
        {
            this.$modal.hide('control-item-modal');
        },
        control_items_1(arr)
        {
            this.$emit('emit_controlitems_2', arr);
        }
    },
    mounted() {
        console.log("__tabs__", this.tabs);
    }
}
</script>

<style scoped>
    .i-open_modal{
        padding:5px 10px;
        border-radius: 10px;
        background: #CDCDCD;
        font-weight:bold;
    }

</style>