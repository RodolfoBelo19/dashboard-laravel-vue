<template>
    <Dashboard>
        <template v-slot:slot-pages> Products </template>
    </Dashboard>
</template>

<script>
import Dashboard from '../Dashboard/Dashboard.vue';


export default {
    components: {
        Dashboard,
    }
}
</script>

<style>

</style>