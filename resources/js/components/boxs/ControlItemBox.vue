<template>
    <table>
        <colgroup>
            <col style="width:45%;">
            <col style="width:55%;">
        </colgroup>
        <thead>
        <tr>
            <th class="none">영역</th>

            <th>통제항목
                <ControlItemPin :tabs="tabs" @emit_controlitems_2="control_items_2"></ControlItemPin>
            </th>
        </tr>
        </thead>


        <!-- display 영역, 통제항목  for 문 -->
        <tbody>
        <tr v-for="control_item in control_items">
            <td> {{ control_item.depth }} </td>
            <td> {{ control_item.title }} </td>
        </tr>
        </tbody>

    </table>
</template>

<script>
import ControlItemPin from '../pins/ControlItemPin'

export default {
    components: {
        ControlItemPin
    },
    props: ['tabs'],
    data(){
      return {
          control_items: []
      }
    },
    methods: {
        control_items_2(arr)
        {
            console.log("__emit_2:", arr);

            axios.post("/evidence/addtionRegistration/get_selected_control_items", {control_items: arr})
            .then( response => {

                this.control_items = response.data.selected_control_items;

                console.log(response.data.selected_control_items);
            })
            .catch( err => {
                console.error(err);
            });


        }
    }



}
</script>