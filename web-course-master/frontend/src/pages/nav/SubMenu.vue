<template>
    <div>
        <div id="subMenu">
            <div class="subMenu_link" v-for="menu in menus">
                <router-link :to="menu.path">{{menu.title}}</router-link>
            </div>
        </div>

    </div>
</template>

<script>
    export default {
        name: "SubMenu",
        props:{
            menus : {}
        }
    }
</script>

<style scoped>
    #subMenu{
        display: flex;
        flex-direction: row;
        margin: auto;
        width: 96vw;
    }

    .subMenu_link{
        margin-top: 1%;
        margin-left: 2%;
    }

    .subMenu_link a{
        text-decoration: none;
        color: black;
    }

    .subMenu_link .router-link-active{
        font-weight: bolder;
        text-decoration: underline;
        transform: scale(1.2);
    }

    .subMenu_link a:visited{
        text-decoration: none;
    }

    .subMenu_link a:active{
        text-decoration: none;
    }


</style>