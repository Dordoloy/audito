<template>
    <div v-if="this.$store.getters.getUser">
        <div v-if="this.$store.getters.getUser.type === 'admin' || this.$store.getters.getUser.type === 'organizer' ">
            <div class="space_form" id="space_form_one">
                <input class="space_input" type="text" v-model="event.name" placeholder="Nom de l'évènement">
                <select class="space_input" type="date" v-model="event.type"  name="">
                    <option v-for="type in events_types" :value="type">{{type.labelEventtype}}</option>
                </select>
                <input class="space_input" type="date" v-model="event.date" placeholder="Date" name="">
            </div>
            <div class="space_form" id="space_form_two">
                <input class="space_input" type="text" v-model="event.duration" placeholder="Durée">
                <input class="space_input" type="text" v-model="event.price" placeholder="Prix" name="">
                <input class="space_input" type="text" v-model="event.number" placeholder="Nombre de personne" name="">
            </div>
            <div class="space_form" id="space_form_three">
                <textarea style="margin-left: -5%;" class="space_input" v-model="event.plot" placeholder="Description de l'évènement" label="Description de l'évènement"/>
                <div class="space_add_img">
                    <img id="space_img" :src="event.url ? event.url : base_url">
                    <label for="file" class="label-file"> + </label>
                    <input id="file" class="input-file" @change="previewImage" type="file">
                </div>
            </div>
            <div>
                <input style="margin-bottom: 2%; margin-left: 2%; width: 93%" class="space_input" type="text" v-model="event.url" placeholder="URL image">
            </div>
            <div>
                <button class="space_button" @click="addEvent"> Ajouter </button>
            </div>

            <div id="space_modal">
                <div>
                    <input type="text" name="" placeholder="https:// .... ">
                    <label for="">Here is your URl</label>
                </div>
                <label for=""> OR</label>
                <div>
                    <input type="file" name="" placeholder="https:// .... ">
                    <label for="">Search your file</label>
                </div>
            </div>
        </div>
        <div v-else class="not_allowed"> <p>Vous n'êtes pas connecté en tant qu'organisateur ou Admin, vous n'avez donc pas accès à cette page</p></div>
    </div>
    <div v-else class="not_allowed"><p>Vous n'êtes pas connecté en tant qu'organisateur ou Admin, vous n'avez donc pas accès à cette page</p></div>
</template>

<script>

    import axios from "axios";

    export default {

        name: "NewEvent",
        data(){
            return{
                event:{
                    name:'',
                    type:'',
                    date:'',
                    url:'',
                    duration:'',
                    price:'',
                    number:'',
                    plot:'',
                },
                events_types:[],
                base_url:"https://www.freeiconspng.com/uploads/no-image-icon-13.png",
            }
        },
        methods: {
            loadEventTypes(){
                axios.get('/api/event_types').then((res) => {
                    this.events_types = res.data;
                    this.event.type = res.data[0];
                })
            },
            previewImage: function(event) {
                // Reference to the DOM input element
                var input = event.target;
                // Ensure that you have a file before attempting to read it
                if (input.files && input.files[0]) {
                    // create a new FileReader to read this image and convert to base64 format
                    var reader = new FileReader();
                    // Define a callback function to run, when FileReader finishes its job
                    reader.onload = (e) => {
                        // Note: arrow function used here, so that "this.imageData" refers to the imageData of Vue component
                        // Read image as base64 and set to imageData
                        this.event.url = e.target.result;
                    }
                    // Start the reader job - read file as a data url (base64 format)
                    reader.readAsDataURL(input.files[0]);

                }
                console.log(this.event.url);
            },
            saveFileInDB(){
                axios.post('api/media',{

                })
            .then((res) => {

                });
            },
            addEvent(){
                console.log(this.event);
                console.log(

                );


                axios.post('/api/events',{
                    nameEvent:this.event.name ,
                    descEvent: this.event.plot,
                    idOrganizer: "/api/organizers/2",
                    idEventtype:"/api/event_types/"+this.event.type.id ,
                    roompaternEvent: 0,
                    imgurlEvent: this.event.url,
                    priceEvent: parseFloat(this.event.price),
                    dateEvent:this.event.date ,
                    placesEvent: parseInt(this.event.number,10),
                    durationEvent:parseInt(this.event.duration,10),

                }).then((res) => {
                    this.$router.push("/events");

                }).catch((error) =>{
                    console.log(error);
                })
                console.log(this.event.price);
            }
        },
        mounted() {
          this.loadEventTypes();
    }

    }
</script>

<style lang="scss" scoped>
    .space_form{
        display: flex;
        flex-direction: row;
        justify-content: center;

        margin: 2%;
    }

    .space_input{
        border: none;
        background-color: white;
        border-radius: 5px;
        padding: 10px;
        width: 80%;

        margin-right: 2%;
    }


    #space_img{
        width: 20vh;
        height: auto;
    }

    .space_add_img
    {
        position: relative;
    }

    /* on personnalise le label comme on veut*/
    .label-file {
        font-size: 35px;
        cursor: pointer;
        color: white;
        font-weight: bold;
        width: 50px;
        height: 50px;
        text-align: center;
        margin: 0 auto;
        background: rgba(0,0,0,0.4);

        position: absolute;
        top: 10%;
        right: 5%;
        border-radius: 50%;
        padding: 2%;

        transition: transform 0.4s ease;
    }

    .label-file:hover {
        color: $menu_color_selected;
        transform: scale(1.2);
    }

    /* et on masque le input*/
       .input-file {
           display: none;
       }

    .space_button{
        border: none;
        cursor: pointer;
        background: $menu_color_selected;
        padding: 1% 2%;
        color: white;
        border-radius: 5px;
        margin-left: 2%;

    }

    #space_modal{
        display: none;
    }

    .not_allowed
    {
        height: 20em;
        font-size: 20px;
        font-weight: bold;
        color: $menu_color;
        display: flex;
        justify-content: center;
        align-items: center;
    }

</style>