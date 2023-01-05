<template>
    <div>
        <button class="i-open_modal" @click="open_modal">추가하기</button>

        <EvidenceManagerModal @close="close_by_emit()" @emit-evidence_managers_1="evidence_managers_1"></EvidenceManagerModal>

    </div>
</template>

<script>
    import EvidenceManagerModal from '../modals/EvidenceManagerModal'

    export default {
        components: {
            EvidenceManagerModal
        },
        props: ['users'],
        methods: {
            open_modal() {
                this.$modal.show(
                    'evidence-modal',
                    {users: this.users}
                );
            }
            ,close_by_emit()
            {
                this.$modal.hide('evidence-modal');
            },
            evidence_managers_1(arr)
            {
                console.log("__emit-evidence_managers_1:", arr);

                this.$emit('emit-evidence_managers_2', arr);
            }
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