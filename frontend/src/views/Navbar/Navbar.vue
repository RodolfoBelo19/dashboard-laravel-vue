<template>
  <div class="navbar">
    <img src="../../assets/logo.png" class="logo"/>
    <div class="logout">
      <a @click.prevent="logout" href="#"
      >Sair
        <i class="fa fa-sign-out-alt"></i>
      </a>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Navbar',

  methods: {
    logout() {
      this.$router.push({name: 'login'})
    }
  }
}
</script>

<style>

.navbar {
  height: 50px;
  background: rgb(37, 37, 37);
  width: 100%;
}

.logo {
  width: 100px;
}

.logout > a {
  color: #fff;
  text-decoration: none;
}

</style>