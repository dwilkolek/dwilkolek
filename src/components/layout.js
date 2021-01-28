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

import { library } from '@fortawesome/fontawesome-svg-core'
import { faLinkedinIn, faGithub, faStrava } from '@fortawesome/free-brands-svg-icons';
import { faCode, faDatabase, faCubes, faCheckDouble, faTools, faGrinBeam, faTrophy, faHatCowboy } from '@fortawesome/free-solid-svg-icons'
library.add(faLinkedinIn, faGithub, faStrava, faCode, faDatabase, faCubes, faCheckDouble, faTools, faGrinBeam, faTrophy, faHatCowboy);

const Layout = ({ children }) => {
  return (
    <>
      <main>{children}</main>
      <Footer />
    </>
  )
}

Layout.propTypes = {
  children: PropTypes.node.isRequired,
}

export default Layout
