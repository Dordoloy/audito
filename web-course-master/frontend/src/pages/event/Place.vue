<template>
        <div class="square_place" @click="choosePlace"></div>
</template>

<script>
    export default {
        name: "Place.vue",
        data(){
            return {
                chosen: false,
            }
        },
        props:{
                nb_place : {
                        default: 0
                },
        },
        methods: {
            choosePlace(el)
            {
                if(this.chosen === false)
                {
                        if(this.nb_place > 0)
                        {
                                el.target.style.backgroundColor = "#E69138"
                                this.chosen = true;
                                this.$emit("changeTotalPlaces", -1);
                        }

                }
                else
                {
                    el.target.style.backgroundColor = "grey";
                    this.chosen = false;
                        this.$emit("changeTotalPlaces", 1);
                }
            }
        }
    }
</script>

<style scoped lang="scss">

    .square_place
    {
        background-color: grey;
        width: 17px;
        height: 17px;
        margin: 5px;
        cursor: pointer;
    }
    .square_place:hover
    {
        background-color: $menu_color_selected;
    }

</style>