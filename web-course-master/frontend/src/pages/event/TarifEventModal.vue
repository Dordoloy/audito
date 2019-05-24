<template>
    <div class="first_price">
        <p class="tarif_label">{{tarif.price_label}}</p>
        <p class="price_modal">{{tarif.price}}€</p>
        <p class="number_of_places">{{tarif.place}}</p>
        <i class="fa fa-plus modal_plus"  @click="plus"></i>
        <i class="fas fa-minus modal_minus" @click="minus"></i>
        <p class="total_price">Total : {{tarif.place*tarif.price}}€</p>
    </div>
</template>

<script>
    export default {
        name: "TarifEventModal",
        props: {
            tarif: {

            },

        },
        methods: {
            plus() {
                this.tarif.place += 1;
                this.$emit("totalPlaces", +1);

            },
            minus() {
                if(this.tarif.place > 0)
                {
                    this.tarif.place -= 1;
                    this.$emit("totalPlaces", -1);
                }
            }
        },

    }
</script>

<style scoped lang="scss">

    .first_price
    {
        border-bottom: 1px solid black;
        width: 90%;
        margin-left: 2.5%;
        margin-top: 2%;
        padding: 1.5%;
        display: flex;
    }

    .tarif_label
    {
        font-weight: bold;
        font-size: 4vh;
    }

    .price_modal
    {
        position: absolute;
        margin-left: 35%;
        margin-top: 1%;
        font-size: 1.5em;
    }

    .number_of_places
    {
        position: absolute;
        margin-left: 55%;
        margin-top: 1%;
        font-size: 1.5em;
    }

    .modal_plus
    {
        position: absolute;
        margin-left: 58%;
        margin-top: 0.5%;
        font-size: 2.5em;
        color: $menu_color;
        cursor: pointer;
    }

    .modal_minus
    {
        position: absolute;
        margin-left: 50%;
        margin-top: 0.5%;
        font-size: 2.5em;
        color: $menu_color;
        cursor: pointer;
    }

    .total_price
    {
        position: absolute;
        margin-left: 70%;
        margin-top: 1%;
        font-size: 1.5em;
    }

</style>