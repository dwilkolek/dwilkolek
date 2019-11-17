<template>
  <article class="tile is-child">
    <div class="content">
      <h3 class="title is-2"><font-awesome-icon icon="hat-cowboy" size="1x" style="color: #1d967f;"/> Work Experience</h3>
      <table id="workExpirience">
        <col width="70" />
        <col width="30" />
        <tr v-bind:key="pos.company" v-for="pos in positions">
          <td>
            <span class="title is-5">{{pos.position}}</span>
            <br />
            <i>{{pos.company}}</i>
          </td>
          <td>{{pos.dates}}</td>
        </tr>
      </table>
    </div>
  </article>
</template>

<script>
export default {
  data: function() {
    return {
      positions: [
        {
          position: "Fullstack developer",
          company: "MAPP (former Teradata)",
          dates: "2015 - now"
        },
        {
          position: "JAVA Developer",
          company: "KAMSOFT",
          dates: "2011 - 2013"
        },
        {
          position: "Web developer",
          company: "Miastostrada",
          dates: "2015 - now"
        }
      ]
    };
  }
};
</script>

<style lang="scss" scoped>
article {
  padding: 0 20px 40px;
  h3 {
    color: #3aceb2;
  }
}
</style>