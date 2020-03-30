<template>
  <v-card
    color="grey lighten-4"
    flat
    height="200px"
    tile
  >
    <v-toolbar dense>
      <!--<v-app-bar-nav-icon></v-app-bar-nav-icon>-->

      <v-toolbar-title>Title</v-toolbar-title>
      <v-spacer></v-spacer>
      <router-link
        v-for="item in items"
        :key="item.title"
        :to="item.to"
        v-if="item.show">
        <v-btn>{{item.title}}</v-btn>
      </router-link>

      <!--<router-link to="/forum">
        <v-btn>Forum</v-btn>
      </router-link>
      <router-link to="/question">
        <v-btn>Ask Question</v-btn>
      </router-link>
      <router-link to="/category">
        <v-btn>Category</v-btn>
      </router-link>
      <router-link to="/login">
        <v-btn>Login</v-btn>
      </router-link>-->

    </v-toolbar>
  </v-card>
</template>

<script>
  export default{
    data(){
      return{
        items:[
          {title:'Forum', to:'/forum', show:true},
          {title:'Ask Question', to:'/forum', show:User.loggedIn()},
          {title:'Category', to:'/forum', show:User.loggedIn()},
          {title:'Login', to:'/login', show:!User.loggedIn()},
          {title:'Logout', to:'/logout', show:User.loggedIn()},
        ]
      }
    },
    created(){
      EventBus.$on('logout', ()=>{
        User.logout()
      })
    }
  }
</script>