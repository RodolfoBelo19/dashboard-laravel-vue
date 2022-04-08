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

<style scopeds> 

.navbar {
  height: 50px;
  background: rgb(37, 37, 37);
  width: 100%;
  box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;
}

.logo {
  width: 100px;
}

.logout > a {
  color: #fff;
  text-decoration: none;
}

</style>