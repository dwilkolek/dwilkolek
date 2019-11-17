<template>
  <article class="tile is-parent">
    <div class="tile is-child">
      <h3 class="title is-4">
        <font-awesome-icon :icon="icon" size="1x" style="color: #0281bb;"/>
        {{title}}
      </h3>
      <ul class="list">
        <li class="list-item" v-bind:key="s" v-for="s in skills">{{s}}</li>
      </ul>
    </div>
  </article>
</template>

<script>
export default {
  props: ["title", "skills", "icon"]
};
</script>
    
<style lang="scss" scoped>
article {
  border: 1px solid #ccc;
  border-radius: 5px;
  margin: 5px;
  padding: 24px !important;
  h3 {
    word-break: normal;
    margin-top: 2px;
    color: #2ebdff;
  }
  ul.list {
    box-shadow: none !important;
    -webkit-box-shadow: none !important;
    .list-item {
      border: none;
      font-size: 1.2em;
      font-weight: 400;
      &::before,
      &::after {
          color: rgba(0,0,0,0.1);
          font-weight: bold;
      }
      &::before {
        content: "{ ";
      }
      &::after {
        content: " }";
      }
    }
  }
}
</style>