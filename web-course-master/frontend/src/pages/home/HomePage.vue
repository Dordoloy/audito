<template>
    <div id="content_home">

        <div id="sliderTop">
            <slider id="slider"></slider>
            <div id="home">
                <login-page></login-page>
                <router-link :to="'/audito'" id="auditoLink"><h1>AUDITO</h1></router-link>
                <div>
                    <home-nav id="nav_home"/>
                    <!--<login-home/>-->
                </div>
            </div>
        </div>

        <transition name="fade">
            <router-view id="mainView"/>
        </transition>

    </div>
</template>

<script>
    import { mapActions } from "vuex";
    import slider from "./SliderHome";
    import HomeNav from "./HomeNav";
    import LoginPage from "../login/LoginPage";

    export default {
        name : "HomePage",
        components : {LoginPage, HomeNav, slider},
        methods : {
        },
        mounted(){
        }
    }
</script>

<style scoped lang="scss">
    #slider{
        width: 100%;
        height: 100%;

    }
    #home{
        width: 90%;
        position: absolute;
        color: white;
        top:8%;
        left: 10%;
        display: flex;
        align-items: center;
    }


    #home h1{
        font-size: 3em;
    }

    #auditoLink
    {
        text-decoration: none;
        color: white;
    }

    #auditoLink:hover
    {
        color: $menu_color_selected;
    }

    #sliderTop
    {
        height: 40vh;
    }

    .fade-enter-active, .fade-leave-active {
        transition: opacity .5s;
    }
    .fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
        opacity: 0;
    }

    #title_view
    {
        display: flex;
        justify-content: center;
    }

    #title_view div
    {
        position: absolute;
        top: 35vh;

        width: 85vw;
        height: 5%;

        margin: 0 auto;
        background: white;

        font-family: "Ropa Sans", sans-serif;
        color: $menu_color_selected;
        font-size: 5vh;

        text-align: center;
    }

    #mainView
    {

    }



</style>

