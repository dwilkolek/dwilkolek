import React from "react"
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome"

const Footer = () => (
  <footer className="footer">
    <div className="content has-text-centered">
      <p>
        &copy;2019&nbsp;
        <strong>wilkolek.eu</strong>        
        
        <a className="linkedin" target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/wilkolekdamian/" >
          <FontAwesomeIcon icon={['fab', 'linkedin-in']} size="2x" />         
        </a>
        <a className="github" target="_blank" rel="noopener noreferrer" href="https://github.com/dwilkolek" >
          <FontAwesomeIcon icon={['fab', 'github']} size="2x" />
        </a>
        <a className="strava" target="_blank" rel="noopener noreferrer" href="https://www.strava.com/athletes/43991573" >
          <FontAwesomeIcon icon={['fab', 'strava']} size="2x" />
        </a>
      </p>
    </div>
  </footer>
)

export default Footer
