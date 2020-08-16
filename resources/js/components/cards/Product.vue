<template>
    <router-link :to="link">
    <div class="product-card-wrap" :id="divId">
        <div class="product-card">
            <div class="form-title">{{name}}</div>
            <div><img v-bind:src="`https://picsum.photos/id/${id}/300/200`" width="100%"></div>
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
                return this.id+"-"+this.name;
            }
        },
        props:['id','name','desc'],
    }
</script>