<template>
    <nav id="navbar" class="sticky navbar navbar-expand-lg navbar-dark">
            <router-link to="/static/products" class="navbar-brand" id="nav-brand">My Shop</router-link>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <i class="fa fa-navicon"></i>
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <router-link class="nav-link" @click.native="closeMenu()" to="/static/products">Shop</router-link>
                    </li>
                </ul>
            </div>
    </nav>
</template>
<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        methods: {
            closeMenu() {
                $('#navbarSupportedContent').collapse('hide');
            }
        }
    }
</script>