<template>
        <table>
            <colgroup>
                <col style="width:29%">
                <col style="width:auto">
            </colgroup>
            <tbody>
            <tr>
                <th>담당자
                    <EvidenceManagerPin :users="users" @emit-evidence_managers_2="evidence_managers_2"></EvidenceManagerPin>
                </th>

                <td>
                    <p name="" id="display_evidence_managers" v-for="user_name in user_names">
                        {{ user_name }}
                    </p>
                </td>
            </tr>
            </tbody>
        </table>
</template>

<script>
import EvidenceManagerPin from '../pins/EvidenceManagerPin'

export default {
    components: {
        EvidenceManagerPin
    },
    props: ['users'],
    data(){
      return {
          user_names: []
      }
    },
    methods: {
        evidence_managers_2(arr)
        {
            console.log("__evidence_managers_2:", arr);

            axios.post("/evidence/addtionRegistration/get_evidence_manager_names", {
                evidence_managers: arr
            })
            .then( response => {

                this.user_names = response.data.selected_user_names;

                console.log(response.data.selected_user_names);


            })
            .catch( err => {
                console.error(err);
            });
        }
    }
}
</script>

