<template>

    <div id="login_component">
        <div v-if="this.$store.getters.getUser" class="log_icon">
            <div class="div_text">
                <p @click="show_user" class="log_text">{{user.firstname+" "+user.lastname}}</p>
                <p @click="logout" class="log_text_sub">Déconnexion</p>
            </div>
            <i @click="show_user"  class="fas fa-user"></i>
        </div>
        <div v-else class="log_icon">
            <div class="div_text">
                <p @click="show" class="log_text">Me connecter</p>
                <p @click="show_sub" class="log_text_sub">Créer un compte</p>
            </div>
            <i @click="show" class="fas fa-user"></i>
        </div>

        <modal name="login" :width="300" :height="380">
            <section class="section_log">
                <div class="leave_log">
                    <i class="fa fa-times" @click="hide"></i>

                </div>

                <div class="log_form">
                    <label>Adresse Email</label>
                    <input  v-model="user_log.email" class="input_log"/>

                    <label>Mot de passe</label>
                    <input type="password" v-model="user_log.password" class="input_log"/>

                    <button @click="login" class="log_button">Connexion</button>
                </div>
            </section>

            <section class="log_create">
                <h2>Pas encore inscrit ?</h2>
                <div class="log_create_button">
                    <button @click="show_sub" class="log_button"> Créer un compte</button>
                </div>
            </section>

        </modal>
        <modal name="register" :width="300" :height="500">
            <div class="log_form_re">
                <div class="leave_log">
                    <i class="fa fa-times" @click="hide_sub"></i>
                </div>
                <label>Prenom</label>
                <input v-model="user_sub.firstnameUser" class="input_log"/>

                <label>Nom</label>
                <input v-model="user_sub.lastnameUser" class="input_log"/>


                <label>Téléphone</label>
                <input v-model="user_sub.phoneUser" class="input_log"/>

                <label>Adresse Email</label>
                <input v-model="user_sub.email" class="input_log"/>

                <label>Mot de passe</label>
                <input type="password" v-model="user_sub.password" class="input_log"/>

                <button @click="register" class="log_button">Créer</button>
            </div>

        </modal>

    </div>

</template>

<script>
    import axios from "axios";

    export default {
        name: "LoginPage",
        data() {
            return {
                users: [],
                user_sub: {
                    idUsertype: "/api/user_types/1",
                    type:"user",
                    firstnameUser: "",
                    lastnameUser: "",
                    phoneUser: "",
                    password: "",
                    email: ""
                },
                user_log: {
                    email: "",
                    password: ""
                },
                user : null
            }
        },
        props: {

        },
        methods: {
            loadUsers() {
                axios.get("/api/users").then((res) => {
                    console.log(res);
                    this.users = res.data
                })
            },
            logout(){
                localStorage.removeItem('jwtToken');
                delete axios.defaults.headers.common['Authorization'];
                this.$store.commit("removeUser");
                this.$router.push("/events");
            },
            register() {
                if (this.user_sub.firstnameUser && this.user_sub.lastnameUser && this.user_sub.phoneUser && this.user_sub.email && this.user_sub.password) {
                    axios.post("/api/users", this.user_sub).then((res) => {
                        console.log(res);
                        if (res.status === 201) {
                            this.user_log = {
                                "email": this.user_sub.email,
                                "password": this.user_sub.password
                            };
                            this.login()

                        } else {
                            console.log("non enregistrer");
                        }
                    })
                }
            },
            login() {
                if (this.user_log.email && this.user_log.password)
                {
                    axios.post("/api/users/login_check", this.user_log).then(async (res) => {
                        
                        console.log(res);
                        if (res.data.token && res.data.user)
                        {
                            //enregistrer le token dans le local storage
                            localStorage.setItem("jwtToken", "Bearer "+ res.data.token);
                            axios.defaults.headers.common['Authorization'] = res.data.token;

                            await this.$store.dispatch("setUser", res.data.user);
                            this.user=this.$store.getters.getUser;

                            //récupérer mon utilisateur et mettre dans le store
                            /*axios.get("/logcheck",{headers: { "Authorization": localStorage.getItem('jwtToken') }}).then((res)=>{
                                console.log(res);

                            }).catch(function (error) {
                                console.log(error);
                            });*/
                            if(this.$store.getters.getUser != null)
                            {
                                this.$router.push("/events");
                                this.$modal.hide('login');
                                this.$modal.hide('register');
                            }


                        }

                    })
                    .catch(function (error) {
                        console.log(error);
                    });
                }

            },
            show() {
                this.$modal.show('login');
            },
            show_sub() {
                this.$modal.hide('login');
                this.$modal.show('register');
            },
            hide() {
                this.$modal.hide('login');
            },
            hide_sub() {
                this.$modal.hide('register');
            },
            show_user(){
                this.$router.push("/user");
            }
        },
        mounted() {

        }
    }
</script>

<!-- scoped : style de ce composant uniuqement -->
<style scoped lang="scss">


    
    .log_icon{
        border:none;
        background-color: transparent;
        cursor: pointer;
        font-size: 2.2rem;
        color: white;

        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: flex-end;

        position: absolute;
        right: 2%;
        top: 2%;
    }
    .log_icon i{
        padding-left: 8%;
    }

    .div_text{
        flex-direction: column;
    }
    .log_text{
        font-size: 1.5rem;
        margin-left: -15%;
    }
    
    #modal_log .v--modal-box{
        position: relative;
        width: 30%;
        height: 60%;
    }

    .leave_log{
        width: 100%;
    }

    .leave_log .fa{
        padding: 1% 2%;
        float: right;
        font-size:2em;
        cursor: pointer;
        color: $menu_color_selected;
    }
    .leave_log .fa:hover{
        color: $menu_color_selected;

    }

    .section_log {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .log_form
    {
        position: absolute;
        top: 5%;
        width: 100%;

        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    .log_form_re
    {
        width: 100%;

        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .log_create h2 {
        color: lightslategray;
        font-size: 1.2em;
        text-align: center;
    }


    .log_form label{
        margin-top: 4%;
        margin-bottom: 3%;
        color: gray;
    }

    .log_form_re label{
        margin-top: 4%;
        margin-bottom: 3%;
        color: gray;
    }

    .input_log{
        border: none;
        background-color: $background;
        border-radius: 5px;
        padding: 10px;
        width: 80%;
    }

    .input_log:focus{
        outline: none;
    }

    .log_button{
        margin-top: 5%;
        border: none;
        box-shadow: none;
        padding: 3% 5%;
        border-radius: 4px;
        color: white;
        background-color: $menu_color_selected;
        cursor: pointer;
    }

    .log_button:hover{
        background-color: $orange_for_hover;
    }

    .log_button:focus{
        outline: none
    }

    .log_create_button{

        width: 100%;

        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
    }

    .log_create_button button{
        margin-right: 5%;

    }

    .log_create{
        position: absolute;
        bottom: 0;

        margin-top: 4%;
        width: 100%;
        height: 30%;
        background-color: $background;

        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    .log_text_sub{
        font-size: medium;
        border-radius: 10px;
        text-align: center;
        font-weight: bold;
        background-color: rgba(255,255,255,0.3);
        box-shadow: 0px 0px 20px black;

    }
    .log_text_sub:hover {
        background-color: rgba(255,255,255,0.4);
    }




</style>
