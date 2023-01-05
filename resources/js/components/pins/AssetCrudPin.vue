<template>
    <div>
        <button class="button_assetcrud" @click="open_modal">
            <slot></slot>
        </button>

        <AssetCrudModal :company_id="company_id" :standard_id="standard_id" :tab_id="tab_id" :current_tab="current_tab" :columns="columns" :myconfigcolumns="myconfigcolumns"  @close="close_by_emit()"></AssetCrudModal>

    </div>
</template>

<script>
    import AssetCrudModal from '../modals/AssetCrudModal'

    export default {
        props: ['company_id', 'standard_id', 'tab_id', 'current_tab', 'columns', 'myconfigcolumns'],
        components: {
            AssetCrudModal
        },
        methods: {
            open_modal() {
                this.$modal.show(
                    'asset-crud-modal'
                );
            }
            ,close_by_emit()
            {
                this.$modal.hide('asset-crud-modal');
            }
        }
    }
</script>

<style scoped>
.button_assetcrud{
    color: white;
}

</style>