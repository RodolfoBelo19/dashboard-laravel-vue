<template>
    <Dashboard>
        <template v-slot:slot-pages> Home 
            <div>
                <div class="row">
                    <div class="center col-12 col-md-3 col-sm-6">
                        <Cards :type="'Clientes'" :percentual="2" :icon="'fa-users'" :qtd="12"/> 
                    </div>   
                    <div class="center col-12 col-md-3 col-sm-6">
                        <Cards :type="'Produtos'" :percentual="1" :icon="'fa-box'" :qtd="3"/> 
                    </div>   
                    <div class="center col-12 col-md-3 col-sm-6">
                        <Cards :type="'Serviços'" :percentual="5" :icon="'fa-store'" :qtd="2"/> 
                    </div>  
                    <div class="center col-12 col-md-3 col-sm-6">
                        <Cards :type="'Relatórios'" :percentual="3" :icon="'fa-chart-bar'" :qtd="9"/> 
                    </div>
                </div> 
            </div>

            <div>
                <div class="row row-align">
                    <div class="col-12 col-md-6">
                        <Lists :data="data" description="Clientes" :column="['Nome', 'Usuário']"/>
                    </div>
                    <div class="col-12 col-md-6">
                        <Lists :data="data" description="Produtos" :column="['Nome', 'Valor']"/>
                    </div>
                </div>
            </div>
        </template>
    </Dashboard>
    
</template>x

<script>
import Dashboard from '../Dashboard/Dashboard.vue';
import Cards from '../../components/Cards.vue';
import Lists from '../../components/Lists.vue';
import axios from 'axios';

export default {
    name: 'Home',

    data() {
        return {
            data: [],
            description: '',
            column: [],
        }
    },
    mounted() {
        this.getUsers()
    },
    methods: {
        async getUsers() {
            const response = await axios.get('https://jsonplaceholder.typicode.com/users/')

            this.data = response.data
        }
    },

    components: {
        Dashboard,
        Cards,
        Lists,
    }
}
</script>

<style scoped>
.center {
    display: flex;
    align-content: center;
    justify-content: center;
}
.row-align {
    display: flex;
    align-content: center;
    justify-content: center;
    padding: 0 10px;
    margin-top: 10px;
    font-size: 12px;
}
</style>