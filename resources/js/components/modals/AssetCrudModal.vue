<template>

    <modal name="asset-crud-modal" width="1200" height="auto" :scrollable="true" :draggable="true">

        <div class="flex flex-col">
            <!--=======================================================
            =
            = 1. 상단
            =
            =========================================================-->
            <section class="flex justify-between px-5 py-3 bg-gray-900">
                <div></div>
                <div class="text-gray-50 text-xl font-thin">[ {{current_tab.tab}} ] 자산 추가/수정/삭제</div>
                <button @click="close_modal" class="text-2xl font-bold text-gray-50"> X </button>
            </section>

            <!--=======================================================
            =
            = 2. 추가 버튼
            =
            =========================================================-->
            <section class="p-3">
                <button class="bg-blue-900 px-4 py-2 rounded text-white" type="button" @click="add_row">
                    추가
                </button>
            </section>

            <!--=======================================================
            =
            = 3. 내용
            =
            =========================================================-->
            <section class="pt-2 pl-5 pr-5 pb-20">
                <table>
                    <thead class="bg-gray-200">
                        <tr>
                            <th v-for="column in columns" class="p-1 w-52"> {{ column.column_korean }} </th>
                            <th class="p-1 w-20"> </th>
                        </tr>
                    </thead>

                    <!--======================================================
                    =
                    =  작업하고 있는 부분
                    =
                    ========================================================-->
                    <tbody>
                        <tr v-for="asset, index in assets">

                            <td v-for="myconfigcolumn in myconfigcolumns" class="p-1 border border-gray-200">

                                <input v-if="myconfigcolumn == 'status'" type="text" v-model="asset.status"  />

                                <input v-if="myconfigcolumn == 'type'" type="text" v-model="asset.type"  />

                                <input v-if="myconfigcolumn == 'code'" type="text" v-model="asset.code"  />

                                <input v-if="myconfigcolumn == 'alias_name'" type="text" v-model="asset.alias_name"  />

                                <input v-if="myconfigcolumn == 'version'" type="text" v-model="asset.version"  />
                            </td>

                            <td> <button class="bg-blue-900 px-4 py-2 rounded text-white" @click="insert_or_update_to_asset(asset)">저장</button> </td>
                        </tr>
                    </tbody>
                </table>
            </section>



        </div>

    </modal>

</template>

<script>
    export default {
        props: ['company_id', 'standard_id', 'tab_id', 'current_tab', 'columns', 'myconfigcolumns'],
        data(){
          return {
              assets: [],
          }
        },
        methods: {
            close_modal ()
            {
                window.location.href = "/asset/main/list?company_id=" + this.company_id + "&standard_id=" + this.standard_id + "&tab_id=" + this.tab_id;
                this.$emit('close');
            },
            set_assets()
            {
                axios.get("/asset/main/get_assets_for_ajax")
                    .then(response => {
                            console.log(response);

                            this.assets = response.data.assets;
                        }
                    )
                    .catch(err => {
                        console.error(err);
                    });
            },
            add_row(){
                this.assets.push(
                    {id:"", status: "", type: "", code: "", alias_name: "", version: ""}
                );
            },
            insert_or_update_to_asset(asset)
            {
                console.log("_id:", asset.id);
                console.log("_name:", asset.status);
                console.log("_type:", asset.type);

                var json_data = {
                    asset: [
                        {id: asset.id, status: asset.status, type: asset.type, code: asset.code, alias_name: asset.alias_name, version: asset.version}
                    ],
                    company_id: this.company_id,
                    tab_id: this.current_tab.id,
                    tab: this.current_tab.tab
                };

                axios.post("/asset/main/insert_or_update_to_asset", JSON.stringify(json_data) )
                    .then(response => {
                            console.log(response);

                            this.rows = response.data.assets;
                        }
                    )
                    .catch(err => {
                        console.error(err);
                    });

            }
        },
        created(){
            this.set_assets();
            this.add_row();
        }

    }
</script>

<style scoped>

</style>