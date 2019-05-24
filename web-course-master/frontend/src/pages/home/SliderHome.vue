<template>
    <vue-displacement-slideshow
            :images="images"
            :displacement="require('../../ressources/images/home/flou_slide.png')"
            :intensity.number="0.2"
            :speedIn.number="1.4"
            :speedOut.number="1.4"
            ease="Expo.easeInOut"
            ref="slideshow"></vue-displacement-slideshow>
</template>

<script>
    import VueDisplacementSlideshow from "vue-displacement-slideshow";

    export default {
        components: {
            VueDisplacementSlideshow,
        },
        computed: {
            images() {
                return [
                    require("../../ressources/images/home/siege.jpg"),
                    require("../../ressources/images/home/cinema.jpg")
                ];
            }
        },
        methods: {
            init() {
                //We loop through all our images by calling the 'next' method of our component every 2 seconds
                setInterval(() => {
                    this.$refs.slideshow.next();
                }, 3000);
            }
        },
        mounted() {
            this.init();
        }
    };
</script>