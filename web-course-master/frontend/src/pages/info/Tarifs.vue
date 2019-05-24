<template>
	<div class="tarif_gde_div">
		<!-- <h2>Tarifs</h2> -->
		<carousel paginationColor="#e0e0e0" paginationActiveColor="#ffa500" perPage=1 :navigationEnabled="true">
			<slide class="info_slide slide_color_a">
				<table class="info_table">
					<thead>
						<tr>
							<th class="slide_title"><h3>Tarifs adhesion</h3></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="label">Pass'Audito individuelle Adulte</td>
							<td class="montant">12€</td>
							<td class="precision"></td>
						</tr>
						<tr>
							<td class="label">Pass' Audito couple</td>
							<td class="montant">20€</td>
							<td class="precision">Les adherents requierent la même adresse</td>
						</tr>
						<tr>
							<td class="label">Pass' Audito jeune</td>
							<td class="montant">5€</td>
							<td class="precision">- 18 ans et étudiant - 26 ans - adhésion offerte à partir du 2e enfant - demandeur d'emploi</td>
						</tr>
						<tr>
							<td class="label">Adhésion parrainée</td>
							<td class="montant">5€</td>
							<td class="precision">Réservée aux détenteurs des cartes Cézam et Loisirs et aux personnes dont l'entreprise est adhérente à L'Audito, sur présentation
							d'un justificatif</td>
						</tr>
					</tbody>
				</table>
			</slide>
			<slide class="info_slide slide_color_b">
				<table class="info_table">
					<thead>
						<tr>
							<th class="slide_title"><h3>Tarifs Cinéma</h3></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="label">Plein tarif</td>
							<td class="montant">6,50€</td>
							<td class="precision"></td>
						</tr>
						<tr>
							<td class="label">Réduit adulte</td>
							<td class="montant">6€</td>
							<td class="precision">Adhérent Auditorium, cartes Cezam et carte Loisirs, sur présentation d'un justificatif</td>
						</tr>
						<tr>
							<td class="label">Tarif jeune</td>
							<td class="montant">4,50€</td>
							<td class="precision">-18 ans et étudiant - 26 ans, demandeur d'emploi sur présentation d'un justificatif de - 6 mois</td>
						</tr>
						<tr>
							<td class="label">Matinée adulte</td>
							<td class="montant">5€</td>
							<td class="precision"></td>
						</tr>
						<tr>
							<td class="label">Matinée jeune</td>
							<td class="montant">3,80€</td>
							<td class="precision"></td>
						</tr>
						<tr>
							<td class="label">Carte M'ra</td>
							<td class="montant">1€</td>
							<td class="precision"> 1 € de participation par place. Présentation obligatoire d'une pièce d'identité</td>
						</tr>
						<tr>
							<td class="label">Séances en 3D</td>
							<td class="montant">+ 1,50€</td>
							<td class="precision">Supplément 1,50 € pour les lunettes</td>
						</tr>
					</tbody>
				</table>
			</slide>
			<slide class="info_slide slide_color_a">
				<table class="info_table">
					<thead>
						<tr>
							<th class="slide_title"><h3>Tarifs Conférences</h3></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="label">Plein tarif</td>
							<td class="montant">9,50€</td>
							<td class="precision"></td>
						</tr>
						<tr>
							<td class="label">Tarif réduit</td>
							<td class="montant">8€</td>
							<td class="precision">Retraité, adhérent, carte Cezam, carte Loisirs, sur présentation d'un justificatif</td>
						</tr>
						<tr>
							<td class="label">Tarif réduit</td>
							<td class="montant">4€</td>
							<td class="precision">- 18 ans et étudiant - de 26 ans, demandeur d'emploi sur présentation d'un justificatif de - 6 mois</td>
						</tr>
						<tr>
							<td class="label">Abonnement 7 conférences connaissance du monde</td>
							<td class="montant">45,50€</td>
							<td class="precision"></td>
						</tr>
						<tr>
							<td class="label">Chéquier famille (10 chèques)</td>
							<td class="montant"> 75 €</td>
							<td class="precision">Soit 7,50 € la place. Les chèques ne pourront pas être rachetés en fin de saison, ni réutilisés sur la saison suivante, il n’inclut pas la réservation d’une conférence précise.</td>
						</tr>
					</tbody>
				</table>
			</slide>
			<slide class="info_slide slide_color_b">
				<table class="info_table">
					<thead>
						<tr>
							<th class="slide_title"><h3>Tarifs Spectacles Vivants</h3></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="label sous-titre sous-titre_first" colspan="2"><h4>Tarifs spectacle à l'unité - spectacle à tarif unique</h4></td>
						</tr>
						<tr>
							<td class="label">Plein tarif Adulte</td>
							<td class="montant">20€</td>
							<td class="precision"></td>
						</tr>
						<tr>
							<td class="label">Tarif réduit Adulte</td>
							<td class="montant">16€</td>
							<td class="precision">Adhérent, groupe à partir de 10 personnes, détenteur de l'adhésion parrainée</td>
						</tr>
						<tr>
							<td class="label">Plein tarif Jeune</td>
							<td class="montant">10€</td>
							<td class="precision">- 18 ans et étudiant - de 26 ans, demandeur d'emploi sur présentation d'un justificatif de - 6 mois</td>
						</tr>
						<tr>
							<td class="label">Tarif réduit Jeune</td>
							<td class="montant">7€</td>
							<td class="precision">adhérent, détenteurs de l'adhésion parrainée</td>
						</tr>
						<tr>
							<td class="label">Tarif scolaire établissement adhérent</td>
							<td class="montant">7€</td>
							<td class="precision"></td>
						</tr>
						<tr>
							<td class="label">Tarif scolaire établissement non adhérent</td>
							<td class="montant">9€</td>
							<td class="precision"></td>
						</tr>
						<tr>
							<td class="label sous-titre" colspan="2"><h4>Tarifs spectacle à l'unité - spectacle à tarif diversifié</h4></td>
						</tr>
						<tr>
							<td class="label">Places centrales</td>
							<td class="montant">+ 3€ sur le tarif précedent</td>
							<td class="precision"></td>
						</tr>
						<tr>
							<td class="label">Places latérales</td>
							<td class="montant">- 2€ sur le tarif unique</td>
							<td class="precision"></td>
						</tr>
						<tr>
							<td class="label">Places hautes</td>
							<td class="montant">Tarifs ci-dessus</td>
							<td class="precision"></td>
						</tr>
					</tbody>
				</table class="info_table">
			</slide>
			<slide class="info_slide slide_color_a">
				<table class="info_table">
					<thead>
						<tr>
							<th class="slide_title"><h3>Tarifs Abonnement Spectacles Vivants</h3></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="label sous-titre sous-titre_first" colspan="2"><h4>Adulte</h4></td>
						</tr>
						<tr>
							<td class="label">Découverte</td>
							<td class="montant">13€ la place</td>
							<td class="precision">De 3 à 6 spectacles</td>
						</tr>
						<tr>
							<td class="label">Envie</td>
							<td class="montant">11€ la place</td>
							<td class="precision">De 7 à 11 spectacles</td>
						</tr>
						<tr>
							<td class="label">Passion</td>
							<td class="montant">10€ la place</td>
							<td class="precision">+ de 12 spectacles</td>
						</tr>
						<tr>
							<td class="label sous-titre" colspan="2"><h4>Jeune</h4></td>
						</tr>
						<tr>
							<td class="label">Découverte</td>
							<td class="montant">6,50€ la place</td>
							<td class="precision">De 3 à 6 spectacles</td>
						</tr>
						<tr>
							<td class="label">Envie</td>
							<td class="montant">5,50€ la place</td>
							<td class="precision">De 7 à 11 spectacles</td>
						</tr>
						<tr>
							<td class="label">Passion</td>
							<td class="montant">5€ la place</td>
							<td class="precision">+ de 12 spectacles</td>
						</tr>
						<tr>
							<td class="label label_desription" colspan="3">En cours de saison, vous pouvez ajouter des spectacles au tarif de l'abonnement choisi.
								Avec votre abonnement, vous bénéficiez d'une place "Avantage Ami" : faites plaisir à l'un de vos proches en lui faisant bénéficier du tarif adhérent pour qu'il
							vous accompagne sur l'un de vos spectacles, une fois dans la saison.</td>
						</tr>
						<tr>
							<td class="label">Séance scolaire</td>
							<td class="montant">5€ la place</td>
							<td class="precision">Gratuité pour les accompagnateurs dans la limite de 2 par classe, Carte M'ARA acceptée</td>
						</tr>
					</tbody>
				</table>
			</slide>
		</carousel>
	</div>
