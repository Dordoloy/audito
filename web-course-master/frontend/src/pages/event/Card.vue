<template>
    <div v-if="cat.toLowerCase() === event_type || cat === 'Tous'">

        <div class="card">
            <h2 class="card_title">{{event.nameEvent}}</h2>
            <div>
                <img style="width: 150px; height: 200px;" class="card_poster" :src="event.imgurlEvent">
                <!--<i class="fa fa-plus card_plus"></i>-->
            </div>

            <p class="card_date">{{this.date}}</p>
            <p class="card_price">{{event.priceEvent}}€</p>
            <button class="card_button" type="button" @click="show_reserved">Réserver</button>
            <span v-if="this.$store.getters.getUser">
                <button v-if="this.$store.getters.getUser.type === 'admin'" class="card_button" type="button" @click="delEvent">Supprimer</button>
            </span>
        </div>

        <div>
            <modal :name="modalReservedName" :width="1000" :height="590">
                <section class="first_layer_reservation">
                    <img class="poster_reservation" src="../../ressources/images/event/alita.jpg">
                    <h2 class="title_reservation">{{event.nameEvent}}</h2>
                    <p>{{event.descEvent}}</p>
                    <i class="fas fa-times modal_cross" @click="hide_reserved"></i>
                </section>
                <section class="second_layer_reservation">
                    <tarif-event-modal v-for="tarif in tarifs" :tarif.sync="tarif" :total.sync="total_place" @totalPlaces="changeTotalPlaces"></tarif-event-modal>
                </section>
                <section class="last_layer_reservation">
                    <a class="promo_label_modal" href="">Vous n'êtes pas encore abonné ? Profitez de tarifs préférentiels !</a>
                    <p class="total_price">Total : {{calculTotal}}€</p>
                    <button v-if="total_place>0" class="modal_button" type="button" @click="show_place_choice">SUIVANT</button>
                </section>
            </modal>
        </div>

        <div>
            <modal :name="modalPlaceName" :width="1000" :height="590">
                <section class="first_layer_reservation">
                    <i class="fas fa-arrow-left modal_arrow" @click="back_to_reserved"></i>
                    <i class="fas fa-times modal_cross c2" @click="hide_reserved"></i>
                </section>
                <h2 id="place_title">CHOIX DES PLACES</h2>
                <div id="all_places">
                    <section class="section_place_one">
                        <place v-for="n in 100" :nb_place="total_place"
                                @changeTotalPlaces="changeTotalPlaces"></place>
                    </section>
                    <section class="section_place_one">
                        <place v-for="n in 200" :nb_place="total_place"
                               @changeTotalPlaces="changeTotalPlaces"></place>
                    </section>
                    <section class="section_place_left">
                        <place v-for="n in 48" :nb_place="total_place"
                               @changeTotalPlaces="changeTotalPlaces"></place>
                    </section>
                    <section class="section_place_right">
                        <place v-for="n in 48" :nb_place="total_place"
                               @changeTotalPlaces="changeTotalPlaces"></place>
                    </section>
                </div>
                <section style="display: flex; flex-wrap: wrap; margin-top:2%">
                    <div class="legend"></div>Disponible
                    <div class="legend nb2"></div>Non disponible
                    <div class="legend nb3"></div>Vos places
                    <button v-if="total_place===0" class="modal_button2" type="button" @click="show_payment">SUIVANT</button>
                </section>
            </modal>
        </div>

        <div>
            <modal :name="modalPaimentName" :width="1000" :height="590">
                <section class="first_layer_reservation">
                    <i class="fas fa-arrow-left modal_arrow" @click="back_to_place_choice"></i>
                    <i class="fas fa-times modal_cross c2" @click="hide_payment"></i>
                </section>
                <credit-card></credit-card>
            </modal>
        </div>

    </div>
</template>

