<template>
<div>
    <Header/>
    <div class="page">
        <router-view></router-view>
    </div>
</div>
</template>
<script>
    import Header from './Header'
    export default {
        name: 'App',
        components:{
            Header
        }
    }
</script>