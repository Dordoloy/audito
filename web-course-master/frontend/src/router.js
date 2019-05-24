import Vue from 'vue'
import Router from 'vue-router'

import LoginPage from './pages/login/LoginPage'
import HomePage from './pages/home/HomePage'

import UserPage from './pages/login/User'

import InfoPage from './pages/info/InfoPage'
import EventPage from './pages/event/EventPage'

import SpacePage from './pages/space/SpacePage'
import MyEvents from './pages/space/MyEvents'
import NewEvent from './pages/space/NewEvent'
import MyBooking from './pages/space/MyBooking'

import AuditoPage from './pages/audito/AuditoPage'
import CinemaVue from './pages/audito/infoVue/CinemaVue'
import TheaterVue from './pages/audito/infoVue/TheaterVue'
import SeminaryVue from './pages/audito/infoVue/SeminaryVue'
import OthersVue from './pages/audito/infoVue/OthersVue'
import AuditoContactVue from './pages/audito/AuditoContactPage'
import AuditoGeneralVue from './pages/audito/AuditoGeneralPage'
import ErreurPage from "./pages/event/ErreurPage";


Vue.use(Router)


export default new Router({
    routes: [
        {
          path: '/',
            redirect:'/events',
          name:'event',
        },
        {
            path: '/home',
            name: 'home',
            meta : {subtitle : "Home"},
            component: HomePage,
            children:[
                {
                    path: '/info',
                    name: 'info',
                    meta : {subtitle : "L'essentiel"},
                    component: InfoPage
                },
                {
                    path: '/events',
                    name: 'event',
                    meta : {subtitle : "Nos évènements"},
                    component: EventPage,

                },
                {
                    path: '/space',
                    name: 'space',
                    redirect:'/space/newEvent',
                    component: SpacePage,
                    meta: {subtitle : "Organisez votre évènement"},
                    children : [
                        {
                            path: '/space/newEvent',
                            name: 'newEvent',
                            component: NewEvent,
                        },
                        {
                            path: '/space/myEvents',
                            name: 'myEvents',
                            component: MyEvents,
                        },
                        {
                            path: '/space/myBooking',
                            name: 'myBooking',
                            component: MyBooking,
                        },

                    ]

                },
                {
                    path: '/audito',
                    name: 'audito',
                    redirect:'/audito/general',
                    component: AuditoPage,
                    meta : { subtitle : "Mieux nous connaitre"},
                    children : [
                        {
                            path: '/audito/general',
                            name: 'general',
                            component: AuditoGeneralVue,
                            children: [
                                {
                                    path: '/audito/general/cinema',
                                    name: 'cinema',
                                    component: CinemaVue,
                                },
                                {
                                    path: '/audito/general/theater',
                                    name: 'theater',
                                    component: TheaterVue,
                                },
                                {
                                    path: '/audito/general/seminary',
                                    name: 'seminary',
                                    component: SeminaryVue,
                                },
                                {
                                    path: '/audito/general/others',
                                    name: 'others',
                                    component: OthersVue
                                },
                            ]
                        },
                        {
                            path: '/audito/contact',
                            name: 'contact',
                            component: AuditoContactVue,
                        }
                    ]


                },
                {
                    path:'/user',
                    name:'User',
                    component:UserPage,
                },
                {
                    path:'/erreur',
                    name:'Erreur',
                    component:ErreurPage,
                }
 
            ]
        }

    ]
})
