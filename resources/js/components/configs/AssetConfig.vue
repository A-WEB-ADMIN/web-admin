<template>
    <div class="WRAPPER-CONFIG">

        <header class="l-top">
            <div class="text-base"> Home > 자산관리 > 자산목록 > </div>
            <div class="text-3xl font-bold">자산분류 및 컬럼설정</div>
            <div class="flex justify-end">
                <button class="px-6 py-3 bg-blue-800 text-white rounded" @click="INSERT_or_UPDATE_TO_TABS_and_COLUMNS">변경사항 저장</button>
            </div>
        </header>

        <main class="l-main">
            <div class="l-mainsub">
            <!--=================================================================================
            =
            = 1. 왼쪽 박스
            =
            ===================================================================================-->
                <section class="l-mainsub__box">
                    <div class="w-4/12 h-6/6">

                        <article class="flex flex-col">

                            <div class="h-8 text-xl">자산분류 관리</div>

                            <div class="h-8 text-xl">&nbsp</div>

                            <div class="h-8 text-xl"> <button class="px-6 py-1 bg-gray-500 text-white rounded">추가</button> </div>

                            <div class="h-60 pt-6">
                                <select class="w-full h-80" multiple @change="change_tab($event.target.value)">
                                    <option v-for="tab in tabs" :value="JSON.stringify( {id:tab.id, tab:tab.tab, tab_korean:tab.tab_korean, explanation:tab.explanation, is_display:tab.is_display} )"> {{ tab.tab_korean }} </option>
                                </select>
                            </div>

                        </article>

                    </div>

                    <div class="empty_small">
                    </div>

                    <div class="w-8/12 h-6/6">
                        <article class="flex flex-col">

                            <div class="h-8 text-xl">&nbsp</div>
                            <div class="h-8 text-xl">&nbsp</div>
                            <div class="h-8 text-xl">&nbsp</div>
                            <div class="h-60 pt-6">


                                    <table class="table_config">
                                        <tbody>

                                            <input type="hidden"/>


                                            <tr>
                                                <td>분류</td> <td> <input type="text" v-model="left_detail.tab" disabled/>  </td>
                                            </tr>

                                            <tr>
                                                <td>분류명</td> <td> <input type="text" v-model="left_detail.tab_korean" /> </td>
                                            </tr>

                                            <tr>
                                                <td>분류설명</td> <td> <input type="text" v-model="left_detail.explanation" /> </td>

                                            </tr>

                                            <tr>
                                                <td>분류표시</td> <td> <input type="checkbox" v-model="left_detail.is_display"/> </td>
                                            </tr>

                                            <tr>
                                                <td colspan="2"> <button class="px-6 py-2 bg-gray-500 text-white rounded" @click="push_to_left_array">확인</button> </td>
                                            </tr>
                                        </tbody>
                                    </table>


                            </div>



                        </article>

                    </div>

                </section>

                <section class="empty">
                </section>
                <!--==============================================================================
                =
                = 2. 오른쪽 박스
                =
                ===============================================================================-->
                <section class="l-mainsub__box">
                    <div class="w-4/12 h-6/6">

                        <article class="flex flex-col">

                            <div class="h-8 text-xl">분류별 컬럼 관리</div>

                            <div class="h-8 text-xl">&nbsp</div>

                            <div class="h-8 text-xl"> <button class="px-3 py-1 bg-gray-500 text-white rounded">추가</button> </div>

                            <div class="h-60 pt-6">
                                <select class="w-full h-80" multiple @change="change_column($event.target.value)">
                                    <option v-for="column in columns" :value="JSON.stringify( {id:column.id, tab:column.tab , column:column.column, column_korean:column.column_korean, is_display:column.is_display} )"> {{ column.column_korean }} </option>
                                </select>
                            </div>

                        </article>

                    </div>

                    <div class="empty_small">
                    </div>

                    <div class="w-8/12 h-6/6">
                        <article class="flex flex-col">

                            <div class="h-8 text-xl">&nbsp</div>
                            <div class="h-8 text-xl">&nbsp</div>
                            <div class="h-8 text-xl">&nbsp</div>
                            <div class="h-60 pt-6">


                                    <table class="table_config">
                                        <tr>
                                            <td>컬럼명</td> <td> <input type="text" v-model="right_detail.column_korean"/>  </td>
                                        </tr>

                                        <tr>
                                            <td>컬럼표시</td> <td> <input type="checkbox" v-model="right_detail.is_display"/> </td>
                                        </tr>

                                        <tr>
                                            <td>컬럼너비</td> <td> <input type="text" /> </td>
                                        </tr>

                                        <tr>
                                            <td colspan="2"> <button class="px-6 py-2 bg-gray-500 text-white rounded" @click="push_to_right_array">확인</button> </td>
                                        </tr>
                                    </table>

                            </div>

                        </article>
                    </div>
                </section>
            </div>
        </main>


    </div>
</template>

<script>

