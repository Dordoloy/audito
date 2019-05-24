<template>
  <div class="rglmt_gde_div">
    <!-- <h2>Réglement Interieur</h2> -->
    <p id="rglmt_title">Pour que tout se passe bien, l'équipe de L'audito vous demande de respecter quelques règles de vie.</p>

	<div class="">
	    <div class="wrapper">
	        <div class="box one top">
	        	<p>On ne jette pas le boissons et les gobelets en plastiques, on les mets à la poubelle</p>
	        	<img src="https://img.icons8.com/dusk/200/000000/coffee-to-go.png">
	        </div>
	        <div class="box two top"></div>
	        <div class="box one top">
	        	<p>On est polit, on dit bonjour à l'équipe qui vous accueille et on fait un beau sourire</p>
	        	<img src="https://img.icons8.com/dusk/200/000000/happy.png">
	        </div>
	        <div class="box two top"></div>
	        <div class="box one bottom">
	        	<img src="https://img.icons8.com/dusk/200/000000/armchair.png">
	        	<p>On fait attention au materiel, on ne met pas les pieds sur les sièges mis à votre disposition</p>
	        	
	        </div>
	        <div class="box one bottom">
	        	<img src="https://img.icons8.com/dusk/200/000000/toilet-bowl.png">
	        	<p>Quand on utilise les sanitaires, on les laisse aussi propre qu'on les as trouvé</p>
	        </div>
	        <div class="box two bottom"></div>
	        <div class="box two bottom"></div>
	    </div>
	</div>

  </div>
</template>

<script>
export default {
  name: "ReglementInterieur"
};
</script>

<style type="text/css" scoped lang="scss">

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

.rglmt_gde_div{
	/*background-color: rgba(0,0,0,0.7);*/
	padding: 7vh;
}

#rglmt_title{
  text-align: center;
  margin: 5vh;
  font-size: 20pt;
  /*color: white;*/
}

.wrapper {
  display: grid;
  margin: auto;
  width: 75%;
  height: 60vh;
  grid-column-gap: 5px;
  grid-template-columns: repeat(100, 1fr);
  margin-bottom: 5vh;
}

.box {
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  text-align: center;
  transition: all 1s ease;
}

.box img{
	height: 50%;
	margin: 6%;
}

.box p{
	color: white;
	padding: 11%;
	font-family: 'Montserrat', sans-serif;
}

.box.one {
  grid-column: span 25;
  grid-row: span 35;
  background-color: $red_for_hover;
}

.box.two {
  grid-column: span 25;
  grid-row: span 30;
  background-color: $menu_color_selected;
}

.box.top {
  border-radius: 3px 3px 0px 0px;
}

.box.bottom {
  border-radius: 0px 0px 3px 3px;
}

</style>