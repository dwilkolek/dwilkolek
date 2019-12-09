import React from "react"

import Layout from "../components/layout"
import SEO from "../components/seo"
import Skillset from "../components/skillset"
import Welcome from "../components/welcome"

const IndexPage = () => (
  <Layout>
    <SEO
     title="developer, coder, freelancer"
      description="I'm Fullstack developer. I code in Java, JavaScript and Typescript with frameworks like Angular and Spring." 
      
      />
    <Welcome />
    <Skillset />
  </Layout>
)

export default IndexPage
