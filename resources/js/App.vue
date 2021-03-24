<template>
    <div class="container-fluid"> 

  <nav class="bg-white shadow rounded-lg mb-10" role="navigation">
  <div class="container-fluid p-4 mx-auto  flex flex-wrap items-center md:flex-no-wrap  ">
    <div class="mr-4 md:mr-8">
      <a href="#" rel="home">
        <svg class="w-10 h-10 text-purple-600" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg">
          <title>BrokerInsights</title>
          <path fill="currentColor" d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"></path>
        </svg>
      </a>
    </div>
    <div class="ml-auto md:hidden">
      <button class="flex items-center px-3 py-2 border rounded" type="button">
        <svg class="h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <title>Menu</title>
          <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
        </svg>
      </button>
    </div>
    <div class="w-full md:w-auto md:flex-grow md:flex md:items-center">
      <ul class="flex flex-col mt-4 -mx-4 pt-4 border-t md:flex-row md:items-center md:mx-0 md:mt-0 md:pt-0 md:mr-4 lg:mr-8 md:border-0">
  
      </ul>
      <ul class="flex flex-col mt-4 -mx-4 pt-4 border-t md:flex-row md:items-center md:mx-0 md:ml-auto md:mt-0 md:pt-0 md:border-0">
        <li>
         <router-link to="/" active-class="text-purple-600" class="block px-4 py-1 md:p-2 lg:px-4">Policy List</router-link>
        </li>
        <li>
           <router-link to="/create" active-class="text-purple-600"  class="block px-4 py-1 md:p-2 lg:px-4">Create Policy</router-link>
        </li>
      </ul>
    </div>
  </div>
</nav>

        <router-view> </router-view>
    </div>




</template>
 
<script>
    export default {}
</script>