<template>
    <div  class="rounded-lg">
        <div class="row">
            <div class="col-md-12">
                <form @submit.prevent="addPolicy">
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <div class="-mx-3 md:w-full mb-6">
                            <div class="md:w-full px-3">
                                <h3 class="text-lg font-medium text-gray-900">Create Policy</h3>
                            </div>
                        </div>


                        <div class="flex -mx-3 mt-10  w-full  mb-6 sm:rounded-lg">
                            <div class="w-1/2  px-3">
                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="name">
                                    Customer Name
                                </label>
                                <input
                                    class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-md py-3 px-4 mb-3"
                                    id="name" type="text" name="name" v-model="policy.customer_name" placeholder="Customer Name...." value="">
                                     <small class=" text-red-700 px-4 py-3 rounded relative">{{ error_name }} </small>
                            </div>

                            <div class=" w-1/2 px-3">
                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="customerAddress">
                                    Customer Address
                                </label>
                                <input
                                    class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-md py-3 px-4 mb-3"
                                    id="customerAddress" type="text" name="customerAddress" v-model="policy.customer_address" placeholder="123 Street.... "
                                    value="">
                                     <small class=" text-red-700 px-4 py-3 rounded relative">{{ error_address }} </small>
                            </div>
                        </div>
                        <div class="-mx-3 w-full md:w-1/2  mb-6">
                        </div>

                        <div class="-mx-3 md:w-full mb-6">
                            <div class="md:w-full px-3">
                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="premium">
                                    Premium
                                </label>
                                <input
                                    class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-md py-3 px-4 mb-3"
                                    id="premium" type="text" name="premium"  v-model="policy.premium" placeholder="£123.00" value="">
                             <small class=" text-red-700 px-4 py-3 rounded relative">{{ error_premium }} </small>
                            </div>
                        </div>


                        <div class="-mx-3 md:w-full mb-6">
                            <div class="md:w-full px-3">
                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="policyType">
                                    Policy Type
                                </label>
                                <select
                                    class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded"
                                    id="policyType" v-model="policy.policy_type" >
                                     <option selected disabled>Please select</option>
                                    <option>Public Liability</option>
                                    <option>Motor Fleet</option>
                                     <option>Motor Fleet</option>
                                </select>
                                     <small class=" text-red-700 px-4 py-3 rounded relative">{{ error_policy_type }} </small>
                            </div>
                        </div>

                        <div class="-mx-3 md:w-full mb-6">
                            <div class="md:w-full px-3">
                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="insurerName">
                                    Insurer Name
                                </label>
                                <input
                                    class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-md py-3 px-4 mb-3"
                                    id="insurerName" type="text" name="insurerName"  v-model="policy.insurer_name" placeholder="Axa Insurance" value="">
                            </div>
                                 <small class=" text-red-700 px-4 py-3 rounded relative">{{ error_insurer }} </small>
                        </div>
                              <button type="submit"
                            class="cursor-pointer bg-blue-600 hover:bg-blue-500 shadow-xl px-5 py-2 inline-block text-blue-100 hover:text-white rounded">Create</button>
                    
                    </div>


                </form>
            </div>
        </div>
    </div>
</template>
 
<script>
    export default {
        data() {
            return {
                policy: {},
                error_name : "",
                error_address : "",
                error_premium : "",
                error_policy_type : "",
                error_insurer : ""
            }
        },
        methods: {
            addPolicy() {
                this.axios
                    .post('/api/policies', this.policy)
                    .then(response => (
                        this.$router.push({ name: 'home' })
                    ))
                    .catch(error => {
                       console.error(error)


                       this.error_name = error.response.data.error.customer_name;
                       this.error_address = error.response.data.error.customer_address;
                       this.error_premium = error.response.data.error.premium;
                       this.error_policy_type = error.response.data.error.policy_type;
                       this.error_insurer = error.response.data.error.insurer_name;
                       
                     })
                    .finally(() => this.loading = false)
            }
        }
    }
</script>