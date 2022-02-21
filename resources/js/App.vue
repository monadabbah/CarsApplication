<template>
  <v-app v-if="user" class="myFont">
    <Navbar :user="user"></Navbar>
    <v-content class="ma-4">
      <router-view></router-view>
    </v-content>
    <Footer></Footer>
  </v-app>
</template>
<script>
import Navbar from './components/Navbar.vue'
import Footer from './components/Footer.vue'
import EventBus from './event-bus.js';

export default {
  name: 'App',
  components: {
    Navbar,
    Footer
  },
  data () {
      return {
        user: null
      }
  },
  
  methods: {
    fetchUser() {
      axios.get('/api/user').then((res) => {
        this.user = res.data
      }) 
    }
  },

  mounted() {
    let token = localStorage.getItem('token');
    if (token) {
      this.fetchUser();
    }

    EventBus.$on('logged-in', () => {
      this.fetchUser();
    });
    EventBus.$on('logged-out', () => {
      this.user = null
    });
  }
}
</script>