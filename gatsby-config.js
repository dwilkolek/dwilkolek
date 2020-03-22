module.exports = {
  siteMetadata: {
    title: `Damian Wilkołek`,
    description: `I'm Fullstack developer. I code in Java, JavaScript and Typescript with frameworks like Angular and Spring.`,
    author: `Damian Wilkołek`,
    siteUrl: `https://wilkolek.eu`, // No trailing slash allowed!
    image: "/images/wilkolek.png",
  },
  plugins: [
    `gatsby-plugin-sass`,
    `gatsby-plugin-react-helmet`,
    `gatsby-plugin-sitemap`,
    `gatsby-plugin-robots-txt`,
    {
      resolve: `gatsby-source-filesystem`,
      options: {
        name: `images`,
        path: `${__dirname}/src/images`,
      },
    },
    `gatsby-transformer-sharp`,
    `gatsby-plugin-sharp`,
    {
      resolve: `gatsby-plugin-manifest`,
      options: {
        name: `Damian Wilkołek - wilkolek.eu`,
        short_name: `wilkolek.eu`,
        start_url: `/`,
        background_color: `#232323`,
        theme_color: `#d0ff00`,
        display: `minimal-ui`,
        icon: `src/images/wilkolek-icon.png`, // This path is relative to the root of the site.
      },
    },
    {
      resolve: 'gatsby-plugin-express',
      options: {
        output: 'config/gatsby-express.json',
      }
    },
    // {
    //   resolve: `gatsby-plugin-gdpr-cookies`,
    //   options: {
    //     googleAnalytics: {
    //       trackingId: 'UA-25788805-9',
    //       // Setting this parameter is optional
    //       cookieName: 'gatsby-gdpr-google-analytics', // default is gatsby-gdpr-google-analytics
    //       anonymize: true // default is true
    //     },
    //     facebookPixel: {
    //       pixelId: 'YOUR_FACEBOOK_PIXEL_ID',
    //       // Setting this parameter is optional
    //       cookieName: 'YOUR_CUSTOM_COOKIE_NAME' // default is gatsby-gdpr-facebook-pixel
    //     },
    //     // Defines the environments where the tracking should be available  - default is ["production"]
    //     environments: ['production', 'development']
    //   },
    // }//,
    // this (optional) plugin enables Progressive Web App + Offline functionality
    // To learn more, visit: https://gatsby.dev/offline
    // `gatsby-plugin-offline`,
  ],
}
