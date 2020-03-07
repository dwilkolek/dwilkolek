import React from "react"

import Layout from "../components/layout"
import SEO from "../components/seo"
import Skillset from "../components/skillset"
import Welcome from "../components/welcome"

const IndexPage = () => (
  <Layout>
    <SEO
      title="curious developer"
      description="Fullstack developer using Java, JavaScript, Typescript with Spring, Angular, Kafka, Flink in toolbelt."
    />
    <Welcome />
    <Skillset />
  </Layout>
)

export default IndexPage
