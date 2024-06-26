FROM node:slim

WORKDIR /express-docker
COPY . .
RUN npm install
CMD [ "node", "server.js" ]

# Exposing server port
EXPOSE 8080