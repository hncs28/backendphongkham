import { createRouter, createWebHistory } from 'vue-router';

import HomePage from '../components/HomePage.vue';
//import Home2 from '../components/Home2.vue';
import DoctorTeam from '../components/DoctorTeam.vue';
import MyService from '../components/MyService.vue';
import LogIn from '../components/LogIn.vue';
import BookingForm from '../components/BookingForm.vue';
import RegisterForm from '../components/RegisterForm.vue';
import InfoDoctor from '../components/InfoDoctor.vue'
import InfoService from '../components/InfoService.vue';

const routes =[
  {path: '/', component: HomePage},
  //{path: '/homepage2', component: Home2},
  {path: '/doctorteam', component: DoctorTeam},
  {path: '/myservice', component: MyService},
  {path: '/login', component: LogIn},
  {path: '/booking', component: BookingForm},
  {path: '/register', component: RegisterForm},
  {path: '/infodoctor', component: InfoDoctor},
  {path: '/infoservice', component: InfoService},
]

const router = createRouter({
  history: createWebHistory(),
  routes
})

export default router