<script>
    import TarifEventModal from "./TarifEventModal";
    import Place from "./Place";
    import CreditCard from "./creditCard";
    import SubMenu from "../nav/SubMenu";
    import axios from "axios";

    var moment = require('moment');
    moment().format();
    export default {
        name: "Card",
        components: {SubMenu, CreditCard, TarifEventModal,Place},
        data(){
            return {
                tarifs : [
                    {
                        price_label:"PLEIN TARIF",
                        price:200,
                        place:0
                    },
                    {
                        price_label:"ADULTE REDUIT",
                        price:180,
                        place:0

                    },
                    {
                        price_label:"JEUNE",
                        price:150,
                        place:0,
                    },
                ],

                total_place : 0,
                event_type : '',
                modalReservedName : '',
                modalPlaceName : '',
                modalPaimentName : '',
            }
        },
        props: {
            event: {

            },
            cat:{},
            user:{},
            date:"",

        },
        computed: {
            calculTotal(){
                return this.tarifs.reduce(function(price, tarif){
                    return price + tarif.price * tarif.place
                }, 0)
            },
            calculTotalPlace(){
                return this.tarifs.reduce(function(place, tarif){
                    return place + tarif.place
                }, 0)
            },

        },
        methods:{
            format_date(){
                let arrayDate = this.event.dateEvent.slice(0,10).split("-");
                this.date = arrayDate[2] + "/" + arrayDate[1] + "/" + arrayDate[0];
            },
            show_cat2() {
                let cat = this.event.title;
                return cat;
            },
            show_reserved() {
                console.log(this.$store.getters.getUser);
                this.$modal.show(this.modalReservedName);
            },
            hide_reserved() {
                this.$modal.hide(this.modalReservedName);
                this.$modal.hide(this.modalPlaceName );
                this.total_place = this.calculTotalPlace;
                this.total_place = this.calculTotalPlace;
            },
            show_place_choice() {
                this.$modal.show(this.modalPlaceName );
                this.$modal.hide(this.modalReservedName);
            },
            show_payment() {
                this.$modal.show(this.modalPaimentName );
                this.$modal.hide(this.modalPlaceName );
                this.$modal.hide(this.modalReservedName);
            },
            hide_payment() {
                this.$modal.hide(this.modalPaimentName);
                this.$modal.hide(this.modalPlaceName );
                this.$modal.hide(this.modalReservedName);
                this.total_place = this.calculTotalPlace;
            },
            back_to_reserved(){
                this.$modal.hide(this.modalPlaceName );
                this.$modal.show(this.modalReservedName);
                this.total_place = this.calculTotalPlace;
            },
            back_to_place_choice(){
                this.$modal.show(this.modalPlaceName );
                this.$modal.hide(this.modalReservedName);
                this.$modal.hide(this.modalPaimentName);
                this.total_place = this.calculTotalPlace;
            },
            hide_place_choice() {
                this.$modal.hide(this.modalPlaceName );
                this.total_place = this.calculTotalPlace;
            },
            changeTotalPlaces(operationOnTotalPlaces){
                this.total_place += operationOnTotalPlaces;
                //console.log(this.total_place);
            },
            loadType(index) {
                axios.get(""+index).then((res) => {
                    this.event_type = res.data.labelEventtype;
                    return this.event_type;
                })
                    .catch((error) => {
                        console.log(error);
                    })
            },
            loadVar(){
                this.modalReservedName = 'Reserved'+this.event.id;
                this.modalPlaceName = 'Place'+this.event.id;
                this.modalPaimentName = 'Paiment'+this.event.id;
                //console.log(this.modalReservedName);
            },
            delEvent(){
                console.log(this.users);
                console.log(

                );
                axios.delete('/api/events/'+this.event.id,{

                }).then((res) => {
                    this.$router.push('/erreur');



                }).catch((error) =>{
                    console.log(error);
                })
            }
        },
        mounted() {
            this.loadType(this.event.idEventtype);
            this.loadVar();
            this.format_date();

        }
    }
</script>

<style scoped lang="scss">

    //cards
        .first_layer_reservation
        {
            display: flex;
            margin-top: 3%;
            font-size: 2.5vh;
        }

        .title_reservation
        {
            font-size: 7vh;
            font-weight: normal;
            margin-left: 3%;
            margin-right: 3%;
            margin-top: -1%;
        }

        .poster_reservation
        {
            width: 20%;
            height: 100%;
            margin-left: 3%;
        }

    //modal_reservation
        .modal_cross
        {
            font-size: 1.5em;
            position: absolute;
            margin-top: -2.5%;
            margin-left: 97%;
            height: 5%;
            color: grey;
            cursor: pointer;
        }
        .modal_cross:hover
        {
            color: $menu_color;
        }

        .c2
        {
            margin-left: 92.5%;
        }

        .modal_arrow
        {
            font-size: 1.5em;
            margin-top: -2.5%;
            margin-left: 1%;
            height: 5%;
            color: grey;
            cursor: pointer;
        }
        .modal_arrow:hover
        {
            color: $menu_color;
        }

        .last_layer_reservation
        {
            display: flex;
            flex-wrap: wrap;
        }

        .modal_button
        {
            background-color: $menu_color;
            border-radius: 4px;
            border: none;
            padding: 1%;
            width: 15%;
            cursor: pointer;
            font-size: 15px;
            color: white;
            font-weight: bold;
            text-transform: uppercase;
            transition: all ease 0.5s;
            margin-top: -3%;
            margin-left: 80%;
        }

        .modal_button:hover
        {
            background-color: $red_for_hover;
        }

        .promo_label_modal
        {
            margin-top: 3%;
            margin-left: 1%;
            color: $menu_color_selected;
            text-decoration: none;
        }

        .total_price
        {
            margin-top: 3%;
            margin-left: 15%;
            font-size: 1.5em;
            color: $menu_color;
            font-weight: bold;
        }

    //places modal
        .section_place_one
        {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-bottom: 2.5%;
            margin-top: 1%;
            width: 70%;
            margin-left: 15%;
        }

        .section_place_left
        {
            width: 14.5%;
            display: flex;
            flex-wrap: wrap;
            margin-top: -44%;
        }

        .section_place_right
        {
            width: 14.5%;
            display: flex;
            flex-wrap: wrap;
            margin-top: -36%;
            margin-left: 87.5%;
        }


        #place_title
        {
            color: $menu_color_selected;
            text-align: center;
            font-size: 50px;
        }

        #all_places
        {
            border: solid orange 1px;
            width: 90%;
            margin-left: 5%;
            margin-top: 0%;
            padding-bottom: 6%;
        }

        .legend
        {
            background-color: grey;
            width: 17px;
            height: 17px;
            margin: 5px;
            /*margin-top: 0%;*/
            margin-left: 5%;
        }

        .legend.nb2
        {
            background-color: black;
        }

        .legend.nb3
        {
            background-color: $menu_color_selected;
        }

        .modal_button2
        {
            background-color: $menu_color;
            border-radius: 4px;
            border: none;
            padding: 1%;
            width: 15%;
            cursor: pointer;
            font-size: 15px;
            color: white;
            font-weight: bold;
            text-transform: uppercase;
            transition: all ease 0.5s;
            position: absolute;
            margin-top: 0%;
            margin-left: 80%;
        }

</style>