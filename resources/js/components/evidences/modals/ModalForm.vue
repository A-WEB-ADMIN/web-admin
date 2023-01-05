<template>

    <modal name="form-modal" width="700" height="auto" :scrollable="true" :draggable="true">

        <div class="flex flex-col">
            <section class="flex justify-between px-5 py-3 bg-gray-900">
                <div></div>
                <div class="text-gray-50 text-xl font-thin">증적양식 선택하기</div>
                <button @click="close_modal" class="text-2xl font-bold text-gray-50"> X </button>
            </section>

            <section class="p-2">

                <div class="p-2">
                    <input type="text" v-model="search" placeholder="검색하세요">
                </div>

                <div class="c-tableBox p-2">

                    <table>
                        <tbody>
                            <tr v-for="templatedefault in templates_computed">
                                <td class="p-2"> <a :href="url + templatedefault.id + '&templatedefault_name=' + templatedefault.name " class="text-xl"> {{templatedefault.name}} </a> </td>
                            </tr>
                        </tbody>
                    </table>

                </div>

            </section>

        </div>

    </modal>

</template>

<script>
    export default {
        props: ['templatedefaults', 'company_id', 'standard_id', 'evidence_id'],
        data: function () {
            return {
                search: '',
                url: '?company_id=' + this.company_id + '&standard_id=' + this.standard_id + '&evidence_id=' + this.evidence_id + '&templatedefault_id='
            }
        },
        computed: {

          templates_computed: function()
          {
              return this.templatedefaults.filter( templatedefault => {
                  return templatedefault.name.indexOf(this.search) > -1;
              })
          }
        },
        methods: {
            close_modal ()
            {
                this.$emit('close');
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