<template>
  <div id="app">
    <Welcome />
    <Skillset />
    <Footer />
  </div>
</template>

<script>
import Welcome from "./components/Welcome";
import Skillset from "./components/Skillset";
import Footer from "./components/Footer";

export default {
  name: "app",
  components: {
    Welcome,
    Skillset,
    Footer
  }
};
</script>

<style lang="scss">
$base-color: rgb(208, 255, 0);
.navbar.is-link,
.hero.is-link {
  background: rgb(35, 35, 35) !important;
  color: rgb(240, 240, 240) !important;
}

.navbar-item:hover, .navbar-item:focus {
  color: $base-color !important;
  background: none !important;
}
</style>
