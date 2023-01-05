<template>
    <div>
        <button class="i-open_modal" @click="open_modal">설정하기</button>

        <ApprovalModal @close="close_by_emit()"></ApprovalModal>

    </div>
</template>

<script>
    import ApprovalModal from '../modals/ApprovalLineModal'

    export default {
        components: {
            ApprovalModal
        },
        props: ['l_users', 'r_users'],
        methods: {
            open_modal() {
                this.$modal.show(
                    'approval_line_modal',
                    {
                        l_users: this.l_users,
                        r_users: this.r_users
                    }
                );
            }
            ,close_by_emit()
            {
                this.$modal.hide('approval_line_modal');
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