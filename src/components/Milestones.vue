<template>
  <article class="tile is-child">
    <div class="content">
      <h3 class="title is-2"><font-awesome-icon icon="trophy" size="1x" style="color: #ffbb00;"/> Milestones</h3>
      <table>
        <col width="70" />
        <col width="30" />
        <tr v-bind:key="milestone.goal" v-for="milestone in milestones">
          <td>
            
            <p v-html="milestone.goal"></p>
          </td>
          <td>{{milestone.year}}</td>
        </tr>
      </table>
    </div>
  </article>
</template>

<script>
export default {
  data: function() {
    return {
      milestones: [
        {
          year: 2016,
          goal:
            "<b>Graduated Silesian University of technology</b>, Faculty of Materials Engineering and Metallurgy, Division of Industrial Informatics"
        },
        {
          year: 2013,
          goal:
            "Earned title <b>IBM DB2 Academic Associate</b>: DB2 Database and Application Fundamentals."
        },
        {
          year: 2012,
          goal:
            "Earned Internal Auditor information security management system according to <b>ISO 27001</b>"
        },
        {
          year: 2010,
          goal: "Earned <b>European Computer Driving Licence</b> -&nbsp;level expert"
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
      color: #ffd900;
  }
}

td:nth-child(2) {
  vertical-align: middle !important;
  text-align: center !important;
}
.milestone {
  + .milestone {
    margin-top: 25px;
  }
}
</style>