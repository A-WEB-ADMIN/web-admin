<template>
    <modal name="control-item-modal" width="700" height="auto" :scrollable="true" :draggable="true" @before-open="beforeOpen">

        <div class="flex flex-col">

            <section class="flex justify-between px-5 py-3 bg-gray-900">
                <div></div>
                <div class="text-gray-50 text-xl font-thin">통제항목</div>
                <button class="text-2xl font-bold text-gray-50" @click="close_modal"> X </button>
            </section>

            <!--==============================================
            =  탭 부분
            ================================================-->
            <section class="p-5">
                <Tabs :tabs="['관리체계', '보호대책', '개인정보']" :tabselected="tabselected" @emit_tabselected="setTabSelected">
                    <Tab :istabselected="tabselected=='관리체계'">

                        <div class="c-tableBox">
                            <table>
                                <thead>
                                    <tr>
                                       <th></th> <th> No </th> <th> 통제항목 </th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr v-for="tab in tabs_a" :key="tab.id">
                                        <td> <input type="checkbox" :value="tab.depth" v-model="selected"> </td>
                                        <td> {{ tab.depth }} </td>
                                        <td> {{ tab.sub_domain }} </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </Tab>

                    <Tab :istabselected="tabselected=='보호대책'">

                        <div class="c-tableBox">
                            <table>
                                <thead>
                                    <tr>
                                        <th></th> <th> No </th> <th> 통제항목 </th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr v-for="tab in tabs_b" :key="tab.id">
                                        <td> <input type="checkbox" :value="tab.depth" v-model="selected"> </td>
                                        <td> {{ tab.depth }} </td>
                                        <td> {{ tab.sub_domain }} </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </Tab>

                    <Tab :istabselected="tabselected=='개인정보'">

                        <div class="c-tableBox">
                            <table>
                                <thead>
                                    <tr>
                                        <th></th> <th> No </th> <th> 통제항목 </th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr v-for="tab in tabs_c" :key="tab.id">
                                        <td> <input type="checkbox" :value="tab.depth" v-model="selected"> </td>
                                        <td> {{ tab.depth }} </td>
                                        <td> {{ tab.sub_domain }} </td>
                                    </tr>
                                </tbody>s
                            </table>
                        </div>

                    </Tab>
                </Tabs>
            </section>

            <!--==============================================
            =  추가 취소 버튼 부분
            ================================================-->
            <section class="p-3">
                <button class="bg-blue-900 px-4 py-2 rounded" type="button" @click="set_data_to_localStorage">
                    <span class="text-lg text-gray-50">추가</span>
                </button>
            </section>


        </div>

    </modal>
</template>

<script>
    import Tabs from './tabs/Tabs'
    import Tab from './tabs/Tab'

    export default {
        components: {
            Tabs,
            Tab
        },
        data() {
            return {
                tabs_a: [],
                tabs_b: [],
                tabs_c: [],
                tabselected: 'num1',
                selected: []
            }
        },
        methods: {
            beforeOpen (event) {

                //console.log("__event_tabA__", event.params.tabs);

                this.tabs_a = event.params.tabs.filter( (tab) => {
                    return tab.domain == "1";
                });

                this.tabs_b = event.params.tabs.filter( (tab) => {
                    return tab.domain == "2";
                });

                this.tabs_c = event.params.tabs.filter( (tab) => {
                    return tab.domain == "3";
                });

            },
            setTabSelected(tab) {
                this.tabselected = tab;
            },
            close_modal ()
            {
                this.$emit('close');
            },
            set_data_to_localStorage () {

                alert("test333");

                if( this.selected.length > 0 )
                {
                    var assoc_array = this.selected.map( (select) => {
                        return {'depth': select}
                    })

                    localStorage.setItem( "control_items", JSON.stringify(assoc_array) );
                }

                this.$emit('emit_controlitems_1', this.selected);
                console.log("__vue__emit_controlitems_1__", this.selected);


                this.selected.splice(0);
                console.log("__vue__splice__", this.selected);
                this.$emit('close');

            }
        },
        computed: {
            com_users: function () {
                return this.users
            }
        }
    }
</script>

<style scoped>
.c-tableBox {
    height: 300px;
    overflow: auto;
}
</style>
