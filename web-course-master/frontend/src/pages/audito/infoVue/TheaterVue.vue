<template>
	<div id="theatervue_content">
		<div id="theatrevue_content_pictures">
            <img src="https://media.giphy.com/media/20G7AQLMGqKLVcfUlb/giphy.gif">
        </div>
        <div id="theatrevue_content_text">
            <h1>Amateur de pièces de théatre ?</h1>
            <p>L'audito propose différentes pièces de théatre qui sont suceptible de vous plaire !</p>
            <p> Vous aimez Molière ? Shakespear ? Alors venez assister aux représentation de leurs plus grandes oeuvres reprises par des comédiens hors pair.</p>
            <p>Retrouvez nos pièces <router-link :to="{path: '/events'}">ici</router-link> !</p>
        </div>
        
	</div>
</template>

<script>

	  export default {
        name : "CinemaVue",
        data(){
            return {

            }

        },
        computed : {

        },
        methods : {

        },  
        mounted(){
           
        }
    }




</script>

<style type="text/css" scoped lang="scss">
    
    h1{
        margin-bottom: 5vh;
        font-size: 22pt;
    }

    a:visited{
        text-decoration: underline;
        color: white;
    }

    a:active{
        text-decoration: underline;
        color: white;
    }

    #theatervue_content{
        background-color: #D43B3B;
        color: white;
        display: flex;
        height: 44vh;
        margin-bottom: 5vh;
    }

    #theatrevue_content_text{
        flex-direction:column;
        flex: 1 1 70%;
        padding: 5vh 5vw 5vh 5vw;
    }

    #theatrevue_content_text p{
        margin: 2vh 0vw 2vh 0vw;
    }

    #theatrevue_content_text p a{
        font-weight: bold;
    }

    #theatrevue_content_pictures{
        flex: 1 1 30%;
        padding: 5vh 5vw 5vh 5vw;
    }

    #theatrevue_content_pictures img{
        height: 100%;
        width: auto;
    }

</style>