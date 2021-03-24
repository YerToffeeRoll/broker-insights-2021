<template>
    <div>
   
        <div class="py-8">

      <div>
        <h2 class="text-2xl font-semibold leading-tightuppercase ">{{name}}</h2>
      </div>
            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 ">

              <div class="flex ml-2 mr-2 justify-between">
                  <!-- <div class="w-2/4 flex space-x-4">
                      <div class="flex rounded-md shadow-sm">
                          <input
                              class="flex-1 form-input border-cool-gray-300 block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                              wire:model="filters.search" placeholder="Search Domains...">
                      </div>
                  </div> -->
                  <div class="space-x-2 flex items-center">
                      <span class="inline-flex rounded-md shadow-sm">
                        <a href="/create">
                          <button type="button"
                              class="py-2 px-4 border rounded-md text-sm leading-5 font-medium focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition duration-150 ease-in-out text-white bg-indigo-600 hover:bg-indigo-500 active:bg-indigo-700 border-indigo-600"
                              wire:click="create()">
                              <svg class="inline-block w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6">
                                  </path>
                              </svg>
                              New
                          </button>
                        </a>
                      </span>
                  </div>
                  </div>
            </div>
                <div class="flex-col space-y-4">
                    <div class="align-middle min-w-full overflow-x-auto shadow overflow-hidden sm:rounded-lg">
                        <table class="min-w-full divide-y divide-cool-gray-200">
                            <thead>
                                <tr>
                                    <th class="px-6 py-3 bg-cool-gray-50">
                                        <button @click="sort('customer_name')"
                                            class="flex items-center space-x-1 text-left text-xs leading-4 font-medium text-cool-gray-500 uppercase tracking-wider group focus:outline-none focus:underline">
                                            <span>Customer Name</span>
                                            <span class="relative flex items-center">
                                                <svg class="w-3 h-3 opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                                                    fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M5 15l7-7 7 7"></path>
                                                </svg>
                                            </span>
                                        </button>
                                    </th>
                                    <th class="px-6 py-3 bg-cool-gray-50">
                                        <button  @click="sort('customer_address')"
                                            class="flex items-center space-x-1 text-left text-xs leading-4 font-medium text-cool-gray-500 uppercase tracking-wider group focus:outline-none focus:underline">
                                            <span>Customer Address</span>
                                            <span class="relative flex items-center">
                                                <svg class="w-3 h-3 opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                                                    fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M5 15l7-7 7 7"></path>
                                                </svg>
                                            </span>
                                        </button>
                                    </th>
                                    <th class="px-6 py-3 bg-cool-gray-50">
                                        <button @click="sort('premium')"
                                            class="flex items-center space-x-1 text-left text-xs leading-4 font-medium text-cool-gray-500 uppercase tracking-wider group focus:outline-none focus:underline">
                                            <span>Premium</span>
                                            <span class="relative flex items-center">
                                                <svg class="w-3 h-3 opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                                                    fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M5 15l7-7 7 7"></path>
                                                </svg>
                                            </span>
                                        </button>
                                    </th>
                                    <th class="px-6 py-3 bg-cool-gray-50">
                                        <button  @click="sort('policy_type')"
                                            class="flex items-center space-x-1 text-left text-xs leading-4 font-medium text-cool-gray-500 uppercase tracking-wider group focus:outline-none focus:underline">
                                            <span>Policy Type</span>
                                            <span class="relative flex items-center">
                                                <svg class="w-3 h-3 opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                                                    fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M5 15l7-7 7 7"></path>
                                                </svg>
                                            </span>
                                        </button>
                                    </th>
                                    <th class="px-6 py-3 bg-cool-gray-50">
                                        <button  @click="sort('insurer_name')"
                                            class="flex items-center space-x-1 text-left text-xs leading-4 font-medium text-cool-gray-500 uppercase tracking-wider group focus:outline-none focus:underline">
                                            <span>Insurer Name</span>
                                            <span class="relative flex items-center">
                                                <svg class="w-3 h-3 opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                                                    fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M5 15l7-7 7 7"></path>
                                                </svg>
                                            </span>
                                        </button>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-cool-gray-200">
                                <tr class="bg-white" wire:loading.class.delay="opacity-50" v-for="policy in sortedPolicies"
                                    :key="policy.id">
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-cool-gray-900">
                                        {{ policy.customer_name }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-cool-gray-900">
                                        {{ policy.customer_address }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-cool-gray-900">
                                        {{ policy.premium }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-cool-gray-900">
                                        {{ policy.policy_type }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-cool-gray-900">
                                        {{ policy.insurer_name }}
                                    </td>

                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-cool-gray-900">
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-cool-gray-900">

                                        <router-link :to="{name: 'edit', params: { id: policy.id }}"
                                            class="cursor-pointer bg-blue-600 hover:bg-blue-500 shadow-xl px-3 py-1 inline-block text-blue-100 hover:text-white rounded">
                                            Edit</router-link>
                                        <button
                                            class="cursor-pointer bg-red-600 hover:bg-gray-500 shadow-xl px-3 py-1 inline-block text-orange-100 hover:text-white rounded"
                                            @click="deletePolicy(policy.id)">Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- <div class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between          ">
                          <span class="text-xs xs:text-sm text-gray-900">
                              {{ sortedPolicies.length }} Entries
                          </span>
                          <div class="inline-flex mt-2 xs:mt-0">
                          <button @click="prevPage"
                                  class="border border-indigo-500 text-indigo-500 block rounded-sm font-bold py-4 px-6 mr-2 flex items-center hover:bg-indigo-500 hover:text-white">
                                  <svg class="h-5 w-5 mr-2 fill-current" version="1.1" id="Layer_1"
                                      xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                      x="0px" y="0px" viewBox="-49 141 512 512"
                                      style="enable-background:new -49 141 512 512;" xml:space="preserve">
                                      <path id="XMLID_10_"
                                          d="M438,372H36.355l72.822-72.822c9.763-9.763,9.763-25.592,0-35.355c-9.763-9.764-25.593-9.762-35.355,0 l-115.5,115.5C-46.366,384.01-49,390.369-49,397s2.634,12.989,7.322,17.678l115.5,115.5c9.763,9.762,25.593,9.763,35.355,0 c9.763-9.763,9.763-25.592,0-35.355L36.355,422H438c13.808,0,25-11.193,25-25S451.808,372,438,372z">
                                      </path>
                                  </svg>
                                  Previous page
                              </button>
                              <button @click="nextPage"
                                  class="border border-indigo-500 bg-indigo-500 text-white block rounded-sm font-bold py-4 px-6 ml-2 flex items-center">
                                  Next page
                                  <svg class="h-5 w-5 ml-2 fill-current" clasversion="1.1" id="Layer_1"
                                      xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                      x="0px" y="0px" viewBox="-49 141 512 512"
                                      style="enable-background:new -49 141 512 512;" xml:space="preserve">
                                      <path id="XMLID_11_"
                                          d="M-24,422h401.645l-72.822,72.822c-9.763,9.763-9.763,25.592,0,35.355c9.763,9.764,25.593,9.762,35.355,0
                                          l115.5-115.5C460.366,409.989,463,403.63,463,397s-2.634-12.989-7.322-17.678l-115.5-115.5c-9.763-9.762-25.593-9.763-35.355,0
                                          c-9.763,9.763-9.763,25.592,0,35.355l72.822,72.822H-24c-13.808,0-25,11.193-25,25S-37.808,422-24,422z">
                                      </path>
                                  </svg>
                              </button>
                          </div>
                      </div> -->
                    </div>
                
                </div>
            </div>
        </div>
      </div>

</template>
 
<script>
    export default {
        data() {
            return {
                policies: [],
                name: [],
                currentSort: 'name',
                currentSortDir: 'asc',
                pageSize: 50,
                currentPage: 1
            }
        },
        created() {


            this.axios
                .get('/api/policies')
                .then(response => {
                    this.policies = response.data.data.client.policies;
                    this.name = response.data.data.client.name;
                });
        },
        methods: {

            sort: function (s) {
                //if s == current sort, reverse
                if (s === this.currentSort) {
                    this.currentSortDir = this.currentSortDir === 'asc' ? 'desc' : 'asc';
                }
                this.currentSort = s;
            },
            deletePolicy(id) {
                this.axios
                    .delete(`/api/policies/${id}`)
                    .then(response => {
                        let i = this.policies.map(data => data.id).indexOf(id);
                        this.policies.splice(i, 1)
                    });
            },
             nextPage: function () {
            if ((this.currentPage * this.pageSize) < this.cats.length) this.currentPage++;
            },
            prevPage: function () {
                if (this.currentPage > 1) this.currentPage--;
            },
        },
   
        computed: {
            sortedPolicies: function () {
                return this.policies.sort((a, b) => {
                    let modifier = 1;
                    if (this.currentSortDir === 'desc') modifier = -1;
                    if (a[this.currentSort] < b[this.currentSort]) return -1 * modifier;
                    if (a[this.currentSort] > b[this.currentSort]) return 1 * modifier;
                    return 0;
                }).filter((row, index) => {
                    let start = (this.currentPage - 1) * this.pageSize;
                    let end = this.currentPage * this.pageSize;
                    if (index >= start && index < end) return true;
                });
            }
        }
    }
</script>