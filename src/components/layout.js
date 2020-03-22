/**
 * Layout component that queries for data
 * with Gatsby's useStaticQuery component
 *
 * See: https://www.gatsbyjs.org/docs/use-static-query/
 */

import React from "react"
import PropTypes from "prop-types"
// import { useStaticQuery, graphql } from "gatsby"

import Footer from "./footer"
import "./bulma.scss"

import CookieConsent from 'react-cookie-consent';

import { library } from '@fortawesome/fontawesome-svg-core'
import { faLinkedinIn, faGithub, faStrava } from '@fortawesome/free-brands-svg-icons';
import { faCode, faDatabase, faCubes, faCheckDouble, faTools, faGrinBeam, faTrophy, faHatCowboy } from '@fortawesome/free-solid-svg-icons'
library.add(faLinkedinIn, faGithub, faStrava, faCode, faDatabase, faCubes, faCheckDouble, faTools, faGrinBeam, faTrophy, faHatCowboy);

const Layout = ({ children }) => {
  // const data = useStaticQuery(graphql`
  //   query SiteTitleQuery {
  //     site {
  //       siteMetadata {
  //         title
  //       }
  //     }
  //   }
  // `)

  return (
    <>
      <main>{children}</main>
      <Footer />
      {/* <CookieConsent
        location="bottom"
        buttonText="Accept"
        declineButtonText="Decline"
        cookieName="gatsby-gdpr-google-analytics"
        style={{ background: "#2B373B" }}
        buttonStyle={{ color: "#4e503b", fontSize: "13px" }}
        expires={150}
        enableDeclineButton={true}
      >
        This website uses cookies to enhance the user experience.{" "}  
      </CookieConsent> */}
    </>
  )
}

Layout.propTypes = {
  children: PropTypes.node.isRequired,
}

export default Layout
