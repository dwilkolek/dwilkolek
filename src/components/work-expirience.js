import React from "react"
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome"

class WorkExpirience extends React.Component {
    positions = [
        {
            position: "Senior Full Stack Developer",
            company: "TechnipFMC",
            dates: "Oct 2021 - now"
        },
        {
            position: "Software enginner",
            company: "H2O.ai",
            dates: "Mar 2021 - Oct 2021"
        },
        {
            position: "Fullstack developer",
            company: "MAPP (former Teradata)",
            dates: "Mar 2015 - Feb 2021"
        },
        {
            position: "JAVA Developer",
            company: "KAMSOFT",
            dates: "Aug 2013 - Feb 2015"
        },
        {
            position: "Web developer",
            company: "Miastostrada",
            dates: "2013"
        }
    ];
    render() {
        return <article className="tile is-child work-expirience">
            <div className="content">
                <h2 className="title is-2"> <FontAwesomeIcon icon="hat-cowboy" size="1x" /> Work Experience</h2>
                <table id="workExpirience">     
                    <tbody>
                        {this.positions.map((pos, index) => {
                            return <tr key={pos.company}>
                                <td>
                                    <span className="title is-5">{pos.position}</span>
                                    <br />
                                    <i>{pos.company}</i>
                                </td>
                                <td>{pos.dates}</td>
                            </tr>
                        })}
                    </tbody>
                </table>
            </div>
        </article >
    }
}

export default WorkExpirience;
