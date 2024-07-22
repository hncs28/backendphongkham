<template>
    <div class="router">
      <router-view/>
    </div>
  </template>
  
  <script>
  //import HeaderMenu from './components/HeaderMenu.vue'
  
  export default {
    name: 'App',
    components: {
      //HeaderMenu,
    }
  }
  </script>
  
  <style>
  * {
    text-decoration: none;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;
  }
  .router{
    margin-top: -15px;
  }
  </style>