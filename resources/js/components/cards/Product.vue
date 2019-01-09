<template>
    <router-link :to="link">
    <div class="product-card-wrap" :id="divId">
        <div class="product-card">
            <div class="form-title">{{Name}}</div>
            <div><img src="/img/1/1.jpeg" width="100%"></div>
        </div>
    </div>
    </router-link>
</template>
<script>
    export default {
        computed:{
            link(){
                return '/static/product/'+this.id;
            },
            divId(){
                return this.id+"-"+this.Name;
            }
        },
        props:['id','Name','Desc'],
    }
</script>