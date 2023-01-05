<template>
    <modal name="approval_line_modal" width="700" height="auto" :scrollable="true" @before-open="beforeOpen">

        <div class="flex flex-col">

            <section class="flex justify-between px-5 py-3 bg-gray-900">
                <div></div>
                <div class="text-gray-50 text-xl font-thin">결재 설정하기</div>
                <button @click="close_modal" class="text-2xl font-bold text-gray-50 "> X </button>
            </section>


            <section class="flex p-3">
                <div class="w-3/6 p-2">
                    <div class="text-2xl"> 직원리스트 </div>

                    <MyDrag class="mydrag-element" :list="left_users" @emit-remove="removeUser(...arguments, left_users)"></MyDrag>

                </div>


                <div class="c-emtpy-box">
                </div>


                <div class="w-3/6 p-2">
                    <div class="text-2xl"> 결재순서 </div>
                    <MyDrag class="mydrag-element" :list="right_users" @emit-remove="removeUser(...arguments, right_users)"></MyDrag>

                </div>
            </section>

            <section class="p-3">
                <button class="bg-blue-900 px-4 py-2 rounded" type="button" @click="insert_to_approval_lines_user_config_AND_set_data_to_localStorage">
                    <span class="text-lg text-gray-50">설정변경</span>
                </button>
            </section>

        </div>

    </modal>
</template>

<script>
    import MyDrag from './draggable/MyDrag'

    export default {
        components : {MyDrag},
        data: function () {
            return {
                left_users: [],
                right_users: []
            }
        },
        methods: {
            beforeOpen (event) {
                this.left_users = event.params.l_users;

                if(event.params.r_users.length > 0)
                {
                    this.right_users = event.params.r_users;
                }
            },
            close_modal ()
            {
                this.$emit('close');
            },
            removeUser(user, list)
            {
                var index = list.indexOf(user);

                if(index > -1)
                {
                    list.splice(index, 1);
                }
            },
            insert_to_approval_lines_user_config_AND_set_data_to_localStorage () {
                /*========================================================================
                =
                =  1__
                =
                =========================================================================*/
                alert("__111__");
                axios.post("/evidence/addtionRegistration/insert_approval_lines_user_config_using_ajax", {
                    /*----------------------------------------
                    -  1. 결재라인 설정 저장
                    -----------------------------------------*/
                    right_users: this.right_users
                })
                .then( response => {
                    console.log(response);
                    /*----------------------------------------
                    -  2. localStorage 에 데이터 저장
                    -----------------------------------------*/
                    alert("__222__");
                    var assoc_array = this.right_users.map( (right_user) => {
                        return {'id': right_user.id}
                    });

                    localStorage.setItem( "approval_line_ids", JSON.stringify(assoc_array) );

                    console.log("__vue__approval_line_ids__", assoc_array);
                    alert("test");
                    this.$emit('close');
                })
                .catch( err => {
                    console.error(err);
                });


            }

        }
    }
</script>





<style scoped>
.mydrag-element {
    width: 300px;
    border: solid gray 1px;
}
.c-emtpy-box {
    width:10px;
    height:100px;
}
</style>