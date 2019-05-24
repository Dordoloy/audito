<template>
	<div id="auditocontact_form">
        <h2>Pour toutes questions, veuillez utiliser le formulaire suivant. Nous tâcherons de vous répondre dans les plus brefs délais.</h2>
        <div id="form-main">
            <div id="form-div">
                <form class="form" id="form1">
          
                  <p class="name">
                    <input name="name" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Nom" id="name" />
                  </p>
          
                  <p class="email">
                    <input name="email" type="text" class="validate[required,custom[email]] feedback-input" id="email" placeholder="Email" />
                  </p>
          
                  <p class="text">
                    <textarea name="text" class="validate[required,length[6,300]] feedback-input" id="comment" placeholder="Commentaire"></textarea>
                  </p>
          
          
                  <div class="submit">
                    <input type="submit" value="ENVOYER" id="button-blue"/>
                    <div class="ease"></div>
                  </div>
                </form>
            </div>
	    </div>
    </div>
</template>

<script>
	 import axios from "axios";
     import SubMenu from "../nav/SubMenu"

	  export default {
        name : "AuditoContactPage",
        components:{SubMenu},
        data(){
            return {
                menus:[
                    {
                        title:"Présentation générale",
                        path:"/audito"
                    },
                    {
                        title:"Contact",
                        path:"/audito/contact"
                    },
                ],
            }

        },
        computed : {

        },
        methods : {
            // selected(el){
            //     let test = document.querySelectorAll(".audito_one_button");
            //     for(let t of test){
            //         t.style.color = "blue";
            //     }
                
            //     el.target.style.color = "red";
            // }
        },  
        mounted(){
           
        }
    }




</script>

<style type="text/css" scoped lang="scss">
    
    *{
        font-family: roboto;
    }

	#auditocontact_form{
		padding: 0 2%;
	}
    
    #auditocontact_form h2{
        margin-top: 7vh;
        text-align: center;
    }

    html{    background:url(http://thekitemap.com/images/feedback-img.jpg) no-repeat;
      background-size: cover;
      height:100%;
    }

    #feedback-page{
        text-align:center;
    }

    #form-main{
        width:100%;
        float:left;
        padding-top:0px;
    }

    #form-div {
        background-color:rgba(72,72,72,0.4);
        padding-left:35px;
        padding-right:35px;
        padding-top:35px;
        padding-bottom:50px;
        width: 450px;
        float: left;
        left: 50%;
        position: absolute;
      margin-top:30px;
        margin-left: -260px;
      -moz-border-radius: 7px;
      -webkit-border-radius: 7px;
    }

    .feedback-input {
        color:#3c3c3c;
        font-family: Helvetica, Arial, sans-serif;
        font-weight:500;
        font-size: 18px;
        border-radius: 0;
        line-height: 22px;
        padding: 13px 13px 13px 54px;
        margin-bottom: 10px;
        width:100%;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        -ms-box-sizing: border-box;
        box-sizing: border-box;
      border: 3px solid rgba(0,0,0,0);
    }

    .feedback-input:focus{
        background: #fff;
        box-shadow: 0;
        border: 3px solid #e3831c;
        color: #3498db;
        outline: none;
      padding: 13px 13px 13px 54px;
    }

    .focused{
        color:#30aed6;
        border:#30aed6 solid 3px;
    }

    /* Icons ---------------------------------- */
    #name{
        background-image: url(http://rexkirby.com/kirbyandson/images/name.svg);
        background-size: 30px 30px;
        background-position: 11px 8px;
        background-repeat: no-repeat;
    }

    #name:focus{
        background-image: url(http://rexkirby.com/kirbyandson/images/name.svg);
        background-size: 30px 30px;
        background-position: 8px 5px;
      background-position: 11px 8px;
        background-repeat: no-repeat;
    }

    #email{
        background-image: url(http://rexkirby.com/kirbyandson/images/email.svg);
        background-size: 30px 30px;
        background-position: 11px 8px;
        background-repeat: no-repeat;
    }

    #email:focus{
        background-image: url(http://rexkirby.com/kirbyandson/images/email.svg);
        background-size: 30px 30px;
      background-position: 11px 8px;
        background-repeat: no-repeat;
    }

    #comment{
        background-image: url(http://rexkirby.com/kirbyandson/images/comment.svg);
        background-size: 30px 30px;
        background-position: 11px 8px;
        background-repeat: no-repeat;
    }

    textarea {
        width: 100%;
        height: 150px;
        line-height: 150%;
        resize:vertical;
    }

    

    #button-blue{
        font-family: roboto;
        float:left;
        width: 100%;
        border: #fbfbfb solid 4px;
        cursor:pointer;
        background-color: #e3831c;
        color:white;
        font-size:24px;
        padding-top:22px;
        padding-bottom:22px;
        -webkit-transition: all 0.3s;
        -moz-transition: all 0.3s;
        transition: all 0.3s;
      margin-top:-4px;
      font-weight:700;
    }

    #button-blue:hover{
        background-color: rgba(0,0,0,0);
        color: #e3831c;
    }
        
    .submit:hover {
        color: #3498db;
    }
        
    .ease {
        width: 0px;
        height: 74px;
        background-color: #fbfbfb;
        -webkit-transition: .3s ease;
        -moz-transition: .3s ease;
        -o-transition: .3s ease;
        -ms-transition: .3s ease;
        transition: .3s ease;
    }

    .submit:hover .ease{
      width:100%;
      background-color:white;
    }

    @media only screen and (max-width: 580px) {
        #form-div{
            left: 3%;
            margin-right: 3%;
            width: 88%;
            margin-left: 0;
            padding-left: 3%;
            padding-right: 3%;
        }
    }

</style>