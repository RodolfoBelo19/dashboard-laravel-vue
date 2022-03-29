<template>
    <Dashboard>
        <template v-slot:slot-pages> Home 
            <div>
                <div class="row">
                    <div class="center col-12 col-md-4 col-sm-6">
                        <Cards :type="'Clientes'" :percentual="2" :icon="'fa-users'" :qtd="12"/> 
                    </div>   
                    <div class="center col-12 col-md-4 col-sm-6">
                        <Cards :type="'Produtos'" :percentual="1" :icon="'fa-box'" :qtd="3"/> 
                    </div>   
                    <div class="center col-12 col-md-4 col-sm-6">
                        <Cards :type="'Serviços'" :percentual="5" :icon="'fa-store'" :qtd="2"/> 
                    </div>  
                    <div class="center col-12 col-md-4 col-sm-6">
                        <Cards :type="'Relatórios'" :percentual="3" :icon="'fa-chart-bar'" :qtd="9"/> 
                    </div>
                </div> 
            </div>
        </template>
        
    </Dashboard>
    
</template>

<script>
import Dashboard from '../Dashboard/Dashboard.vue';
import Cards from '../../components/Cards.vue';


export default {
    components: {
        Dashboard,
        Cards
    }
}
</script>

<style>
.center {
    display: flex;
    align-content: center;
    justify-content: center;
}
</style>