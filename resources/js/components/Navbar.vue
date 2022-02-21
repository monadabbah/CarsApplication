<template>
       <nav>
       <v-app-bar color="blue" dark app>
          <v-app-bar-nav-icon @click.stop="drawer = !drawer"></v-app-bar-nav-icon>
          <v-toolbar-title class="text-uppercase">
            <!--<span class="font-weight-light">UAE</span>-->
            <span>{{ $t('app_name') }}</span>
          </v-toolbar-title>
          <v-spacer></v-spacer>
     
     <v-col
        class="d-flex"
        cols="12"
        sm="1"
      >
     <div class="override-class">
       
        <v-select 
          class="custom"
          v-model="current_lang"
          :items="languages"
          :label="current_lang"
          v-on:change="change_lang"
          item-text="name"
          item-value="value"
          menu-props="auto"
          single-line
          return-object
        ></v-select>
      <!--  :label="$t('select_lang')" -->
     </div>
    </v-col>
          <v-menu offset-y>
            <template v-slot:activator="{ on }">
              <v-btn
                text
                v-on="on"
              >
                <v-icon left>expand_more</v-icon>
                <span>{{ $t('navbar.menu') }}</span>
              </v-btn>
            </template>
            <v-list flat>
              <v-list-item v-for="link in links" :key="link.text" router :to="link.route" :active-class="border">
                <v-list-item-title>{{link.text}}</v-list-item-title>
              </v-list-item>
            </v-list>
          </v-menu>
          <v-btn @click.prevent="logout" text>
            <span>{{ $t('login.logout') }}</span>
            <v-icon right>exit_to_app</v-icon>
          </v-btn>
       </v-app-bar>
      <v-navigation-drawer v-model="drawer" dark app :right="drawer_pos" class="blue darken-4">
          <v-layout column align-center>
              <v-flex class="mt-5"> 
                <v-avatar size="100">
                  <img src="img/img1.png" alt="">
                </v-avatar>
                <p class="white--text subheading mt-1 text-center">{{user ? user.name : ''}}</p>
              </v-flex>
              <v-flex class="mt-4 mb-4">
                
              </v-flex>
          </v-layout>
          <v-list flat>
              <v-list-item v-for="link in links" :key="link.text" router :to="link.route" :active-class="border">
                  <v-list-item-action>
                     <v-icon>{{link.icon}}</v-icon>
                  </v-list-item-action>
                  <v-list-item-content>
                      <v-list-item-title>{{link.text}}</v-list-item-title>
                  </v-list-item-content>
              </v-list-item>
          </v-list>
      </v-navigation-drawer>
   </nav>
</template>
<script>
import EventBus from '../event-bus.js'
import i18n from '../i18n'

  export default {
    
    props: ['user'],
    data () {
      return {
        drawer: true,
        drawer_pos: false,
        border: 'b-left',
        links :[
            {icon: 'dashboard', text: i18n.tc('navbar.dashboard'), route: '/dashboard'},
            {icon: 'drive_eta', text: i18n.tc('navbar.brands'), route: '/brands'},
            {icon: 'store', text: i18n.tc('navbar.dealerships'), route: '/dealerships'},
            {icon: 'person', text: i18n.tc('navbar.team'), route: '/team'}
        ],
        current_lang: '',
        //languages: [i18n.tc('english'), i18n.tc('arabic')],
        languages: [
          { name: i18n.tc('english'), value: i18n.tc('english') },
          { name: i18n.tc('arabic'), value: i18n.tc('arabic') }
        ]
        
      }
    },
    methods: {
      logout() {
        axios.post('api/logout').then(() => {
          localStorage.removeItem('token');
          this.$router.push({ name: 'login' })
          EventBus.$emit('logged-out');     
        })
      },
      change_lang(a) {
        localStorage.setItem("lang", a.value)
        i18n.locale = a.value.toLowerCase()
        this.current_lang = a.name
        this.links = [
            {icon: 'dashboard', text: i18n.tc('navbar.dashboard'), route: '/dashboard'},
            {icon: 'drive_eta', text: i18n.tc('navbar.brands'), route: '/brands'},
            {icon: 'store', text: i18n.tc('navbar.dealerships'), route: '/dealerships'},
            {icon: 'person', text: i18n.tc('navbar.team'), route: '/team'}
        ]  
        if (a.value == 'AR') {
          this.$vuetify.rtl = true
          this.drawer_pos = true
          this.border = 'b-right'
        }
        else {
          this.$vuetify.rtl = false
          this.drawer_pos = false
          this.border = 'b-left'
        }

        
      }
    },
    mounted() {
      this.current_lang = localStorage.getItem('lang')
      if (this.current_lang == '') 
        this.current_lang = i18n.tc('english')
      if (this.current_lang == 'AR') {
          this.$vuetify.rtl = true
          this.drawer_pos = true
          this.border = 'b-right'
      }
      else {
          this.$vuetify.rtl = false
          this.drawer_pos = false
          this.border = 'b-left'
      }
    }
  }
</script>
<style>
.b-left {
  border-left: 4px solid #71e2ef;
}

.b-right {
  border-right: 4px solid #71e2ef;
}
.override-class{
  margin-top: 22px !important;
}
/*.override-class .v-text-field--solo>.v-input__control>.v-input__slot {
  background: #2196f3 !important;
}*/
.custom.v-text-field>.v-input__control>.v-input__slot:before {
    border-style: none;
}
.custom.v-text-field>.v-input__control>.v-input__slot:after {
    border-style: none;
}
</style>