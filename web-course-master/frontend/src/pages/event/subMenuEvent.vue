<template>
    <div>
            <div class="subMenuEvent_link" @click="show_cat">
                <div>{{menu.title}}</div>
            </div>

    </div>
</template>

<script>
    export default {
        name: "SubMenuEvent",
        props:{
            menu : {},
            events: {},
            cat : {},
        },
        methods:{
            show_cat() {
                this.$emit("update:cat", this.menu.title);
                console.log(this.cat.toLowerCase());
            },
        }
    }
</script>

<style scoped>

    .subMenuEvent_link{
        margin-top: 20px;
        margin-left: 20px;
        font-weight: bold;
        cursor: pointer;

    }

    .subMenuEvent_link a{
        text-decoration: none;
        color: black;
    }


    .subMenuEvent_link a:visited{
        text-decoration: none;
    }

    .subMenuEvent_link a:active{
        color: orange;
    }

</style>