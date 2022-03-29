<template>

   <section class="main">

       <Sidebar />
       
       <section class="content-right">

           <Navbar />

           <div class="pages">
               <slot name="slot-pages"></slot>
           </div>

       </section>

   </section>
    
</template>

<script>
    import Sidebar from '../Sidebar/Sidebar.vue';
    import Navbar from '../Navbar/Navbar.vue';

    export default {
        name: 'Dashboard',
        components: {
            Sidebar,
            Navbar,
        }
    }
</script>

<style>

.main {
    width: 100%;
    background: rgb(29, 29, 29);
    height: 100vh;
    display: flex;
}

.content-right {
    width: 100%;
    background: gray;
    height: 100vh;
    z-index: 10;
}

.pages {
    background: #fff;
    width: 100%;
    padding: 20px;
}

</style>