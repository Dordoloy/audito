<template>
    <div>
        <router-link :to="menu.path" v-for="menu in menus" class="item_home_nav">
            <span>{{menu.title}}</span>
        </router-link>
    </div>
</template>


<script>
    //import axios from "axios";
    import LoginPage from "../login/LoginPage";

    export default {
        name : "HomeNav",
        components: {LoginPage},
        data(){
            return {
                menus : [
                    {
                        title:"Evènements",
                        path:'/events'
                    },
                    {
                        title:"Espace Organisateur",
                        path:'/space'
                    },
                    {
                        title:"Info Pratique",
                        path:'/info'
                    },
                ],
            }

        },
        computed : {

        },
        methods : {


        },
        mounted(){

        }
    }
</script>

<style scoped lang="scss">

    .item_home_nav{
        text-decoration: none;
        color: white;
        margin-left: 20px;
        padding-right: 0;
        letter-spacing: .01em;
        padding: 13px;

        display: inline-block;
        line-height: 20px;
        text-align: center;
        font-size: 1.1em;
        text-transform: uppercase;
    }
    .item_home_nav:after{
        content: '';
        display: block;
        margin: auto;
        height: 3px;
        width: 0;
        background: transparent;
        transition: width .5s ease, background-color .5s ease;
    }

    .item_home_nav:hover:after{
        width: 100%;
        background: $menu_color_selected;
    }

    .router-link-active:after{
        content: '';
        display: block;
        margin: auto;
        height: 3px;
        width: 100%;
        background: $menu_color_selected;
    }

</style>