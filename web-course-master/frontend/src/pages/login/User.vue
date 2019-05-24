<template>
    <div >
        <section id="user_update">
            <h1 style="position: absolute; left: 5%; top: -5%; font-size: 50px;">PROFIL</h1>
            <div style="margin-left: 30%; margin-top: 5%">
                <p class="label_user">Prénom : {{ user.firstname}} <input class="input_chnage_user" v-if="modif===1" type="text" placeholder="changement prénom"></p>
                <p class="label_user">Nom : {{ user.lastname}} <input class="input_chnage_user" v-if="modif===1" type="text" placeholder="changement nom"></p>
                <p class="label_user">Adresse e-mail : {{user.email}} <input class="input_chnage_user" v-if="modif===1" type="text" placeholder="changement email"></p>
                <p class="label_user">Numéro téléphone : {{user.phone}} <input class="input_chnage_user" v-if="modif===1" type="text" placeholder="changement tel"></p>
                <button class="modif_button" type="button" @click="modif_user">Modifier</button>
            </div>

            <button id="button_create_organizer" type="button" class="modif_button" v-if="user.type == 'admin' || user.type == 'organizer'">Créer un compte organisateur</button>
        </section>
    </div>
</template>

<script>
    export default {
        name : "User",
        data() {
            return{
                user:{},
                modif : 0,
            }
        },
        props : {
            user : null
        },
        methods : {
            loadUser(){
                this.user=this.$store.getters.getUser;
                console.log(this.user);
            },
            modif_user(){
                if(this.modif===0)
                    this.modif=1;
                else
                    this.modif=0;
                return this.modif;
            }
        },
        mounted() {
            this.loadUser();
        }
    }
</script>

<style scoped lang="scss">
    #user_update{
        position: relative;
    }

    .modif_button
    {
        background-color: $menu_color;
        border-radius: 4px;
        border: none;
        padding: 1%;
        width: 15%;
        cursor: pointer;
        font-size: 11px;
        color: white;
        font-weight: bold;
        text-transform: uppercase;
        -webkit-transition: all ease 0.5s;
        transition: all ease 0.5s;
        margin-bottom: 7%;
    }

    .modif_button:hover{
        background-color: $red_for_hover;
    }

    .input_chnage_user
    {
        position: absolute;
        left: 45%;
        border: none;
        background-color: white;
        border-radius: 5px;
        padding: 10px;
    }

    .label_user
    {
        margin-bottom: 3%;
    }

    #button_create_organizer{
        position: absolute;
        top: 5%;
        right: 5%;
    }

</style>