</template>

<script>
	import { Carousel, Slide } from 'vue-carousel';
	
	export default {
		name: "Tarifs",
		components: {Carousel,Slide}
	};


</script>

<style type="text/css" scoped lang="scss">
.tarif_gde_div{
	margin-bottom: 7vh;
}

.info_table {
	border-collapse: collapse;
	margin: auto;
	width: 70%;
}

.info_table td, th {
	border: thin solid black;
	padding: 1vh;
	border: transparent solid;
	border-bottom: $grey_for_info_table solid;
}

.slide_title{
	text-align: left;
	border: none;
	width: 40%;
}

.slide_title h3{
	margin: 1vh;
	font-weight: bolder;
	font-size: 17pt;
}


.label_desription{
	text-align: center;
	padding: 3vh;
}

.info_table h4{
	margin: 1vh;
}

.info_table .montant{
	width: 13%;
	border-left: transparent solid;
	border-right: transparent solid;
}

.info_table .sous-titre{
	padding-top: 3vh;
	border-bottom: transparent solid;
}

.info_slide{
	background-color: transparent;

	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
}

.slide_color_a h3, .slide_color_a h4{
	color: $menu_color_selected;
}

.slide_color_b h3, .slide_color_b h4{
	color: $red_for_hover;
}



</style>

<style>
.VueCarousel-navigation-button{
	transform: unset !important;
	color: $menu_color_selected;
}
</style>


<!--https://fengyuanchen.github.io/vue-carousel/-->