import { createApp } from 'vue'
import { createPinia } from 'pinia'

import App from './App.vue'
import router from './router'

import './assets/main.css'

// axios.defaults.baseURL = 'http://localhost:5173'

const app = createApp(App)

app.use(createPinia())
app.use(router)

app.mount('#app')
