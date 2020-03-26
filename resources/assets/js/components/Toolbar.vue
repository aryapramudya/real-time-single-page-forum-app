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
      <router-link to="/forum">
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
      </router-link>
    </v-toolbar>
  </v-card>
</template>