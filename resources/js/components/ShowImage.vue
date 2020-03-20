<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8" >
                <div class="card dark"  v-for="product in products" :key="product.id">
                    <div class="card-header d-flex justify-content-center ">{{product.title}}t</div>
                    <div class="card-body">
                        <div  id="productImage"  v-if="1 === product.id" class="circular" v-bind:style="{ backgroundImage: 'url(http://f26.test/' + product.img_path + ')' }"></div>
                    </div>
                    <div class="card-footer d-flex justify-content-center ">
                        <i style="font-size: 40px" class="fas fa-play-circle"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['productsDb'],
        name: "ShowImage",
        data: () => ({
            isVisible: true,
            products: []
        }),
        mounted() {
            this.products = JSON.parse(this.productsDb);
            console.log(this.products)
        },

        //     blink() {
        //     // Toggle the position.
        //     if(this.isVisible == true) this.isVisible = false;
        //     else                       this.isVisible = true;
        //
        //
        //     setTimeout('this.blink', 2000);
        // }
    }
</script>

<style scoped>
    #productImage{
        height: 500px;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
