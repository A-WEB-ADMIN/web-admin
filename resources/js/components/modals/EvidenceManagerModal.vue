<template>

    <modal name="evidence-modal" width="700" height="auto" :scrollable="true" :draggable="true" @before-open="beforeOpen">

        <div class="flex flex-col">
                <section class="flex justify-between px-5 py-3 bg-gray-900">
                    <div></div>
                    <div class="text-gray-50 text-xl font-thin">증적관리 담당자</div>
                    <button @click="close_modal" class="text-2xl font-bold text-gray-50"> X </button>
                </section>

                <section class="p-2">

                    <div class="p-2">
                        <input type="text" v-model="search" placeholder="입력후 엔터키">
                    </div>

                    <div class="p-2 c-tableBox">
                        <table class="c-tableBox__table">
                            <thead>
                                <tr>
                                    <td></td> <td>NO</td> <td>이름</td> <td>이메일</td>
                                </tr>
                            </thead>

                            <tbody>
                                <tr v-for="user in com_users" :key="user.id">
                                    <td> <input type="checkbox" name="users" :value="user.id" v-model="selected"> </td>
                                    <td> {{ user.id }} </td>
                                    <td> {{ user.name }} </td>
                                    <td> {{ user.email }} </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </section>

                <section class="p-3">
                    <button class="bg-blue-900 px-4 py-2 rounded" type="button" @click="set_data_to_localStorage">
                        <span class="text-lg text-gray-50">담당자 변경</span>
                    </button>
                </section>
        </div>

    </modal>

</template>

<script>
    export default {
        data() {
            return {
                search: '',
                users: [],
                selected: []
            }
        },
        computed: {
            com_users: function () {
                return this.users.filter( user => {
                    return user.name.toLowerCase().includes(this.search.toLowerCase());
                });
            }
        },
        methods: {
            beforeOpen (event) {
                console.log("__event__", event.params.users);
                this.users = event.params.users;
            },
            close_modal ()
            {
                this.$emit('close');
            },
            set_data_to_localStorage ()
            {

                alert("__333__");

                var assoc_array = this.selected.map( (select) => {
                    return {'id': select}
                });

                localStorage.setItem( "evidence_managers", JSON.stringify(assoc_array) );

                console.log("__vue__evidence_managers__:", assoc_array );

                this.$emit('emit-evidence_managers_1', this.selected);


                this.$emit('close');



            }

        }
    }
</script>

<style scoped>
.c-tableBox {
    height: 200px;
    overflow: auto;
}


.c-tableBox__table {
    border: 1px solid gray;

}

.c-tableBox__table > thead {
    background: #eeeeee;
}

.c-tableBox__table > tbody > tr > td {
    border: 1px solid gray;
}
</style>