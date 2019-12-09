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
            dates: "2011 - 2013"
        },
        {
            position: "Web developer",
            company: "Miastostrada",
            dates: "2015 - now"
        }
    ];
    render() {
        return <article className="tile is-child work-expirience">
            <div className="content">
                <h3 className="title is-2"> <FontAwesomeIcon icon="hat-cowboy" size="1x" /> Work Experience</h3>
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