export default {
    props: ['is_exist_tabs', 'company_id', 'standard_id', 'tab_id'],
    data(){
        return {
            tabs: [],

            left_array: [],

            left_HashMap: {},
            left_uniq_array: {},

            left_detail: {
                id: '',
                tab: '',
                tab_korean: '',
                explanation: '',
                is_display: true
            },

            columns: [],

            right_array: [],

            right_HashMap: {},
            right_uniq_array: {},

            right_detail: {
                id: '',
                tab: '',
                column: '',
                column_korean: '',
                is_display: true
            }
        }
    },
    methods: {
        change_tab(value)
        {
            //alert('test');
            /*--------------------------------------------
            -
            -  1. 왼쪽
            -
            ---------------------------------------------*/
            var json = JSON.parse(value);

            this.left_detail.id = json.id;
            this.left_detail.tab = json.tab;
            this.left_detail.tab_korean = json.tab_korean;
            this.left_detail.explanation = json.explanation;
            this.left_detail.is_display = json.is_display;
            /*--------------------------------------------
            -
            -  2. 오른쪽
            -
            ---------------------------------------------*/
            axios.get("/asset/config/get_columns_by_tab?tab=" + json.tab)
                .then( response => {
                    console.log("vue_get_columns:", response);

                    this.columns = response.data.columns;

                })
                .catch( err => {
                    console.error(err);
                });

        },
        change_column(value)
        {
            //alert("test");
            /*--------------------------------------------
            -
            -  1. 오른쪽
            -
            ---------------------------------------------*/
            var json = JSON.parse(value);

            this.right_detail.id = json.id;
            this.right_detail.tab = json.tab;
            this.right_detail.column = json.column;
            this.right_detail.column_korean = json.column_korean;
            this.right_detail.is_display = json.is_display;
        },
        push_to_left_array()
        {

            this.left_array.push( {id:this.left_detail.id , tab: this.left_detail.tab, tab_korean:this.left_detail.tab_korean, explanation:this.left_detail.explanation, is_display: this.left_detail.is_display} );

        },
        push_to_right_array()
        {
            //alert("test");

            this.right_array.push( {id:this.right_detail.id, tab: this.right_detail.tab, column: this.right_detail.column, column_korean: this.right_detail.column_korean, is_display: this.right_detail.is_display} );
        },

        INSERT_or_UPDATE_TO_TABS_and_COLUMNS()
        {
            //alert("test");
            /*----------------------------------------
            -
            -  1. [왼쪽] 중복값 제거
            -
            -----------------------------------------*/
            this.left_uniq_array = this.left_array.filter( (json, index) => {

                var left_already_exist = this.left_HashMap.hasOwnProperty(json.tab);

                return left_already_exist ?  false : this.left_HashMap[json.tab] = true;
            });

            console.log("_left_uniq_array:", this.left_uniq_array);
            /*----------------------------------------
            -
            -  2. [오른쪽] 중복값 제거
            -
            -----------------------------------------*/
            this.right_uniq_array = this.right_array.filter( (json, index) => {

                var right_already_exist = this.right_HashMap.hasOwnProperty( json.column );

                return right_already_exist ? false : this.right_HashMap[json.column] = true;
            });
            /*----------------------------------------
            -
            -  3. 최종 값을 DB INSERT 또는 UPDATE
            -
            -----------------------------------------*/
            var json_data = {
                lefts: this.left_uniq_array,
                rights: this.right_uniq_array,
                company_id: this.company_id
            };

            console.log( JSON.stringify(json_data) );

            axios.post("/asset/config/INSERT_or_UPDATE_TO_TABS_and_COLUMNS", JSON.stringify(json_data) )
                .then(response => {
                    console.log(response);

                    if(response.data.result == "success")
                    {
                        location.href = "/asset/main/list?company_id=" + this.company_id + "&standard_id=" + this.standard_id + "&tab_id=" + this.tab_id;
                    }
                    else
                    {
                        alert('error');
                    }

                })
                .catch(err => {
                    console.error(err);
                });



        },
        /*=============================================================
        =
        = 1. tab_default 테이블 전부 가져오기
        =
        ===============================================================*/
        tab_defaults_all()
        {
            axios.get("/asset/config/tab_defaults_all")
                .then(response => {
                    //alert('axios_tab_defaults_all');
                    console.log('__axios_tab_defaults_all:', response);
                    this.tabs = response.data.tab_defaults;
                })
                .catch(err => {
                    console.error(err);
                });

            //console.log("__selected:", this.selected);
        },
        /*=============================================================
        =
        = 2. tabs 테이블 전부 가져오기
        =
        ===============================================================*/
        tabs_all()
        {
            axios.get("/asset/config/tabs_all")
                    .then(response => {
                        console.log(response);
                        this.tabs = response.data.tabs;
                    })
                    .catch(err => {
                        console.error(err);
                    });
        },

    },
    created(){

        if(this.is_exist_tabs == "0")
        {
            alert("__EMPTY__");
            this.tab_defaults_all();
        }
        else
        {
            alert("__already exists__");
            this.tabs_all();
        }

    },
    watch: {
        left_array()
        {
        },
        left_uniq_array()
        {
        },
        right_array()
        {
        },
        right_uniq_array()
        {
        }
    }

}
</script>



















<style scoped>
.WRAPPER-CONFIG {
    position: absolute;
    left:50%;
    top:30px;
    width:1000px;
    height:800px;
    transform: translate(-50%, 0);
}

.l-top {
    position: relative;
    width: 100%;
    height: 15%;
}

.l-main{
    position: relative;
    width: 100%;
    height: 85%;
}

.l-mainsub {
    display:flex;
    flex-direction: row;

}

.l-mainsub__box {
    display:flex;
    flex-direction: row;
    width:700px;
    height:600px;
    border: solid 1px gray;
    padding: 10px;
}


.table_config {
    padding: 5px;
    border: solid 1px gray;
}

.table_config td {
    padding: 5px;
    border: solid 1px gray;
}

.table_config input {
    width:100%;
}


.empty_small {
    position:relative;
    width:10px;
    height:100%;
}

.empty {
    position:relative;
    width:30px;
    height:100%;
}
</style>