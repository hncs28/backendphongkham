import './bootstrap';


import { createApp } from 'vue';
import DoctorTeam from './components/DoctorTeam.vue';
import InfoDoctor from './components/InfoDoctor.vue';
import Login from './components/LogIn.vue';

// createApp(DoctorTeam).mount('#doctorteam');
// createApp(InfoDoctor).mount('#infodoctor');


const app = createApp({})

app.component('info-doctor', InfoDoctor);
app.mount('#app');

