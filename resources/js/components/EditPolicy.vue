<template>
    <div>
        <h3 class="text-center">Edit Policy</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="updatePolicy">
                <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" v-model="policy.customer_name">
                    </div>
                    <div class="form-group">
                        <label>customer_address</label>
                        <input type="text" class="form-control" v-model="policy.customer_address">
                    </div>
                    <div class="form-group">
                        <label>premium</label>
                        <input type="text" class="form-control" v-model="policy.premium">
                    </div>
                    <div class="form-group">
                        <label>policy_type</label>
                        <input type="text" class="form-control" v-model="policy.policy_type">
                    </div>
                      <div class="form-group">
                        <label>insurer_name</label>
                        <input type="text" class="form-control" v-model="policy.insurer_name">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</template>
 
<script>
    export default {
        data() {
            return {
                policy: {}
            }
        },
        created() {
            this.axios
                .get(`/api/policies/${this.$route.params.id}`)
                .then((response) => {
                    this.policy = response.data.data;
                });
        },
        methods: {
            updatePolicy() {
                this.axios
                    .patch(`/api/policies/${this.$route.params.id}`, this.policy)
                    .then((response) => {
                        this.$router.push({ name: 'home' });
                    });
            }
        }
    }
</script>