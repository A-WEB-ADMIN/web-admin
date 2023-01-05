<template>
    <div>
        <button @click="open_modal">
            <slot></slot>
        </button>


        <ModalForm :templatedefaults="templatedefaults" :company_id="company_id" :standard_id="standard_id" :evidence_id="evidence_id" @close="close_by_emit()"></ModalForm>

    </div>
</template>

<script>
    import ModalForm from './ModalForm'

    export default {
        components: {
            ModalForm
        },
        props: ['templatedefaults', 'company_id', 'standard_id', 'evidence_id'],
        methods: {
            open_modal() {
                this.$modal.show(
                    'form-modal',
                    {users: this.users}
                );
            }
            ,close_by_emit()
            {
                this.$modal.hide('form-modal');
            }
        }
    }
</script>

<style scoped>


</style>