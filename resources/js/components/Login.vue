<template>
   <v-app id="inspire">
      <v-content>
         <v-container fluid fill-height>
            <v-layout align-center justify-center>
               <v-flex xs12 sm8 md4>
                  <v-card class="elevation-12">
                     <v-toolbar dark color="primary">
                        <v-toolbar-title>{{ $t('login.login_form')}}</v-toolbar-title>
                     </v-toolbar>
                     <v-card-text>
                        <v-form>
                           <v-text-field
                              prepend-icon="person"
                              name="login"
                              label="Email"
                              type="email"
                              v-model="form.email"
                           ></v-text-field>
                           <v-text-field
                              id="password"
                              prepend-icon="lock"
                              name="password"
                              label="Password"
                              type="password"
                              v-model="form.password"
                           ></v-text-field>
                        </v-form>
                     </v-card-text>
                     <v-card-actions>
                        <v-spacer></v-spacer>
                        <v-btn @click.prevent="loginUser" color="primary" type="submit">Login</v-btn>
                     </v-card-actions>
                  </v-card>
               </v-flex>
            </v-layout>
         </v-container>
      </v-content>
   </v-app>
</template>

<script>
import EventBus from '../event-bus.js';

export default {
  name: 'Login',
  props: {
      source: String,
  },
  methods: {
    goBack() {
      window.history.length > 1 ? this.$router.go(-1) : this.$router.push('/')
    },
    loginUser() {
       axios.post('api/login', this.form).then((res) => {
          axios.defaults.headers.common['Authorization'] = 'Bearer ' + res.data.token;
          localStorage.setItem("token", res.data.token)
         
          this.$router.push({name: "Dashboard"});
          EventBus.$emit('logged-in');
       }).catch((error) => {
          this.errors = error.response.data.errors;
       })
    }
  },
  mounted() {
     /*if (axios.defaults.headers.common['Authorization']) {
        this.$router.push({ name: 'Dashboard' });
     }*/
  },
   data() {
      return {
         form: {
            email: '',
            password: ''
         },
         errors: []
      }
   }
}
</script>

<style></style>
