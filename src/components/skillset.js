import React from "react"
import SkillTile from "./skill-tile"
import WorkExperience from './work-expirience'
import Milestones from './milestones'
class Skillset extends React.Component {
    listsOfSkills = [[
        {
            icon: "code",
            title: "Languages",
            skills: ["Java", "Kotlin", "JavaScript", "TypeScript"]
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
    [
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
    ]];
    render() {
        return <section className="section skills has-text-centered">
            <div className="container">
                <div className="tile is-vertical">
                    <div className="tile is-ancestor">
                        <div className="tile">
                            <div className="tile is-parent">
                                <WorkExperience />
                            </div>
                            <div className="tile is-parent">
                                <Milestones />
                            </div>
                        </div>
                    </div>
                    <div className="tile is-ancestor">
                        <div className="tile">
                            {this.listsOfSkills[0].map((value, index) => {
                                return <SkillTile key={value.title} title={value.title} icon={value.icon} skills={value.skills} />
                            })}

                            {/* <SkillTile
                            v-bind: key="o.title"
                        v-for="o in listOfSkills"
                        :title="o.title"
                        :skills="o.skills"
                        :icon="o.icon"
                      /> */}
                        </div>
                    </div>
                    <div className="tile is-ancestor">
                        <div className="tile">
                            {this.listsOfSkills[1].map((value, index) => {
                                return <SkillTile key={value.title} title={value.title} icon={value.icon} skills={value.skills} />
                            })}
                            {/* <SkillTile
                            v-bind: key="o.title"
                        v-for="o in listOfSkills2"
                        :title="o.title"
                        :skills="o.skills"
                        :icon="o.icon"
                      /> */}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    }
}
export default Skillset