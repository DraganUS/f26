<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8" >
                <div class="card dark"  v-for="product in products" :key="product.id">
                    <div class="card-header d-flex justify-content-center ">{{product.title}}t</div>
                    <div class="card-body" v-if="countDown == 0">
                        <div  id="productImage"  v-if="imageId === product.id" class="circular" v-bind:style="{ backgroundImage: 'url(http://f26.test/' + product.img_path + ')' }"></div>
                    </div>
                    <div class="card-footer d-flex justify-content-center ">
                        <i @click="showImage(product.id)" class="fas fa-play-circle"></i>
                        <p>{{countDown}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
var downloadTimer = setInterval(function(){
if(timeleft <= 0){
clearInterval(downloadTimer);
document.getElementById("countdown").innerHTML = "Finished";
} else {
document.getElementById("countdown").innerHTML = timeleft + " seconds remaining";
}
timeleft -= 1;
}, 1000);
<script>
    export default {
        props: ['productsDb'],
        name: "ShowImage",
        data: () => ({
            isVisible: true,
            products: [],
            imageId: 0,
            countDown : 10
        }),
        mounted() {
            this.products = JSON.parse(this.productsDb);
            console.log(this.products)
        },
        methods: {
            showImage(id){
                this.imageId = id;
                this.countDownTimer();
            },
            countDownTimer() {
                if(this.countDown > 0) {
                    setTimeout(() => {
                        this.countDown -= 1
                        this.countDownTimer()
                    }, 1000)
                }
            }
        },
    }
</script>

<style scoped>
    #productImage{
        height: 500px;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    .fa-play-circle{
        font-size: 40px;
    }
    .fa-play-circle:hover{
        cursor: pointer;
    }
</style>
