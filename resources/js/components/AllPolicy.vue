<template>
    <div>
        <h2 class="text-center">Policy List</h2>
 
        <table class="table">
            <thead>
            <tr>
    	  <th>Customer Name</th>
				  <th>Customer Address</th>
				  <th>Premium</th>
				  <th>Policy Type</th>
				  <th>Insurer Name</th>
				  <th width="100"></th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="policy in policies" :key="policy.id">
                    <td>{{ policy.customer_name }}</td>
                    <td>{{ policy.customer_address }}</td>
                    <td>{{ policy.premium }}</td>
                    <td>{{ policy.policy_type }}</td>
					<td>{{ policy.insurer_name }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <router-link :to="{name: 'edit', params: { id: policy.id }}" class="btn btn-success">Edit</router-link>
                        <button class="btn btn-danger" @click="deletePolicy(policy.id)">Delete</button>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>
 
<script>
    export default {
        data() {
            return {
                policies: []
            }
        },
        created() {
            this.axios
                .get('/api/policies')
                .then(response => {
                    this.policies = response.data;
                });
        },
        methods: {
            deletePolicy(id) { 
                this.axios
                    .delete(`/api/policies/${id}`)
                    .then(response => {
                        let i = this.policies.map(data => data.id).indexOf(id);
                        this.policies.splice(i, 1)
                    });
            }
        }
    }
</script>