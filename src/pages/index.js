import React from "react"

import Layout from "../components/layout"
import SEO from "../components/seo"
import Skillset from "../components/skillset"
import Welcome from "../components/welcome"

const IndexPage = () => (
  <Layout>
    <SEO
      title="Fullstack developer based in Kraków"
      description="Damian Wilkołek. Fullstack developer. On daily basis I create and maintain applications using Angular, Spring and Flink."
    />
    <Welcome />
    <Skillset />
  </Layout>
)

export default IndexPage
