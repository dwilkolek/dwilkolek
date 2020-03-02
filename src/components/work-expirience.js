import React from "react"
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome"

class WorkExpirience extends React.Component {
    positions = [
        {
            position: "Fullstack developer",
            company: "MAPP (former Teradata)",
            dates: "2015 - now"
        },
        {
            position: "JAVA Developer",
            company: "KAMSOFT",
            dates: "2013 - 2015"
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
