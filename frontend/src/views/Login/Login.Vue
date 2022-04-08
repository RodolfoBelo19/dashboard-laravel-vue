<template>
    <section class="main">
        <div class="container">
            <div class="login">
                <header>Connect to account</header>
                
                <div class="content-form">
                    <form>
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="email" id="form2Example1" class="form-control" />
                            <label class="form-label" for="form2Example1">Email address</label>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <input type="password" id="form2Example2" class="form-control" />
                            <label class="form-label" for="form2Example2">Password</label>
                        </div>

                        <!-- 2 column grid layout for inline styling -->
                        <div class="row mb-4">
                            <div class="col d-flex justify-content-center">
                            <!-- Checkbox -->
                            <div class="form-check">
                                <input
                                class="form-check-input"
                                type="checkbox"
                                value=""
                                id="form2Example31"
                                checked
                                />
                                <label class="form-check-label" for="form2Example31"> Remember me </label>
                            </div>
                            </div>

                            <div class="col">
                            <!-- Simple link -->
                            <a href="#!">Forgot password?</a>
                            </div>
                        </div>

                        <!-- Submit button -->
                        <button type="button" class="btn btn-primary btn-block mb-4" @click="login">Sign in</button>

                        <!-- Register buttons -->
                        <div class="text-center">
                            <p>Not a member? <a href="#!">Register</a></p>
                            <p>or sign up with:</p>
                            <button type="button" class="btn btn-link btn-floating mx-1">
                            <i class="fab fa-facebook-f"></i>
                            </button>

                            <button type="button" class="btn btn-link btn-floating mx-1">
                            <i class="fab fa-google"></i>
                            </button>

                            <button type="button" class="btn btn-link btn-floating mx-1">
                            <i class="fab fa-twitter"></i>
                            </button>

                            <button type="button" class="btn btn-link btn-floating mx-1">
                            <i class="fab fa-github"></i>
                            </button>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
        
    </section>
</template>

<script>
export default {
    data() {
        return {
            
        }
    },
    methods: {
        login() {
            this.$router.push({name: 'home'})
        }
    },
    
}
</script>

<style scoped>

    * {
        margin: 0;
        padding: 0;
        background: rgb(37, 37, 37);

    }

    .container {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .login {
        color: #C5C5C5;
        width: 500px;
        border-radius: 8px;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    }

    .content-form {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .main {
        display: flex;
        justify-content: center;
        height: 100vh;
    }

    header {
        font-size: 2rem;
        margin-top: 30px;
        margin-bottom: 30px;
        text-align: center;
        font-family: Arial, Helvetica, sans-serif;    
    }

    form {
        margin-bottom: 20px;
    }
    
</style>