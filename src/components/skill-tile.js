import React from "react"
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome"

const SkillTile = (props) => (
    <article className="tile is-parent skill-tile">
        <div className="tile is-child">
            <h3 className="title is-4">
                <FontAwesomeIcon icon={props.icon} size="1x" />
                {props.title }
            </h3>
            <ul className="list">
                {props.skills.map(skill => <li key={skill} className="list-item">{ skill }</li>)}
                
      </ul>
    </div>
  </article >
)

export default SkillTile; 
