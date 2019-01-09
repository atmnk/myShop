<template>
    <div>
        <div style="display: flex;">
            <div style="width: 49%;">
                <div class="vForm">
                    <h4>Sign In to Your Account</h4>
                    <span>You will be able to checkout faster</span>
                    <div>Email or user ID</div>
                    <input type="text"/>
                    <div>Password</div>
                    <input type="password"/>
                    <div><button id="bSignIn">Sign In</button></div>
                </div>
            </div>
            <div style="display: flex; align-items: center;justify-content: center; width: 49%;">
                <div style="align-content: center; text-align: center;">
                    <div>Continue without signing in</div>
                    <div><button v-on:click="guest" style="margin: auto;" id="continue">Continue As Guest</button></div>
                </div>

            </div>
        </div>
    </div>
</template>
<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        methods:{
            guest(){
                this.$router.push({ name: 'Shipping' });
            }
        }
    }
</script>