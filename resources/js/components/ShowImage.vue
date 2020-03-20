<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8" >
                <div class="card dark">
                    <div class="card-header d-flex justify-content-center ">Image Component</div>
                    <div class="card-body">

                    </div>
                    <div class="card-footer d-flex justify-content-center ">
                        <i class="fas fa-play-circle"></i>
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

</style>
