<template>
  <div class="acces_gde_div">
    <!-- <h2>Acces</h2> -->
    
<!--     https://alligator.io/vuejs/vue-google-maps/ -->


    <p id="acces_p">L'Audito se trouve à Annecy, au coeur d'une ville pleine de vie et de richesses. Venez nous rencontrer ! </p>

  <div class="acces_div_img">
    <p>42 Avenue de Loverchy, 74 000 Annecy<br>Parking privé et arrêt de bus "Laudito" (lignes 5 et 8) à 5 minutes à pieds</p>
    <img src="../../ressources/images/info/audito2.jpg">
    <p>Situé sur la route entre Annecy et Seynod et à côté du musée des 3 guerres, c'est l'endroit idéal où petits et grands peuvent se retrouver pour une passer un bon moment ensemble.</p>
    <img src="../../ressources/images/info/audito1.jpg">
  </div>

  </div>
</template>

<script>
export default {
  name: "Acces"
};
</script>

<style type="text/css" scoped lang="scss">

.acces_gde_div{
  background-color: rgba(0,0,0,0.7);
  padding: 2vh;
  padding-bottom: 10vh;
}


.acces_gde_div img{
	width: 80%;
  margin: 1% 5px 1% 5px;
  border-radius: 3px;
}

#acces_p{
  text-align: center;
  margin: 5vh;
  font-size: 20pt;
  color: white;
}

.acces_div_img{
  width: auto;
  margin: auto;
  text-align: center;
  padding: 5px;
}

.acces_div_img p{
  color: white;
  width: 50%;
  margin: auto;
  padding: 4%;
}

</style>