<template>
<div>
<div class="form-group">
	</div>

	<div class="card">
		<div class="card-header">Policy list</div>
		<div class="card-body">
			<table class="table table-bordered table-striped">
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
				<tr v-for="policy, index in policies">
                    <td>{{ policy.customer_name }}</td>
                    <td>{{ policy.customer_address }}</td>
                    <td>{{ policy.premium }}</td>
                    <td>{{ policy.policy_type }}</td>
										<td>{{ policy.insurer_name }}</td>
                    <td>

                    </td>
                </tr>
			</tbody>
			</table>
		</div>
	</div>
</div>
</template>
<script>
    export default {
        data: function () {
            return {
                policies: []
            }
        },
        mounted() {
            var app = this;
            axios.get('/api/policies')
                .then(function (resp) {
								console.log(resp.data);
                    app.policies = resp.data;
                })
                .catch(function (resp) {
                    console.log(resp);
                    alert("Could not load policies");
                });
        },
        methods: {
            deleteEntry(id, index) {
                if (confirm("Do you really want to delete it?")) {
                    var app = this;
                    axios.delete('api/policies/' + id)
                        .then(function (resp) {
                            app.policies.splice(index, 1);
                        })
                        .catch(function (resp) {
                            alert("Could not delete policy");
                        });
                }
            }
        }
    }
</script>
