<template>
<v-app>
  <div class="team">
    <h1 class="subheading blue--text text--darken-4">{{ $t('navbar.dashboard') }}</h1>
    <v-container >
      <v-layout row wrap>
         <v-flex
        sm6
        xs12
        md6
        lg3
      >
       <v-card class="ma-3">
    <v-list-item  >
       <v-list-item-avatar
        tile
        class="mt-n7"
      >
      <v-sheet color="green" width="80" height="80" elevation="10">
            <v-icon dark large>mdi-car</v-icon>
      </v-sheet>
      </v-list-item-avatar>
      <v-list-item-content>
        <div class="overline text-right">{{ $t('navbar.brands')}}</div>
        <v-list-item-title class="headline mb-1 text-right" >{{ brands_count }}</v-list-item-title>
        <div><v-divider></v-divider></div>
      </v-list-item-content> 
    </v-list-item>
    <!--<v-card-actions>
      <v-icon text class="ma-2">person</v-icon>
      <div class="overline">Iyad</div>
    </v-card-actions>-->
  </v-card>
      </v-flex>
       <v-flex
        sm6
        xs12
        md6
        lg3
      >
       <v-card class="ma-3">
    <v-list-item>
       <v-list-item-avatar
        tile
        class="mt-n7"
      >
      <v-sheet color="#F44336" width="80" height="80" elevation="10">
            <v-icon dark large>store</v-icon>
      </v-sheet>
      </v-list-item-avatar>
      <v-list-item-content>
        <div class="overline text-right">{{ $t('navbar.dealerships') }}</div>
        <v-list-item-title class="headline mb-1 text-right" >{{ dealerships_count }}</v-list-item-title>
        <div><v-divider></v-divider></div>
      </v-list-item-content> 
    </v-list-item>
    <!--<v-card-actions>
      <v-icon text class="ma-2">subscriptions</v-icon>
      <div class="overline">AAE IdeaPro</div>
    </v-card-actions>-->
  </v-card>
      </v-flex>
       <v-flex
        sm6
        xs12
        md6
        lg3
      >
       <v-card class="ma-3">
    <v-list-item>
       <v-list-item-avatar
        tile
        class="mt-n7"
      >
      <v-sheet color="#03A9F4" width="80" height="80" elevation="10">
            <v-icon dark large>add_shopping_cart</v-icon>
      </v-sheet>
      </v-list-item-avatar>
      <v-list-item-content>
        <div class="overline text-right">{{ $t('sales') }}</div>
        <v-list-item-title class="headline mb-1 text-right" >$34,245</v-list-item-title>
        <div><v-divider></v-divider></div>
      </v-list-item-content> 
    </v-list-item>
    <!--<v-card-actions>
      <v-icon text class="ma-2">credit_card</v-icon>
      <div class="overline">VISA Card</div>
    </v-card-actions>-->
  </v-card>
      </v-flex>
       <v-flex
        sm6
        xs12
        md6
        lg3
      >
       <v-card class="ma-3">
    <v-list-item >
       <v-list-item-avatar
        tile
        class="mt-n7"
      >
      <v-sheet color="#FFC107" width="80" height="80" elevation="10">
            <v-icon dark large>mdi-account-multiple</v-icon>
      </v-sheet>
      </v-list-item-avatar>
      <v-list-item-content>
        <div class="overline text-right">{{ $t('clients') }}</div>
        <v-list-item-title class="headline mb-1 text-right" >1730</v-list-item-title>
        <div><v-divider></v-divider></div>
      </v-list-item-content> 
    </v-list-item>
    <!--<v-card-actions>
      <v-icon text class="ma-2">folder</v-icon>
      <div class="overline">Prodect</div>
    </v-card-actions>-->
  </v-card>
      </v-flex>
        <!--<v-flex xs12 sm6 md4 lg3 v-for="person in team" :key="person.name">
              <v-card class="text-center ma-3">
                <v-responsive class="pt-4">
                   <v-avatar size="100" class="red lighten-2">
                     <img :src="person.avatar" alt="" >
                   </v-avatar>
                </v-responsive>
                <v-card-text>
                  <div class="subheading">{{person.name}}</div>
                  <div class="grey--text">{{person.role}}</div>
                </v-card-text>
                <v-card-actions>
                    <v-btn outlined color="orange">
                        <v-icon small left >message</v-icon>
                        <span>Message</span>
                    </v-btn>
                </v-card-actions>
              </v-card>
        </v-flex>-->
       
      </v-layout>
    </v-container>
  </div>
</v-app>
</template>
<script>
  export default {
    data () {
      return {
        brands_count: '',
        dealerships_count: ''
      }
    },
    methods: {
       initialize () { 
          axios.get('/api/brandscount').then((res) => {
            this.brands_count = res.data;
          })
          axios.get('/api/dealershipscount').then((res) => {
            this.dealerships_count = res.data;
          })
      },
    },
    mounted() {
      this.initialize()
    }
  }
</script>