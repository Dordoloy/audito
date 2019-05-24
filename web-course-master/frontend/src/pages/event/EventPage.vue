<template>

    <div>

        <div style="display: flex; flex-wrap: wrap;">
            <sub-menu-event v-for="menu in menus" :menu="menu" :events="events" :cat.sync="filerCat"></sub-menu-event>
        </div>
        <!-- <card v-for="card in cards" :card="card"></card> -->
        <div style="display: flex; flex-wrap: wrap; width: 90%; margin:auto; margin-top: 3%;">
            <card style="width: 200px; margin: 0.5%;"  v-for="event in events" :event="event" :cat="filerCat"></card>
        </div>

    </div>
</template>


<script>
    import axios from "axios";
    import card from './Card'
    import SubMenuEvent from "./subMenuEvent";


    export default {
        name: "eventPage",
        components: {SubMenuEvent, card},
        data() {
            return {
                events: [
                    /*{
                        title:"ALITA",
                        date:"01/01/2528",
                        price:"200",
                        description:"Vive les pingouins, c'est les meilleurs !" +
                            "Vive les pingouins, c'est les meilleurs !" +
                            "Vive les pingouins, c'est les meilleurs !Vive les pingouins, c'est les meilleurs !",
                        placement:3,
                        category:"FILMS",
                    },
                    {
                        title:"AVATAR",
                        date:"01/01/2528",
                        price:"200",
                        description:"Vive les pingouins, c'est les meilleurs !" +
                            "Vive les pingouins, c'est les meilleurs !" +
                            "Vive les pingouins, c'est les meilleurs !Vive les pingouins, c'est les meilleurs !",
                        placement:3,
                        category:"THEATRE",
                    },*/

                ],
                menus: [
                    {
                        title: "Tous",
                    },
                    {
                        title: "Films",
                    },
                    {
                        title: "Theatres",
                    },
                    {
                        title: "Spectacle",
                    },
                    {
                        title: "Danses",
                    },
                    {
                        title: "Musique",
                    },
                    {
                        title: "Conference",
                    },
                    {
                        title: "Debat",
                    },
                    {
                        title: "Autre",
                    },
                ],
                filerCat: "Tous",

            }
        },
        computed: {},
        methods: {
            loadEvent() {
                axios.get("/api/events").then((res) => {
                    console.log(res.data[0].descEvent);
                    console.log(res);
                    this.events = res.data;
                })
            },

        },
        mounted() {

            this.loadEvent();

        }
    }
</script>
    
