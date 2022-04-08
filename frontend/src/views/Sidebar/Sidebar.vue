<template>
  <div class="sidebar">

    <div class="avatar--container">
      <div class="avatar"><i class="fa fa-user"></i></div>
      <div class="container--status">
        <span>Bem-vindo!</span>
        <h6>Rodolfo Belo</h6>
      </div>
    </div>

    <div class="menu">
      <li>
        <router-link :to="{ name: 'home'}"
        ><i class="fa fa-home"></i>Início
        </router-link>
      </li>
      <li>
        <router-link :to="{ name: 'clients'}"
        ><i class="fa fa-user"></i>Clientes
        </router-link>
      </li>
      <li>
        <router-link :to="{ name: 'products'}"
        ><i class="fa fa-box"></i>Produtos
        </router-link>
      </li>
      <li>
        <router-link :to="{ name: 'products'}"
        ><i class="fa fa-store"></i>Vendas
        </router-link>
      </li>
      <li>
        <router-link :to="{ name: 'products'}"
        ><i class="fa fa-chart-bar"></i>Relatórios
        </router-link>
      </li>
    </div>
    
  </div>
</template>

<script>
export default {
    name: 'Sidebar',
}
</script>

<style scoped>

.sidebar {
  width: 220px;
  height: 100vh;
  /* background: rgb(37, 37, 37); */
  filter: brightness(120%);
}

.avatar--container {
  color: aliceblue;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-top: 20px;
}

.avatar {
  display: flex;
  align-items: center;
  justify-content: center;
  background: gray;
  width: 30px;
  height: 30px;
  border-radius: 50%;
  margin-right: 10px;
  margin-top: -5px;
}

.container--status {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.menu {
  padding: 10px 0 10px 28px;
}

.menu li {
  margin-top: 15px;
  font-size: 18px;
  list-style: none;
}

.menu li > a:hover {
  background: red;
  padding: 5px;
  border-radius: 10px;
  transition: calc(0.2s);
}

.menu > li > a {
  text-decoration: none;
  color: #fff;
}

.menu > li > a > i {
  margin-right: 10px;
}

</style>