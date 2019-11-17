<template>
  <section class="section skills has-text-centered">
    <div class="container">
      <div class="tile is-vertical">
        <div class="tile is-ancestor">
          <div class="tile">
            <div class="tile is-parent">
              <WorkExperience />
            </div>
            <div class="tile is-parent">
              <Milestones />
            </div>
          </div>
        </div>
        <div class="tile is-ancestor">
          <div class="tile">
            <SkillTile
              v-bind:key="o.title"
              v-for="o in listOfSkills"
              :title="o.title"
              :skills="o.skills"
              :icon="o.icon"
            />
          </div>
        </div>
        <div class="tile is-ancestor">
          <div class="tile">
            <SkillTile
              v-bind:key="o.title"
              v-for="o in listOfSkills2"
              :title="o.title"
              :skills="o.skills"
              :icon="o.icon"
            />
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import SkillTile from "./SkillTile";
import WorkExperience from "./WorkExperience";
import Milestones from "./Milestones";
export default {
  components: {
    WorkExperience,
    Milestones,
    SkillTile
  },
  data: function() {
    return {
      listOfSkills: [
        {
          icon: "code",
          title: "Languages",
          skills: ["Java", "JavaScript", "TypeScript"]
        },
        {
          icon: "cubes",
          title: "Technologies",
          skills: ["Node.js", "Flink", "Kafka", "Avro", " Angular 2+", "Spring"]
        },
        {
          icon: "database",
          title: "Databases",
          skills: ["PostgreSQL", "MySQL", "MongoDB", "Redis"]
        }
      ],
      listOfSkills2: [
        {
          icon: "tools",
          title: "Additional Tools",
          skills: ["Jenkins", "Docker", "SVN / GIT"]
        },
        {
          icon: "check-double",
          title: "Testing",
          skills: ["Selenium", "JUnit", "TestNG", "SoapUI"]
        },
        {
          icon: "grin-beam",
          title: "Hobbies",
          skills: ["Cycling", "Gaming", "Karting", "Escape rooms"]
        }
      ]
    };
  }
};
</script>

<style lang="scss" scoped>
img {
  height: auto;
  max-width: 100%;
  border-radius: 100px;
  float: left;
  margin: 0 20px 20px 0;
}
</style>